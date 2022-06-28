<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06-Nov-21
 * Time: 12:14 PM
 */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

frontend\assets\CommonAsset::register($this);
//$this->title = 'Basic Details';
//baic details property,location,legal&tax documentation and terms
//$this->registerJsFile('/js/basic_details/index.js');
$this->registerJsFile('/js/jsNew/jquery-1.1.3.1.pack.js');
$this->registerCssFile('/css/layout.css');
$this->registerCssFile('/js/jsNew/jquery.tabs.css');
$this->registerCssFile('/css/forms.css');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>RealOne</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--    <link href="css/layout.css" rel="stylesheet" type="text/css" />-->
    <!--    <link href="css/forms.css" rel="stylesheet" type="text/css" />-->
    <!--    <script src="js/jquery-1.1.3.1.pack.js" type="text/javascript"></script>-->
    <!--    <link rel="stylesheet" href="js/jquery.tabs.css" type="text/css" media="print, projection, screen">-->
</head>
<body>
<div id="wrap">
    <!--    <div id="topbar">-->
    <!--        <ul>-->
    <!--            <li class="current"><a href="index.html">Home</a></li>-->
    <!--            <li><a href="#">About Us</a></li>-->
    <!--            <li><a href="#">Contact us</a></li>-->
    <!--            <li><a href="singleitem.html">Single Template</a></li>-->
    <!--            <li><a href="searchresult.html">Search Results Template</a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <div id="content">
        <label><input type="checkbox" name="accommodation_id" id="enq_acc_ids" value="1"> Day 1 | March 1,22</label> &nbsp;&nbsp;
        <label> <input type="checkbox" name="accommodation_id" id="enq_acc_ids" value="2"> Day 2 | March 2,22</label>&nbsp;&nbsp;
        <label> <input type="checkbox" name="accommodation_id" id="enq_acc_ids" value="3"> Day 3 | March 3,22</label>&nbsp;&nbsp;


        <!--        <div id="topcategorieslink" class="clear">-->
        <!--            <h2>Categories</h2>-->
        <!--            <ul>-->
        <!--                <li><a href="#">Villas</a> </li>-->
        <!--                <li><a href="#">Houses</a> </li>-->
        <!--                <li><a href="#">Flats</a> </li>-->
        <!--                <li><a href="#">Apartments</a> </li>-->
        <!--                <li><a href="#">Raw Land</a> </li>-->
        <!--                <li><a href="#">Estates</a> </li>-->
        <!--                <li><a href="#">Shop / OFfice</a> </li>-->
        <!--                <li><a href="#">For Rent</a> </li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <div class="clear">&nbsp;</div>
        <div id="main">
            <h1>Featured Listing </h1>
            <input type="hidden" id="enquiry_id" value="<?= $EnquiryID ?>">
            <ul class="listing">
                <?php
                foreach ($searchResult as $properties) {
                    foreach ($properties as $rooms) {
//                foreach ($rooms as $room) {
                        ?>
                        <input type="hidden" id="room_id<?php echo $rooms['RoomDetails']['id'] ?>"
                               value="<?php echo $rooms['RoomDetails']['id'] ?>">
                        <li>
                            <div class="listinfo"><img
                                        src="<?= Yii::$app->request->baseUrl . "images/html/imageholder.jpg" ?>" alt=""
                                        class="listingimage"/>
                                <h3><?php echo $rooms['RoomDetails']['property']['name'] ?></h3>
                                <p> <?php echo $rooms['RoomDetails']['name'] ?></p>
                                <span class="price"> <span
                                            style="text-decoration:line-through; color: red">Rs. <?php echo $rooms['total_rack_rate'] ?></span> Rs. <?php echo $rooms['total_rate'] ?> </span>
                            </div>
                            <div class="listingbtns"><span class="listbuttons"> <button class="btn-sm btn-dark"
                                                                                        href="#">View Details</button></span>
                                <div class="clear">&nbsp;</div>
                                <span class="listbuttons"> <input onclick="SaveChecked(this.id)" type="checkbox"
                                                                  name="nameOfChoice"
                                                                  id="SelectRoom<?php echo $rooms['RoomDetails']['id'] ?>"
                                                                  value="<?php echo $rooms['RoomDetails']['id'] ?>"></span>
                            </div>

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">EBA</th>
                                    <th scope="col">CWB</th>
                                    <th scope="col">CNB</th>
                                    <th scope="col">SGL</th>
                                    <th scope="col">FOC</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                </tr>

                                </thead>
                                <tbody>
                                <?php foreach ($rooms['EnquiryDates'] as $splitupAmount) { ?>

                                    <tr>
                                        <th scope="row"><?php echo $splitupAmount['date'] ?></th>
                                        <td><?php echo $splitupAmount['room'] ? $splitupAmount['room'] : 0 ?>
                                            <input type="hidden"
                                                   name="infant_Count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                   id="infant_count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                   value="<?php echo $splitupAmount['infantCount'] ?>">

                                        </td>
                                        <td><?php echo $splitupAmount['EBA'] ? $splitupAmount['EBA'] : 0 ?>
                                            <input type="hidden"
                                                   name="child_Count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                   id="child_count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                   value="<?php echo $splitupAmount['ChildCount'] ?>">
                                        </td>
                                        <td><?php echo $splitupAmount['CWB'] ? $splitupAmount['CWB'] : 0 ?>
                                            <input type="hidden"
                                                   name="adult_Count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                   id="adult_count<?= $splitupAmount['enquiryAccommodation_id'] ?>"
                                                   value="<?php echo $splitupAmount['AdultCount'] ?>">
                                        </td>
                                        <td><?php echo $splitupAmount['CNB'] ? $splitupAmount['CNB'] : 0 ?></td>
                                        <td><?php echo $splitupAmount['SGL'] ? $splitupAmount['SGL'] : 0 ?></td>
                                        <td><?php echo $splitupAmount['FOC'] ? $splitupAmount['FOC'] : 0 ?></td>
                                        <td><?php echo $splitupAmount['Total'] ? $splitupAmount['Total'] : 0 ?></td>
                                        <td>
                                            <?php if ($splitupAmount['selected'] === 0) { ?>
                                                <span>&#9989;</span>
                                            <?php } else { ?>
                                                <span>&#10060;</span>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="7" rowspan="10">
                                        <h4>Total</h4>
                                    </td>
                                    <td>
                                        Rs. <?php echo $rooms['total_rate'] ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="clear">&nbsp;</div>
                        </li>
                        <?php
                    }
                }
                //                }
                ?>
            </ul>
        </div>

        <div class="clear">&nbsp;</div>
    </div>
    <div id="footer">
        <div style="float: right">
            <button class="btn btn-sm btn-primary"> Save Selected Rooms</button>
        </div>

        <!--        <div id="upperfooter"> <a href="#">Home</a> | <a href="#">Search</a> | <a href="#">Register</a> | <a href="#">Pro Agent Account</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> |<a href="#"> Privacy Policy</a> <a href="#">Terms Of Use</a> | <a href="#">Advertise With Us</a> </div>-->
        <!--        <div id="lowerfooter"> <span class="backtotop"> <a href="#">Back To Top</a> </span><a href="http://ramblingsoul.com">Free CSS Template</a> by RamblingSoul </div>-->
    </div>
</div>
</html>
<script>
    function SaveChecked(ID) {
        var checkedStatus = $('#' + ID).is(':checked');

        var enq_acc_ids = [];

        $("input:checkbox[name=accommodation_id]:checked").each(function () {
            enq_acc_ids.push($(this).val());
        });

        var Accommodation_policy = [];
        enq_acc_ids.forEach(function (value) {
            Accommodation_policy.push({
                accommodation_id: value,  //accommodation id
                infant_count: $('#infant_count' + value).val(),   // infant pax count prop policy applied
                child_count: $('#child_count' + value).val(),    // child pax count prop policy applied
                adultCount: $('#adult_count' + value).val(),    // adult pax count prop policy applied
            });
        });
        console.log(Accommodation_policy);
        if (checkedStatus === true) {

            var data = new FormData();

            var roomID = $('#' + ID).val();
            var enquiryID = $('#enquiry_id').val();

            data.append('room_id', roomID);
            data.append('enquiry_id', enquiryID);
            data.append('accommodation_policy', JSON.stringify(Accommodation_policy));
            // data.append("_csrf", yii.getCsrfToken());

            $.ajax({
                type: "post",
                enctype: 'multipart/form-data',
                url: "index.php?r=search/enquiryroomselectioncreate",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function (response) {

                    if (response.status == 0) {
                        console.log(response.data);

                        toastr.success(response.message);
                    } else {
                        toastr.warning(response.message);
                    }
                },
                error: function (e) {
                    // $("#overlay").fadeOut(300);

                    console.log(e.responseText);
                    toastr.error("Server error: " + e.responseText);
                }
            });


            // $.post("index.php?r=search/enquiryroomselectioncreate",{
            //     property_id: 'new',
            //
            // 0}, function (response) {
            //     toastr.success(response);
            //
            //     if ( parseInt(response.status) == 0) {
            //         toastr.success("Room updated");
            //     } else
            //     {
            //         toastr.error(response.message);
            //     }
            //
            // })
            //     .fail(function() {
            //         toastr.error("HTTP Error: Unable to connect to Server");
            //     });
        }
        if (checkedStatus === false) {

        }

        // $.post("index.php?r=property/saveroomcategory",{
        //     property_id: 1,
        //     room_name: $('#room-name').val(),
        //     room_type: $('#room-type_id').val(),
        //     room_view: $('#room-view_id').val(),
        //     room_meal_plan: $('#room-meal_plan_id').val(),
        //     room_count: $('#room-count').val(),
        //     room_size: $('#room-size').val(),
        //     room_child_policy_same_as_property: $('#room-child_policy_same_as_property').is(":checked") ? 1 : 0,
        //     room_restricted_for_child: $('#room-restricted_for_child').is(":checked") ? 1 : 0,
        //     room_allow_child_below_age:  $('#room-restricted_for_child_below_age').val(),
        //     room_number_of_adults: $('#room-number_of_adults').val(),
        //     room_number_of_kids_on_sharing: $('#room-number_of_kids_on_sharing').val(),
        //     room_number_of_extra_beds: $('#room-number_of_extra_beds').val(),
        //     room_extra_bed_type:  $('#room-extra_bed_type_id').val(),
        //     room_is_base: $('#room-is_base').is(":checked") ? 1 : 0,
        //
        // }, function (response) {
        //     if ( parseInt(response.status) == 0) {
        //         toastr.success("Room updated");
        //     } else
        //     {
        //         toastr.error(response.message);
        //     }
        //     $("#overlay").fadeOut(300);
        // })
        //     .fail(function() {
        //         $("#overlay").fadeOut(300);
        //         toastr.error("HTTP Error: Unable to connect to Server");
        //     });
    }
</script>
