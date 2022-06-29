var checkout_type = 0;
$('#property-twenty_four_hours_check_in :radio').change(function(){
    if ( $(this).val() == 1 ){
        $('#property-check_in_time').prop('disabled', 'disabled');
        $('#property-check_out_time').prop('disabled', 'disabled');
    }
    else {
        $('#property-check_in_time').prop('disabled', false);
        $('#property-check_out_time').prop('disabled', false);
    }
});

$('#save_checkin_checkout').click(function(e){
    saveCheckinCheckout();
    e.preventDefault();
});

function saveCheckinCheckout(){
    $("#overlay").fadeIn(300);
    var bError = validateCheckinCheckout();
    if(bError){
        $("#overlay").fadeOut(300);
        console.log('Validation Error');
        return;
    }

    $.post("index.php?r=property/savecheckincheckout",{
        property_id: $('#property_id').val(),
        twenty_four_hours_check_in: $('input[name="Property[twenty_four_hours_check_in]"]:checked').val(),
        check_in_time: $('#property-check_in_time').val(),
        check_out_time: $('#property-check_out_time').val(),
        // _csrf: $("input[name= _csrf-frontend]").val(),


    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            //toastr.success("Check in/Check out policy updated");
        } else
        {
            // toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            // toastr.error("HTTP Error: Unable to connect to Server");
        });
}

function validateCheckinCheckout(){
    var bError = false;
    var ErrorMessage = "Please select the below fields";

    var radio = $('input[name="Property[twenty_four_hours_check_in]"]:checked');
    if (radio.length == 0) {
        bError = true;
        ErrorMessage += '<li>Check in/Check out type </li>';
    }

    if ($('input[name="Property[twenty_four_hours_check_in]"]:checked').val() == 2 ){
        if ($('#property-check_in_time').val() == "" ||  $('#property-check_out_time').val() == "") {
            ErrorMessage += '<li>Check in/Check out time</li>';
            bError = true;
        }
    }

    if(bError) {
        toastr.error(ErrorMessage);
    }

    return bError;
}


$('#save_smoking_policy').click(function(e){
    e.preventDefault();
    saveSmokingPolicy();
});

function saveSmokingPolicy(){
    var ErrorMessage = "Please select the below fields";
    $("#overlay").fadeIn(300);
    if($('#property-smoking_policy_id').val() == "") {
        ErrorMessage += '<li>Smoking Policy</li>';
        $("#overlay").fadeOut(300);
        toastr.error(ErrorMessage);
        return;
    }

    $.post("index.php?r=property/savesmokingpolicy",{
        property_id: $('#property_id').val(),
        smoking_policy_id: $('#property-smoking_policy_id').val(),
    }, function (response) {
        console.log(response);
        $("#overlay").fadeOut(300);
        if ( parseInt(response.status) == 0) {
            // toastr.success("Smoking policy updated");
        } else
        {
            // toastr.error(response.message);
        }
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            // toastr.error( "HTTP Error: Unable to connect to Server" );
        });
}

$('#save_pets_policy').click(function(e){
    e.preventDefault();
    savePetsPolicy();
});

function savePetsPolicy(){
    $("#overlay").fadeIn(300);
    var ErrorMessage = "Please select the below fields";
    if($('#property-pets_policy_id').val() == "") {
        ErrorMessage += '<li>Pets Policy</li>';
        $("#overlay").fadeOut(300);
        toastr.error(ErrorMessage);
        return;
    }

    $.post("index.php?r=property/savepetspolicy",{
        property_id: $('#property_id').val(),
        pets_policy_id: $('#property-pets_policy_id').val(),
    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            // toastr.success("Pets policy updated");
        } else
        {
            // toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            // toastr.error( "HTTP Error: Unable to connect to Server" );
        });
}



$('#save_child_policy').click(function(e){
    e.preventDefault();
    saveChildPolicy();
});

