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
            toastr.success("Check in/Check out policy updated");
        } else
        {
            toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            toastr.error("HTTP Error: Unable to connect to Server");
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
            toastr.success("Smoking policy updated");
        } else
        {
            toastr.error(response.message);
        }
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            toastr.error( "HTTP Error: Unable to connect to Server" );
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
            toastr.success("Pets policy updated");
        } else
        {
            toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            toastr.error( "HTTP Error: Unable to connect to Server" );
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

$('#property-restricted_for_child').click(function () {
    if ($('#property-restricted_for_child').prop("checked") == false) {
        $(this).prop('checked', true);
    }
    defaultChildPolicy();
    $('#property-restricted_for_child_below_age').prop("readonly",false);
    // if ($('#property-restricted_for_child').prop("checked") == true) {
    //     $('#property-complimentary_from_age').val(parseInt($('#property-restricted_for_child_below_age').val()));
    // }
});

$('#property-allow_child_of_all_ages').click(function () {
    if ($('#property-allow_child_of_all_ages').prop("checked") == false) {
        $(this).prop('checked', true);
    }
    defaultChildPolicy();
    $('#property-restricted_for_child_below_age').prop("readonly",true);
});
function defaultChildPolicy(){
    $('#property-allow_complimentary').prop("checked",false);
    $('#property-allow_child_rate').prop("checked",false);
    $('#property-complimentary_from_age,#property-complimentary_to_age,#property-child_rate_from_age,#property-child_rate_to_age').val('');
    $('#property-adult_rate_age').val(0);
    $('#property-restricted_for_child_below_age').val(0)
    $('#property-complimentary_to_age,#property-child_rate_to_age').prop("readOnly",true)
}


$('#property-allow_complimentary,#property-allow_child_rate').click(function () {

    if ($('#property-allow_complimentary').prop("checked") == true) {
        $('#property-complimentary_to_age').prop("readOnly",false)
    }else{
        $('#property-complimentary_to_age').prop("readOnly",true)
    }
    if ($('#property-allow_child_rate').prop("checked") == true) {
        $('#property-child_rate_to_age').prop("readOnly",false)
    }else{
        $('#property-child_rate_to_age').prop("readOnly",true)
    }



    if ($('#property-allow_child_of_all_ages').prop("checked") == true){

        if ($('#property-allow_complimentary').prop("checked") == true) {

            $('#property-complimentary_from_age').val(0);
            $('#property-complimentary_to_age,#property-child_rate_from_age,#property-child_rate_to_age,#property-adult_rate_age').val('');

        }else if ($('#property-allow_child_rate').prop("checked") == true){

            $('#property-child_rate_from_age').val(0);
            $('#property-complimentary_from_age,#property-complimentary_to_age,#property-child_rate_to_age,#property-adult_rate_age').val('');

        }else {

            $('#property-adult_rate_age').val(0);
            $('#property-complimentary_from_age,#property-complimentary_to_age,#property-child_rate_from_age,#property-child_rate_to_age').val('');
        }
    }
    else if ($('#property-restricted_for_child').prop("checked") == true) {

        if ($('#property-allow_complimentary').prop("checked") == true) {

            $('#property-complimentary_from_age').val($('#property-restricted_for_child_below_age').val());
            $('#property-complimentary_to_age,#property-child_rate_from_age,#property-child_rate_to_age,#property-adult_rate_age').val('');

        }else if ($('#property-allow_child_rate').prop("checked") == true){

            $('#property-child_rate_from_age').val($('#property-restricted_for_child_below_age').val());
            $('#property-complimentary_from_age,#property-complimentary_to_age,#property-child_rate_to_age,#property-adult_rate_age').val('');

        }else {

            $('#property-adult_rate_age').val($('#property-restricted_for_child_below_age').val());
            $('#property-complimentary_from_age,#property-complimentary_to_age,#property-child_rate_from_age,#property-child_rate_to_age').val('');
        }

    }

});
// $('#property-allow_child_rate').click(function () {
//     $(this).prop('checked', true);
// });
//
$('#property-allow_adult_rate').click(function () {
    $(this).prop('checked', true);
});


$('#property-complimentary_to_age').on("input",function () {
    if ($('#property-allow_child_rate').prop("checked") == true){
        $('#property-child_rate_from_age').val(parseInt($('#property-complimentary_to_age').val()) + 1);
    }else{
        $('#property-adult_rate_age').val(parseInt($('#property-complimentary_to_age').val()) + 1);
    }
});
$('#property-child_rate_to_age').on("input",function () {
    $('#property-adult_rate_age').val(parseInt($('#property-child_rate_to_age').val()) + 1);
});

$('#property-restricted_for_child_below_age').on('input',function () {
    if ($('#property-allow_complimentary').prop("checked") == true) {

        $('#property-complimentary_from_age').val(parseInt($('#property-restricted_for_child_below_age').val()));

    }else if($('#property-allow_child_rate').prop("checked") == true){

        $('#property-child_rate_from_age').val(parseInt($('#property-restricted_for_child_below_age').val()));

    }else{

        $('#property-adult_rate_age').val($('#property-restricted_for_child_below_age').val());
    }
});

function validateChildPolicy() {
    var bError = false;
    var ErrorMessage = "";

    if ($('#property-restricted_for_child').is(":checked")) {
        // $('#property-restricted_for_child').disabled=false;
        if ( parseInt($('#property-restricted_for_child_below_age').val().trim()) <= 0 ||
            $('#property-restricted_for_child_below_age').val().trim().length == 0) {
            bError = true;
            ErrorMessage += '<li>Invalid Restricted age</li>';
        }
    }




    if ($('#property-allow_complimentary').is(":checked")) {
        if ( parseInt($('#property-complimentary_from_age').val().trim()) < 0 ||
            $('#property-complimentary_from_age').val().trim().length == 0) {
            bError = true;
            ErrorMessage += '<li>Invalid Complimentary age</li>';
        }

        if ( parseInt($('#property-complimentary_from_age').val().trim()) >=  parseInt($('#property-complimentary_to_age').val().trim()) ) {
            bError = true;
            ErrorMessage += '<li>Complimentary to age can\'t greater than or equal to from age</li>';
        }
    }

    if ($('#property-allow_child_rate').is(":checked")) {
        if ( parseInt($('#property-child_rate_to_age').val().trim()) < 0 ||
            $('#property-child_rate_to_age').val().trim().length == 0) {
            bError = true;
            ErrorMessage += '<li>Invalid Child age</li>';
        }

        if ( parseInt($('#property-child_rate_from_age').val().trim()) >=  parseInt($('#property-child_rate_to_age').val().trim()) ) {
            bError = true;
            ErrorMessage += '<li>Child to age can\'t greater than or equal to from age</li>';
        }
    }

    if ($('#property-allow_adult_rate').is(":checked")) {

        if ( parseInt($('#property-adult_rate_age').val().trim()) < 0 ||
            $('#property-adult_rate_age').val().trim().length == 0) {
            bError = true;
            ErrorMessage += '<li>Invalid Adult age</li>';
        }

        if ( parseInt($('#property-child_rate_to_age').val().trim()) >=  parseInt($('#property-adult_rate_age').val().trim()) ) {
            bError = true;
            ErrorMessage += '<li>Adult age can\'t less or equal to child to age</li>';
        }
    }

    if(bError) {
        // toastr.error(ErrorMessage);

        $.alert({
            icon: 'fa fa-exclamation-triangle',
            title: 'Please fix the below fields',
            content: ErrorMessage,
            type: 'red',
            typeAnimated: true,
        });


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
            toastr.error(response.message);
        }
    })
        .fail(function() {
            alert( "HTTP Error: Unable to connect to Server" );
        });
}

