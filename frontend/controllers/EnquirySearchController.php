<?php

namespace frontend\controllers;

use frontend\models\Destination;
use frontend\models\enquiry\Enquiry;
use frontend\models\enquiry\EnquiryAccommodation;
use frontend\models\operator\EnquiryRoomSelection;
use frontend\models\operator\PropertyFavourite;
use frontend\models\property\Amenity;
use frontend\models\property\PropertyAmenity;
use frontend\models\property\PropertyCategory;
use frontend\models\property\PropertyMealPlan;
use frontend\models\property\PropertyParking;
use frontend\models\property\PropertyRestaurant;
use frontend\models\property\PropertyRoomView;
use frontend\models\property\PropertySwimmingPool;
use frontend\models\property\PropertyType;
use frontend\models\property\Room;
use frontend\models\property\RoomAmenity;
use frontend\models\property\RoomType;
use frontend\models\tariff\Rooming;
use yii\db\Query;

class EnquirySearchController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'tm_main';
        $request = \Yii::$app->request;
        $enquiry_id = $request->get('enquiryID');

        $EnquiryFromList = Enquiry::find()->where(['id' => $enquiry_id])->one();

        $propertyTypes = PropertyType::find()->all();
        $propertyRatings = PropertyCategory::find()->all();
        $roomTypes = RoomType::find()->all();
        $roomViews = PropertyRoomView::find()->all();
        $foodTypes = PropertyMealPlan::find()->all();
        $propertyAmenities = Amenity::find()->where(['display_level_id' => [1, 3]])->all();
        $roomAmenities = Amenity::find()->where(['display_level_id' => [2, 3]])->all();



        $EnquiryDestinationID = array();
        $EnquiryDestinations = array();

        $r = 0;
        foreach ($EnquiryFromList->enquiryAccommodations as $destination) {
            if (!in_array($destination->destination->id, $EnquiryDestinationID)) {
                array_push($EnquiryDestinationID, $destination->destination->id);
                $EnquiryDestinations[$r]['id'] = $destination->destination->id;
                $EnquiryDestinations[$r]['name'] = $destination->destination->name;
                $r++;
            }
        }

        return $this->render('index',['enquiry'=>$EnquiryFromList,'EnquiryDestinations' => $EnquiryDestinations,
            'propertyTypes' => $propertyTypes, 'propertyRatings' => $propertyRatings,
            'roomTypes' => $roomTypes, 'roomViews' => $roomViews, 'foodTypes' => $foodTypes,
            'propertyAmenities' => $propertyAmenities, 'roomAmenities' => $roomAmenities,]);
    }

    public function actionSearch(){
        $this->layout = 'tm_main';
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $request = \Yii::$app->request;
        if ($request->isPost) {
            $enquiry_id = $request->post('enquiryID');
        }
        $EnquiryFromList = Enquiry::find()->where(['id' => $enquiry_id])->one();

        $property_destination_name = "";
        $destinationAccomodationIDs = "";
        $property_destination = $request->post('destination', '');

        if ($property_destination){
            $destinationAccomodationIDs  = EnquiryAccommodation::find()->where(['enquiry_id' => $enquiry_id, 'destination_id' => $property_destination,'status'=>1])->select('id')->column();
        }

        $property_type = $request->post('property_type', '');
        $property_rating = $request->post('property_rating', '');
        $room_type = $request->post('room_type', '');
        $room_view = $request->post('room_view', '');
        $food_type = $request->post('food_type', '');
        //TODO: Occupancy default is set to 1
        $occupancy = $request->post('Occupancy', 1);

        $property_aminity = $request->post('property_amenity', '');           //[1];
        $swimmingpool_aminity = $request->post('swimming_pool', null);
        $restaurant_aminity = $request->post('restaurant', null);; //true
        $parking_aminity = $request->post('parking', null);;  //true
        $room_aminity = $request->post('room_amenity', '');  //[3]
        $enquiry_accommodation = $request->post('accommodation_id', $destinationAccomodationIDs);
        $searchKeywords =  $request->post('search_property', '');
        $pageNo =  $request->post('page_no', 1);

//        $property_aminity = json_decode($request->post('property_amenity', ''));           //[1];
//        $room_aminity = json_decode($request->post('room_amenity', ''));  //[3]
//        $enquiry_accommodation = json_decode($request->post('accommodation_id', $destinationAccomodationIDs));

        $searchResult = array();
        $enqDestinationAccommodation = array();

        if($request->isPost && $property_destination != null) {

            $property_destination_name = Destination::find()->where(['id'=>$property_destination])->one()->name;

            $enqDestinationAccommodation = EnquiryAccommodation::find()->where(['enquiry_id' => $enquiry_id, 'destination_id' => $property_destination])->all();
            $selectedEnqAccommodation = EnquiryAccommodation::find()->where(['id' => $enquiry_accommodation])->all();
            $resultType = 1;   // Search result status

            $tableName = Room::tableName();
            $swimmingPoOl = PropertySwimmingPool::tableName();
            $tableAminity = PropertyAmenity::tableName();
            $tableParking = PropertyParking::tableName();
            $tableRestaurant = PropertyRestaurant::tableName();
            $tableRoomAminity = RoomAmenity::tableName();


            $subQuerySwimmingPool = (new Query())->select('*')->from($swimmingPoOl . ' t2')->where('t1.property_id=t2.property_id');
            $subQueryParking = (new Query())->select('*')->from($tableParking . ' t4')->where('t1.property_id=t4.property_id');
            $subQueryRestaurant = (new Query())->select('*')->from($tableRestaurant . ' t5')->where('t1.property_id=t5.property_id');


            $subQueryAminity = (new Query())->select('*')->from($tableAminity . ' t3')->where('property_id=t3.property_id');
            $subQueryRoomAminity = (new Query())->select('*')->from($tableRoomAminity . ' t6')->where('room_id=t6.room_id');


            $Rooms = Room::find()->from($tableName . ' t1')->joinWith('property')->Where(['=', 'property.destination_id', $property_destination]);


            if (($searchKeywords) && ($searchKeywords != null)) {
                $Rooms->andWhere(['like', 'property.name', $searchKeywords]);
            }
            if (($property_type) && ($property_type != null)) {
                $Rooms->andWhere(['property_type_id' => $property_type]);
            }
            if (($property_rating) && ($property_rating != null)) {
                $Rooms->andWhere(['like', 'property.property_category_id', $property_rating]);
            }
            if (($room_type) && ($room_type != null)) {
                $Rooms->andWhere(['type_id' => $room_type]);
            }
            if (($room_view) && ($room_view != null)) {
                $Rooms->andWhere(['view_id' => $room_view]);
            }
            if (($food_type) && ($food_type != null)) {
                $Rooms->andWhere(['meal_plan_id' => $food_type]);
            }
            if (($occupancy) && ($occupancy != null)) {
                $Rooms->andWhere(['>', '(number_of_adults + number_of_extra_beds)', $occupancy]);
            }
            if (($property_aminity) && ($property_aminity != null)) {

                $Rooms->joinWith(['property.propertyAmenities' => function ($query) {
                    $query->from(PropertyAmenity::tableName() . ' c2');
                }], true, 'INNER JOIN')
                    ->andFilterWhere(['in', 'c2.amenity_id', $property_aminity])
                    ->having($subQueryAminity->count() . '>=' . count($property_aminity));
            }
            if (($swimmingpool_aminity) && ($swimmingpool_aminity != null)) {

                $Rooms->andwhere(['exists', $subQuerySwimmingPool]);
            }
            if (($parking_aminity) && ($parking_aminity != null)) {
                $Rooms->andwhere(['exists', $subQueryParking]);
            }
            if (($restaurant_aminity) && ($restaurant_aminity != null)) {
                $Rooms->andwhere(['exists', $subQueryRestaurant]);
            }
            if (($room_aminity) && ($room_aminity != null)) {
                // $q->from(RoomAmenity::tableName() . ' c1' ) is to define alias for roomAmenities
                $Rooms->joinWith(['roomAmenities' => function ($query) {
                    $query->from(RoomAmenity::tableName() . ' c1');
                }], true, 'INNER JOIN')
                    ->andFilterWhere(['in', 'c1.amenity_id', $room_aminity])
                    ->having($subQueryRoomAminity->count() . '>=' . count($room_aminity));
            }

//            $count = $Rooms->count();

            // create a pagination object with the total count
//            $pagination = new Pagination(['totalCount' => $count,'defaultPageSize' => 3]);
//            return $this->asJson($pagination->limit);

//            return $this->asJson($start_from);
            // limit the query using the pagination and retrieve the articles
            $totalProps =   clone $Rooms;
            $totalPropID =   $totalProps->groupBy(['property_id'])->select('property_id')->column();
//            $TotalPages = count($totalPropID);
            $limit = 2 ;
            // Number of pages required.
            $TotalPages = ceil(count($totalPropID) / $limit);

            $start_from = ($pageNo-1) * $limit;

            $totalPropID =  array_slice($totalPropID,$start_from,$limit);

            $PriorityRooms = [];
            foreach ($totalPropID as $id){
//                return $this->asJson($id);
                $RoomQuery =  clone $Rooms;
                $PriorityRooms[] = $RoomQuery->andwhere(['property_id' => $id])->orderBy([
                    'priority' => SORT_ASC //specify sort order ASC for ascending DESC for descending
                ])->one();
            }

//            $Rooms = $Rooms->where(['property_id' => $totalPropID])->all();
            $Rooms = $PriorityRooms;

            $enquiry = Enquiry::find()->where(['id' => $enquiry_id])->with(['enquiryAccommodations' => function ($query) use ($property_destination, $enquiry_accommodation) {
                $query->Where(['destination_id' => $property_destination])->andwhere(['id' => $enquiry_accommodation]);
            }])->one();


            $EnquiryMinChildAgeArray = array();
            foreach ($enquiry->enquiryAccommodations as $enquiryAccommodation) {
                $guestCountPlan = $enquiryAccommodation->guestCountPlan;
                $MinChildAge = array();

                foreach ($guestCountPlan->enquiryGuestCountChildAges as $childAge) {
                    $MinChildAge[] = $childAge->age;
                }
                if (!empty($MinChildAge)) {
                    array_push($EnquiryMinChildAgeArray, min($MinChildAge));
                }

            }
            $EnquiryMinChildAge = null;
            if (!empty($EnquiryMinChildAgeArray)) {
                $EnquiryMinChildAge = min($EnquiryMinChildAgeArray);
            }

//        return $this->asJson($EnquiryMinChildAge);
            $searchResult = array();
            $j = 0;
            foreach ($Rooms as $key => $Room) {

//                return $this->asJson($Room->child_policy_same_as_property);
                $ageRestriction = $Room->restricted_for_child_below_age;
                if ($Room->child_policy_same_as_property == 1) {
                    // if child age policy is same as property
                    // Check Property allows Child of all age

                    if ($Room->property->allow_child_of_all_ages == 1){
                        $ageRestriction = 0;
                    }else{
                        $ageRestriction = $Room->property->restricted_for_child_below_age;
                    }
                }

                if ($EnquiryMinChildAge > $ageRestriction) {
                    $property = $Room->property;
                    $totalRate = 0;
                    $totalRackRate = 0;
                    $roomselectionStatus = array();
                    $count = count($enquiry->enquiryAccommodations);
                    $mandatoryDinner = false ;
                    foreach ($enquiry->enquiryAccommodations as $i => $enquiryAccommodation) {

                        $guestCount = $enquiryAccommodation->guestCountPlan;
                        $enqMealplan = $enquiryAccommodation->mealPlan->name;
//                      $guestCount = $enquiry->enquiryAccommodation[1]->guestCountPlan;
                        $totalGuestCount = $guestCount->adults + $guestCount->children;
                        $property = $Room->property;
                        $childCount = 0;
                        $adultCount = $guestCount->adults;
                        $infantCount = 0;
                        $Day = $enquiryAccommodation->day;
                        $nationality_id = $enquiry->nationality_id;


//
                        $rooming = new Rooming();
//                        $rooming->SetAdultChildInfant($adultCount, $childCount, $infantCount);
//                    $rooming->SetRoomBedRequirement($enquiry_no_rooms, $enquiry_eba, $enquiry_cwb, $enquiry_cnb, $enquiry_single);
                        $rooming->initialize($Day, $nationality_id, $Room->id, $property->id, $enquiry_id, $rate_type = 1);
//                        $rooming->_R55();
//                    $rooming->_R40();
                        $totalRate = $totalRate + $rooming->_R55();
//                    return $this->asJson($rooming->_26C());

                        $searchResult[$property->name]['property'] = $Room->property;

                        //Check Favourite
                        $operatorID = \Yii::$app->user->identity->getOWnerId();
                        $favouriteProperty = PropertyFavourite::find()->where(['property_id' => $property->id])->andWhere(['operator_id' => $operatorID])->one();
                        $favouriteStatus = false;
                        if ($favouriteProperty) {
                            $favouriteStatus = true;
                        }

                        if ($rooming->N9() != 0){
                            $mandatoryDinner  = true;
                        }

                        $searchResult[$property->name]['favourite'] = $favouriteStatus;
//                        $searchResult[$property->name]['man_dinner'] = $mandatoryDinner;

                        $searchResult[$property->name]['property_rooms'][$j]['RoomDetails'] = $Room;
                        $searchResult[$property->name]['property_rooms'][$j]['total_rate'] = $totalRate; //number_format($totalRate);
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['date'] = $Day;
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['enquiry_meal_plan'] = $enqMealplan;
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['tariff_meal_plan'] = $rooming->N3A();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['slab_id'] = $rooming->_4A1();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['meal_plan_over_ride'] = $rooming->N3B();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['mandatory_dinner'] = $rooming->N9();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['lowestRate'] = $rooming->_R55();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room'] = $rooming->_R80();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room_value'] = $rooming->_4A();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EBA'] = $rooming->_R81();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EBA_value'] = $rooming->_4B();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CWB'] = $rooming->_R82();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CWB_value'] = $rooming->_4C();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CNB'] = $rooming->_R83();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['CNB_value'] = $rooming->_4D();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['SGL'] = $rooming->_R84();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['SGL_value'] = $rooming->_4E();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['FOC'] = $rooming->_R85();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['Total'] = $rooming->_R86();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room_mouse_over'] = $rooming->_4A_MO_1();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['eba_mouse_over'] = $rooming->_4B_MO_1();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cwb_mouse_over'] = $rooming->_4C_MO_1();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cnb_mouse_over'] = $rooming->_4D_MO_1();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['sgl_mouse_over'] = $rooming->_4E_MO_1();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['room_day_hike_mouse_over'] = $rooming->_4A_MO_2();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['eba_day_hike_mouse_over'] = $rooming->_4B_MO_2();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cwb_day_hike_mouse_over'] = $rooming->_4C_MO_2();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['cnb_day_hike_mouse_over'] = $rooming->_4D_MO_2();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['sgl_day_hike_mouse_over'] = $rooming->_4E_MO_2();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['meal_plan_adult_mouse_over'] = $rooming->N3C();
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['meal_plan_child_mouse_over'] = $rooming->N3D();

                        // Policy Applied Adult,Child and Infant Count
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['infantCount'] = $rooming->_1C() ? $rooming->_1C():0;
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['ChildCount'] = $rooming->_1B() ? $rooming->_1B():0;
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['AdultCount'] = $rooming->_1A() ? $rooming->_1A():0;

                        //Enquiry Adult and Child Count
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EnquiryAdultCount'] = $guestCount->adults;
//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['EnquiryChildCount'] = $guestCount->children;

