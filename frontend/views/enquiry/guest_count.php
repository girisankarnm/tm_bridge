<?php
use yii\bootstrap4\ActiveForm;
use rmrevin\yii\fontawesome\FA;
frontend\assets\CommonAsset::register($this);
rmrevin\yii\fontawesome\AssetBundle::register($this);
$this->registerJsFile('/js/enquiry/guest_count.js');
?>

<link rel="stylesheet" type="text/css" href="/css/tour-min-1.css" />

<div class="content">
    <div class="container-fluid">
        <div class="card-title">
            Enquiry
        </div>
        <div class="tariffBorder" style="margin-top: 20px;">
        <div class="tab">
            <a href="<?= \yii\helpers\Url::to(['/enquiry/basicdetails', 'id' => $enquiry->id]) ?>"> <button class="tablinks btnunder" onclick="openCity(event, 'London')" >Basic Details</button></a>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/contactdetails', 'id' => $enquiry->id]) ?>">   <button id="contactBtn" class="tablinks" onclick="openCity(event, 'Paris')">Contact Details</button></a>
            <div style="display: inline">   <a href="<?= \yii\helpers\Url::to(['/enquiry/guestcount', 'id' => $enquiry->id]) ?>">  <button class="selectedButton" onclick="openCity(event, 'London')" >Guest Count</button></a> <hr class="new5" >
            </div>
            <a href="<?= \yii\helpers\Url::to(['/enquiry/accommodation', 'id' => $enquiry->id]) ?>"><button class="tablinks" onclick="openCity(event, 'Tokyo')">Accommodation</button></a>
        </div>
        <hr class="sidebar-divider">
        <?php $form = ActiveForm::begin(['id' => 'form_guest_count','enableClientValidation' => true, 'method' => 'post','action' => ['enquiry/saveguestcount']]) ?>
        <div style="display: inline">
            <?= $form->field($enquiry, 'guest_count_same_on_all_days')->inline()->radioList([1 => 'Same guest count on all days', 0 => 'Different guest count combination'],['class' => 'radiobtn guestradioText '])->label(false); ?>
        </div>
        <input type="hidden" id="enquiry_id" name="enquiry_id" value=<?php echo  $enquiry->id; ?> ?>
        <input type="hidden" id="guest_count_data" name="guest_count_data" value="" >
        <input type="hidden" id="child_breakup" name="child_breakup" value="" >
        <input type="hidden" id="child_age_breakup" name="child_age_breakup" value='<?= $age_breakup ?>' >

        <!-- start guest_count_same  -->
        <?php
        $i = 1;
        ?>
        <div id="guest_count_same" style="display: <?= $enquiry->guest_count_same_on_all_days == 1 ? "block;" : "none;"; ?>" >
            <div class="row ">
                <table id="guest_count_same_table " class="table3enquiryclass" >
                    <tr  class="thtableguestcount " >
                        <th class="paxcount"  >Pax Count Plan </th>
                        <th class="Adults" >Adults</th>
                        <th   class="Adults">Children</th>
                        <th class="plusb"> </th>
                        <th class="totalguest" >Total Guest</th>
                        <th class="chilage" >Child Age Validation </th>
                        <th class="fijo"> </th>
                    </tr>
                    <?php
                    //if already added guest details
                    $adult_value = 0;
                    $children_value = 0;
                    if( $enquiry->guest_count_same_on_all_days == 1 ) {
                        $adult_value = (isset($enquiry->enquiryGuestCounts[0])) ? $enquiry->enquiryGuestCounts[0]->adults : 0;
                        $children_value = (isset($enquiry->enquiryGuestCounts[0])) ? $enquiry->enquiryGuestCounts[0]->children : 0;
                    }
                    ?>
                    <tr>
                        <td > Plan </td>
                        <td  class="Adults">
                            <input type="hidden" id="plan_uid" name="plan_uid[]" value="0" >
                            <input uid="0" name="adults[]" id="adults_0" type="number" class="inputTextClass enquiryTable"  onchange="updateGuestCountTotal(this)" value = "<?= $adult_value; ?>" >
                        </td>
                        <td  class="Adults">  <input uid="0" name="children[]" id="children_0" type="number" class="inputTextClass enquiryTable"  onchange="updateGuestCountTotal(this)" value = "<?= $children_value; ?>" ></td>
                        <td class="plusb">
                            <button type="button" class="btn btn-sm btn-outline-primary childplus plusbutton  child-breakup1 " onclick="showChildBreakupModal(this)" data-toggle="modal" unique_plan_id="0">
                                <img s src="images/plus-button.svg"  aria-hidden="true"></img></button>
                        </td>
                        <td class="letterpad">
                            <span id="total_guests_0" style="color: red;font-size: 12px;display: inline" id="span_child_validation_0"><?= $adult_value + $children_value ?> </span>
                        </td>

                        <td class="letterpad">
                            <span id="span_child_validation_0" style="color: red;font-size: 12px;display: inline">NA</span>
                        </td>
                    </tr>
                    <tfoot >
