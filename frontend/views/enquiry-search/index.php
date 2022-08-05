<?php
//$this->registerCssFile('/css/search/search.css');
$this->registerCssFile('/css/search.css');
$this->registerCssFile('/css/search/search-style.css');
frontend\assets\AppAsset::register($this);


?>

<div class="content">

    <div class="container-fluid" >
        <div >
            <div class="card search-top-card-list shadow-div " >
                <div id="flex-icons">
                    <div>
                        <div class="card search-top-card-label Enquiry-style-search"> <a href="#" class="search-anchor  Enquiry-style-search">Enquiry no: #<?= $enquiry->enquiry_no ?></a> </div>
                        <input type="hidden" name="enquiryID" id="enquiry_id" class="form-control" value="<?= $enquiry->id ?>">
                        <input type="hidden" name="destination_id" id="destination_id" class="form-control" value="">
                    </div>

                    <div>
                        <div class="card search-top-card-label guest-style-search"   > <a href="#" class="search-anchor guest-style-search">Guest name: <?= $enquiry->guest_name ?> </a> </div>

                    </div>
                    <div>

                        <div class="card search-top-card-label  check-date-style-search "  > <a href="#" class="search-anchor check-date-style-search"><span>Check in: <?= date('d-M-y', strtotime($enquiry->tour_start_date)) ?> </span><span>Check out: <?= date('d-M-y', strtotime($enquiry->tour_start_date . ' + ' . $enquiry->tour_duration . 'days')) ?> </span></a> </div>

                    </div>

                    <div>
                        <div class="card search-top-card-label stay-search" > <a href="#" class="search-anchor wdth-210px"><span>Stay Duration: <?= $enquiry->tour_duration ?> Days Stay</span></a> </div>
                    </div>
                    <div>
                        <div id="flex-row-search"  style="width: 140px;">
                            <div><a href="#">  <img class="margin-right-search-img image-width-height "  src="images/filer-symbol-up-down.svg"> </a></div>
                            <div> <span> <img class="margin-right-search-img image-width-height"  onclick="openNav()" src="images/filter-icon.svg"> </span></div>
                            <div> <span class="hover-icon"> <img class="margin-right-search-img image-width-height dropbtn-search "  src="images/filter-search-icon.svg"> </span>



                            </div>
                            <div> <a href="#">  <img class="image-width-height-2 dropbtn-search" onclick="myFunctionSearch()"  src="images/map-icon.svg"> </a>
                                <div id="myDropdownResult" class="dropdown-content-search shadow-search-drop  " style="height: fit-content;margin-left: -106px;margin-top: 6px;display: none">
                                    <select class="inputSelectClass" >
                                        <option>Alappuzha</option>
                                    </select>
                                    <input type="text" placeholder="Search.." id="myInputSearch" onkeyup="filterFunction()">
                                    <?php foreach ($EnquiryDestinations as $EnquiryDestination) { ?>
                                    <a href="#" onclick="getPropertyList(<?= $EnquiryDestination['id'] ?>)" class="drop-list"><?= $EnquiryDestination['name'] ?></a>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="search-result-content">

                <!--RESULT CONTAINER -->

                <!--loader div start -->
                <div id="search_loader" style="display: none">
                    <div class="timeline-item card  search-card-list shadow-div">
                        <div class="animated-background facebook">
                            <div class="background-masker header-top "></div>
                            <div class="background-masker header-left"></div>
                            <div class="background-masker header-right"></div>
                            <div class="background-masker header-bottom"></div>
                            <div class="background-masker subheader-left"></div>
                            <div class="background-masker subheader-right"></div>
                            <div class="background-masker subheader-bottom"></div>
                            <div class="background-masker content-top"></div>
                            <div class="background-masker content-first-end"></div>
                            <div class="background-masker content-second-line"></div>
                            <div class="background-masker content-second-end"></div>
                            <div class="background-masker content-third-line"></div>
                            <div class="background-masker content-third-end "></div>
                        </div>
                    </div>
                    <div class="timeline-item card  search-card-list shadow-div">
                        <div class="animated-background facebook">
                            <div class="background-masker header-top "></div>
                            <div class="background-masker header-left"></div>
                            <div class="background-masker header-right"></div>
                            <div class="background-masker header-bottom"></div>
                            <div class="background-masker subheader-left"></div>
                            <div class="background-masker subheader-right"></div>
                            <div class="background-masker subheader-bottom"></div>
                            <div class="background-masker content-top"></div>
                            <div class="background-masker content-first-end"></div>
                            <div class="background-masker content-second-line"></div>
                            <div class="background-masker content-second-end"></div>
                            <div class="background-masker content-third-line"></div>
                            <div class="background-masker content-third-end "></div>
                        </div>
                    </div>
                    <div class="timeline-item card  search-card-list shadow-div">
                        <div class="animated-background facebook">
                            <div class="background-masker header-top "></div>
                            <div class="background-masker header-left"></div>
                            <div class="background-masker header-right"></div>
                            <div class="background-masker header-bottom"></div>
                            <div class="background-masker subheader-left"></div>
                            <div class="background-masker subheader-right"></div>
                            <div class="background-masker subheader-bottom"></div>
                            <div class="background-masker content-top"></div>
                            <div class="background-masker content-first-end"></div>
                            <div class="background-masker content-second-line"></div>
                            <div class="background-masker content-second-end"></div>
                            <div class="background-masker content-third-line"></div>
                            <div class="background-masker content-third-end "></div>
                        </div>
                    </div>
                    <div class="timeline-item card  search-card-list shadow-div">
                        <div class="animated-background facebook">
                            <div class="background-masker header-top "></div>
                            <div class="background-masker header-left"></div>
                            <div class="background-masker header-right"></div>
                            <div class="background-masker header-bottom"></div>
                            <div class="background-masker subheader-left"></div>
                            <div class="background-masker subheader-right"></div>
                            <div class="background-masker subheader-bottom"></div>
                            <div class="background-masker content-top"></div>
                            <div class="background-masker content-first-end"></div>
                            <div class="background-masker content-second-line"></div>
                            <div class="background-masker content-second-end"></div>
                            <div class="background-masker content-third-line"></div>
                            <div class="background-masker content-third-end "></div>
                        </div>
                    </div>

                </div>
                <!--loader div end -->


            </div>
        </div>
        <div id="filterdiv" class="main-filter-overlay">
            <div id="Divf2" class="card overlay overlay2 scroll-search-filer " style="width: fit-content;height:fit-content;margin-top: 6px;box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.25);">
                <div  style="height: 26px">
                    <img id="x" onclick="closeNav()" src="images/close-search-filter-icon.svg" style="width: 16px;height: 13px;" >
                </div>
                <div class="tab-accordion" style="margin-bottom: 10px">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="destination-dates">

                        </div>
                    </div>
                </div>

                <div class="card  filter-card-list-slect" >
                    <div class="row">
                        <div class="col-4">
                            <div style="display: block">
                                <!--                         <div class="form-group ">-->
                                <div> <label class="Labelclass-filter" >Property Type</div>
                                <div>
                                    <select name="property_type" id="property_type"  class="inputSelect-filter" >
                                        <option value="">Select Property Type</option>
                                        <?php foreach ($propertyTypes as $propertyType) : ?>
                                        <option value="<?= $propertyType['id'] ?>"> <?= $propertyType['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div style="display: block">
                                <div> <label class="Labelclass-filter" >Room View</div>
                                <div><select class="inputSelect-filter" name="room_view" id="room_view">
                                        <option value="">Select Room View</option>
                                        <?php foreach ($roomViews as $roomView) { ?>
                                            <option value="<?= $roomView['id'] ?>"> <?= $roomView['name'] ?> </option>
                                        <?php } ?>
                                    </select> </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div style="display: block">
                                <!--                         <div class="form-group ">-->
                                <div> <label class="Labelclass-filter" >Food Type</div>
                                <div><select class="inputSelect-filter" name="food_type" id="food_type">
                                        <option value="">Select Food Type</option>
                                        <?php foreach ($foodTypes as $foodType) { ?>
                                            <option value="<?= $foodType['id'] ?>"> <?= $foodType['name'] ?> </option>
                                        <?php } ?>
                                    </select> </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-4">
                            <div style="display: block">
                                <!--                         <div class="form-group ">-->
                                <div> <label class="Labelclass-filter" >Property Rating</div>
                                <div>
                                    <select name="property_rating" id="property_rating" class="inputSelect-filter" >
                                        <option value="">Select Property Rating</option>
                                        <?php foreach ($propertyRatings as $propertyRating) : ?>
                                        <option value="<?= $propertyRating['id'] ?>"> <?= $propertyRating['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div style="display: block">
                                <!--                         <div class="form-group ">-->
                                <div> <label class="Labelclass-filter" >Room Type</div>
                                <div><select class="inputSelect-filter" name="room_type" id="room_type">
                                        <option value="">Select Room Type</option>
                                        <?php foreach ($roomTypes as $roomType) : ?>
                                            <option value="<?= $roomType['id'] ?>"> <?= $roomType['name'] ?> </option>
                                        <?php endforeach; ?>
                                    </select> </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div style="display: block">
                                <!--                         <div class="form-group ">-->
                                <div> <label class="Labelclass-filter" >Occupancy</div>
                                <div>

                                    <input type="number" name="occupancy" id="occupancy" class="inputSelect-filter" value="<?php if (isset($_POST['Occupancy'])) { ?> <?= $_POST['Occupancy'] ?> <?php } ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card  filter-card-list">
                    <div class="title-search-property">
                        Property Amenities
                    </div>
                    <div class="row" >

                        <div class="row " style="margin-left: 15px; display: flex;width: 870px;" >
                            <?php foreach ($propertyAmenities as $propertyAmenitiy) : ?>
                            <div>
                                <input id="<?= $propertyAmenitiy['name'] ?>" name="property_amenity[]"  value="<?= $propertyAmenitiy['id'] ?>"  class="vertical-align-middle margin-left-check-box" type="checkbox"  >
                                <label style="margin: 8px" for="<?= $propertyAmenitiy['name'] ?>"> <?= $propertyAmenitiy['name'] ?> </label>
                            </div>
                            <?php endforeach; ?>
                            <div>
                                <input type="checkbox" value="true" name="swimming_pool" id="swimming_pool" class="vertical-align-middle margin-left-check-box" >
                                <label  class="pointerclass" for="swimming_pool"   style="margin: 8px"  >Swimming pool </label>
                            </div>
                            <div>
                                <input type="checkbox" value="true" name="restaurant" id="restaurant" class="vertical-align-middle margin-left-check-box" >
                                <label  class="pointerclass"   style="margin: 8px" for="restaurant" >Restaurant </label>
                            </div>
                            <div>
                                <input type="checkbox" value="true" name="parking" id="parking" class="vertical-align-middle margin-left-check-box" >
                                <label  class="pointerclass"   style="margin: 8px" for="parking" >Parking </label>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card  filter-card-list">
                    <div class="title-search-property">
                        Room Amenities
                    </div>
                    <div class="row" >

                        <div class="row " style="margin-left: 15px; display: flex;width: 870px;" >
                            <?php foreach ($roomAmenities as $roomAmenity) : ?>
                            <div>
                                <input  id="room-<?= $roomAmenity['name'] ?>" name="room_amenity[]" value="<?= $roomAmenity['id'] ?>" type="checkbox" class="vertical-align-middle margin-left-check-box"   >
                                <label class="pointerclass"   style="margin: 8px" for="room-<?= $roomAmenity['name'] ?>"> <?= $roomAmenity['name'] ?></label>
                            </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
                <div class="row" style="margin-left: 27px;margin-bottom: 12px;vertical-align: center">
                    <div style="display: block;margin-right: 35px">
                        <BUTTON type="text" class="buttonSaveFilter" onclick="getPropertyList($('#destination_id').val())"> Apply </BUTTON>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunctionSearch() {
        if (document.getElementById('myDropdownResult').style.display == 'none') {
            document.getElementById('myDropdownResult').style.display = 'block';
        }
        else
        {
            document.getElementById('myDropdownResult').style.display = 'none';
        }

    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInputSearch");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdownResult");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }

    window.onclick = function(event) {

        //   var style =  $('#myDropdownResult');
        //     if (style.css("display") == "block") {
        //     // document.getElementById('myDropdownResult').style.display = 'none';
        // }



    }
    //     function myFunctionFilter(){
    //
    //         if (document.getElementById('Div1')) {
    //
    //             if (document.getElementById('Div1').style.display == 'none') {
    //                 alert("yes man")
    //                 $( "Div2" ).addClass( "overlay" );
    //                 document.getElementById('Div2').style.display = 'none';
    //                 // document.getElementById('Div2').addClass( "overlay" );
    //                 document.getElementById('Div1').style.display = 'block';
    //             }
    //             else {
    //                 $( "Div2" ).addClass( "overlay" );
    // alert("no man")
    //
    //                 document.getElementById('Div1').style.display = 'none';
    //                 document.getElementById('Div2').style.display = 'block';
    //             }
    //         }
    //         else{
    //             alert("adada");
    //         }
    //     }

    function openNav() {
      var DestinationId =   $("#destination_id").val();

      if (DestinationId)  {
          $("#filterdiv").show();
          $("#Divf2").slideDown( 100 );
      }else{
          toastr.warning( "No Destination Selected" );
      }
    }

    function closeNav() {
        // document.getElementById("Divf2").style.height = "0%";
        // document.getElementById("filterdiv").style.height = "0%";
        // $("#Divf2").removeClass("overlay2");
        $("#filterdiv").hide();
        $("#Divf2").hide('slide');
    }

    function getPropertyList(DestinationId){
        $('#search_loader').show().fadeIn(1000);
     if (DestinationId) {
         $("#destination_id").val(DestinationId);
         document.getElementById('myDropdownResult').style.display = 'none';

         $.get("index.php?r=enquiry-search/destinationdates", {
             destination_id: DestinationId,
             enquiry_id: $('#enquiry_id').val(),
         }, function (response) {
             if (response.status == 0) {
                 // console.log(response.data);
                 $("#destination-dates").empty();

                 $("#destination-dates").append(response.data);
             }
         })


         var property_amenity = [];
         var room_amenity = [];
         var accommodation_id = [];
         var swimming_pool = null;
         var restaurant = null;
         var parking = null;
         $.each($("input[name='room_amenity[]']:checked"), function(){
             room_amenity.push($(this).val());
         });
         $.each($("input[name='property_amenity[]']:checked"), function(){
             property_amenity.push($(this).val());
         });
         $.each($("input[name='accommodation_id[]']:checked"), function(){
             accommodation_id.push($(this).val());
         });

         if($('#swimming_pool').is(':checked') ){
             swimming_pool = $('#swimming_pool').val();
         }
         if($('#restaurant').is(':checked') ){
             restaurant =  $('#restaurant').val();
         }
         if($('#parking').is(':checked')){
             parking = $('#parking').val();
         }

console.log(room_amenity);
console.log(property_amenity);
console.log(accommodation_id);
console.log(swimming_pool);

         $.post("index.php?r=enquiry-search/search", {
             enquiryID: $('#enquiry_id').val(),
             destination: DestinationId,
             property_type: $('#property_type').val(),
             property_rating: $('#property_rating').val(),
             room_type: $('#room_type').val(),
             // room_view: $('#room_view').val(),
             food_type: $('#food_type').val(),
             // occupancy: $('#occupancy').val(),
             swimming_pool: swimming_pool,
             restaurant: restaurant,
             parking: parking,
             // property_amenity: JSON.stringify(property_amenity),
             // room_amenity: JSON.stringify(room_amenity),
             // accommodation_id: JSON.stringify(accommodation_id),
             // search_property: $('#search_property').val(),
             // page_no: $('#enquiry_id').val(),
         }, function (response) {
             // console.log(response);

             $("#search-result-content").empty();
             $("#search-result-content").append(response.data).hide().fadeIn(1000);


         })
             .fail(function () {
                 $("#overlay").fadeOut(300);
                 toastr.error("HTTP Error: Unable to connect to Server");
             });
     }
     else {
         toastr.error("HTTP Error: Unable to connect to Server");
     }
    }
</script>
