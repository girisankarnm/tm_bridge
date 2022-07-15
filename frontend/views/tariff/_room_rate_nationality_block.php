   <div class="tab-accordion tab-accordiondaterate" >
    <div class="tab-content">
        <div class="tab-pane fade active show">
            <div class="accordion" id="accordionExample<?= $count?>">
                <div class="card border-zero" style="margin-left: 5px">

                    <h2 class="mb-0 <?php if($count == 1):?> accordian-open-bg <?php  else: ?> accordianbg  <?php endif; ?>">
                        <button class="btn btn-block text-left accordianstyle accordion-toggle btn-white-letter" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne<?= $count?>" aria-expanded="false" aria-controls="collapseOne<?= $count?>">
                            <strong> <?= $count?>. Nationality - <?= $nationality_name ?> </strong>
                            <input type="hidden" name="nationality[]" value="<?= $nationality_id; ?>">
                            <div class="float-right">
                                <i class="fas fa-angle-down rotate-icon"></i>
                            </div>
                        </button>
                    </h2>

                    <div id="collapseOne<?= $count?>" class="collapse  <?php if($count == 1):?> show <?php endif; ?>" aria-labelledby="headingOne" data-parent="#accordionExample<?= $count?>">
                        <div class="row roomacord " >
                            <table id="tariff_slab_table_<?= $nationality_id; ?>" class="table3enquiryclass" style="  width: 798px !important;"  >
                                <tr class="thtableguestcount" >
                                    <th class="totalguest"> Rate slabs</th>
                                    <th class="totalguest"> Room rate</th>
                                    <th class="Adultswith"> Adult with Extra Bed</th>
                                    <th class="Adultswith"> Child With Extra Bed</th>
                                    <th class="Adultswith"> Child Sharing Bed</th>
                                    <?php if($room->same_tariff_for_single_occupancy != 1)  { ?>
                                    <th class="Adultswith"> Single Occupancy</th>
                                    <?php } ?>
                                    <th class="Adults"> Actions</th>
                                </tr>
                                <?php
                                    $slab_count = 0;
                                    if($tariff != NULL && isset($tariff->roomTariffSlabs)) {
                                        $slab_count = count($tariff->roomTariffSlabs);
                                    }
                                    
                                    if($slab_count > 0) {
                                        foreach ($tariff->roomTariffSlabs as $slab) {
                                            echo Yii::$app->controller->renderPartial('_room_rate_slab_row', ['nationality_id' => $nationality_id, 'slab' => $slab, 'room' => $room]);
                                        }
                                    }
                                    else {
                                        $slab = NULL;
                                        echo Yii::$app->controller->renderPartial('_room_rate_slab_row', ['nationality_id' => $nationality_id, 'slab' => $slab, 'room' => $room]);
                                    }
                                ?>
                                <tfoot >
                                <tr style="height: 15px">
                                </tr>
                                <tr style="background-color: #ffffff">
                                    <td class="addmoreguestcount" style="width: 200px" >
                                        <button class="btnAdd" type="button" style="border-radius: 50%; margin-left: 30px;margin-bottom: 15px;height: 23px;width: 23px;" id="add_new_plan_row" onclick="insertSlabRow(<?= $nationality_id; ?>, <?= $room->same_tariff_for_single_occupancy ?> ); return true;"><i  class="fa fa-plus" aria-hidden="true"></i></button>
                                        <span style="padding-left: 3px">Add more </span>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>