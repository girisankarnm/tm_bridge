const MAXIMUM_COMPLIMENT_AMINITIES = 5;



$(document).ready(function () {
    $("#swimming_pool").click(function () {
        if($(this).is(":checked")) {
            $("#sm_div").show(300);
        } else {
            $("#sm_div").hide(200);
        }
    });

    $("#restaurant").click(function () {
        if($(this).is(":checked")) {
            $("#rs_div").show(300);
        } else {
            $("#rs_div").hide(200);
        }
    });

    $("#parking").click(function () {
        if($(this).is(":checked")) {
            $("#pk_div").show(300);
        } else {
            $("#pk_div").hide(200);
        }
    });

    $('#cuisine_options').select2({
        placeholder: "Select Cuisines",
    });

    $('#food_options').select2({
        placeholder: "Select Food Options",
    });

    $('.property_sub_option').select2();


    $('#save_complimentary').click(function (e) {
        e.preventDefault();
        var bError = validateComplimentaryAminities();

        if(bError == true) {
            console.log('validation failed');
        }
        else{
            console.log('validation success');
            saveComplimentaryAminities();
        }
    });

    $("#complimentary_service").click(function () {
        if($(this).is(":checked")) {
            $("#complimentary_list").show(300);
        } else {
            $("#complimentary_list").hide(200);
        }
    });

    $('#save_swimming_pool').click(function (e) {
        e.preventDefault();
        var bError = validateSwimmingpoolData();

        if(bError == true) {
            console.log('validation failed');
        }
        else{
            saveSwimmingPoolData();
        }
    });

    $('#save_restaurant').click(function (e) {
        e.preventDefault();
        var bError = validateRestaurantData();

        if(bError == true) {
            console.log('validation failed');
        }
        else{
            console.log('validation success');
            saveRestaurantData();
        }
    });

    $('#save_parking').click(function (e) {
        e.preventDefault();
        var bError = validateParkingData();
        if(bError == true) {
            console.log('validation failed');
        }
        else{
            console.log('validation success');
            saveParkingData();
        }
    });

    $('#save_property_amenity').click(function (e) {
        e.preventDefault();
        var bError = validatePropertyAmenities();
        if(bError == true) {
            console.log('validation failed');
        }
        else{
            console.log('validation success');
            savePropertyAminities();
        }
    });

});

function validateComplimentaryAminities(){
    var bError = false;
    var ErrorMessage = "Please fill below fields";
    $("input[name='complimentary_input[]']").each(function(){
        if(this.value === '') {
            bError = true;
            ErrorMessage += '<li>Amenity description</li>';
            return false;
        }
    });

    if(bError) {
        // toastr.error(ErrorMessage);
    }

    return bError;
}

