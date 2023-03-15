<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/property-profile/property-profile.css');
?>
<div class="wrapper">
    <div class="property-images">
        <div class="property-large-img" style="background-image: url('images/property-profile/large-img.png');"></div>
        <div class="small-icons-wrapper">
            <div class="small-icon-single" style="background-image: url('images/property-profile/small-img-01.png');">
            </div>
            <div class="small-icon-single" style="background-image: url('images/property-profile/small-img-02.png');">
            </div>
            <div class="small-icon-single" style="background-image: url('images/property-profile/small-img-03.png');">
            </div>
            <div class="small-icon-single" style="background-image: url('images/property-profile/small-img-04.png');">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="property-details-wrapper">
                <div class="property-details-header">
                    <div class="hotel-category-wrapper">
                        <span class="hotel-category">3-Star Hotel</span>
                    </div>
                    <h3 class="property-name">Crown Plaza Hotel Private Limited</h3>
                    <div class="property-location"><img src="images/property-profile/icons/location-icon.svg" alt="">
                        Candolim, Goa
                        | 940 m from Candolim Beach</div>
                    <div class="property-mail"><a href="mailto:www.crownplaza.com">www.crownplaza.com</a></div>
                </div>
                <div class="details-row">
                    <div class="details-single"><img style="width: 15px;"
                            src="images/property-profile/icons/time-icon.svg" alt=""> Check In :
                        12.30 PM Check Out : 11.30 AM</div>
                    <div class="details-single"><img style="width: 15px;"
                            src="images/property-profile/icons/wifi-icon.svg" alt=""> Wi-Fi</div>
                    <div class="details-single"><img style="width: 15px;"
                            src="images/property-profile/icons/no-smoking-icon.svg" alt=""> No
                        Smoking
                    </div>
                    <div class="details-single"><img style="width: 15px;"
                            src="images/property-profile/icons/no-pets-icon.svg" alt=""> No Pets
                    </div>
                </div>
                <div class="facilities-wrapper">
                    <h4 class="facilities-heading">Most popular facilities</h4>
                    <div class="facilities-list-wrapper">
                        <ul>
                            <li class="facilities-list"><img src="images/property-profile/icons/car-icon.svg" alt="">
                                Free parking on premises</li>
                            <li class="facilities-list"><img src="images/property-profile/icons/tick-square-icon.svg"
                                    alt=""> Garden</li>
                            <li class="facilities-list"><img
                                    src="images/property-profile/icons/indoor-fireplace-icon.svg" alt=""> Indoor
                                fireplace</li>
                            <li class="facilities-list"><img src="images/property-profile/icons/tick-square-icon.svg"
                                    alt=""> Luggage drop-off allowed</li>
                            <li class="facilities-list"><img src="images/property-profile/icons/tick-square-icon.svg"
                                    alt=""> Breakfast</li>
                            <li class="facilities-list"><img src="images/property-profile/icons/tick-square-icon.svg"
                                    alt=""> First aid kit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>