<?php
use Carbon\Carbon;
?>

<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
    <div class="card matherdaterangecard" >
        <div style="margin-bottom: 18px; background-color: ">

            <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px;width: 270px;">
                <div style="width: 50px;"><i  class="fa fa-check-circle w3-large tickiconmotherdaterange item" aria-hidden="true"></i></div>
                    <div style="width: 84px;"><h6 class="motherdaterange-H6 " style="padding-top: 7px;margin-right: 8px;width: ">From Date</h6></div>
                <div style=" width: 10px;"><h6 class="h6class"><hr class="new1 hrtopmargin"> </h6></div>
                <div style=" width: 10px;"> </h6></div>
                <div style="width: 80px;"><h6 class="motherdaterange-H6 h6class " > To Date </h6></div>
                <div style="width: 10px"><h6 class="motherdaterange-H6 h7class" ></h6></div>
                <div style="width: 50px" ></div>
                <div style="width: 94px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->from_date)->format('d M Y');  ?> </h6></div>
                <div style="width:10px;"></div>
                <div style="width: 90px;"><h6 class="motherdaterange-H6 h7class" > <?= Carbon::parse($range->to_date)->format('d M Y'); ?> </h6></div>
            </div>

            <div class="flex-containerDate " style="padding-left: 12px;padding-top: 12px;padding-right: 12px; margin-left: 28px;">
                <div style="width: 18px"></div>
                <div><h6  class="motherdaterange-H6" style="padding-top: 0px; font-size: 10px; line-height: 0;"><i class="fa fa-user" style="color: #545b62;margin-right: 4px" aria-hidden="true"></i>Arjun Raj  </h6></div>
                <div style="width: 18px"></div>
                <div><h6 class="motherdaterange-H6 h7class" > <i style="color: #545b62;margin-right: 4px" class="fa fa-calendar" aria-hidden="true"></i> december 25 2022 </h6></div>
                <div style="width: 18px"></div>
                <div><h6 class="motherdaterange-H6 h9class" ><i style="color: #545b62;margin-right: 4px"  class="fa fa-check-circle w3-large " aria-hidden="true"></i>Not Published  </h6></div>
                <div style="margin-left: 45%">
                    <a href="<?= \yii\helpers\Url::to(['/tariff/nesting', 'id' =>  $property->id, 'mother_range_id' => $range->id, 'tariff' => 1]) ?>"> Nesting </a>
                    <div style="margin-right: 10px;padding-bottom: 10px"> <a href="#"> <i  class="fas fa-edit editfa"></i> </a>  <a href="#"> <i  class="fa fa-trash editfa" aria-hidden="true"></i></a> <BUTTON type="button" class="buttonSaveroomrate"  data-toggle="modal" data-target="#logoutModal">Nesting  </BUTTON></div>
                </div>
            </div>
        </div>
    </div>
</div>