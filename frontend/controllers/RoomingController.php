<?php

namespace frontend\controllers;
use Carbon\Carbon;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;
use Yii;
use frontend\models\property\Property;
use frontend\models\property\Room;
use frontend\models\tariff\Rooming;
use frontend\models\enquiry\Enquiry;

class RoomingController extends Controller
{
    public $property = null;
    public $room = null;
    private $rooming = null;

    public function actionDesign() {
        $this->layout = 'main-tm';
        return $this->render('design');
    }

    public function actionSearch() {
        $this->layout = 'main-search';
        return $this->render('search');
    }

    public function actionSearch2() {
        $this->layout = 'main-search';
        return $this->render('search2');
    }

    public function actionSearch3() {
        $this->layout = 'main-search';
        return $this->render('search3');
    }

    public function actionSearch4() {
        $this->layout = 'main-search';
        return $this->render('search4');
    }

    public function actionSearch5() {
        $this->layout = 'main-search';
        return $this->render('search5');
    }
    public function actionSearchhotel() {
        $this->layout = 'main-search';
        return $this->render('search_hotel');
        }

    public function actionProfile() {
        $this->layout = 'guest';
        return $this->render('profile');
    }

    public function actionSrr() {
        $this->layout = 'guest';
        return $this->render('SRR');
    }

    public function actionJinsan(){

        $accomodation_date = '2022-06-25';
        $nationality_id  = 1;
        $room_id = 1;
        $property_id = 1;
        $enquiry_id = 1;

        $enquiry_adults = 3;
        $enquiry_child = 2;
        $enquiry_infant = 2;
        $enquiry_meal_plan = 1;

        $enquiry_no_rooms = 2;
        $enquiry_eba = 1;
        $enquiry_cwb = 0;
        $enquiry_cnb = 1;
        $enquiry_single = 0;

        $rooming = new Rooming();
        //$rooming->SetAdultChildInfant($enquiry_adults, $enquiry_child, $enquiry_infant);
        $rooming->SetRoomBedRequirement($enquiry_no_rooms, $enquiry_eba, $enquiry_cwb, $enquiry_cnb, $enquiry_single);
        $rooming->initialize($accomodation_date, $nationality_id, $room_id, $property_id, $enquiry_id);
        
        echo '<style>table, th, td {  border: 1px solid black;  border-collapse: collapse;} </style>';
        echo "<table>";
        echo "<tr><td>4A</td><td>".$rooming->_4A()."</td></tr>";
        echo "<tr><td>4B</td><td>".$rooming->_4B()."</td></tr>";
        echo "<tr><td>4C</td><td>".$rooming->_4C()."</td></tr>";
        echo "<tr><td>4D</td><td>".$rooming->_4D()."</td></tr>";
        echo "<tr><td>4E</td><td>".$rooming->_4E()."</td></tr>";
        echo "<tr><td>_4A1</td><td>".$rooming->_4A1()."</td></tr>";
        echo "<tr><td>N3</td><td>".$rooming->N3()."</td></tr>";
        echo "<tr><td>N3A</td><td>".$rooming->N3A()."</td></tr>";
        echo "<tr><td>R80</td><td>".$rooming->_R80()."</td></tr>";
        echo "</table>";

        //$rooming->_mealPlan();
        //$this->layout = 'jinsan';
        //return $this->render('jinsan');
    }

    public function actionEnquiry(){
        return $this->render('manual');
    }

