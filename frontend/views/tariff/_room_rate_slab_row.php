<?php 
if ($slab != NULL) {
?>
    <tr>
    <td class="tdtextpad Adults"><span ><?= $slab->number == 0 ? "Rack rate" : "Slab ".$slab->number?></span></td>
    <td  class="Adults">
    <input type="number" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= $slab->room_rate ?>" required id="room_rate_<?= $nationality_id; ?>_<?= ($i) ?>"/>
    </td>
    <td class="Adults">
    <input type="number" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->number_of_extra_beds) > 0 ? $slab->adult_with_extra_bed : "" ?>" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No EBA"' ?> id="adult_with_extra_bed_<?= $nationality_id; ?>_<?= ($i) ?>" />
    </td>
    <td class="Adults">
    <input type="number" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->number_of_extra_beds) > 0 ? $slab->child_with_extra_bed : "" ?>" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No CWB"' ?>  id="child_with_extra_bed_<?= $nationality_id; ?>_<?= ($i) ?>" />
    </td>
    <td class="Adults">
    <input type="number" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->number_of_kids_on_sharing) > 0 ? $slab->child_sharing_bed : "" ?>" <?= ($room->number_of_kids_on_sharing) > 0 ? 'required' : 'disabled placeholder="No CNB"' ?> id="child_sharing_bed_<?= $nationality_id; ?>_<?= ($i) ?>" />
    </td>    
    <td class="Adults">
    <input type="number" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= ($room->same_tariff_for_single_occupancy != 1) ? $slab->single_occupancy : "" ?>" <?= ($room->same_tariff_for_single_occupancy != 1)   ? 'required' : 'disabled placeholder="No SGL"' ?> id="single_occupancy_<?= $nationality_id; ?>_<?= ($i) ?>" />
    </td>    

    </tr>
<?php 
}
else {
?>
    <tr>
    <td>Rack Rate</td>
    <td class="Adults">
    <input type="number" column="room_rate" slab_number="0" onblur="autofill(this)" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" required id="room_rate_<?= $nationality_id; ?>_0" room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>"  />
    </td>
    <td class="Adults">
    <input type="number" column="adult_with_extra_bed" slab_number="0" onblur="autofill(this)" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No EBA"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>" />
    </td>
    <td class="Adults">
    <input type="number" column="child_with_extra_bed" slab_number="0" onblur="autofill(this)" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No CWB"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>" />
    </td>
    <td class="Adults">
    <input type="number" column="child_sharing_bed" slab_number="0" onblur="autofill(this)" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->number_of_kids_on_sharing) > 0 ? 'required' : 'disabled placeholder="No CNB"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>" />
    </td>    
    <td class="Adults">
    <input type="number" column="single_occupancy" slab_number="0" onblur="autofill(this)" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" <?= ($room->same_tariff_for_single_occupancy != 1)   ? 'required' : 'disabled placeholder="No SGL"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>"/>
    </td>    

    </tr>

    <?php 
    $i = 0;
    for ($i= 0; $i < 5; $i++) { ?>
        <tr>
        <td>Slab <?= $i + 1 ?></td>
        <td class="Adults">
        <input type="number" column="room_rate" slab_number="<?= $i + 1 ?>" onblur="autofill(this)" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" required id="room_rate_<?= $nationality_id; ?>_<?= ($i + 1) ?>" room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>" />
        </td>
        <td class="Adults">
        <input type="number" column="adult_with_extra_bed" slab_number="<?= $i + 1 ?>" onblur="autofill(this)" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required id="adult_with_extra_bed_<?= $nationality_id; ?>_<?= ($i + 1) ?>"  <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No EBA"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>"/>
        </td>
        <td class="Adults">
        <input type="number" column="child_with_extra_bed" slab_number="<?= $i + 1 ?>" onblur="autofill(this)" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required id="child_with_extra_bed_<?= $nationality_id; ?>_<?= ($i + 1) ?>" <?= ($room->number_of_extra_beds) > 0 ? 'required' : 'disabled placeholder="No CWB"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>"  />
        </td>
        <td class="Adults">
        <input type="number" column="child_sharing_bed" slab_number="<?= $i + 1 ?>" onblur="autofill(this)" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required id="child_sharing_bed_<?= $nationality_id; ?>_<?= ($i + 1) ?>"  <?= ($room->number_of_kids_on_sharing) > 0 ? 'required' : 'disabled placeholder="No CNB"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>" />
        </td>    
        <td class="Adults">
        <input type="number" column="single_occupancy" slab_number="<?= $i + 1 ?>" onblur="autofill(this)" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" required id="single_occupancy_<?= $nationality_id; ?>_<?= ($i + 1) ?>" <?= ($room->same_tariff_for_single_occupancy != 1)   ? 'required' : 'disabled placeholder="No SGL"' ?> room_id="<?= $room->id ?>" nationality_id="<?= $nationality_id ?>" />
        </td>

        </tr>
    <?php 
    }
    ?>    
<?php 
}
?>