function saveComplimentaryAminities() {
    $.post("index.php?r=property/savecomplimentaryaminities",{
        property_id: $('#property_id').val(),
        have_complimentary_services: $('#complimentary_service').is(":checked") ? 1 : 0,
        complimentary_data:  $('#complimentary_data :input').serialize()
    }, function (response) {
        if ( parseInt(response.status) == 0) {
            // toastr.success("Complimentary items updated");
            console.log("Complimentary items updated");
            console.log(response.data);
        } else
        {
            console.log(response.message);
            console.log(response.data);
            // toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
}

function validateSwimmingpoolData(){
    var bError = false;
    var ErrorMessage = "Please fill below fields";

    if($("input[name='pool_type[]']").is(":checked")) {
        bError = false;
    }
    else{
        bError = true;
        ErrorMessage += '<li>Pool type</li>';
    }

    if($('#propertyswimmingpool-count').val() ==''){
        bError = true;
        ErrorMessage += '<li>Swimming pool count</li>';
    }

    if(bError) {
        // toastr.error(ErrorMessage);
    }

    return bError;
}

function saveSwimmingPoolData() {
    $.post("index.php?r=property/saveswimmingpooldata",{
        property_id: $('#property_id').val(),
        have_swimming_pool: $('#swimming_pool').is(":checked") ? 1 : 0,
        pool_count:  $('#propertyswimmingpool-count').val(),
        pool_type:  $('input[name="pool_type[]"]:checked').serialize()
    }, function (response) {
        if ( parseInt(response.status) == 0) {
            console.log(response.message);
            console.log(response.data);
            // toastr.success("Swimming pool updated");
        } else
        {
            // toastr.error(response.message);
            console.log(response.message);
            console.log(response.data);
        }
        $("#overlay").fadeOut(300);
    })
}

function saveRestaurantData() {
    $.post("index.php?r=property/saverestaurantdata",{
        property_id: $('#property_id').val(),
        have_restaurant: $('#restaurant').is(":checked") ? 1 : 0,
        restaurant_count: $("input[name='PropertyRestaurant[count]']").val(),
        food_option: $("select[name='food_option[]']").serialize(),
        cuisine_option: $("select[name='cuisine_option[]']").serialize()
    }, function (response) {
        if ( parseInt(response.status) == 0) {
            // toastr.success(" Restaurant data updated");
            console.log(" Restaurant data updated");
        } else
        {
            // toastr.error(response.message);
            console.log(response.message);
        }
        $("#overlay").fadeOut(300);
    })
}
function saveParkingData() {
    $.post("index.php?r=property/saveparking",{
        property_id: $('#property_id').val(),
        have_parking: $('#parking').is(":checked") ? 1 : 0,
        parking_type:  $('input[name="parking_type[]"]:checked').serialize()
    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            console.log("Parking data updated");
            // toastr.success("Parking data updated");
        } else
        {
            // toastr.error(response.message);
            console.log(response.message);
        }
        $("#overlay").fadeOut(300);
    })
}

function validateRestaurantData(){
    var bError = false;
    var ErrorMessage = "Please fill below fields";

    if($("input[name='PropertyRestaurant[count]']").val() == ''){
        bError = true;
        ErrorMessage += '<li>Reataurants Count</li>';
    }
    if($("#food_options").val() == ''){
        bError = true;
        ErrorMessage += '<li>Food Options</li>';
    }
    if($("#cuisine_options").val() == ''){
        bError = true;
        ErrorMessage += '<li>Cuisine Options</li>';
    }
    if(bError) {
        // toastr.error(ErrorMessage);
    }

    return bError;
}

function validateParkingData(){
    var bError = false;
    var ErrorMessage = "Please fill below fields";
    if($("input[name='parking_type[]']").is(":checked")) {
        bError = false;
    }
    else{
        bError = true;
        ErrorMessage += '<li>Parking type</li>';
    }
    if(bError) {
        // toastr.error(ErrorMessage);
    }
    return bError;
}

function validateRoomAmenities(){
    var bError = true;
    var ErrorMessage = "Check the amenity & sub option";
    $("input[name='room_amenity_name[]']").each(function(){
        if(this.checked){
            bError = false;
            return false;
         }
    });

    $("input[name='room_amenity_name[]']").each(function(){
        if(this.checked){
            if ($("#room_sub_option_"+ this.value).val() == "") {
                bError = true;
            }
         }
    });

    if(bError) {
        toastr.error(ErrorMessage);
    }
    return bError;
}

function validatePropertyAmenities(){
    var bError = true;
    var ErrorMessage = "Check the amenity & sub option";
    $("input[name='property_amenity_name[]']").each(function(){
        if(this.checked){
            bError = false;
            return false;
         }
    });

    $("input[name='property_amenity_name[]']").each(function(){
        if(this.checked){
            if ($("#sub_option_"+ this.value).val() == "") {
                bError = true;
            }
         }
    });

    if(bError) {
        // toastr.error(ErrorMessage);
    }
    return bError;
}

function savePropertyAminities() {

    var amenities = [];
    var suboptions = [];

    $i = 0;
    $("input[name='property_amenity_name[]']").each(function(){
        if(this.checked){
            var suboption = $("#sub_option_"+ this.value).val();
            if (suboption === undefined) {
                suboption = ["0"];
            }
            amenities[$i] = this.value
            suboptions[$i] = suboption;
            $i++;
         }
    });

    console.log(amenities);
    console.log(suboptions);

    $.post("index.php?r=property/savepropertyamenities",{
        property_id: $('#property_id').val(),
        amenities: amenities,
        suboptions: suboptions,
    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            // toastr.success("Property amenities updated");
            console.log("Property amenities updated");
        } else
        {
            // toastr.error(response.message);
            console.log(response.message);
        }
        $("#overlay").fadeOut(300);
    })
}
function saveRoomAminities(e) {
    e.preventDefault();
    var bError = validateRoomAmenities();
    if(bError == true) {
        console.log('validation failed');
        return;
    }

    var amenities = [];
    var suboptions = [];

    $i = 0;
    $("input[name='room_amenity_name[]']").each(function(){
        if(this.checked){
            var suboption = $("#room_sub_option_"+ this.value).val();
            if (suboption === undefined) {
                suboption = ["0"];
            }
            amenities[$i] = this.value
            suboptions[$i] = suboption;
            $i++;
         }
    });

    //console.log(amenities);
    //console.log(suboptions);

    $.post("index.php?r=property/saveroomamenities",{
        room_id: $('#room_id').val(),
        amenities: amenities,
        suboptions: suboptions,
    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            toastr.success("Room amenities updated");
        } else
        {
            toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
}

function getRoomAmenitiesForm(id) {
$.get("index.php?r=property/getroomamenitiesform",{room_id: id}, function(data){
        $("#room_amenity_form").html(data);
        $('#room_amenity_form').show('slide');
        $('.room_sub_option').select2();
        $("#save_room_amenity").click(saveRoomAminities);
    })
    .fail(function() {
        alert( "HTTP Error: Unable to connect to Server" );
    });
}
