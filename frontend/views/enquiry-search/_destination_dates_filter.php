<div class="accordion" id="accordionExample">
    <div class="card" style="margin-right: 25px;margin-left: 17px">
        <h2 class="mb-0" style="background-color:#fff;box-shadow: 0 0 0 0 #FFFFFF">
            <button class="btn btn-block text-left" type="button" onclick="functionchange(this);" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: #586ADA;">
                <strong>   Destination Dates for <?=$property_destination_name?> </strong>
                <div class="float-right">
                    <i class="fas fa-angle-down rotate-icon"></i>
                </div>
            </button>
        </h2>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="row" >
                <div class="row " style="margin-left: 15px;margin-top: 15px;padding: 6px; display: flex;width: 870px;" >
                    <?php foreach ($enquiryAccommodation as $key => $enquiryAccommodationDate) : ?>
                    <div>
                        <input value="<?= $enquiryAccommodationDate['id'] ?>" type="checkbox" name="accommodation_id[]" id="destination-<?=$key?>" class="vertical-align-middle margin-left-check-box" <?php if($enquiryAccommodationDate->status ==1): ?>checked="checked" <?php else : ?> disabled = "disabled" <?php endif; ?> >
                        <label  style="margin: 8px" for="destination-<?=$key?>" class="pointerclass"><?= date('d M | y ,l', strtotime($enquiryAccommodationDate->day)) ?></label>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </div>
</div>