    public function actionVerify() {

        $roomin_option = Yii::$app->request->post('rooming');
        //echo $rooming;

        $property = new Property();
        $room = new Room();
        $enquiry = new Enquiry();

        $property->complimentary_from_age = 11;
        $property->complimentary_to_age = 14;
        $property->child_rate_from_age = 15;
        $property->child_rate_to_age = 17;
        $property->restricted_for_child = 1;
        $property->restricted_for_child_below_age = 10;

        $room->restricted_for_child = 1;
        $room->restricted_for_child_below_age = 12;
        $room->number_of_adults = (int) Yii::$app->request->post('room_adults');
        $room->number_of_extra_beds = (int) Yii::$app->request->post('room_extra_beds');
        $room->number_of_kids_on_sharing = (int) Yii::$app->request->post('room_child_sharing');

        $rooming = new Rooming($property, $room);
        $rooming->SetAdultChildInfant(
            (int) Yii::$app->request->post('enquiry_adults'),
            (int) Yii::$app->request->post('enquiry_child'),
            (int) Yii::$app->request->post('enquiry_infant')
        );

        $rooming->SetRoomBedRequirement(
            (int) Yii::$app->request->post('enquiry_no_rooms'),
            (int) Yii::$app->request->post('enquiry_eba'),
            (int) Yii::$app->request->post('enquiry_cwb'),
            (int) Yii::$app->request->post('enquiry_cnb'),
            (int) Yii::$app->request->post('enquiry_single'),
        );

        $rooming->SetTariff(
            (int) Yii::$app->request->post('room_rate'),
            (int) Yii::$app->request->post('eba_rate'),
            (int) Yii::$app->request->post('cwb_rate'),
            (int) Yii::$app->request->post('cnb_rate'),
            (int) Yii::$app->request->post('single_rate'),
        );

        $accomodation_date = '2022-04-05';
        $nationality_id  = 1;
        $room_id = 3;

        //var_dump(Yii::$app->request->post());
        echo '<style>table, th, td {  border: 1px solid black;  border-collapse: collapse;} </style>';
        echo "<table>";
        echo "<tr><td>N1</td><td>".$rooming->N1()."</td></tr>";
        echo "<tr><td>N1</td><td>".$rooming->N1A()."</td></tr>";

        echo "<tr><td>1A</td><td>".$rooming->_1A()."</td></tr>";
        echo "<tr><td>1B</td><td>".$rooming->_1B()."</td></tr>";
        echo "<tr><td>1C</td><td>".$rooming->_1C()."</td></tr>";

        echo "<tr><td>2A</td><td>".$rooming->_2A()."</td></tr>";
        echo "<tr><td>2B</td><td>".$rooming->_2B()."</td></tr>";
        echo "<tr><td>2C</td><td>".$rooming->_2C()."</td></tr>";
        echo "<tr><td>2D</td><td>".$rooming->_2D()."</td></tr>";

        echo "<tr><td>4A</td><td>".$rooming->_4A($accomodation_date, $nationality_id, $room_id)."</td></tr>";
        echo "<tr><td>4B</td><td>".$rooming->_4B($accomodation_date, $nationality_id)."</td></tr>";
        echo "<tr><td>4C</td><td>".$rooming->_4C($accomodation_date, $nationality_id)."</td></tr>";
        echo "<tr><td>4D</td><td>".$rooming->_4D($accomodation_date, $nationality_id)."</td></tr>";
        echo "<tr><td>4E</td><td>".$rooming->_4E($accomodation_date, $nationality_id)."</td></tr>";

        echo "<tr><td>5A</td><td>".$rooming->_5A()."</td></tr>";
        echo "<tr><td>5B</td><td>".$rooming->_5B()."</td></tr>";
        echo "<tr><td>5C</td><td>".$rooming->_5C()."</td></tr>";
        echo "<tr><td>5D</td><td>".$rooming->_5D()."</td></tr>";
        echo "<tr><td>5E</td><td>".$rooming->_5E()."</td></tr>";
        echo "<tr><td>5F</td><td>".$rooming->_5F()."</td></tr>";

        if ($roomin_option == "auto") {
            echo "<tr><td>25A</td><td>".$rooming->_25A()."</td></tr>";
            echo "<tr><td>25B</td><td>".$rooming->_25B()."</td></tr>";
            echo "<tr><td>25C</td><td>".$rooming->_25C()."</td></tr>";
            echo "<tr><td>25D</td><td>".$rooming->_25D()."</td></tr>";
            echo "<tr><td>25E</td><td>".$rooming->_25E()."</td></tr>";
            echo "<tr><td>25F</td><td>".$rooming->_25F()."</td></tr>";
            echo "<tr><td>25G</td><td>".$rooming->_25G()."</td></tr>";
            echo "<tr><td>25H</td><td>".$rooming->_25H()."</td></tr>";
            echo "<tr><td>25I</td><td>".$rooming->_25I()."</td></tr>";
            echo "<tr><td>25J</td><td>".$rooming->_25J()."</td></tr>";
            echo "<tr><td>25K</td><td>".$rooming->_25K()."</td></tr>";
            echo "<tr><td>25L</td><td>".$rooming->_25L()."</td></tr>";
            echo "<tr><td>25M</td><td>".$rooming->_25M()."</td></tr>";
            echo "<tr><td>25N</td><td>".$rooming->_25N()."</td></tr>";
            echo "<tr><td>25O</td><td>".$rooming->_25O()."</td></tr>";
            echo "<tr><td>25P</td><td>".$rooming->_25P()."</td></tr>";
            echo "<tr><td>25Q</td><td>".$rooming->_25Q()."</td></tr>";
            echo "<tr><td>25R</td><td>".$rooming->_25R()."</td></tr>";
            echo "<tr><td>25S</td><td>".$rooming->_25S()."</td></tr>";
            echo "<tr><td>25T</td><td>".$rooming->_25T()."</td></tr>";
            echo "<tr><td>25U</td><td>".$rooming->_25U()."</td></tr>";
            echo "<tr><td>25V</td><td>".$rooming->_25V()."</td></tr>";
            echo "<tr><td>26A</td><td>".$rooming->_26A()."</td></tr>";
            echo "<tr><td>26B</td><td>".$rooming->_26B()."</td></tr>";
            echo "<tr><td>26C</td><td>".$rooming->_26C()."</td></tr>";
            echo "<tr><td>26D</td><td>".$rooming->_26D()."</td></tr>";
            echo "<tr><td>26E</td><td>".$rooming->_26E()."</td></tr>";
            echo "<tr><td>26F</td><td>".$rooming->_26F()."</td></tr>";
            echo "<tr><td>26G</td><td>".$rooming->_26G()."</td></tr>";
            echo "<tr><td>27A</td><td>".$rooming->_27A()."</td></tr>";
            echo "<tr><td>27B</td><td>".$rooming->_27B()."</td></tr>";
            echo "<tr><td>27C</td><td>".$rooming->_27C()."</td></tr>";
            echo "<tr><td>27D</td><td>".$rooming->_27D()."</td></tr>";
            echo "<tr><td>27E</td><td>".$rooming->_27E()."</td></tr>";
            echo "<tr><td>27F</td><td>".$rooming->_27F()."</td></tr>";
            echo "<tr><td>27G</td><td>".$rooming->_27G()."</td></tr>";
            echo "<tr><td>27H</td><td>".$rooming->_27H()."</td></tr>";
            echo "<tr><td>27I</td><td>".$rooming->_27I()."</td></tr>";
            echo "<tr><td>27J</td><td>".$rooming->_27J()."</td></tr>";
            echo "<tr><td>27K</td><td>".$rooming->_27K()."</td></tr>";
            echo "<tr><td>27L</td><td>".$rooming->_27L()."</td></tr>";
            echo "<tr><td>27M</td><td>".$rooming->_27M()."</td></tr>";
            echo "<tr><td>27N</td><td>".$rooming->_27N()."</td></tr>";
            echo "<tr><td>27O</td><td>".$rooming->_27O()."</td></tr>";
            echo "<tr><td>27P</td><td>".$rooming->_27P()."</td></tr>";
            echo "<tr><td>27Q</td><td>".$rooming->_27Q()."</td></tr>";
            echo "<tr><td>27R</td><td>".$rooming->_27R()."</td></tr>";
            echo "<tr><td>27S</td><td>".$rooming->_27S()."</td></tr>";
        }
        else
        {
            echo "<tr><td>3A</td><td>".$rooming->_3A()."</td></tr>";
            echo "<tr><td>1D</td><td>".$rooming->_1D()."</td></tr>";

            echo "<tr><td>Rooms</td><td>".$rooming->_Rooms()."</td></tr>";
            echo "<tr><td>EBA</td><td>".$rooming->_EBA()."</td></tr>";
            echo "<tr><td>CWB</td><td>".$rooming->_CWB()."</td></tr>";
            echo "<tr><td>CNB</td><td>".$rooming->_CNB()."</td></tr>";
            echo "<tr><td>SGL</td><td>".$rooming->_SGL()."</td></tr>";

            echo "<tr><td>7A</td><td>".$rooming->_7A()."</td></tr>";
            echo "<tr><td>7B</td><td>".$rooming->_7B()."</td></tr>";
            echo "<tr><td>7C</td><td>".$rooming->_7C()."</td></tr>";
            echo "<tr><td>7D</td><td>".$rooming->_7D()."</td></tr>";
            echo "<tr><td>7E</td><td>".$rooming->_7E()."</td></tr>";
            echo "<tr><td>7F</td><td>".$rooming->_7F()."</td></tr>";
            echo "<tr><td>7G</td><td>".$rooming->_7G()."</td></tr>";
            echo "<tr><td>7H</td><td>".$rooming->_7H()."</td></tr>";
            echo "<tr><td>7I</td><td>".$rooming->_7I()."</td></tr>";

            echo "<tr><td>7J</td><td>".$rooming->_7J()."</td></tr>";
            echo "<tr><td>7K</td><td>".$rooming->_7K()."</td></tr>";
            echo "<tr><td>7L</td><td>".$rooming->_7L()."</td></tr>";
            echo "<tr><td>7M</td><td>".$rooming->_7M()."</td></tr>";
            echo "<tr><td>7N</td><td>".$rooming->_7N()."</td></tr>";
            echo "<tr><td>7O</td><td>".$rooming->_7O()."</td></tr>";
            echo "<tr><td>7P</td><td>".$rooming->_7P()."</td></tr>";
            echo "<tr><td>7Q</td><td>".$rooming->_7Q()."</td></tr>";
            echo "<tr><td>7R</td><td>".$rooming->_7R()."</td></tr>";
            echo "<tr><td>7S</td><td>".$rooming->_7S()."</td></tr>";
            echo "<tr><td>7T</td><td>".$rooming->_7T()."</td></tr>";
            echo "<tr><td>7U</td><td>".$rooming->_7U()."</td></tr>";
            echo "<tr><td>7V</td><td>".$rooming->_7V()."</td></tr>";

            echo "<tr><td> T1</td><td>".$rooming->_T1()."</td></tr>";
            echo "<tr><td> T2</td><td>".$rooming->_T2()."</td></tr>";
            echo "<tr><td> T3</td><td>".$rooming->_T3()."</td></tr>";
            echo "<tr><td> T4</td><td>".$rooming->_T4()."</td></tr>";
            echo "<tr><td> T5</td><td>".$rooming->_T5()."</td></tr>";
            echo "<tr><td> T6</td><td>".$rooming->_T6()."</td></tr>";
            echo "<tr><td> T7</td><td>".$rooming->_T7()."</td></tr>";
            echo "<tr><td> T8</td><td>".$rooming->_T8()."</td></tr>";
            echo "<tr><td> T9</td><td>".$rooming->_T9()."</td></tr>";
            echo "<tr><td>T10</td><td>".$rooming->_T10()."</td></tr>";
            echo "<tr><td>T11</td><td>".$rooming->_T11()."</td></tr>";
            echo "<tr><td>T12</td><td>".$rooming->_T12()."</td></tr>";
            echo "<tr><td>T13</td><td>".$rooming->_T13()."</td></tr>";
            echo "<tr><td>T14</td><td>".$rooming->_T14()."</td></tr>";
            echo "<tr><td>T15</td><td>".$rooming->_T15()."</td></tr>";

            echo "<tr><td>8A</td><td>".$rooming->_8A()."</td></tr>";
            echo "<tr><td>8B</td><td>".$rooming->_8B()."</td></tr>";
            echo "<tr><td>8C</td><td>".$rooming->_8C()."</td></tr>";
            echo "<tr><td>8D</td><td>".$rooming->_8D()."</td></tr>";
            echo "<tr><td>8E</td><td>".$rooming->_8E()."</td></tr>";

            echo "<tr><td>6A</td><td>".$rooming->_6A()."</td></tr>";
            echo "<tr><td>6B</td><td>".$rooming->_6B()."</td></tr>";
            echo "<tr><td>6C</td><td>".$rooming->_6C()."</td></tr>";
            echo "<tr><td>6D</td><td>".$rooming->_6D()."</td></tr>";
            echo "<tr><td>6E</td><td>".$rooming->_6E()."</td></tr>";
            echo "<tr><td>7W</td><td>".$rooming->_7W()."</td></tr>";

            echo "<tr><td> R1</td><td>".$rooming->_R1()."</td></tr>";
            echo "<tr><td> R2</td><td>".$rooming->_R2()."</td></tr>";
            echo "<tr><td> R3</td><td>".$rooming->_R3()."</td></tr>";
            echo "<tr><td> R4</td><td>".$rooming->_R4()."</td></tr>";
            echo "<tr><td> R5</td><td>".$rooming->_R5()."</td></tr>";
            echo "<tr><td> R6</td><td>".$rooming->_R6()."</td></tr>";
            echo "<tr><td> R7</td><td>".$rooming->_R7()."</td></tr>";
            echo "<tr><td> R8</td><td>".$rooming->_R8()."</td></tr>";
            echo "<tr><td> R9</td><td>".$rooming->_R9()."</td></tr>";
            echo "<tr><td>R10</td><td>".$rooming->_R10()."</td></tr>";
            echo "<tr><td>R11</td><td>".$rooming->_R11()."</td></tr>";
            echo "<tr><td>R12</td><td>".$rooming->_R12()."</td></tr>";
            echo "<tr><td>R13</td><td>".$rooming->_R13()."</td></tr>";
            echo "<tr><td>R14</td><td>".$rooming->_R14()."</td></tr>";
            echo "<tr><td>R15</td><td>".$rooming->_R15()."</td></tr>";
            echo "<tr><td>R16</td><td>".$rooming->_R16()."</td></tr>";
            echo "<tr><td>R17</td><td>".$rooming->_R17()."</td></tr>";
            echo "<tr><td>R18</td><td>".$rooming->_R18()."</td></tr>";
            echo "<tr><td>R19</td><td>".$rooming->_R19()."</td></tr>";
            echo "<tr><td>R20</td><td>".$rooming->_R20()."</td></tr>";
        }
        echo "</table>";
    }

