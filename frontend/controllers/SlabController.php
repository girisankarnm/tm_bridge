<?php
namespace frontend\controllers;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use Carbon\Carbon;

use frontend\models\operator\Operator;
use frontend\models\property\PropertySlabAssignment;
use frontend\models\property\Property;
use frontend\models\property\Room;

use frontend\models\tariff\RoomTariffDatewise;
use frontend\models\tariff\RoomTariffWeekdayhike;
use frontend\models\tariff\SupplimentMeal;
use frontend\models\tariff\MandatoryDinner;
use frontend\models\tariff\TariffNationalityGroupName;

class SlabController extends Controller{

    /* public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['home'],
                        'roles' => ['hotelier'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['assign'],
                        'roles' => ['hotelier'],
                    ],
                ],
            ]
        ];
    } */

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

    public function actionHome(){

        $property = NULL;
        if(isset( $_GET['id']) ) {
            $property_id = Yii::$app->request->get('id');
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->getId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }

        if ($property == NULL) {
            $property = Property::find()->where(['owner_id' => Yii::$app->user->getId()])->one();
            $property_id = 0;
        }

        $slab_assigned = NULL;
        if ($property != NULL) {
            $slab_assigned = PropertySlabAssignment::find()->where(['property_id' => $property->id])->one();
        }

        if ($slab_assigned == NULL) {
            $slab_assigned = new PropertySlabAssignment();
            $slab_assigned->property_id = $property_id;
        }

        $assigned_operators = PropertySlabAssignment::find()->where(['property_id' => $property->id])->select('operator_id')->column();

        $properties_list = ArrayHelper::map(Property::find()->where(['owner_id' => Yii::$app->user->getId()])->all(), 'id', 'name');
//        $operators = Operator::find()->all();
        $operators = Operator::find()->select('operator.*')

        ->with(['owner.userPropertySlab' => function ($query) use ($property_id) {
            $query->Where(['property_id' => $property_id]);
        }])->all();
//        return $this->asJson([$operators]);

        $this->layout = 'tm_main';
        return $this->render('home', [
            'operators' => $operators,
            'properties' => $properties_list,
            'slab_assigned' => $slab_assigned,
            'assigned_operators' => $assigned_operators]);
    }

    public function actionAssign(){
        $slab_assigned = new PropertySlabAssignment();
        if ( !$slab_assigned->load(Yii::$app->request->post()))  {
            echo "load failed";
            //return;
        }

        $operator_count = 0;
        if(isset( $_POST['operator'])) {
            $operator_count = count($_POST["operator"]);
        }

        for ($i = 0; $i < $operator_count; $i++ ) {
            PropertySlabAssignment::deleteAll([
                'property_id' => $slab_assigned->property_id,
                'operator_id' => $_POST["operator"][$i]
            ]);

            $property_slab = new PropertySlabAssignment();
            $property_slab->property_id = $slab_assigned->property_id;
            $property_slab->operator_id = $_POST["operator"][$i];
            $property_slab->slab_number = $slab_assigned->slab_number;
            $property_slab->assigned_date = Carbon::now();
            $property_slab->save();
        }

        return $this->redirect(['slab/home' ,'id'=>$slab_assigned->property_id]);
    }