function saveChildPolicy(){
    $("#overlay").fadeIn(300);
    var bError = validateChildPolicy();
    if(bError){
        $("#overlay").fadeOut(300);
        console.log('Validation Error');
        return;
    }

    $.post("index.php?r=property/savechildpolicy",{
        property_id: $('#property_id').val(),
        allow_child_of_all_ages: $('#property-allow_child_of_all_ages').is(":checked") ? 1 : 0,
        restricted_for_child: $('#property-restricted_for_child').is(":checked") ? 1 : 0,
        restricted_for_child_below_age: $('#property-restricted_for_child_below_age').val(),
        allow_complimentary: $('#property-allow_complimentary').is(":checked") ? 1 : 0,
        complimentary_from_age: $('#property-complimentary_from_age').val(),
        complimentary_to_age: $('#property-complimentary_to_age').val(),
        allow_child_rate: $('#property-allow_child_rate').is(":checked") ? 1 : 0,
        child_rate_from_age: $('#property-child_rate_from_age').val(),
        child_rate_to_age: $('#property-child_rate_to_age').val(),
        allow_adult_rate: $('#property-allow_adult_rate').is(":checked") ? 1 : 0,
        adult_rate_age: $('#property-adult_rate_age').val(),
    }, function (response) {
        if ( parseInt(response.status) == 0) {
            toastr.success("Child policy updated");
        } else
        {
            toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            toastr.error("HTTP Error: Unable to connect to Server");
        });
}

function validateChildPolicy() {
    var bError = false;
    var ErrorMessage = "Please fix the below fields";

    if ($('#property-restricted_for_child').is(":checked")) {
        if ( parseInt($('#property-restricted_for_child_below_age').val().trim()) <= 0 ||
            $('#property-restricted_for_child_below_age').val().trim().length == 0) {
            bError = true;
            //toastr.error("Invalid Restricted age");
            ErrorMessage += '<li>Restricted age</li>';
        }
    }

    if ($('#property-allow_complimentary').is(":checked")) {
        if ( parseInt($('#property-complimentary_from_age').val().trim()) <= 0 ||
            $('#property-complimentary_from_age').val().trim().length == 0) {
            bError = true;
            //toastr.error("Invalid Complimentary age");
            ErrorMessage += '<li>Complimentary age</li>';
        }

        if ( parseInt($('#property-complimentary_from_age').val().trim()) >  parseInt($('#property-complimentary_to_age').val().trim()) ) {
            bError = true;
            //toastr.error("Complimentary to age can't greater than from age");
            ErrorMessage += '<li>Complimentary can\'t greater than from age</li>';
        }
    }

    if ($('#property-allow_child_rate').is(":checked")) {
        if ( parseInt($('#property-child_rate_to_age').val().trim()) <= 0 ||
            $('#property-child_rate_to_age').val().trim().length == 0) {
            bError = true;
            //toastr.error("Invalid Child age");
            ErrorMessage += '<li>Child age</li>';
        }

        if ( parseInt($('#property-child_rate_from_age').val().trim()) >  parseInt($('#property-child_rate_to_age').val().trim()) ) {
            bError = true;
            //toastr.error("Child to age can't greater than  from age");
            ErrorMessage += '<li>Child can\'t greater than  from age</li>';
        }
    }

    if ($('#property-allow_adult_rate').is(":checked")) {

        if ( parseInt($('#property-adult_rate_age').val().trim()) <= 0 ||
            $('#property-adult_rate_age').val().trim().length == 0) {
            bError = true;
            //toastr.error("Invalid Adult age");
            ErrorMessage += '<li>Adult age</li>';
        }

        if ( parseInt($('#property-child_rate_to_age').val().trim()) >=  parseInt($('#property-adult_rate_age').val().trim()) ) {
            bError = true;
            //toastr.error("Adult age can't less or equal to child to age");
            ErrorMessage += '<li>Adult can\'t greater than  from age</li>';
        }
    }

    if(bError) {
        toastr.error(ErrorMessage);
    }

    return bError;
}


$('#property-room_tariff_same_for_all :radio').change(function(){
    if ( $(this).val() == 0 ){
        $("#nationality_div").show(300);
    }
    else {
        $("#nationality_div").hide(300);
    }
});


// nationality

$('#define_nationality').click(function(e){
    e.preventDefault();
    showNationalityEditForm(0, "");
});

function showNationalityEditForm(group_id, group_name){
    $('#nationality').empty();
    $('#group_name').val("");
    $('#group_id').val(0);

    $.get("index.php?r=property/nationalities",{group_id:group_id, property_id: $('#property_id').val() }, function(response){
        // console.log(response);
        if ( parseInt(response.status) == 0) {
            var available_countries = response.data.available_countries;
            for( var i = 0; i<available_countries.length; i++){
                var id = available_countries[i]['id'];
                var name = available_countries[i]['name'];
                $('#nationality').append("<option value='"+id+"'>"+ name +"</option>");
            }

            if(group_id != 0 ) {
                $('#group_name').val(group_name);
                $('#group_id').val(group_id);

                $('#nationality').val(response.data.countries_in_group);
            }

            showNationaliyModal();
        } else
        {
            // toastr.error(response.message);
        }
    })
        .fail(function() {
            alert( "HTTP Error: Unable to connect to Server" );
        });
}

function showNationaliyModal()
{
    $('#myModal').attr('class', 'modal fade bs-example-modal-sm')
        .attr('aria-labelledby','mySmallModalLabel');
    //$('.modal-dialog').attr('class','modal-dialog modal-sm');

    $('#myModal').modal('show');
}

function validateNationality(){
    var ErrorMessage = "Please select the below fields";
    var bError = false;

    if ($('#group_name').val() == "")
    {
        bError = true;
        ErrorMessage += '<li>Nationality Groupname</li>';
    }

    if($("#nationality").val() == ""){
        bError = true;
        ErrorMessage += '<li>Nationality</li>';
    }

    if(bError) {
        // toastr.error(ErrorMessage);
    }

    return bError;

}

function saveNationality(){
    var bError = validateNationality();
    if(bError){
        $("#overlay").fadeOut(300);
        console.log('Nationality Validation Error');
        return;
    }

    $.post("index.php?r=property/savenationalities",{
        name:  $('#group_name').val(),
        nationalities: $('#nationality').val(),
        property_id: $('#property_id').val(),
        group_id: $('#group_id').val(),
    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            // toastr.success("Nationality updated");
            dismissNationaliyModal();
        } else
        {
            // toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            // toastr.error("HTTP Error: Unable to connect to Server" );
        });
}

function dismissNationaliyModal(){
    $('#myModal').modal('hide');
}



$('#save_mandatory_dinner_option').click(function(e){
    e.preventDefault();

    $.post("index.php?r=property/savemandatorydinneroption",{
        provide_compulsory_inclusions:$('#property-provide_compulsory_inclusions').is(":checked") ? 1 : 0,
        property_id: $('#property_id').val(),

    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            // toastr.success("Mandatory dinner option updated");
        } else
        {
            // toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            // toastr.error("HTTP Error: Unable to connect to Server" );
        });
});

$('#save_weekday_hike_option').click(function(e){
    e.preventDefault();

    $.post("index.php?r=property/saveweekdayhikeoption",{
        have_weekday_hike: $('#property-have_weekday_hike').is(":checked") ? 1 : 0,
        property_id: $('#property_id').val(),
    }, function (response) {
        if ( parseInt(response.status) == 0) {
            toastr.success("Weekday hike Option updated");
        } else
        {
            toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            toastr.error("HTTP Error: Unable to connect to Server" );
        });
});