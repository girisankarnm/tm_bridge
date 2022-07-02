
$('#room_create_save').click(function(e){
    e.preventDefault();
    
    var bError = validateRoomCategory();        
    if(bError){
        return;
    }

    console.log('Good Create Room');
    $('#room_categories_form').submit();
});

$('#room-number_of_extra_beds').blur(function(){
    if( parseInt($('#room-number_of_extra_beds').val().trim()) > 0 ){
        $('#room-extra_bed_type_id').removeAttr('disabled');
    }
    else {
        $('#room-extra_bed_type_id').attr('disabled', 'disabled');
    }
});

function validateRoomCategory() {

    var bError = false;
    var ErrorMessage = "Please select the below fields";

    /* if (parseInt($('#property-restricted_for_child_below_age').val() === "")){
        bError = true;
        ErrorMessage += '<li>Rules & Policy ->Child & Infant policy </li>';
    } */

    if($('#room-name').val() === ""){
        bError = true;
        ErrorMessage += '<li>Room name</li>';
    }

    if($('#room-type_id').val() === ""){
        bError = true;
        ErrorMessage += '<li>Room type</li>';
    }

    if($('#room-view_id').val() === ""){
        bError = true;
        ErrorMessage += '<li>Room view</li>';
    }

    if($('#room-meal_plan_id').val() === ""){
        bError = true;
        ErrorMessage += '<li>Meal plan</li>';
    }
    
    if($('#room-count').val() === ""){
        bError = true;
        ErrorMessage += '<li>Number of rooms</li>';
    }

    if ($('#property-restricted_for_child').val() === "" ) {
        bError = true;
        ErrorMessage += '<li>Rules & Policies -> Child and Infant Policy</li>';
    }

    if ($('#room-restricted_for_child').is(":checked")) {        
        if ($('#room-restricted_for_child_below_age').val() === ""  ){
            bError = true;
            ErrorMessage += '<li>Restricted age</li>';
        }

        if ( (parseInt($('#room-restricted_for_child_below_age').val().trim()) < parseInt($('#property-restricted_for_child_below_age').val().trim())) && $('#property-restricted_for_child').val() == 1 ) {
            bError = true;
            ErrorMessage += '<li>Age Restriction is less than that defined in hotel policy’</li>';
        }
    }

    
    if($('#room-number_of_adults').val() === ""){
        bError = true;
        ErrorMessage += '<li>No. of Adults allowed</li>';
    }

    if( parseInt($('#room-number_of_extra_beds').val().trim()) > 0 ){
        if ($('#room-extra_bed_type_id').val() === "" ) {
            bError = true;        
            ErrorMessage += '<li>Extra bed type </li>';
        }
    }

    if(bError) {
        //toastr.error(ErrorMessage);
        console.log(ErrorMessage);
    }

    return bError;
}