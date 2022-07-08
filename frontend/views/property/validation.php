<?php
use yii\helpers\Html;
?>


<div class="$content">
    <div class="container-fluid">
        <div class="card-title">
            Property validation Result
        </div>

        <div class="tariffBorder1" style="line-height: 0px; height:80px;">
            <div id="mainHeding-location"style="height: 43px;">
                <div > <img style="width: 34px;height: 34px" src="images/building1.png" alt="Matrix"></div>
                <div >
                    <div id="border-box-location">
                        <div  >
                          <span class="hotelHeading" > <?= $property->name ?> <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                           <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                           <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                           </span>
                        </div>
                        <div>   <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i><?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small>
                            </span></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card-title-middle">
          Complete  Property profile to continue further  <img src="images/question-mark-circle-1.svg">
        </div>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', ['result' => $basic_details, 'name' => 'Basic details']);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', [ 'result' => $address_location,  'name' => 'Address and location']);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', ['result' => $legal_tax_documentation,  'name' => 'Legal and Tax data']);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_terms', ['result' => $terms,  'name' => 'Terms and Conditions']);
        ?>

        <div style="height: 30px">


        </div>

    </div>
</div>