<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
frontend\assets\CommonAsset::register($this);
$this->registerCssFile('/css/property/rules_and_policies.css');
$this->registerJsFile('/js/property/rules_and_policies/index.js');
$this->registerJsFile('/js/property/rules_policies.js');
$this->registerJsFile('/js/property_pictures/index.js');
?>
<!--<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />-->
<!--<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>-->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<!--Kartik file input style and scripts below -->

<!-- bootstrap 5.x or 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" crossorigin="anonymous">-->

<!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">

<!-- alternatively you can use the font awesome icon library if using with `fas` theme (or Bootstrap 4.x) by uncommenting below. -->
<!-- link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous" -->

<!-- the fileinput plugin styling CSS file -->
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->

<!-- the jQuery Library -->
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>-->

<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/piexif.min.js" type="text/javascript"></script>

<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
    This must be loaded before fileinput.min.js -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/sortable.min.js" type="text/javascript"></script>

<!-- bootstrap.bundle.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 5.x or 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- the main fileinput plugin script JS file -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/fileinput.min.js"></script>

<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`). Uncomment if needed. -->
<!-- script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/themes/fas/theme.min.js"></script -->

<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/locales/LANG.js"></script>


<!-- load the third party plugin assets (jquery-confirm) -->
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>



<h5 class="title"> Property Pictures </h5>

<div class="tab-section rules_and_policies_contr">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="tablinks" id="pills-basic-tab" href="#pills-basic"> Rules & Policies
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="tablinks" id="pills-contact-tab" href="#pills-contact"> Room Category </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="tablinks" id="pills-guest-tab" href="#pills-guest"> Service & Amenities </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="selectedButton" id="pills-accommodation-tab" href="#pills-accommodation"> Property pictures
            </button><hr class="new5" >
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">


<div id="rules_policies_div" class="tab-pane fade active show">
     <div class="accordion" id="myAccordion">


                 <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Property Pictures
                    </button>
                    <div id="collapseOne" class="collapse show" data-parent="#myAccordion">
                        <div class="accordion-content">
        <input type="hidden" id="property_id" name="property_id" value=<?= $property->id ?>>

                               <div class="file-loading">
                                    <input id="input-711" name="imageFiles[]" type="file" multiple>
                                </div>
                        </div>

                    </div>
                </div>

                <div class="accordion-item">
                    <button type="button" class="btn accordion-top text-left collapsed" type="button"
                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                      Room Pictures
                    </button>
                    <div id="collapseTwo" class="collapse" data-parent="#myAccordion">
                        <div class="accordion-content">
                         <div class="form-group row">
                 <label for="inputPassword" class="col-sm-2 col-form-label">Select Room:</label>
                 <div class="col-sm-10">
<select class="form-control col col-lg-4 room" id="property-room">
                                                    <option value="" disabled selected hidden>Select your option</option>
                                                    <?php foreach ($propertyRooms as $Room) { ?>
                                                        <option value="<?= $Room->id ?>"><?= $Room['name'] ?></option>
                                                    <?php } ?>
                                                </select>    </div>
                  </div>


                                        <div class="file-loading room-file-upload" hidden>
                                            <input id="input-room-file" name="roomFiles[]" type="file" multiple>
                                        </div>

                        </div>
                    </div>
                </div>
     </div>
</div>


    </div>


