
<div class="content">

<div class="container-fluid" >
    <div class="card-title">My properties</div>
    <?php
    $i = 1;
    foreach ($properties as $property) {
    ?>
        <div class="card property-card-list shadow-div" >

            <div id="mainHeding-location-listing"style="height: 43px">
                <div > <img class="image-property img-property" src="uploads/<?php echo $property->image ?>" alt="Matrix"></div>
                <div >
                    <div id="column-2-listing">
                    <div>

                      <span class="hotelHeading" > <span class="cut-text" style="display: inline"><?= $property->name?><span/> <img class="f-star" src="images/Star-1.svg" alt="Matrix">
                       <img class="f-star" style="padding-left: 2px"  src="images/Star-1.svg" alt="Matrix">
                       <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                       <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                       <img  class="f-star" style="padding-left: 2px" src="images/Star-1.svg" alt="Matrix">
                       </span>

                    </div>
                     <div> <small  class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> <?= $property->location->name?>, <?= $property->destination->name?>, <?= $property->country->name?></small></div>
                    </div>
                </div>
                <div >
                    <div id="column-3links-listing">

                        <div id="link-properties-notification">
                          <div>  <span class="icon-button__badge">2</span></div>
                          <div>  <span class="icon-button__badge">2</span></div>
                          <div>  <span class="icon-button__badge">2</span></div>
                          <div>  <span class="icon-button__badge">2</span></div>
                          <div>  <span class="icon-button__badge">2</span></div>

                        </div>
                        <div id="link-properties">

                            <div>  <img class="margin-left-right-spacing" src="images/message-1.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/note-1.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/tick-properties.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/blocking-icon.svg"></div>
                            <div>  <img class="margin-left-right-spacing" src="images/booking-icon.svg"></div>

                         </div>
                         <div id="link-properties-label">
                            <div><span class="spanText-size">messages</span> </div>
                             <div><span class="spanText-size" >srr</span> </div>
                               <div><span class="spanText-size">Availability</span> </div>
                             <div><span class="spanText-size">blocking</span> </div>
                             <div><span class="spanText-size">booking</span> </div>

                         </div>
                   </div>
                        <div>
                        </div>
                    </div>


                  <div >


                      <div id="column-4links-listing">
                          <div id="link-properties-action">
                              <div>  <a href="#"> <img class="margin-left-right-spacing dropbtn-edit" onclick="myFunctionEdit(<?=$i?>)" src="images/edit-details.svg"></a>

                                  <div id="myDropdownEdit<?=$i?>" class="dropdown-content-edit" style="height: 120px; background-color: #586ADA; margin-left: -90px; margin-top: 10px;">
                                      <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' => $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white">Edit Basic Details</span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/property/rules', 'id' =>  $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Edit Operational Details</span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/tariff/home', 'id' =>  $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Edit tariff</span></a>
                                  </div>

                              </div>
                              <div> <img class="margin-left-right-spacing dropbtn-basic"  onclick="myFunctionBasic(<?=$i?>)"  src="images/basic-details.svg" ></a>
                                  <div id="myDropdown-basic<?=$i?>" class="dropdown-content-basic-details" style="height: 120px; background-color: #586ADA; margin-left: -67px; margin-top: 10px;">
                                      <a href="<?= \yii\helpers\Url::to(['/slab/home', 'id' =>  $property->id]) ?>" class="dro"> <img  src="images/edit-sub-menue-icon.svg"  style="margin-right: 2px;" > <span style="color: white">  Assign Slab </span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' =>  $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Campaign </span></a>
                                  </div>
                              </div>


                              <div>  <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' =>  $property->id]) ?>"> <img class="margin-left-right-spacing "  src="images/eye-view-icon.svg"></a></div>
                              <div>  <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' =>  $property->id]) ?>"> <img class="margin-left-right-spacing" src="images/delete-1-icon.svg"></a></div>


                          </div>

                      </div>

                   </div>
           </div>




            </div>
        <?php
        $i++;
    } ?>
</div>

</div>

<script>

 function myFunctionBasic(id) {
    document.getElementById("myDropdown-basic"+id).classList.toggle("show-content");
}
function myFunctionEdit(id) {
    document.getElementById("myDropdownEdit"+id).classList.toggle("show-content");
}

window.onclick = function(event) {

    if (!event.target.matches('.dropbtn-edit')) {
        var dropdowns = document.getElementsByClassName("dropdown-content-edit");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show-content')) {
                openDropdown.classList.remove('show-content');
            }
        }
    }
    if (!event.target.matches('.dropbtn-basic')) {
        var dropdownedit = document.getElementsByClassName("dropdown-content-basic-details");
        var i;
        for (i = 0; i < dropdownedit.length; i++) {
            var openDropdownedit = dropdownedit[i];
            if (openDropdownedit.classList.contains('show-content')) {
                openDropdownedit.classList.remove('show-content');
            }
        }
    }

}

</script>

</div>