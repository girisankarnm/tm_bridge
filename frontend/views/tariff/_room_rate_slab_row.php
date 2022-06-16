<?php 
if ($slab != NULL) {
?>
    <tr>
    <td class="tdtextpad"><span class="spanTextTable"><?= $slab->number == 0 ? "Rack rate" : "Slab ".$slab->number?></span></td>
    <td>
    <input type="text" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= $slab->room_rate ?>" required/>
    </td>
    <td>
    <input type="text" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= $slab->adult_with_extra_bed ?>"/>
    </td>
    <td>
    <input type="text" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= $slab->child_with_extra_bed ?>"/>
    </td>
    <td>
    <input type="text" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= $slab->child_sharing_bed ?>" />
    </td>
    <td>
    <input type="text" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" value="<?= $slab->single_occupancy ?>"/>
    </td>
    <td>
        <?php if ($slab->number > 1) { ?>
        <button id="remr" onclick="deleteSlabRow(this, <?= $nationality_id ?>); return true;" style="border-radius: 50%"><i class="fa fa-minus"></i></button>
        <?php } ?>    
    </td>
    </tr>
<?php 
}
else {
?>
    <tr>
    <td>Rack Rate</td>
    <td>
    <input type="text" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" required/>
    </td>
    <td>
    <input type="text" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required/>
    </td>
    <td>
    <input type="text" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required/>
    </td>
    <td>
    <input type="text" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required />
    </td>
    <td>
    <input type="text" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" required/>
    </td>
    <td></td>              
    </tr>

    <tr>
    <td>Slab 1</td>
    <td>
    <input type="text" name="room_rate_<?= $nationality_id; ?>[]" class="inputTextroomtable" required/>
    </td>
    <td>
    <input type="text" name="adult_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required />
    </td>
    <td>
    <input type="text" name="child_with_extra_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required />
    </td>
    <td>
    <input type="text" name="child_sharing_bed_<?= $nationality_id; ?>[]" class="inputTextroomtable" required />
    </td>
    <td>
    <input type="text" name="single_occupancy_<?= $nationality_id; ?>[]" class="inputTextroomtable" required />
    </td>
    <td></td>
    </tr>
<?php 
}
?>