    public function actionValidate(){

        $from_date = Carbon::createFromFormat('d M Y', "22 Mar 2022")->toDateString();
        $to_date = Carbon::createFromFormat('d M Y', "25 Mar 2022")->toDateString();

        echo $from_date;
        exit;

        $max_date = Carbon::now()->addDays(450)->toDateString();
        if($from_date > $max_date || $to_date > $max_date ) {
            echo "Date can't be more than 450 days";
        }
        else
        {
            echo "Date NOT more than 450 days";
        }

        $min_date = Carbon::now()->toDateString();
        if($from_date < $min_date || $to_date < $min_date ) {
            echo "Date can't be less than today";
        }

        /* $property_id = (int) Yii::$app->request->get('property_id');
        if ($property_id != 0) {
            $property = Property::find()
            ->where(['id' => $property_id])
            ->one();
        }
        if ($property == NULL){
            throw new NotFoundHttpException();
        }
        $rooms = ArrayHelper::map(Room::find()->asArray()->where(['property_id' => $property_id])->all(), 'id', 'name');
        $enquires = ArrayHelper::map(Enquiry::find()->asArray()->all(), 'id', 'guest_name');
         */

    return $this->render('validate', [/*'property' =>  $property, 'rooms' => $rooms, 'enquires' => $enquires*/]);
    }

