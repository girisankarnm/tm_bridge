<div class="tab-accordion" >
    <div class="tab-content">
        <div class="tab-pane fade active show">
            <div class="accordion" id="accordionExample">
                <div class="card" style="margin-left: 5px">

                    <h2 class="mb-0 accordionbg" style="background-color:#E8E9ED">
                        <button class="btn btn-block text-left" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <strong> <?= $count?>. Nationality - <?= $nationality_name ?> </strong>
                            <input type="hidden" name="nationality[]" value="<?= $nationality_id; ?>">
                            <div class="float-right">
                                <i class="fas fa-angle-down rotate-icon"></i>
                            </div>
                        </button>
                    </h2>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="row roomacord " >
                            <table id="tariff_slab_table_<?= $nationality_id; ?>" class="table2class" >
                                <tr class="thtable" >
                                    <th >Rate slabs</th>
                                    <th >Room rate</th>
                                    <th >Adult with Extra Bed</th>
                                    <th >Child With Extra Bed</th>
                                    <th >Child Sharing Bed</th>
                                    <th >Single Occupancy</th>
                                    <th >Actions</th>
                                </tr>
                                <?php
                                    $slab_count = 0;
                                    if($tariff != NULL && isset($tariff->roomTariffSlabs)) {
                                        $slab_count = count($tariff->roomTariffSlabs);
                                    }
                                    
                                    if($slab_count > 0) {
                                        foreach ($tariff->roomTariffSlabs as $slab) {
                                            echo Yii::$app->controller->renderPartial('_room_rate_slab_row', ['nationality_id' => $nationality_id, 'slab' => $slab]);
                                        }
                                    }
                                    else {
                                        $slab = NULL;
                                        echo Yii::$app->controller->renderPartial('_room_rate_slab_row', ['nationality_id' => $nationality_id, 'slab' => $slab]);
                                    }
                                ?>
                            </table>
                            <div style="float: left;"> <a href="#" onclick="insertSlabRow(<?= $nationality_id; ?>); return true;">Add more slab?</a> </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>