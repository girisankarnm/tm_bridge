<?php 
if ($slab != NULL) {
?>
    <tr>
    <td class="tdtextpad"><span class="spanTextTable"><?= $slab->number == 0 ? "Rack rate" : "Slab ".$slab->number?></span></td>
    <td  class="Adults">
    <input type="text" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= $slab->room_rate ?>" required/>
    </td>
    <td class="Adults">
    <input type="text" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->number_of_extra_beds) > 0 ? $slab->adult_with_extra_bed : "" ?>" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No EBA"' ?> />
    </td>
    <td class="Adults">
    <input type="text" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->number_of_extra_beds) > 0 ? $slab->child_with_extra_bed : "" ?>" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No CWB"' ?> />
    </td>
    <td class="Adults">
    <input type="text" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->number_of_kids_on_sharing) > 0 ? $slab->child_sharing_bed : "" ?>" <?= ($room->number_of_kids_on_sharing) > 0 ? 'required' : 'disabled placeholder="No CNB"' ?> />
    </td>
    
    <td class="Adults">
    <input type="text" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->same_tariff_for_single_occupancy != 1) ? $slab->single_occupancy : "" ?>" <?= ($room->same_tariff_for_single_occupancy != 1)   ? 'required' : 'disabled placeholder="No SGL"' ?> />
    </td>
    
    <td class="Adults">
        <?php if ($slab->number > 1) { ?>
            <button id="remr" onclick="deleteSlabRow(this,<?= $nationality_id; ?>); return true;" style="border-radius: 50%;border: 0px;background-color: #f9f9f9"><img src="images/minus.svg" alt="" ></button>
        <?php } ?>    
    </td>
    </tr>
<?php 
}
else {
?>
    <tr>
    <td>Rack Rate</td>
    <td class="Adults">
    <input type="text" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" required/>
    </td>
    <td class="Adults">
    <input type="text" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No EBA"' ?>/>
    </td>
    <td class="Adults">
    <input type="text" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No CWB"' ?>/>
    </td>
    <td class="Adults">
    <input type="text" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_kids_on_sharing) > 0 ? 'required' : 'disabled placeholder="No CNB"' ?> />
    </td>
    
    <td class="Adults">
    <input type="text" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->same_tariff_for_single_occupancy != 1)   ? 'required' : 'disabled placeholder="No SGL"' ?>/>
    </td>
    
    <td></td>              
    </tr>

    <tr>
    <td>Slab 1</td>
    <td class="Adults">
    <input type="text" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" required/>
    </td>
    <td class="Adults">
    <input type="text" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No EBA"' ?> />
    </td>
    <td class="Adults">
    <input type="text" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No CWB"' ?> />
    </td>
    <td class="Adults">
    <input type="text" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_kids_on_sharing) > 0 ? 'required' : 'disabled placeholder="No CNB"' ?> />
    </td>
    
    <td class="Adults">
    <input type="text" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->same_tariff_for_single_occupancy != 1)   ? 'required' : 'disabled placeholder="No SGL"' ?> />
    </td>
    
    <td></td>
    </tr>    
<?php 
}
?>