    public function actionAuto(){
        $property_id = (int) Yii::$app->request->get('property_id');
        $room_id = (int) Yii::$app->request->get('room_id');

        if ($property_id != 0) {
            $this->property = Property::find()
            ->where(['id' => $property_id])
            ->one();
        }
        if ($this->property == NULL){
            throw new NotFoundHttpException();
        }

        if ($room_id != 0) {
            $this->room = Room::find()
            ->where(['id' => $room_id])
            ->one();
        }
        if ($this->room == NULL){
            throw new NotFoundHttpException();
        }

        $rooming = new Rooming($this->property, $this->room);
        $accomodation_date = '2022-03-15';
        $nationality_id  = 1;
        $room_id = 3;

        echo '<style>table, th, td {  border: 1px solid black;  border-collapse: collapse;} </style>';
        echo "<table>";
        echo "<tr><td>25A</td><td>".$rooming->_25A()."</td></tr>";
        echo "</table>";

    }


    public function actionManual()
    {
        $property_id = (int) Yii::$app->request->get('property_id');
        $room_id = (int) Yii::$app->request->get('room_id');

        if ($property_id != 0) {
            $this->property = Property::find()
            ->where(['id' => $property_id])
            ->one();
        }
        if ($this->property == NULL){
            throw new NotFoundHttpException();
        }

        if ($room_id != 0) {
            $this->room = Room::find()
            ->where(['id' => $room_id])
            ->one();
        }
        if ($this->room == NULL){
            throw new NotFoundHttpException();
        }

        $rooming = new Rooming($this->property, $this->room);
        $accomodation_date = '2022-03-15';
        $nationality_id  = 1;
        $room_id = 3;

        //5 Rooms and Bed Requirements
        $rooms = 3;
        $EBA = 2;
        $CWB = 2;
        $CNB = 8;
        $SGL = 2;

        echo '<style>table, th, td {  border: 1px solid black;  border-collapse: collapse;} </style>';
        echo "<table>";
        echo "<tr><td>N1</td><td>".$rooming->N1()."</td></tr>";
        echo "<tr><td>N1A</td><td>".$rooming->N1A()."</td></tr>";
        echo "<tr><td>2A</td><td>".$rooming->_2A()."</td></tr>";
        echo "<tr><td>2B</td><td>".$rooming->_2B()."</td></tr>";
        echo "<tr><td>2C</td><td>".$rooming->_2C()."</td></tr>";
        echo "<tr><td>2D</td><td>".$rooming->_2D()."</td></tr>";

        echo "<tr><td>4A</td><td>".$rooming->_4A($accomodation_date, $nationality_id, $room_id)."</td></tr>";
        echo "<tr><td>4B</td><td>".$rooming->_4B($accomodation_date, $nationality_id)."</td></tr>";
        echo "<tr><td>4C</td><td>".$rooming->_4C($accomodation_date, $nationality_id)."</td></tr>";
        echo "<tr><td>4D</td><td>".$rooming->_4D($accomodation_date, $nationality_id)."</td></tr>";
        echo "<tr><td>4E</td><td>".$rooming->_4E($accomodation_date, $nationality_id)."</td></tr>";

        echo "<tr><td>3A</td><td>".$rooming->_3A()."</td></tr>";
        echo "<tr><td>1D</td><td>".$rooming->_1D()."</td></tr>";

        echo "<tr><td>7A</td><td>".$rooming->_7A()."</td></tr>";
        echo "<tr><td>7B</td><td>".$rooming->_7B()."</td></tr>";
        echo "<tr><td>7C</td><td>".$rooming->_7C()."</td></tr>";
        echo "<tr><td>7D</td><td>".$rooming->_7D()."</td></tr>";
        echo "<tr><td>7E</td><td>".$rooming->_7E()."</td></tr>";
        echo "<tr><td>7F</td><td>".$rooming->_7F()."</td></tr>";
        echo "<tr><td>7G</td><td>".$rooming->_7G()."</td></tr>";
        echo "<tr><td>7H</td><td>".$rooming->_7H()."</td></tr>";
        echo "<tr><td>7I</td><td>".$rooming->_7I()."</td></tr>";

        echo "<tr><td>7J</td><td>".$rooming->_7J()."</td></tr>";
        echo "<tr><td>7K</td><td>".$rooming->_7K()."</td></tr>";
        echo "<tr><td>7L</td><td>".$rooming->_7L()."</td></tr>";
        echo "<tr><td>7M</td><td>".$rooming->_7M()."</td></tr>";
        echo "<tr><td>7N</td><td>".$rooming->_7N()."</td></tr>";
        echo "<tr><td>7O</td><td>".$rooming->_7O()."</td></tr>";
        echo "<tr><td>7P</td><td>".$rooming->_7P()."</td></tr>";
        echo "<tr><td>7Q</td><td>".$rooming->_7Q()."</td></tr>";
        echo "<tr><td>7R</td><td>".$rooming->_7R()."</td></tr>";
        echo "<tr><td>7S</td><td>".$rooming->_7S()."</td></tr>";
        echo "<tr><td>7T</td><td>".$rooming->_7T()."</td></tr>";
        echo "<tr><td>7U</td><td>".$rooming->_7U()."</td></tr>";
        echo "<tr><td>7V</td><td>".$rooming->_7V()."</td></tr>";

        echo "<tr><td> T1</td><td>".$rooming->_T1()."</td></tr>";
        echo "<tr><td> T2</td><td>".$rooming->_T2()."</td></tr>";
        echo "<tr><td> T3</td><td>".$rooming->_T3()."</td></tr>";
        echo "<tr><td> T4</td><td>".$rooming->_T4()."</td></tr>";
        echo "<tr><td> T5</td><td>".$rooming->_T5()."</td></tr>";
        echo "<tr><td> T6</td><td>".$rooming->_T6()."</td></tr>";
        echo "<tr><td> T7</td><td>".$rooming->_T7()."</td></tr>";
        echo "<tr><td> T8</td><td>".$rooming->_T8()."</td></tr>";
        echo "<tr><td> T9</td><td>".$rooming->_T9()."</td></tr>";
        echo "<tr><td>T10</td><td>".$rooming->_T10()."</td></tr>";
        echo "<tr><td>T11</td><td>".$rooming->_T11()."</td></tr>";
        echo "<tr><td>T12</td><td>".$rooming->_T12()."</td></tr>";
        echo "<tr><td>T13</td><td>".$rooming->_T13()."</td></tr>";
        echo "<tr><td>T14</td><td>".$rooming->_T14()."</td></tr>";
        echo "<tr><td>T15</td><td>".$rooming->_T15()."</td></tr>";

        echo "<tr><td>8A</td><td>".$rooming->_8A()."</td></tr>";
        echo "<tr><td>8B</td><td>".$rooming->_8B()."</td></tr>";
        echo "<tr><td>8C</td><td>".$rooming->_8C()."</td></tr>";
        echo "<tr><td>8D</td><td>".$rooming->_8D()."</td></tr>";
        echo "<tr><td>8E</td><td>".$rooming->_8E()."</td></tr>";

        echo "<tr><td>6A</td><td>".$rooming->_6A()."</td></tr>";
        echo "<tr><td>6B</td><td>".$rooming->_6B()."</td></tr>";
        echo "<tr><td>6C</td><td>".$rooming->_6C()."</td></tr>";
        echo "<tr><td>6D</td><td>".$rooming->_6D()."</td></tr>";
        echo "<tr><td>6E</td><td>".$rooming->_6E()."</td></tr>";
        echo "<tr><td>7W</td><td>".$rooming->_7W()."</td></tr>";

        echo "<tr><td> R1</td><td>".$rooming->_R1()."</td></tr>";
        echo "<tr><td> R2</td><td>".$rooming->_R2()."</td></tr>";
        echo "<tr><td> R3</td><td>".$rooming->_R3()."</td></tr>";
        echo "<tr><td> R4</td><td>".$rooming->_R4()."</td></tr>";
        echo "<tr><td> R5</td><td>".$rooming->_R5()."</td></tr>";
        echo "<tr><td> R6</td><td>".$rooming->_R6()."</td></tr>";
        echo "<tr><td> R7</td><td>".$rooming->_R7()."</td></tr>";
        echo "<tr><td> R8</td><td>".$rooming->_R8()."</td></tr>";
        echo "<tr><td> R9</td><td>".$rooming->_R9()."</td></tr>";
        echo "<tr><td>R10</td><td>".$rooming->_R10()."</td></tr>";
        echo "<tr><td>R11</td><td>".$rooming->_R11()."</td></tr>";
        echo "<tr><td>R12</td><td>".$rooming->_R12()."</td></tr>";
        echo "<tr><td>R13</td><td>".$rooming->_R13()."</td></tr>";
        echo "<tr><td>R14</td><td>".$rooming->_R14()."</td></tr>";
        echo "<tr><td>R15</td><td>".$rooming->_R15()."</td></tr>";
        echo "<tr><td>R16</td><td>".$rooming->_R16()."</td></tr>";
        echo "<tr><td>R17</td><td>".$rooming->_R17()."</td></tr>";
        echo "<tr><td>R18</td><td>".$rooming->_R18()."</td></tr>";
        echo "<tr><td>R19</td><td>".$rooming->_R19()."</td></tr>";
        echo "<tr><td>R20</td><td>".$rooming->_R20()."</td></tr>";

        echo "</table>";

        $accomodation_date = '2022-03-15';
        $nationality_id  = 1;
        //echo $rooming->_4A($accomodation_date, $nationality_id);

        //echo $this->N1();
        //return $this->render('manual');
    }

    private function N1(){

        if($this->property->restricted_for_child) {
            echo "restricted_for_child_below_age: ".$this->property->restricted_for_child_below_age;
        }
       //return $this->property->name;
    }
}