//                        $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['enquiryAccommodation_id'] = $enquiryAccommodation->id;

                        // Check if room is selected for this enquiry for this day
//                        $SelectedenquiryRooms = EnquiryRoomSelection::find()->where(['room_id' => $Room->id, 'enquiry_accommodation_id' => $enquiryAccommodation->id])->one();


//                        if ($SelectedenquiryRooms) {
//                            $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['selected'] = 0;
//                            if (!in_array(0, $roomselectionStatus)) {
//                                array_push($roomselectionStatus, 0);
//                            }
//
//                        } else {
//                            $searchResult[$property->name]['property_rooms'][$j]['EnquiryDates'][$i]['selected'] = 1;
//
//                            if (!in_array(1, $roomselectionStatus)) {
//                                array_push($roomselectionStatus, 1);
//                            }
//                        }

//                        if ($i == $count - 1) {
//                            // process last element
//                            if (count($roomselectionStatus) == 2) {
//                                $searchResult[$property->name]['property_rooms'][$j]['selectionStatus'] = 2; //Partially Selacted
//                            } else {
//                                foreach ($roomselectionStatus as $status) {
//
//                                    if ($status == 0) {
//                                        $searchResult[$property->name]['property_rooms'][$j]['selectionStatus'] = 1; //All Selected
//                                    } else {
//                                        $searchResult[$property->name]['property_rooms'][$j]['selectionStatus'] = 0; //None Selected
//
//                                    }
//
//                                }
//
//                            }
//
//                        }


                        $rooming->initialize($Day, $nationality_id, $Room->id, $property->id, $enquiry_id, $rate_type = 0);
//                        $rooming->_R55();
//                    $rooming->_R40();
                        $totalRackRate = $totalRackRate + $rooming->_R55();
                        $searchResult[$property->name]['property_rooms'][$j]['total_rack_rate'] = number_format($totalRackRate);
                    }


                    $j++;
                }


            }



        }


        $search_result_ui = $this->renderPartial('_search_result_content', ['searchResult' => $searchResult,'property_destination_name'=>$property_destination_name]);


        return array('status' => 0, 'message' => "Search Result", 'data' => $search_result_ui);


    }


    public function actionDestinationdates()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $enquiryID = \Yii::$app->request->get('enquiry_id');
        $destinationID = \Yii::$app->request->get('destination_id');

        $property_destination_name = Destination::find()->where(['id'=>$destinationID])->one()->name;

        $enquiryAccommodation = EnquiryAccommodation::find()->where(['enquiry_id' => $enquiryID, 'destination_id' => $destinationID])->all();

        $destination_dates_ui = $this->renderPartial('_destination_dates_filter', ['enquiryAccommodation' => $enquiryAccommodation,'property_destination_name'=>$property_destination_name]);

        return array('status' => 0, 'data' => $destination_dates_ui);

    }

}