    public function actionTariff(){
        $property = NULL;
        if(isset( $_GET['id']) ) {
            $property_id = Yii::$app->request->get('id');
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->getId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }

        $nationality_id = isset($_POST['nationality_id']) ? $_POST['nationality_id'] : NULL;
        $room_id = isset($_POST['room_category_id']) ? $_POST['room_category_id'] : NULL;
        $date = isset($_POST['daterange']) ? $_POST['daterange'] : NULL;
        //$property_id = isset($_POST['property_id']) ? $_POST['property_id'] : NULL;

        if ($nationality_id == NULL){
            $nationality_id = 0;
        }

        $rooms = Room::find()->where(['property_id' => $property->id])->all();
        if($room_id == NULL) {
            $room_id = 0;
            if(isset($rooms[0]) ) {
                $room_id = $rooms[0]->id;
            }
        }

        if($date == NULL) {
            $date = Carbon::now();
        }
        else {
            $date = Carbon::createFromFormat('d M Y', $date);
        }

        $room_date_tariff_array = array();
        $room_dayhike_tariff_array = array();
        $slab_data_html = "";
        $date = Carbon::createFromDate($date->year, $date->month, 1);
        $daysInMonth = $date->daysInMonth;

        for ($i = 0; $i < $daysInMonth; $i++ ){
            $room_date_tariff_array[$date->toDateString()] = array();

            $rows = (new \yii\db\Query())
            ->select(['room_tariff_datewise.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
            ->from('tariff_date_range')
            ->where(['<=', 'from_date', $date->toDateString()])
            ->andWhere(['>=', 'to_date', $date->toDateString()])
            ->leftJoin('room_tariff_datewise', 'room_tariff_datewise.date_range_id = tariff_date_range.id' )
            ->andWhere(['=', 'nationality_id', $nationality_id])
            ->andWhere(['=', 'room_id', $room_id])
            ->orderBy('date_difference ASC')
            ->one();

            if($rows != false) {
                $tariff_id = $rows['id'];
                $room_tariff = RoomTariffDatewise::findOne(['id' => $tariff_id]);
                if($room_tariff != null) {
                    $room_date_tariff_array[$date->toDateString()] = $room_tariff->roomTariffSlabs;
                }
                //TODO: handle empty/not defined slabs for a day
            }

            $rows = (new \yii\db\Query())
            ->select(['room_tariff_weekdayhike.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
            ->from('tariff_date_range')
            ->where(['<=', 'tariff_date_range.from_date', $date->toDateString()])
            ->andWhere(['>=', 'tariff_date_range.to_date', $date->toDateString()])
            ->leftJoin('room_tariff_weekdayhike', 'tariff_date_range.id  = room_tariff_weekdayhike.date_range_id')
            ->andWhere(['=', 'room_tariff_weekdayhike.room_id', $room_id])
            ->orderBy('date_difference ASC')
            ->one();

            $weekday_hike_slab = NULL;
            if($rows != false) {
                $tariff_id = $rows["id"];
                $weekday_hike = RoomTariffWeekdayhike::findOne(['id' => $tariff_id]);
                if($weekday_hike != null) {
                    $day_of_the_week = date('w', strtotime($date->toDateString()));
                    foreach ($weekday_hike->roomTariffWeekdayhikeDays as $tariff_days) {
                        if ($day_of_the_week == $tariff_days->day){
                            $weekday_hike_slab = $weekday_hike->getRoomTariffSlabWeekdayhikes()
                            ->one();
                        }
                    }
                }
            }

            $room_dayhike_tariff_array[$date->toDateString()] = $weekday_hike_slab;

          $date->addDays(1);
        }

        $properties_list = ArrayHelper::map(Property::find()->where(['owner_id' => Yii::$app->user->getId()])->all(), 'id', 'name');
        $room_category_list = ArrayHelper::map($rooms, 'id', 'name');
        $tariff_nationality_list = ArrayHelper::map( TariffNationalityGroupName::find()->where(['property_id' => $property->id])->asArray()->all(), 'id', 'name');
//        return $this->asJson($room_dayhike_tariff_array);
        $this->layout = 'tm_main';
        return $this->render('tariff', [
            'property_id' => $property_id,
            'room_category_list' => $room_category_list,
            'properties_list' => $properties_list,
            'nationality_list' => $tariff_nationality_list,
            'room_date_tariff_array' => $room_date_tariff_array,
            'room_dayhike_tariff_array' => $room_dayhike_tariff_array,
            'date' => isset($_POST['daterange']) ? $_POST['daterange'] : Carbon::parse(Carbon::now())->format('d M Y'),
            'nationality_selected' => isset($_POST['nationality_id']) ? $_POST['nationality_id'] : NULL,
            'room_selected' => isset($_POST['room_category_id']) ? $_POST['room_category_id'] : NULL
        ]);
    }

    public function actionMeals(){
        $property = NULL;
        if(isset( $_GET['id']) ) {
            $property_id = Yii::$app->request->get('id');
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->getId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }


        $date = isset($_POST['daterange']) ? $_POST['daterange'] : NULL;
        if($date == NULL) {
            $date = Carbon::now();
        }
        else {
            $date = Carbon::createFromFormat('d M Y', $date);
        }
        $date = Carbon::createFromDate($date->year, $date->month, 1);


        $meals_tariff_array = array();
        $daysInMonth = $date->daysInMonth;

        for ($i = 0; $i < $daysInMonth; $i++ ){
            $meals_tariff_array[$date->toDateString()] = NULL;

            $rows = (new \yii\db\Query())
            ->select(['suppliment_meal.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
            ->from('tariff_date_range')
            ->where(['<=', 'tariff_date_range.from_date', $date->toDateString()])
            ->andWhere(['>=', 'tariff_date_range.to_date', $date->toDateString()])
            ->leftJoin('suppliment_meal', 'tariff_date_range.id  = suppliment_meal.date_range_id')
            ->andWhere(['=', 'suppliment_meal.property_id', $property_id])
            ->orderBy('date_difference ASC')
            ->one();

            if($rows != false) {
                $tariff_id = $rows["id"];
                $suppliment_meal = SupplimentMeal::findOne(['id' => $tariff_id]);
                if($suppliment_meal != null) {
                    $meals_tariff_array[$date->toDateString()] = $suppliment_meal->supplimentMealSlabs;
                }
            }
            $date->addDays(1);
        }

        //exit;

        $properties_list = ArrayHelper::map(Property::find()->where(['owner_id' => Yii::$app->user->getId()])->all(), 'id', 'name');

        $this->layout = 'tm_main';


        return $this->render('meals', [
            'property_id' => $property_id,
            'properties_list' => $properties_list,
            'meals_tariff_array' => $meals_tariff_array,
            'date' => isset($_POST['daterange']) ? $_POST['daterange'] : Carbon::parse(Carbon::now())->format('d M Y')
        ]);
    }

    public function actionDinner(){

        $property = NULL;
        if(isset( $_GET['id']) ) {
            $property_id = Yii::$app->request->get('id');
            $property = Property::find()
            ->where(['id' => $property_id])
            ->andWhere(['owner_id' => Yii::$app->user->getId()])
            ->one();

            if ($property == NULL){
                throw new NotFoundHttpException();
            }
        }
        else {
            throw new NotFoundHttpException();
        }


        $date = isset($_POST['daterange']) ? $_POST['daterange'] : NULL;
        if($date == NULL) {
            $date = Carbon::now();
        }
        else {
            $date = Carbon::createFromFormat('d M Y', $date);
        }
        $date = Carbon::createFromDate($date->year, $date->month, 1);


        $dinner_tariff_array = array();
        $daysInMonth = $date->daysInMonth;

        for ($i = 0; $i < $daysInMonth; $i++ ){

            $dinner_tariff_array[$date->toDateString()] = NULL;

            $rows = (new \yii\db\Query())
            ->select(['mandatory_dinner.id', 'DATEDIFF(tariff_date_range.to_date, tariff_date_range.from_date) AS date_difference' ])
            ->from('tariff_date_range')
            ->where(['<=', 'tariff_date_range.from_date', $date->toDateString()])
            ->andWhere(['>=', 'tariff_date_range.to_date', $date->toDateString()])
            ->leftJoin('mandatory_dinner', 'tariff_date_range.id  = mandatory_dinner.date_range_id')
            ->andWhere(['=', 'mandatory_dinner.property_id', $property_id])
            ->orderBy('date_difference ASC')
            ->one();

            if($rows != false) {
                $tariff_id = $rows["id"];
                $mandatory_dinner_tariff = MandatoryDinner::findOne(['id' => $tariff_id]);
                if($mandatory_dinner_tariff != null) {
                    $dinner_tariff_array[$date->toDateString()] = $mandatory_dinner_tariff;
                }
            }
            $date->addDays(1);
        }

        $properties_list = ArrayHelper::map(Property::find()->where(['owner_id' => Yii::$app->user->getId()])->all(), 'id', 'name');

        $this->layout = 'tm_main';
        return $this->render('dinner', [
            'property_id' => $property_id,
            'properties_list' => $properties_list,
            'dinner_tariff_array' => $dinner_tariff_array,
            'date' => isset($_POST['daterange']) ? $_POST['daterange'] : Carbon::parse(Carbon::now())->format('M Y')
        ]);
    }
}
