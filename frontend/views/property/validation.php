<?php
use yii\helpers\Html;
?>


<div class="$content">
    <div class="container-fluid">


        <div class="ValidationBorder1">
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
                        <div>   <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i><?= isset($property->location) ? $property->location->name : "" ?>, <?= isset($property->destination) ? $property->destination->name : "" ?>, <?= isset($property->country) ? $property->country->name : "" ?></small>
                            </span></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card-title-middle">
          Complete  Property profile to continue further  <img src="images/question-mark-circle-1.svg">
        </div>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', ['result' => $basic_details, 'name' => 'Basic details', 'action' => 'basicdetails', 'id' => $property->id ]);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', [ 'result' => $address_location,  'name' => 'Address and location', 'action' => 'addressandlocation', 'id' => $property->id ]);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', ['result' => $legal_tax_documentation,  'name' => 'Legal and Tax data', 'action' => 'legaltax', 'id' => $property->id ]);
        ?>        

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_terms', ['result' => $terms,  'name' => 'Terms and Conditions', 'action' => 'termsandconditions', 'id' => $property->id ]);
        ?>

        <?php
            echo Yii::$app->controller->renderPartial('_validation_result_block', ['result' => $property->errors,  'name' => 'Operational details', 'action' => 'createcategories', 'id' => $property->id ]);
        ?>

        <div style="height: 30px">

        </div>

    </div>
</div>