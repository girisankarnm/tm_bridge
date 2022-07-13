<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="content">

<div class="container-fluid" >
    <div id="title-main">
        <div class="property-title-name">My properties</div>
         <div >  <button   onclick="location.href='<?= Url::toRoute(['/property/basicdetails']) ?>'" id="add-property" type="submit" class="buttonAddproperty" ><img src="images/plus-add.svg"> Property</button></div>

    </div>
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
                     <div> <small class="smallFonts fontsize-location"><i  class="fa fa-map-marker locatiospace" aria-hidden="true"></i> <?= isset($property->location) ? $property->location->name : "" ?>, <?= isset($property->destination) ? $property->destination->name : "" ?>, <?= isset($property->country) ? $property->country->name : "" ?></small></div>
                     <?php
                     $is_validated = $property->validateData();
                     if(!$is_validated) {
                     ?>
                        <div> <span class="badge-properties shadow-div"> <?php echo $is_validated ? "" : Html::a('Profile not completed: View report', ['/property/validate','id'=> $property->id ]) ?></span></div>
                    <?php } ?>

                    </div>
                </div>
                <div >
                    <div id="column-3links-listing">

                        <div id="link-properties-notification">
<!--                          <div>  <span class="icon-button__badge">2</span></div>-->
<!--                          <div>  <span class="icon-button__badge">2</span></div>-->
<!--                          <div>  <span class="icon-button__badge">2</span></div>-->
<!--                          <div>  <span class="icon-button__badge">2</span></div>-->
<!--                          <div>  <span class="icon-button__badge">2</span></div>-->

                        </div>
                        <div id="link-properties">

                            <div><span class="icon-button__badge">2</span> <div class="action-icon">   <img class="margin-left-right-spacing action-icon" src="images/message-1.svg"> <div class="action-text action-icon"><span class="spanText-size">Messages</span> </div></div></div>
                            <div><span class="icon-button__badge">2</span> <div class="action-icon">  <span class="icon-button__badge">2</span> <img class="margin-left-right-spacing action-icon" src="images/note-1.svg">  <div class="action-text"><span class="spanText-size" >SRR</span> </div></div></div>
                            <div><span class="icon-button__badge">2</span><div class="action-icon"> <span class="icon-button__badge">2</span>  <img class="margin-left-right-spacing action-icon" src="images/tick-properties.svg">  <div class="action-text"><span class="spanText-size">Availability</span> </div></div></div>
                            <div><span class="icon-button__badge">2</span><div class="action-icon"> <span class="icon-button__badge">2</span>  <img class="margin-left-right-spacing action-icon" src="images/blocking-icon.svg">  <div class="action-text"><span class="spanText-size">Blocking</span> </div></div></div>
                            <div><span class="icon-button__badge">2</span> <div class="action-icon">  <span class="icon-button__badge">2</span> <img class="margin-left-right-spacing action-icon" src="images/booking-icon.svg"> <div class="action-text"><span class="spanText-size">Booking</span> </div></div></div>

                         </div>
                   </div>
                        <div>
                        </div>
                    </div>


                  <div >


                      <div id="column-4links-listing">
                          <div id="link-properties-action">
                              <div>  <a href="#"> <img class="margin-left-right-spacing dropbtn-edit action-icon" onclick="myFunctionEdit(<?=$i?>)" src="images/edit-details.svg"></a>

                                  <div id="myDropdownEdit<?=$i?>" class="dropdown-content-edit action-icon" style="height: auto; background-color: #586ADA; margin-left: -90px; margin-top: 10px;">
                                      <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' => $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white">Edit Basic Details</span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/property/rules', 'id' =>  $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Edit Operational Details</span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/tariff/home', 'id' =>  $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Edit tariff</span></a>
                                  </div>

                              </div>
                              <div> <img class="margin-left-right-spacing dropbtn-basic action-icon"  onclick="myFunctionBasic(<?=$i?>)"  src="images/basic-details.svg" >
                                  <div id="myDropdown-basic<?=$i?>" class="dropdown-content-basic-details" style="height: auto; background-color: #586ADA; margin-left: -67px; margin-top: 10px;">
                                      <a href="<?= \yii\helpers\Url::to(['/slab/home', 'id' =>  $property->id]) ?>" class="dro"> <img  src="images/edit-sub-menue-icon.svg"  style="margin-right: 2px;" > <span style="color: white">  Assign Slab </span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' =>  $property->id]) ?>" class="dro"><img  src="images/edit-sub-menue-icon.svg" style="margin-right: 2px;"> <span style="color: white"> Campaign </span></a>
                                  </div>
                              </div>


                              <div>
                                   <img class="margin-left-right-spacing dropbtn-view action-icon" onclick="myFunctionView(<?=$i?>)"  src="images/eye-view-icon.svg">
                                  <div id="myDropdown-view<?=$i?>" class="dropdown-content-view" style="height: auto; background-color: #586ADA; margin-left: -67px; margin-top: 10px;">
                                      <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' =>  $property->id]) ?>" class="dro"> <img  src="images/edit-sub-menue-icon.svg"  style="margin-right: 2px;" > <span style="color: white">  Details </span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/slab/tariff', 'id' =>  $property->id]) ?>" class="dro"> <img  src="images/edit-sub-menue-icon.svg"  style="margin-right: 2px;" > <span style="color: white">  Slab Report </span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/slab/meals', 'id' =>  $property->id]) ?>" class="dro"> <img  src="images/edit-sub-menue-icon.svg"  style="margin-right: 2px;" > <span style="color: white">  Meal Report </span></a>
                                      <a href="<?= \yii\helpers\Url::to(['/slab/dinner', 'id' =>  $property->id]) ?>" class="dro"> <img  src="images/edit-sub-menue-icon.svg"  style="margin-right: 2px;" > <span style="color: white">  Dinner Report </span></a>
                                  </div>
                              </div>
                              <div>  <a href="<?= \yii\helpers\Url::to(['/property/basicdetails', 'id' =>  $property->id]) ?>"> <img class="margin-left-right-spacing action-icon" src="images/delete-1-icon.svg"></a></div>


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
function myFunctionView(id) {
    document.getElementById("myDropdown-view"+id).classList.toggle("show-content");
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

    if (!event.target.matches('.dropbtn-view')) {
        var dropdownedit = document.getElementsByClassName("dropdown-content-view");
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
