<?php

namespace frontend\controllers;

use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use Carbon\Carbon;

use frontend\models\property\Property;
use frontend\models\tariff\DateRange;
use frontend\models\tariff\TariffDateRange;
use frontend\models\tariff\RoomTariffDatewise;
use frontend\models\tariff\TariffNationalityGroupName;
use frontend\models\tariff\RoomRateValidator;
use frontend\models\tariff\RoomTariffSlab;
use frontend\models\tariff\RoomTariffWeekdayhike;
use frontend\models\tariff\RoomTariffSlabWeekdayhike;
use frontend\models\tariff\RoomTariffWeekdayhikeDays;
use frontend\models\tariff\SupplimentMealSlab;
use frontend\models\tariff\SupplimentMeal;
use frontend\models\tariff\MandatoryDinner;
use frontend\models\property\Room;

//use yii\web\Response; ?

class TariffController extends Controller {

    public function beforeAction($action) {
        if (Yii::$app->user->isGuest) {            
           Yii::$app->user->loginRequired();
           return;
       }

       $roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
       if (Yii::$app->user->identity->user_type != 1 ){
           throw new ForbiddenHttpException();
       }

       return parent::beforeAction($action);
   }


    private function getProperty() {
        if(!isset( $_GET['id'])) {
            throw new NotFoundHttpException();
        }

        $property = NULL;
        $property_id = (int) Yii::$app->request->get('id');
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();
        }
        else {
            throw new NotFoundHttpException();
        }
    
        if ($property == NULL){
            throw new NotFoundHttpException();
        }

