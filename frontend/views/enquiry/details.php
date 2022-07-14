<?php
$this->title = '';
frontend\assets\CommonAsset::register($this);
frontend\assets\DataTableAsset::register($this);
?>
<style>
    table thead tr {
        color: #FFFFFF;
        background-color: var(--secondary-color);
        /*height: 45px;*/
        height: 31px;
    }
    .card-header{
        background-color: ghostwhite;
    }
</style>
<script>
    $(document).ready(function() {
        $('#accomodation').DataTable();
        $('#detail_table').DataTable();
    } );
</script>
<div class="card  " style="background-color: #ffffff">
    <div class="card-header"><h5>Enquiry Details</h5></div>
    <div class="card-body text-dark">
        <div class="row">
            <div class="col">
                <!--                <div class="row"> <h5>Enquiry Details</h5></div>-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"><b>Guest Name</b></div>
                            <div class="col-md-6"> <?php echo $enquiry->guest_name; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Nationality</b></div>
                            <div class="col-md-6"> <?php echo $enquiry->nationality->name; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Tour Start Date</b></div>
                            <div class="col-md-6"> <?php
                                echo date('D, d-M-Y',strtotime($enquiry->tour_start_date)); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Tour Duration</b></div>
                            <div class="col-md-6"> <?php echo $enquiry->tour_duration; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Tour End Date</b></div>
                            <div class="col-md-6">
                                <?php
                                $date = strtotime($enquiry->tour_start_date);
                                echo date('D, d-M-Y', strtotime("+$enquiry->tour_duration day", $date)); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"><b>Enquiry Number</b> </div>
                            <div class="col-md-6"> <?php echo $enquiry->id; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Email 1</b></div>
                            <div class="col-md-6"> <?php echo $enquiry->email1; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Email 2</b></div>
                            <div class="col-md-6"> <?php echo $enquiry->email2; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Contact 1</b></div>
                            <div class="col-md-6"> <?php echo $enquiry->contact1; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><b>Contact 2</b></div>
                            <div class="col-md-6"> <?php echo $enquiry->contact2; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card " style="background-color: #ffffff">
    <div class="card-body">

        <div class="row">
            <div class="col">
                <div class="card-header"><h5 >Accommodation Details</h5></div>
                <br>
<!--                <div class="row"> <h5>Accommodation Details</h5></div>-->
                <table id="accomodation" class="table-sm table" width="100%">
                    <thead class="text-center">
                    <th>Day | Date</th>
                    <th>Accommodation Status</th>
                    <th>Destination</th>
                    <th>Meal Plan </th>
                    </thead>
                    <tbody>
                    <?php
                    $count = 0;
                    foreach ($accommodation_details as $accommodation){?>
                        <tr class="text-center">
                            <td>  <?php
                                $count = $count + 1;
                                echo 'Day '. $count .' | '. date('D, d-M-Y',strtotime($accommodation->day)); ?>
                            </td>
                            <td>
                                <?php if ($accommodation->status == 1) {?>
                                    Required
                                <?php }?>
                                <?php if ($accommodation->status == 0) {?>
                                    Not Required
                                <?php }?>
                            </td>
                            <td>  <?php echo $accommodation->destination->name; ?></td>
                            <td>  <?php echo $accommodation->mealPlan->name; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div><br>
        <div class="row">
            <div class="col">
                <div class="card-header"><h5 >Guest Count</h5></div>
                <br>
<!--                <div class="row"><h5>Guest Count</h5></div>-->
                <?php if ($enquiry->guest_count_same_on_all_days == 1) {?>
                    <table id="detail_table" class="table-sm table " width="100%">
                        <thead class="text-center">
                        <th>Date</th>
                        <th>Adult</th>
                        <th>Child</th>
                        <th>Total</th>
                        <th>Child Age Breakup</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($accommodation_details as $accommodation){?>
                            <tr class="text-center">
                                <!--                        <td> --><?php //echo $accommodation->day; ?><!--</td>-->
                                <td>
                                    <?php echo date('D, d-M-Y',strtotime($accommodation->day)); ?>
                                </td>
                                <td> <?php echo $accommodation->guestCountPlan->adults; ?></td>
                                <td> <?php echo $accommodation->guestCountPlan->children; ?></td>
                                <td> <?php echo $accommodation->guestCountPlan->adults +  $accommodation->guestCountPlan->children; ?></td>
                                <td>
                                    <?php if ( $accommodation->guestCountPlan->children > 0) {?>
                                                    <?php foreach ($accommodation->guestCountPlan->enquiryGuestCountChildAges as $age_breakup) {?>
<!--                                            --><?php //echo $age_breakup->count . ' x ' . $age_breakup->age . 'yr,  '; ?>
                                            <?php echo $age_breakup->age . 'yr x ' . $age_breakup->count.','; ?>
                                                    <?php } ?>
                                    <?php }?>
                                </td>

                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>

                <?php if ($enquiry->guest_count_same_on_all_days == 0) {?>
                    <table id="detail_table" class="table-sm table" width="100%">
                        <thead class="text-center">
                        <th>Date</th>
                        <th>Adult</th>
                        <th>Child</th>
                        <th>Total</th>
                        <th>Child Age Breakup</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($accommodation_details as $accommodation){?>
                            <tr class="text-center">
                                <td>
                                    <?php echo date('D, d-M-Y',strtotime($accommodation->day)); ?>
                                </td>
                                <td> <?php echo $accommodation->guestCountPlan->adults; ?></td>
                                <td> <?php echo $accommodation->guestCountPlan->children; ?></td>
                                <td> <?php echo $accommodation->guestCountPlan->adults +  $accommodation->guestCountPlan->children; ?></td>
                                <td>
                                    <?php if ( $accommodation->guestCountPlan->children > 0) {?>
                                                        <?php foreach ($accommodation->guestCountPlan->enquiryGuestCountChildAges as $age_breakup) {?>
                                                            <?php echo $age_breakup->age . 'yr x ' . $age_breakup->count.','; ?>
                                                        <?php } ?>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php }?>
            </div>

        </div>
    </div>
</div>