<!--                    <tr style="background-color: #ffffff">-->
<!--                        <td class="addmoreguestcount" >                    <button class="btnAdd" style="border-radius: 50%; margin-left: 30px;margin-bottom: 15px;height: 23px;width: 23px;" id="add_new_plan_row"><i  class="fa fa-plus" aria-hidden="true"></i></button>-->
<!--                            <span style="padding-left: 3px">Add more </span></td>-->
<!---->
<!--                    </tr>-->
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- end guest_count_same  -->

        <!-- start guest_count_differnt  -->
        <div id="guest_count_differnt" style="display: <?= $enquiry->guest_count_same_on_all_days == 0 ? "block;" : "none;"; ?>">
            <div class="row">
                <table id="guest_count_differnt_table" class="table3enquiryclass " >
                    <tr  class="thtableguestcount " >
                        <th class="paxcount"  >Pax Count Plan </th>
                        <th class="Adults" >Adults</th>
                        <th   class="Adults">Children</th>
                        <th class="plusb"> </th>
                        <th class="totalguest" >Total Guest</th>
                        <th class="chilage" >Child Age Validation </th>
                        <th class="fijo"> </th>
                    </tr>

                    <?php
                    //if already added guest details
                    if ( isset($enquiry->enquiryGuestCounts) &&
                        count($enquiry->enquiryGuestCounts) > 0 &&
                        ($enquiry->guest_count_same_on_all_days == 0))
                    {
                        $i = 1;
                        foreach ($enquiry->enquiryGuestCounts as $guest_count) { ?>
                            <tr>
                                <td>  Plan <?= $i ?></td>
                                <td  class="Adults">
                                    <input type="hidden" id="plan_uid" name="plan_uid[]" value="<?= $i ?>" >
                                    <input name="adults[]"  id="adults_<?=$i ?>" type="number" onchange="updateGuestCountTotal(this)" value="<?= $guest_count->adults ?>">
                                </td>
                                <td class="Adults">  <input uid="<?=$i ?>" name="children[]" id="children_<?=$i ?>" type="number" class="inputTextClass enquiryTable"  onchange="updateGuestCountTotal(this)" value="<?= $guest_count->children ?>"></td>
                                <td class="plusb">
                                    <button type="button" class="btn btn-sm btn-outline-primary childplus plusbutton  child-breakup1 " onclick="showChildBreakupModal(this)" data-toggle="modal" unique_plan_id="<?= $i ?>">
                                        <img s src="images/plus-button.svg"  aria-hidden="true"></img></button>
                                </td>
                                <td class="letterpad">
                                    <span id="total_guests_<?=$i ?>" style="color: red;font-size: 12px;display: inline" id="span_child_validation_"<?=$i ?>> NA </span>
                                </td>
                                <td class="letterpad">
                                    <span id="span_child_validation_<?=$i ?>" style="color: red;font-size: 12px;display: inline">Age Validated</span>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                    }
                    else
                    {
                        $i = 3; //use for unique plan id
                        ?>
                        <tr>
                            <td>  Plan 1</td>
                            <td>
                                <input type="hidden" id="plan_uid" name="plan_uid[]" value="1" >
                                <input uid="1" name="adults[]" id="adults_1" type="number" class="inputTextClass enquiryTable" onchange="updateGuestCountTotal(this)" >
                            </td>
                            <td>  <input uid="1" name="children[]" id="children_1" type="number" class="inputTextClass enquiryTable" onchange="updateGuestCountTotal(this)" ></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-primary childplus plusbutton  child-breakup1 " onclick="showChildBreakupModal(this)" data-toggle="modal" unique_plan_id="1">
                                    <img s src="images/plus-button.svg"  aria-hidden="true"></img></button>
                            </td>
                            <td class="letterpad">
                                <span id="total_guests_1" style="color: red;font-size: 12px;display: inline" id="span_child_validation_0"> NA </span>
                            </td>
                            <td class="letterpad" >
                                <span id="span_child_validation_1" style="color: red;font-size: 12px;display: inline">Age Validated</span>
                            </td>
                        </tr>
                        <tr >
                            <td>  Plan 2</td>
                            <td>
                                <input type="hidden" id="plan_uid" name="plan_uid[]" value="2" >
                                <input uid="2" name="adults[]" id="adults_2" type="number" class="inputTextClass enquiryTable"  onchange="updateGuestCountTotal(this)">
                            </td>
                            <td>
                                <input uid="2" name="children[]" id="children_2" type="number" class="inputTextClass enquiryTable" onchange="updateGuestCountTotal(this)" ></td>

                            <td>
                                <button  type="button" style="border-radius: 50%;" class="btn btn-sm btn-outline-primary childplus plusbutton child-breakup1" onclick="showChildBreakupModal(this)" data-toggle="modal" unique_plan_id="2">
                                    <img s src="images/plus-button.svg"  aria-hidden="true"></img></button>
                            </td>
                            <td class="letterpad">
                                <span id="total_guests_2" style="color: red;font-size: 12px;   "> NA </span>
                            </td>
                            <td class="letterpad">
                                <span id="span_child_validation_2" style="color: red;font-size: 12px;display: inline">Age Validated</span>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tfoot >
                    <tr style="height: 15px">

                    </tr>
                    <tr style="background-color: #ffffff">
                        <td class="addmoreguestcount" >                    <button class="btnAdd" type="button" style="border-radius: 50%; margin-left: 30px;margin-bottom: 15px;height: 23px;width: 23px;" id="add_new_plan_row"><img src="images/plus-add.svg" style="padding: 4px"></button>
                            <span style="padding-left: 3px">Add more </span></td>

                    </tr>
                    </tfoot>

                </table>
                <div>

                </div>
            </div>
        </div>
        <!-- end start guest_count_differnt  -->

        <input type="hidden" id="current_unique_plan_id" name="current_unique_plan_id" value="<?= $i; ?>" ?>
        <div class="row" style="margin-left: 4px;margin-bottom: 12px;">
            <div class="savedivstyle">
                <button id="save_guest_count" type="text" class="buttonSaveenquiry"> Save </button>
            </div>
        </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<div class="modal fade" id="childBreakupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="childBreakupModalLabel">Enter age and count</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="plan_id" name="planID" value="0">
                <table id="age_breakup_table" class="guestcountpopup">
                    <thead class="text-center">
                    <th>Age (Years)</th>
                    <th>Count</th>
                    <th></th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!--                display validation error-->
                <div id="ageBreakupValidation" style="color: red; font-size: 14px; width: 200px; left: 25%; position: relative"></div>
                <div><button type="button" id="add_age_count_row" class="btn btn-sm bg-success" style="border-radius: 50%;margin-top: 7px">
                        <i class="fa fa-plus"></i></button></div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close_child_breakup"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="apply_child_breakup" class="btn btn-primary">Apply</button>
            </div>
        </div>
    </div>
</div>