        return $property;
    }

    public function actionHome(){
        $property = $this->getProperty();
        
        $mother_ranges = TariffDateRange::find()
        ->orderBy(['from_date' => SORT_DESC])
        ->where(['property_id' => $property->id])
        ->andWhere(['parent' => 0])
        ->all();
    
        $this->layout = 'tm_main';
       return $this->render('home', 
       [
        'mother_ranges' => $mother_ranges, 
        'property' => $property
        ]);
    }

    public function actionRoom(){
        $property = $this->getProperty();

        $mother_ranges = TariffDateRange::find()
        ->orderBy(['from_date' => SORT_DESC])
        ->where(['property_id' => $property->id])
        ->andWhere(['parent' => 0])
        ->all();
        
        //Room rates - Mother date split down view
        $this->layout = 'tm_main';
        return $this->render('list_room_rates', [
            'mother_ranges' => $mother_ranges, 
            'property' => $property
        ]);
    }

    public function actionMeal(){
        $property = $this->getProperty();
        $mother_ranges = TariffDateRange::find()
        ->orderBy(['from_date' => SORT_DESC])
        ->where(['property_id' => $property->id])
        ->andWhere(['parent' => 0])
        ->all();

        $this->layout = 'tm_main';
        return $this->render('list_meal_rate', [
            'property' => $property, 
            'mother_ranges' => $mother_ranges ]);
    }

    public function actionHikeday(){
        $property = $this->getProperty();
        $mother_ranges = TariffDateRange::find()
        ->orderBy(['from_date' => SORT_DESC])
        ->where(['property_id' => $property->id])
        ->andWhere(['parent' => 0])
        ->all();
        $this->layout = 'tm_main';
        return $this->render('list_hike_day', ['property' => $property, 'mother_ranges' => $mother_ranges]);
    }

    public function actionMandatorydinner(){
        $property = $this->getProperty();

        $mother_ranges = TariffDateRange::find()
        ->orderBy(['from_date' => SORT_DESC])
        ->where(['property_id' => $property->id])
        ->andWhere(['parent' => 0])
        ->all();

        $this->layout = 'tm_main';
        return $this->render('list_mandatory_dinner', ['property' => $property, 'mother_ranges' => $mother_ranges]);
    }

    //Add new mother date screen
    public function actionAddmotherdate(){

        $date_range = new DateRange();
        if ($date_range->load(Yii::$app->request->post()) ) {            
            if ($date_range->isValidMotherDateRange() )
            {                       
                $mother_date = TariffDateRange::find()->where(['id' => $date_range->id])->one();
                if($mother_date == NULL)                
                {
                    $mother_date = new TariffDateRange();
                }
                
                $mother_date->from_date = $date_range->from_date;
                $mother_date->to_date = $date_range->to_date;
                $mother_date->property_id = $date_range->property_id;
                $mother_date->parent = 0;
                $mother_date->status = 0;
                $mother_date->tariff_type = 0;
                if($mother_date->validate() ) {
                    $mother_date->save();
                    return $this->redirect(['tariff/addroomrate', 
                    'id' => $date_range->property_id, 
                    'mother_id' => $mother_date->getPrimaryKey() 
                ]);
                }               
            }            
        } 
                
        $property = $this->getProperty();        

        $mother_id = (int) Yii::$app->request->get('mother_id');        
        $tariff_date_range = NULL;
        if($mother_id != NULL) {
            $tariff_date_range = TariffDateRange::find()->where(['id' => $mother_id])->one();
        } 

        if($tariff_date_range != NULL) {
            $date_range->property_id = $tariff_date_range->property->id;
            $date_range->parent = $tariff_date_range->parent;            
            $date_range->from_date = Carbon::parse($tariff_date_range->from_date)->format('d M Y');  
            $date_range->to_date = Carbon::parse($tariff_date_range->to_date)->format('d M Y');
            $date_range->id = $tariff_date_range->id;
        } 
        else {
            $date_range->property_id = $property->id;
            $date_range->parent = 0;
            $date_range->id = 0;
        }

        $mother_ranges = TariffDateRange::find()
        ->orderBy(['from_date' => SORT_DESC])
        ->where(['property_id' => $date_range->property_id])
        ->andWhere(['parent' => 0])
        ->all();

        $this->layout = 'tm_main';
        return $this->render('mother_date', [
            'property' => $property, 
            'date_range' => $date_range, 
            'mother_ranges' => $mother_ranges
        ]);
    }

    //Add nesting
    public function actionNesting(){        
        $property_id = (int) Yii::$app->request->get('id');
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }

        $tariff = Yii::$app->request->get('tariff');        
        $mother_id = Yii::$app->request->get('mother_range_id');
        $mother_range = TariffDateRange::find()->where(['id' => $mother_id])->one();

        $defined_ranges = TariffDateRange::find()
        ->where(['parent' => $mother_id])
        ->all();

        //var_dump($defined_ranges);
        
        $this->layout = 'tm_main';
        $date_range = new DateRange();
        $date_range->property_id = $property_id;       
        $date_range->parent = $mother_range->id;
        $date_range->from_date = Carbon::parse(Carbon::createFromFormat('Y-m-d', $mother_range->from_date)->addDays(1))->format('d M Y');
        $date_range->to_date = Carbon::parse(Carbon::createFromFormat('Y-m-d', $mother_range->to_date)->subDays(1))->format('d M Y');
                
        return $this->render('nesting', [
            'date_range' => $date_range,
            'property' => $property,             
            'mother_range' => $mother_range,             
            'defined_ranges' => $defined_ranges,
            'tariff' => $tariff
        ]);
    }

    //Save nesting
    public function actionSavenesting(){
        $date_range = new DateRange();        
        if ($date_range->load(Yii::$app->request->post()) ) { 
            $tariff = Yii::$app->request->post('tariff');
            if($date_range->isValidChildDateRange()) 
            {               
                $mother_date = new TariffDateRange();
                $mother_date->from_date = $date_range->from_date;
                $mother_date->to_date = $date_range->to_date;
                $mother_date->property_id = $date_range->property_id;                
                $mother_date->parent = $date_range->parent;
                $mother_date->status = 0;
                $mother_date->tariff_type = $tariff;
                
                if($mother_date->validate() ) {
                    $mother_date->save();

                    //Nesting saved, Now add tariff
                    if($tariff == 1) {
                        return $this->redirect(['tariff/addroomrate', 
                        'id' => $date_range->property_id,
                        'mother_id' => $mother_date->getPrimaryKey(),
                        'tariff' => $tariff
                        ]);
                    }
                    else if ($tariff == 2)
                    {
                        return $this->redirect(['tariff/addmealrate', 
                        'id' => $date_range->property_id,
                        'mother_id' => $mother_date->getPrimaryKey(),
                        'tariff' => $tariff
                        ]);
                    }
                    else if ($tariff == 3)
                    {
                        return $this->redirect(['tariff/addhikedayrate', 
                        'id' => $date_range->property_id,
                        'mother_id' => $mother_date->getPrimaryKey(),
                        'tariff' => $tariff
                        ]);
                    }
                    else if ($tariff == 4)
                    {
                        return $this->redirect(['tariff/addmandatorydinnner', 
                        'id' => $date_range->property_id,
                        'mother_id' => $mother_date->getPrimaryKey(),
                        'tariff' => $tariff
                        ]);
                    }
                    else
                    {
                        //TODO: Where to go?
                    }                     
                } else {
                    //TODO: Handle
                    var_dump($mother_date->errors);
                    exit;

                }
            }           

            $date_range->from_date = Carbon::parse(Carbon::createFromFormat('Y-m-d', $date_range->from_date))->format('d M Y');
            $date_range->to_date = Carbon::parse(Carbon::createFromFormat('Y-m-d', $date_range->to_date))->format('d M Y');

            $property = Property::find()->where(['id' => $date_range->property_id])->one();
            //$room = Room::find()->where(['id' => $date_range->room_id])->one();
            $mother_range = TariffDateRange::find()->where(['id' => $date_range->parent])->one(); 
            
            $defined_ranges = TariffDateRange::find()
            ->where(['parent' => $date_range->parent])
            ->all();

            $this->layout = 'tm_main';
            return $this->render('nesting', [
                'date_range' => $date_range,
                'property' => $property,                 
                'mother_range' => $mother_range,                 
                'defined_ranges' => $defined_ranges,
                'tariff' => $tariff
            ]);            
        }
    }

    public function actionAddroomrate(){        
        $property = $this->getProperty();        
        $room_off_set = (int) Yii::$app->request->get('room_off_set', 0);
        $room_count = Room::find()->where(['property_id' => $property->id])->count();
        $tariff = (int) Yii::$app->request->get('tariff', 0);
        
        $mother_id = Yii::$app->request->get('mother_id');
        if( $room_off_set >= $room_count ) {
            //Rooms over            
            //Ask to enter meal rates for the mother range
            if($tariff == 0) {                
                return $this->redirect(['tariff/addmealrate', 
                    'id' => $property->id,         
                    'mother_id' => $mother_id,            
                ]);
            }
            else {
                return $this->redirect(['tariff/home', 'id' => 1]);
            }            
        }        
        
        //TODO: find having user access only
        $room = Room::find()
        ->where(['property_id' => $property->id])
       /*->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()]) */
        ->limit(1)
        ->offset($room_off_set)
        ->orderBy(['id' => SORT_ASC])
        ->one();
        
        $room_off_set++;
        
        $mother_range = NULL;
        if($mother_id != 0) {
            $mother_range = TariffDateRange::find()->where(['id' => $mother_id])->one();
        }

        if ($mother_range == NULL){
            throw new NotFoundHttpException();
        }

        $defined_tariff = RoomTariffDatewise::find()
        ->where(['date_range_id' => $mother_id])
        ->andWhere(['room_id' => $room->id]);
                
        $nationalities = TariffNationalityGroupName::find()->where(['property_id' => $property->id])->all();

        $this->layout = 'tm_main';
        return $this->render('add_room_rate', [
            'property' => $property, 
            'room' => $room, 
            'date_range' => $mother_range, 
            'nationalities' => $nationalities,
            'room_off_set' => $room_off_set,
            'room_count' => $room_count,
            'defined_tariff' => $defined_tariff,
            'tariff' => $tariff
        ]);
    }

    public function actionSaveroomrates(){
        $room_id = $_POST["room_id"];
        $date_range_id = $_POST["date_range_id"];
        $property_id = $_POST["property_id"];
        $room_off_set = $_POST["room_off_set"];
        $tariff = $_POST["tariff"];

        $property = NULL;        
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();
        }

        if($property == NULL) {
            throw new NotFoundHttpException();
        }
        //TODO: Check room is owned by user

        foreach( $_POST["nationality"] as $nationality ) {
            $slab_count = count($_POST["room_rate_".$nationality]);
            
            RoomTariffDatewise::deleteAll(['property_id' => $property->id,'nationality_id' => $nationality ,'room_id' => $room_id, 'date_range_id' => $date_range_id]);    
                        
            $tariff = new RoomTariffDatewise();
            $tariff->property_id = $property_id;
            $tariff->nationality_id = $nationality;
            $tariff->room_id = $room_id;
            $tariff->date_range_id = $date_range_id;
            //TOTO: Status should be unpublished
            $tariff->status = 1;
            $tariff->save();           

            RoomTariffSlab::deleteAll(['tariff_id' => $tariff->getPrimaryKey() ]);            
            for ($i = 0; $i < $slab_count; $i++ ) {
                $slab = new RoomTariffSlab();
                $slab->number = $i;
                $slab->room_rate = $_POST["room_rate_".$nationality][$i];
                $slab->adult_with_extra_bed = $_POST["adult_with_extra_bed_".$nationality][$i];
                $slab->child_with_extra_bed = $_POST["child_with_extra_bed_".$nationality][$i];
                $slab->child_sharing_bed = $_POST["child_sharing_bed_".$nationality][$i];
                $slab->single_occupancy = $_POST["single_occupancy_".$nationality][$i];
                $slab->tariff_id = $tariff->getPrimaryKey();
                $slab->save();                          
            }
        }

        return $this->redirect(['tariff/addroomrate', 
                'id' => $property_id, 
                'room_id' => $room_id,
                'mother_id' => $date_range_id,
                'room_off_set' => $room_off_set,
                'tariff' => $tariff
                ]);

    }

    public function actionAddmealrate(){
        $property_id = (int) Yii::$app->request->get('id');
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }
        
        $date_range_id = Yii::$app->request->get('mother_id');
        $date_range = TariffDateRange::find()->where(['id' => $date_range_id])->one();
        if ($date_range == NULL){
            throw new NotFoundHttpException();
        }
      
        $suppliment_meal = NULL;
        $suppliment_meal = SupplimentMeal::find()
        ->where(['property_id' => $property->id ])
        ->andWhere(['date_range_id' => $date_range->id ])
        ->one();
        
        $tariff = (int) Yii::$app->request->get('tariff', 0);     
        $this->layout = 'tm_main';
        return $this->render('add_meal_rate', [
            'date_range' => $date_range,
            'property' => $property,            
            'suppliment_meal' => $suppliment_meal,
            'tariff' => $tariff
        ]);        
    }

    public function actionSavemealrate(){
        $date_range = new TariffDateRange();
        if ($date_range->load(Yii::$app->request->post()) ) {
            //echo "loaded";
        }
               
        SupplimentMeal::deleteAll(['property_id' => $date_range->property_id, 'date_range_id' => $_POST["TariffDateRange"]["id"]]);

        $meal_tariff = new SupplimentMeal();
        $meal_tariff->property_id = $date_range->property_id;
        $meal_tariff->date_range_id = $_POST["TariffDateRange"]["id"];
        if ($meal_tariff->save() ){
            
            //RoomTariffSlabSupplimentMeal::deleteAll(['tariff_id' => $tariff->getPrimaryKey() ]);

            $suppliment_slab = new SupplimentMealSlab();
            $suppliment_slab->meal_type_id = 1;
            $suppliment_slab->rate_adult = $_POST["breakfast_rate_adult"];
            $suppliment_slab->rate_child = $_POST["breakfast_rate_child"];
            $suppliment_slab->tariff_id = $meal_tariff->getPrimaryKey();
            $suppliment_slab->save();

            $suppliment_slab = new SupplimentMealSlab();
            $suppliment_slab->meal_type_id = 2;
            $suppliment_slab->rate_adult = $_POST["lunch_rate_adult"];
            $suppliment_slab->rate_child = $_POST["lunch_rate_child"];
            $suppliment_slab->tariff_id = $meal_tariff->getPrimaryKey();
            $suppliment_slab->save();
        
            $suppliment_slab = new SupplimentMealSlab();
            $suppliment_slab->meal_type_id = 3;
            $suppliment_slab->rate_adult = $_POST["dinner_rate_adult"];
            $suppliment_slab->rate_child = $_POST["dinner_rate_child"];
            $suppliment_slab->tariff_id = $meal_tariff->getPrimaryKey();
            $suppliment_slab->save();
        }
      
        $tariff = $_POST["tariff"];
        if($tariff == 2) {
            return $this->redirect(['tariff/home', 'id' => $date_range->property_id ]);
        }

        return $this->redirect(['tariff/addhikedayrate', 
                'id' => $date_range->property_id,                 
                'mother_id' => $meal_tariff->date_range_id,                
                ]);
    }

    public function actionAddhikedayrate(){
        $property_id = (int) Yii::$app->request->get('id');
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }

        $rooms = Room::find()->where(['property_id' => $property->id])->all();

        $date_range_id = Yii::$app->request->get('mother_id');
        $date_range = TariffDateRange::find()->where(['id' => $date_range_id])->one();
        $tariff = (int) Yii::$app->request->get('tariff');
        
        $this->layout = 'tm_main';
        return $this->render('add_hike_day_rate', [
            'date_range' => $date_range,
            'property' => $property,            
            'rooms' => $rooms,
            'tariff' => $tariff
        ]);        
    }

    public function actionSavehikedayrate(){
        $date_range = new TariffDateRange();
        if ($date_range->load(Yii::$app->request->post()) ) {            
        }

        $room_checked = Yii::$app->request->post('room_checked');

        $room_ids = ArrayHelper::getColumn(Room::find()->select('id')->where(['property_id' => $date_range->property_id])->all(), 'id');

        foreach ($room_ids as $room_id){
            RoomTariffWeekdayhike::deleteAll(['room_id' => $room_id, 'date_range_id' => $_POST["TariffDateRange"]["id"]]);
        }

        if($room_checked != NULL) {
            foreach ($room_checked as $room_id) {
                //RoomTariffWeekdaywise::deleteAll(['room_id' => $room_id, 'range_id' => $_POST["TariffDateRange"]["id"]]);
                $tariff = new RoomTariffWeekdayhike();  
                $tariff->property_id = $date_range->property_id;
                $tariff->room_id = $room_id;
                $tariff->date_range_id = $_POST["TariffDateRange"]["id"];
                $tariff->save();

                $week_days = Yii::$app->request->post('week_days_'.$room_id);
                if($week_days != NULL) {
                    $slab = new RoomTariffSlabWeekdayhike();
                    $slab->room_rate = Yii::$app->request->post('room_rate_'.$room_id);
                    $slab->adult_with_extra_bed = Yii::$app->request->post('adult_with_extra_bed_'.$room_id);
                    $slab->child_with_extra_bed = Yii::$app->request->post('child_with_extra_bed_'.$room_id);
                    $slab->child_sharing_bed = Yii::$app->request->post('child_sharing_bed_'.$room_id);
                    $slab->single_occupancy = Yii::$app->request->post('single_occupancy_'.$room_id);
                    $slab->tariff_id = $tariff->getPrimaryKey();
                    $slab->save();

                    $day_count = count($week_days);
                    for ($i = 0; $i < $day_count; $i++ ) {                    
                        echo "id: ".$room_id." : ".$week_days[$i].'<br/>';
                        $days = new RoomTariffWeekdayhikeDays();
                        $days->day = $week_days[$i];
                        $days->tariff_id = $tariff->getPrimaryKey();
                        $days->save();
                    }
                }
                
            }
        }

        $tariff = $_POST["tariff"];        
        if($tariff == 3) {
            return $this->redirect(['tariff/home', 
            'id' => $date_range->property_id]);  
        }

        return $this->redirect(['tariff/addmandatorydinnner', 
                'id' => $date_range->property_id,                 
                'mother_id' => $date_range->id,                
                ]);
    }

    public function actionAddmandatorydinnner(){         
        $date_range = new DateRange();
        if ($date_range->load(Yii::$app->request->post()) ) {
            $dinner_dates = Yii::$app->request->post('dinner_daterange');            
            if($dinner_dates != NULL ) {
                if(count(array_unique($dinner_dates)) < count($dinner_dates))
                {                
                    $date_range->setLastError("Error: Dates repeated.");
                }
                else
                {  
                    MandatoryDinner::deleteAll(['property_id' => $date_range->property_id ,'date_range_id' => $_POST["DateRange"]["id"] ]);
                    
                    $event_names = Yii::$app->request->post('event_name');
                    $adult_rates = Yii::$app->request->post('adult_rate');
                    $child_rates = Yii::$app->request->post('child_rate');
                    $i = 0;

                    foreach ($dinner_dates as $dinner_date) {
                        $mandatory_dinner = new MandatoryDinner();  
                        $mandatory_dinner->date = Carbon::createFromFormat('d M Y', $dinner_date)->toDateString();                        
                        $mandatory_dinner->name = $event_names[$i];
                        $mandatory_dinner->rate_adult = $adult_rates[$i];
                        $mandatory_dinner->rate_child = $child_rates[$i];
                        $mandatory_dinner->date_range_id = $_POST["DateRange"]["id"];
                        $mandatory_dinner->meal_impact_id = 4;
                        $mandatory_dinner->property_id = $date_range->property_id;
                        $mandatory_dinner->save();
                        $i++;
                    }                    
                }

                return $this->redirect(['tariff/home', 
                'id' => $date_range->property_id,                
                ]);
            } 
            else 
            {
                //TODO: Handle this
                $date_range->setLastError("Dates are empty");
            }
        }

        //$date_range = new DateRange();
        $property_id = (int) Yii::$app->request->get('id');
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->identity->getOWnerId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }

        $date_range_id = Yii::$app->request->get('mother_id');
        $mother_date_range = TariffDateRange::find()->where(['id' => $date_range_id])->one();

        if($mother_date_range != NULL) {
            $date_range->property_id = $mother_date_range->property_id;
            $date_range->parent = $mother_date_range->parent;            
            $date_range->from_date = Carbon::parse($mother_date_range->from_date)->format('d M Y');  
            $date_range->to_date = Carbon::parse($mother_date_range->to_date)->format('d M Y');
            $date_range->id = $mother_date_range->id;
        } 
        else {
            $date_range->property_id = $property_id;
            $date_range->parent = 0;
            $date_range->id = 0;
        }

        $mandatory_dinner = MandatoryDinner::find()
        ->where(['property_id' => $property->id ])
        ->andWhere(['date_range_id' => $date_range_id ])
        ->all();

        $tariff = (int) Yii::$app->request->get('tariff');
        $this->layout = 'tm_main';
        return $this->render('add_mandatory_dinner_rate', [
            'date_range' => $date_range,
            'property' => $property,
            'dinners' => $mandatory_dinner,
            'tariff' => $tariff
        ]);
    }

    public function actionTariffdinner(){
        $this->layout = 'tm_main';
        return $this->render('tariff_wizard_dinner', []);
    }
    public function actionTariffmeals(){
        $this->layout = 'tm_main';
        return $this->render('tariff-wizard_meal', []);
    }
    public function actionTariffroom(){
        $this->layout = 'tm_main';
        return $this->render('tariff_room', []);

    }
    public function actionTariffmotherdate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mother_date', []);
    }

    public function actionTariffweekday(){
        $this->layout = 'tm_main';
        return $this->render('tariff_week_day', []);
    }

     public function actionTariffmotherdaterange(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_date_range', []);
    }
    public function actionTariffmotherroomrate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_room_rate', []);
    }
    public function actionTariffmothermealrate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_meal_rate', []);
    }
     public function actionTariffmotherhikedayrate(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_hike_day_rate', []);
    }
    public function actionTariffmothermandatorydinner(){
        $this->layout = 'tm_main';
        return $this->render('tariff_mather_mandatory_dinner_rate', []);
    }

}