function showNationalityDeleteConfirm(id, groupName){
    // $('#nationality_group_id').val(id);
    // $("#deleteGroupName").html(groupName);
    // $('#deleteModal').modal('show');
    var totalNationalityGroups =  $('#totalNationalityGroups').val()
    if(totalNationalityGroups == 1){
        //Check if its last nationality group
        $.confirm({
            title: 'Alert !',
            content: 'Removing your last nationality group will change your setting to  "Room tariff is same for all guests\n"',
            type: 'orange',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Accept',
                    btnClass: 'btn-green',
                    action: function(){
                        $.confirm({
                            title: 'Confirmation!',
                            content: 'Are you sure you want to delete the nationality group '+groupName+'?',
                            type: 'red',
                            buttons: {
                                ok: {
                                    btnClass: 'btn-primary text-white',
                                    keys: ['enter'],
                                    action: function(){
                                        $.post("index.php?r=property/deletenationality",{
                                            group_id: id, property_id: $('#property_id').val(),nationality_group_count:totalNationalityGroups,
                                        }, function (response) {
                                            if ( parseInt(response.status) == 0) {
                                                $("#nationalityTable tbody").empty();
                                                $("#nationalityTable tbody").append(response.data);
                                                $("input[name='Property[room_tariff_same_for_all]'][value='1']").prop('checked', true);
                                                $("#nationality_div").hide(300);
                                                toastr.success("Deleted nationality group");
                                            } else
                                            {
                                                toastr.error(response.message);
                                            }
                                        })
                                            .fail(function() {

                                                toastr.error("HTTP Error: Unable to connect to Server" );
                                            });

                                    }
                                },
                                cancel: function(){
                                    $.alert('File deletion was aborted! ');
                                }
                            }
                        });
                    }
                },
                close: function () {
                }
            }
        });
        return false;
    }
    $.confirm({
        title: 'Confirmation!',
        content: 'Are you sure you want to delete the nationality group '+groupName+'?',
        type: 'red',
        buttons: {
            ok: {
                btnClass: 'btn-primary text-white',
                keys: ['enter'],
                action: function(){
                    $.post("index.php?r=property/deletenationality",{
                        group_id: id, property_id: $('#property_id').val(),nationality_group_count:totalNationalityGroups,
                    }, function (response) {
                        if ( parseInt(response.status) == 0) {
                            $("#nationalityTable tbody").empty();
                            $("#nationalityTable tbody").append(response.data);

                            toastr.success("Deleted nationality group");
                        } else
                        {
                            toastr.error(response.message);
                        }
                    })
                        .fail(function() {

                            toastr.error("HTTP Error: Unable to connect to Server" );
                        });

                }
            },
            cancel: function(){
                $.alert('File deletion was aborted! ');
            }
        }
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
        toastr.error(ErrorMessage);
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
        room_tariff_same_for_all: $('input[name="Property[room_tariff_same_for_all]"]:checked').val(),
    }, function (response) {
        console.log(response);
        if ( parseInt(response.status) == 0) {
            console.log(response.data);
            toastr.success("Nationality updated");
            $("#nationalityTable tbody").empty();
            $("#nationalityTable tbody").append(response.data);
            dismissNationaliyModal();
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
            toastr.success("Mandatory dinner option updated");
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

/////////////////Tariff Option Policy /////////////////////

$('#save_tariff_option').click(function(e){
    e.preventDefault();

    saveTariffOptions();
});


function saveTariffOptions(){
    /*  var bError = validateTariffOptions();
     if(bError){
         console.log('validateTariffOptions Error');
         return;
     } */

    var room_tariff_same_for_all =  $('input[name="Property[room_tariff_same_for_all]"]:checked').val()
    var totalNationalityGroups =  $('#totalNationalityGroups').val()

    if (room_tariff_same_for_all == 0){

        if (totalNationalityGroups == 0){

            $.alert({
                icon: 'fa fa-exclamation-triangle',
                title: 'Alert!',
                content: 'Please define at least one nationality to proceed !',
                type: 'red',
                typeAnimated: true,
            });
        }
        return ;
    }

    $.post("index.php?r=property/savetariffoption",{
        room_tariff_same_for_all: room_tariff_same_for_all,
        property_id: $('#property_id').val(),
    }, function (response) {
        if ( parseInt(response.status) == 0) {
            toastr.success("Tariff Option updated");
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
}

/////////////////End Tariff Option Policy /////////////////////

///////////// Cancellation Policy //////////////////////////

$("#property-cancellation_has_period_charge").click(function () {

    if($(this).is(":checked")) {
        $("#pb_div").show(300);
    } else {
        $("#pb_div").hide(200);
    }
});

$("#property-cancellation_has_admin_charge").click(function () {
    if($(this).is(":checked")) {
        $("#ac_div").show(300);
    } else {
        $("#ac_div").hide(200);
    }
});


// new code
$(document).on('keyup', '#property-cancellation_full_refund_days', function(){
    var inps = document.getElementsByName('from_days[]');
    var first_from_day = inps[0];

    var temp = parseInt( $('#property-cancellation_full_refund_days').val()) - 1;
    if ( temp > 0) {
        first_from_day.value =  parseInt( $('#property-cancellation_full_refund_days').val()) - 1;
    }
    else {
        first_from_day.value = 0;
    }
});

// $(document).on('blur', '#property-cancellation_no_refund_days', function(){
//     //validateCancellationPolicy();
//     var full_refund_days = parseInt($('#property-cancellation_full_refund_days').val());
//
//     if(full_refund_days <= 0) {
//         toastr.error("Invalid full refund days");
//         return;
//     }
//
//     var no_refund_days = parseInt($('#property-cancellation_no_refund_days').val());
//     if (no_refund_days >= full_refund_days ) {
//         toastr.error("No refund days can't be more than or equal to Full refund Period");
//         return;
//     }
// });

$(document).on('keyup', 'input[name^="to_days"]', function(){
    var inpt_from_days = document.getElementsByName('from_days[]');
    var inpt_to_days = document.getElementsByName('to_days[]');

    for (var i = 1; i < inpt_from_days.length; i++) {
        inpt_from_days[i].value = parseInt(inpt_to_days[i - 1].value) - 1;
    }
});


$('#save_cancellation_policy').click(function(e){
    e.preventDefault();
    SaveCancellationPolicy();
});

function SaveCancellationPolicy() {
    $("#overlay").fadeIn(300);
    var bError = validateCancellationPolicy();
    if(bError){
        $("#overlay").fadeOut(300);
        console.log('Validation Error');
        console.log(bError);
        return;
    }

    $.post("index.php?r=property/savecancellationcharges",{
        property_id:  $('#property_id').val(),
        cancellation_has_period_charge: $('#property-cancellation_has_period_charge').is(":checked") ? 1 : 0,
        cancellation_has_admin_charge : $('#property-cancellation_has_admin_charge').is(":checked") ? 1 : 0,
        cancellation_full_refund_days: $('#property-cancellation_full_refund_days').val(),
        cancellation_no_refund_days: $('#property-cancellation_no_refund_days').val(),
        admin_cancellation_type: $('input[name="Property[admin_cancellation_type]"]:checked').val(),
        cancellation_lumsum_amount: $('#property-cancellation_lumsum_amount').val(),
        cancellation_percentage_rate: $('#property-cancellation_percentage_rate').val(),
        cancellation_per_adult_amount: $('#property-cancellation_per_adult_amount').val(),
        cancellation_per_kids_amount: $('#property-cancellation_per_kids_amount').val(),

        period_data:  $('#period_data :input').serialize()
    }, function (response) {
        if ( parseInt(response.status) == 0) {
            toastr.success("Cancellation policy updated");
        } else
        {
            toastr.error(response.message);
        }
        $("#overlay").fadeOut(300);
    })
        .fail(function() {
            $("#overlay").fadeOut(300);
            toastr.error( "HTTP Error: Unable to connect to Server" );
        });
}

function validateCancellationPolicy(){
    var bError = false;

    if ($('#property-cancellation_has_period_charge').is(":checked"))
    {
        if($('#property-cancellation_full_refund_days').val() == '' ||
            $('#property-cancellation_no_refund_days').val() == ''){
            bError = true;
            $.alert({
                icon: 'fa fa-exclamation-triangle',
                title: 'Alert!',
                content: 'Full refund and No refund days should not be empty!',
                type: 'red',
                typeAnimated: true,
            });
            // toastr.error("Full refund and No refund days should not be empty");
            return bError;
        }

        var full_refund_days = parseInt($('#property-cancellation_full_refund_days').val());
        var no_refund_days = parseInt($('#property-cancellation_no_refund_days').val());

        if (no_refund_days <= 0 || full_refund_days <= 0 ) {
            bError = true;
            $.alert({
                icon: 'fa fa-exclamation-triangle',
                title: 'Alert!',
                content: 'Full refund/No refund days is not valid',
                type: 'red',
                typeAnimated: true,
            });
            // toastr.error("Full refund/No refund days is not valid");
            return bError;
        }

        if (no_refund_days >= full_refund_days ) {
            bError = true;
            $.alert({
                icon: 'fa fa-exclamation-triangle',
                title: 'Alert!',
                content: 'No refund days can\'t be more than or equal to Full refund Period',
                type: 'red',
                typeAnimated: true,
            });
            // toastr.error("No refund days can't be more than or equal to Full refund Period");
            return bError;
        }

        var inpt_from_days = document.getElementsByName('from_days[]');
        var inpt_to_days = document.getElementsByName('to_days[]');
        var percentage = document.getElementsByName('percentage[]');
        var previousPerecentage = 100;
        for (var i = 0; i < inpt_from_days.length; i++) {

            if( !(inpt_to_days[i].value) || (!inpt_from_days[i].value) || (!percentage[i].value) ) {
                bError = true;
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content: 'Period\'s percentage, from days or to days should not be empty',
                    type: 'red',
                    typeAnimated: true,
                });
                // toastr.error("Period's percentage, from days or to days should not be empty");
                return bError;
            }

            if ( parseInt(inpt_to_days[i].value) >= (full_refund_days - 1) ) {
                bError = true;
                // toastr.error("To date can't higher or equal to full refund days");
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content: 'To date can\'t higher or equal to full refund days',
                    type: 'red',
                    typeAnimated: true,
                });
                return bError;
            }

            if ( parseInt(inpt_to_days[i].value) > (inpt_from_days[i].value) ) {
                bError = true;
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content: 'To date can\'t higher or equal to input from days',
                    type: 'red',
                    typeAnimated: true,
                });
                // toastr.error("To date can't higher or equal to input from days");
                return bError;
            }

            if ( parseInt(inpt_to_days[i].value) <= (no_refund_days) ) {
                bError = true;
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content: 'To date can\'t lower or equal than No refund days',
                    type: 'red',
                    typeAnimated: true,
                });
                // toastr.error("To date can't lower or equal than No refund days");
                return bError;
            }

            if (i === inpt_from_days.length- 1) {
                if((inpt_to_days[i].value) != (no_refund_days+1)){
                    bError = true;
                    $.alert({
                        icon: 'fa fa-exclamation-triangle',
                        title: 'Alert!',
                        content: 'To date of '+ percentage[i].value+'% refund should be '+parseInt(no_refund_days + 1),
                        type: 'red',
                        typeAnimated: true,
                    });
                    return bError;
                }
            }

            if(percentage[i].value >= previousPerecentage ){
                bError = true;
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content:  'Refund percentage('+percentage[i].value+'%)  should not be greater than previous row',
                    type: 'red',
                    typeAnimated: true,
                });
                return bError;
            }
            previousPerecentage = percentage[i].value;
        }

        if (parseInt(inpt_to_days[(inpt_from_days.length - 1)].value) != (no_refund_days + 1)) {
            bError = true;
            $.alert({
                icon: 'fa fa-exclamation-triangle',
                title: 'Alert!',
                content: 'Period not completed',
                type: 'red',
                typeAnimated: true,
            });
            // toastr.error("Period not completed");
            return bError;
        }
        // toastr.success("Period Validation success");
    }

    if ($('#property-cancellation_has_admin_charge').is(":checked")) {
        var radio = $('input[name="Property[admin_cancellation_type]"]:checked');
        if (radio.length == 0) {
            bError = true;
            $.alert({
                icon: 'fa fa-exclamation-triangle',
                title: 'Alert!',
                content: 'Select type of admin charge',
                type: 'red',
                typeAnimated: true,
            });
            // toastr.error("Select type of admin charge");
            return bError;
        }

        var adminChargeType = parseInt($('input[name="Property[admin_cancellation_type]"]:checked').val());

        if (adminChargeType == 1 ){
            if ( parseInt($('#property-cancellation_lumsum_amount').val().trim()) <= 0 ||
                $('#property-cancellation_lumsum_amount').val().trim().length == 0) {
                bError = true;
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content: 'Invalid lumsum amount',
                    type: 'red',
                    typeAnimated: true,
                });
                // toastr.error("Invalid lumsum amount");
            }
        } else if (adminChargeType == 2){
            if ( parseInt($('#property-cancellation_percentage_rate').val()) <= 0 ||
                $('#property-cancellation_percentage_rate').val().trim().length == 0) {
                bError = true;
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content: 'Invalid percentage',
                    type: 'red',
                    typeAnimated: true,
                });
                // toastr.error("Invalid percentage");
            }
        } else if (adminChargeType == 3){
            if ( parseInt($('#property-cancellation_per_adult_amount').val()) <= 0 ||
                parseInt($('#property-cancellation_per_kids_amount').val()) <= 0 ||
                $('#property-cancellation_per_adult_amount').val().trim().length == 0 ||
                $('#property-cancellation_per_kids_amount').val().trim().length == 0)
            {
                bError = true;
                $.alert({
                    icon: 'fa fa-exclamation-triangle',
                    title: 'Alert!',
                    content: 'Invalid Adult/Kids amount',
                    type: 'red',
                    typeAnimated: true,
                });
                // toastr.error("Invalid Adult/Kids amount");
            }
        }
    }

    return bError;
}
$('.child-checkbox').click(function() {
    $('.child-checkbox').not(this).prop('checked', false);
});

