

$(document).ready(function() {
    $('#save_accommodation').click(function(e){
        e.preventDefault();
        validateEnquiryAccomodation();
    });

    $('select[name^="accommodation_status"]').bind("change",function(){
        var row_id = $(this).attr('row_id');
        if($(this).val() == 0) {
            //TODO: add a hidden filed to manage the issue of disabled field not submitting, then remove the comment below
            //disableAccommodationRow(row_id, true);
        }
        else
        {
            //disableAccommodationRow(row_id, false);
        }
    });
});

function validateEnquiryAccomodation(){

    var bError = false;
    var ErrorMessage = "Please select the below fields";

    $('select[name^="accommodation_status"]').each( function() {
        if($(this).val() != 0) {
            var row_id = this.getAttribute("row_id");
            if($("#destination_"+row_id).val() == undefined || $("#destination_"+row_id).val() == ""){
                bError = true;
                ErrorMessage = "destination not selected";
            }

            if($("#meal_plan_"+row_id).val() == undefined || $("#meal_plan_"+row_id).val() == ""){
                bError = true;
                ErrorMessage = "Meals plan not selected";
            }

            if($("#plan_"+row_id).val() == undefined || $("#plan_"+row_id).val() == ""){
                bError = true;
                ErrorMessage = "Plan not selected";
            }
        }
    });

    if(bError) {
        //toastr.error(ErrorMessage);
        $.alert({
            icon: 'fa fa-exclamation-triangle',
            title:  'Validation error!',
            content: ErrorMessage,
            type: 'red',
            typeAnimated: true,
        });
        // alert(ErrorMessage);
    }
    else
    {
        console.log("Good to submit");
        $("#form_enquiry_accomodation").submit();
    }
}

function disableAccommodationRow(row_id, disableFlag){
    $('#destination_' + row_id).prop('disabled', disableFlag);
    $('#meal_plan_' + row_id).prop('disabled', disableFlag);
    $('#plan_' + row_id).prop('disabled', disableFlag);
}
