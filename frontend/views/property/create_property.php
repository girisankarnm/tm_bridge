<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!doctype html>
<html lang="en">


<body>
<div style="text-align: center; border: 0px solid black; padding: 10px; color: #586ADA;margin-top: 12px; margin-right: 74px;">Your property go live in Four steps<a href="#" class="color-anchor"> watch video <img src="images/video-play.svg"></a> </div>
<main class="container py-5">
<!--    <h1>Bootstrap and Masonry</h1>-->

    <div class="row" data-masonry='{"percentPosition": true }'>


        <div class="col-sm-6 col-lg-2 mb-3">
            <div class="card card-resize" >
                <img src="images/one-property.svg" class="image-top-left-property" >
                <img src="images/create_property.svg" class="height-image">
                                   <h5 class="title-card-property">Create your property</h5>
                <h6 class="h8class smallFonts padding-4px ">Name. Location, GST...</h6>

            </div>
        </div>

        <div class="col-sm-1 col-lg-1 mb-1 " style="overflow: hidden">
            <img src="images/angle-double.svg">
        </div>
           <div class="col-sm-6 col-lg-2 mb-3">
            <div class="card card-resize" >
                <img src="images/two-property.svg" class="image-top-left-property" >
                <img src="images/define_policy.svg"  class="height-image">
                <h5 class="title-card-property">Define policies</h5>
                <h6 class="h8class smallFonts padding-4px ">Check in/out. Smoking, Pets...</h6>

            </div>
        </div>


        <div class="col-sm-1 col-lg-1 mb-1 " style="overflow: hidden">
            <img src="images/angle-double.svg">
        </div>
           <div class="col-sm-6 col-lg-2 mb-3">
            <div class="card card-resize" >
                <img src="images/three-property.svg" class="image-top-left-property" >
                <img src="images/set_tariff.svg"  class="height-image">
                <h5 class="title-card-property">Set tariff</h5>
                <h6 class="h8class smallFonts padding-4px ">Room tariff. Meal rates, Weekday hike...</h6>

<!--                <div class="card-body">-->
<!--                                   <h5 class="card-title">Card title that wraps to a new line</h5>-->
<!--                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
<!--                </div>-->
            </div>
        </div>

        <div class="col-sm-1 col-lg-1 mb-1 " style="overflow: hidden">
            <img src="images/angle-double.svg" >
        </div>
           <div class="col-sm-6 col-lg-2 mb-3">
            <div class="card card-resize" >
                <img src="images/four-property.svg" class="image-top-left-property" >
                <img src="images/publish_property.svg"  class="height-image">
                <h5 class="title-card-property">Published</h5>
                <h6 class="h8class smallFonts padding-4px ">Share it with operators</h6>


            </div>
        </div>

    </div>


    <div style="text-align: center; border: 0px solid black; padding: 10px; color: #586ADA;margin-top: 12px"><button class="property-button" onclick="location.href='<?= Url::toRoute(['/property/basicdetails']) ?>'">Create property</button></div>

</main>
</body>

</html>