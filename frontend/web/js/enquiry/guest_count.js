var unique_plan_id = 0;
var age_break_up = "";
var planAgeBreakupMap = {};
//var planAgeBreakupMapSameGuestCount = {};
//var planAgeBreakupMapDifferentGuestCount = {};

$(document).ready(function() {
    $('#apply_child_breakup').click(function(e) {
        e.preventDefault();
        applyChildAgeBreakup();
     });

     $('#close_child_breakup').click(function(e) {
        e.preventDefault();
        closeChildBreakupModal();
     });

     $('#add_age_count_row').click(function(e){
        e.preventDefault();
        addAgeSplitupRow();
    });
    /* $('#children_0').change(function(){
    }); */

    $('#add_new_plan_row').click(function(e){
        e.preventDefault();
        addPlanRow();
    });

    $('#save_guest_count').click(function(e){
        e.preventDefault();
        if (validateGuestCount() ) {
            $("#form_guest_count").submit();
        } else {
            //toastr.error("Validation error");
        }
    });

    unique_plan_id = $('#current_unique_plan_id').val();
    age_break_up = $('#child_age_breakup').val();
    planAgeBreakupMap = JSON.parse(age_break_up);
    console.log(age_break_up);
});

$('#enquiry-guest_count_same_on_all_days :radio').change(function(){
    // 1 => guest_count_same_on_all_days
    if ( $(this).val() == 1 ){
        //planAgeBreakupMap =  Object.assign({}, planAgeBreakupMapSameGuestCount);
       // $('#add_plan_div').hide('slide');
        $('#guest_count_differnt').hide('slide');
        $('#guest_count_same').show('slide');
    }
    else {
        //$('#add_plan_div').show('slide');
        //planAgeBreakupMap =  Object.assign({}, planAgeBreakupMapDifferentGuestCount);
        $('#guest_count_same').hide('slide');
        $('#guest_count_differnt').show('slide');
    }
});

function updateGuestCountTotal(row) {
    var uid = $(row).attr('uid');
    $('#total_guests_'+uid).text(Number($('#children_'+uid).val()) + Number($('#adults_'+uid).val()));
}

function showChildBreakupModal(row){
    // clear message in agebreakup poup
    $('#ageBreakupValidation').text("");
    var uid = $(row).attr('unique_plan_id');
    console.log(uid);
    $('#plan_id').val(uid);
    resetChildBreakupModal();
    var totalChild = 0;
    var plan_id = Number($('#plan_id').val());

    //if (plan_id != 0) {
        totalChild =  Number($('#children_'+plan_id).val());
        console.log("totalChild: " + totalChild);
        if(totalChild <= 0){
            console.log("Enter number of child");
            //toastr.error("Enter number of child");
            return;
        }

        initializeChildBreakupModal(uid);
        $('#childBreakupModal').modal('toggle');
    /* }
    else
    {
        console.log("Unexpected condition");
    }     */
}

function resetChildBreakupModal(){
    //$("#age_breakup_table tr").remove();

    var table = document.getElementById("age_breakup_table");
    var rowCount = table.tBodies[0].rows.length;
    for (let i = rowCount; i > 0; i--) {
        document.getElementById('age_breakup_table').deleteRow(i);
    }
}

function initializeChildBreakupModal(uid){
    var num = 1;
    if (planAgeBreakupMap.hasOwnProperty(uid)) {
        var ageBreakupMap = planAgeBreakupMap[uid];
        for (var key in ageBreakupMap) {
            //console.log("Age: " + key);
            $("#age_breakup_table").append('<tr><td><input type="text" class="form-control form-control-sm" name="age[]" value="'+ key + '" onchange="checkAge(this.value)"/></td><td><input type="text" class="form-control form-control-sm" name="count[]" value="'+ ageBreakupMap[key] + '"/></td><td><button id="remr1" onclick="deleteAgeSplitupRow(this)" class="btn btn-sm bg-danger" style="border-radius: 50%"><i class="fa fa-minus"></i></button></td></tr>');
        }
    }
    else
    {
        $("#age_breakup_table").append('<tr><td><input type="text" class="form-control form-control-sm" name="age[]" onchange="checkAge(this.value)" /></td><td><input type="text" class="form-control form-control-sm" name="count[]" /></td><td></td></tr>');
    }
}

function closeChildBreakupModal(){
    resetChildBreakupModal();
    $('#childBreakupModal').modal('toggle');

    /*
    for (var key in planAgeBreakupMap) {
        console.log("Plan: " + key);
        let plan = planAgeBreakupMap[key];
        for (var key2 in plan) {
            console.log(key2+ "=> " + plan[key2]);
        }

        console.log('----------------');
    }
    */

    //delete planAgeBreakupMap[1];

    /* console.log('*******After Delete********');
    for (var key in planAgeBreakupMap) {
        let plan = planAgeBreakupMap[key];
        for (var key2 in plan) {
            console.log(key2+ "=> " + plan[key2]);
        }
    } */
}

function applyChildAgeBreakup(){
    countFlag = 0;
    ageFlag = 0;
    var sumOfCount = 0;
    var plan_id = $('#plan_id').val();
    var totalChild =  Number($('#children_'+plan_id).val());

    $('input[name^="count"]').each(function () {
        if( Number(this.value) === 0){
            countFlag = 1;
        }
        sumOfCount += Number(this.value);
    });
    $('input[name^="age"]').each(function () {
        if( Number(this.value) === 0){
            ageFlag = 1;
        }
    });

    //console.log("sumOfCount: " + sumOfCount);
    //console.log("totalChild: " + totalChild);
    if ((ageFlag === 1) && (countFlag === 1)){
        $('#ageBreakupValidation').text("age and count fields are empty ").style(display("block"));
    }
    else if((ageFlag === 1)){
        $('#ageBreakupValidation').text("age field is empty ").style(display("block"));
    }
    else if((countFlag === 1)){
        $('#ageBreakupValidation').text("count field is empty ").style(display("block"));
    }
    else {
        if(sumOfCount === totalChild ){
            $('#span_child_validation_'+plan_id).text("OK");
            $('#child_validation_'+plan_id).val("OK");
        }
        else if (sumOfCount < totalChild ) {
            $('#span_child_validation_'+plan_id).text("Short by "+ (totalChild - sumOfCount));
            $('#ageBreakupValidation').text("Child count short by "+ (totalChild - sumOfCount)).style(display("block"));
        }
        else if (sumOfCount >totalChild ) {
            $('#span_child_validation_'+plan_id).text("Excess by "+ (sumOfCount - totalChild));
            $('#ageBreakupValidation').text("Child count excess by "+ (sumOfCount - totalChild)).style(display("block"));
        }
    }

    var countArray = document.getElementsByName('count[]');
    var i = 0;
    const ageBreakupMap = {};
    $('input[name^="age"]').each(function () {
        if(this.value in ageBreakupMap ) {
            ageBreakupMap[this.value] = parseInt(ageBreakupMap[this.value]) + parseInt(countArray[i].value);
        }
        else
        {
            ageBreakupMap[this.value] = countArray[i].value;
        }
        i++;
    });

    //If same child break for this plan there, delete it
    if (planAgeBreakupMap.hasOwnProperty($('#plan_id').val())) {
        delete planAgeBreakupMap[$('#plan_id').val()];
    }

    planAgeBreakupMap[$('#plan_id').val()]  = ageBreakupMap;

    //console.log(planAgeBreakupMap);

    /* for (const [key, value] of ageBreakup) {
        console.log(`${key}: ${value} (${typeof(key)})`);
    } */

    var guest_count_same = $('input[name="Enquiry[guest_count_same_on_all_days]"]:checked').val();

    /* if(guest_count_same == 1) {
        planAgeBreakupMapSameGuestCount = Object.assign({}, planAgeBreakupMap);
        console.log("guest_count_same" + JSON.stringify(planAgeBreakupMapSameGuestCount));
    } else
    {
        planAgeBreakupMapDifferentGuestCount = Object.assign({}, planAgeBreakupMap);
        console.log("guest_count_different" + JSON.stringify(planAgeBreakupMapDifferentGuestCount));
    } */

    $('#guest_count_data').val( (guest_count_same == 1) ? $('#guest_count_same :input').serialize() :  $('#guest_count_differnt :input').serialize());
    //console.log("setting guest_count_data: " );

    $('#child_breakup').val(JSON.stringify(planAgeBreakupMap));
    //console.log("setting childbreakup: " + JSON.stringify(planAgeBreakupMap) );

    closeChildBreakupModal();
}

function updateGuestCount(){
    console.log("updateGuestCount");
}

const MAXIMUM_AGE = 17;
function addAgeSplitupRow()
{
    var rowCount = document.getElementById('age_breakup_table').rows.length;
    if ( rowCount > MAXIMUM_AGE ) {
        return;
    }
    var num = rowCount;

    $("#age_breakup_table").append('<tr><td><input type="text" id="'+num+'" class="form-control form-control-sm" name="age[]" onchange="checkAge(this.value)" /></td><td><input type="text" class="form-control form-control-sm" name="count[]" /></td><td><button id="remr1" onclick="deleteAgeSplitupRow(this)" class="btn btn-sm bg-danger" style="border-radius: 50%"><i class="fa fa-minus"></i></button></td></tr>');
}
function checkAge(age) {
    if ((age > 17) || (age < 0)){
        $('#ageBreakupValidation').text("Age must be less than 17").style(display("block"));
    }
}


function deleteAgeSplitupRow(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('age_breakup_table').deleteRow(i);
}

function addPlanRow()
{
    //var tour_duration = document.getElementById('enquiry-tour_duration').value;
    //var MAXIMUM_SLAB = Number(tour_duration) + 2;
     var rowCount = document.getElementById('guest_count_differnt_table').rows.length;
    /*if ( rowCount > MAXIMUM_SLAB ) {
        return;
    } */

    //console.log("Adding row: " + rowCount);
    //console.log("UID: " + unique_plan_id);

    $("#guest_count_differnt_table").append('<tr><td>Plan '+ (rowCount-2) +'</td>' +
        '<td><input uid="'+ unique_plan_id +'" type="hidden" id="plan_uid" name="plan_uid[]" value="'+ unique_plan_id +'"><input type="text" uid="'+ unique_plan_id +'" class="inputTextClass enquiryTable" style="width: 100px;height: 33px" name="adults[]" id="adults_' + unique_plan_id+ '" onchange="updateGuestCountTotal(this)" /></td><td><input uid="'+ unique_plan_id +'" type="text" class="inputTextClass enquiryTable" style="width: 100px;height: 33px" name="children[]" id="children_' + unique_plan_id+ '" onchange="updateGuestCountTotal(this)" /></td><td><button type="button" id="add_age_breakup" onclick="showChildBreakupModal(this)"class="btn btn-sm btn-outline-primary childplus plusbutton" unique_plan_id="' + unique_plan_id + '">\n' +
        ' <img s src="images/plus-button.svg"  aria-hidden="true"></img></button></td><td><span style="color: red;font-size: 12px;display: inline" id="total_guests_' + unique_plan_id +'"> NA </span></td><td> <span style="color: red;font-size: 12px;display: inline" id="span_child_validation_' + unique_plan_id +'" >NA</span></td> <td><button id="remr" onclick="deletePlanRow(this)" class="btn btn-sm bg-danger" style="border-radius: 50%" unique_plan_id="' + unique_plan_id + '" ><i class="fa fa-minus"></i></button></td></tr>');

    unique_plan_id++;
}

function deletePlanRow(row)
{
    var i = row.parentNode.parentNode.rowIndex;
    var uid = $(row).attr('unique_plan_id');
    var rowcount = guest_count_differnt_table.rows.length;
    delete planAgeBreakupMap[uid];
    document.getElementById('guest_count_differnt_table').deleteRow(i);
    for( j = i; j < rowcount-1; j++){
        var table = document.getElementById('guest_count_differnt_table');
        table.rows[j].cells[0].innerHTML = 'Plan' +  j;
    }
}

function validateGuestCount() {

    var guest_count_same = $('input[name="Enquiry[guest_count_same_on_all_days]"]:checked').val();
    var guestCountValid = true;
    var ErrorMessage = "";

    if(guest_count_same == 1) {
        if( parseInt($('#adults_0').val()) <= 0  || $('#adults_0').val().trim().length == 0 ){
            ErrorMessage = "An adult member is required in Plan";
            guestCountValid = false;
        }
        var child_count = parseInt($('#children_0').val());
        if( child_count > 0 )
        {
            //Check Check child breakup
            if (planAgeBreakupMap.hasOwnProperty(0) ) {
                var sumofChildCount = 0;
                var ageBreakupMap = planAgeBreakupMap[0];
                console.log(ageBreakupMap);
                for (var key in ageBreakupMap) {
                    sumofChildCount += parseInt(ageBreakupMap[key]);
                }

                if(sumofChildCount != child_count) {
                    guestCountValid = false;
                    ErrorMessage += '<li>Incorrect child age breakup</li>';
                }
                else {
                    //console.log("Child breakup correct. Good to go");
                }
            }
            else
            {
                ErrorMessage += '<li>Not defined child age breakup</li>';
                guestCountValid = false;
            }
        }
    }
    else
    {
        //console.log(planAgeBreakupMap);
        $('input[name^="children"]').each(function () {
            var uid = $(this).attr('uid');
            var child_count = Number(this.value);

            if(uid != 0) {
                if( parseInt($('#adults_'+ uid).val()) <= 0 || $('#adults_'+ uid).val().trim().length == 0 ){
                    //Error, adult is mandatory
                    ErrorMessage = "An adult member is required in Plan";
                    guestCountValid = false;
                }

                if(Number($('#children_'+uid).val()) > 0) {
                    if (planAgeBreakupMap.hasOwnProperty(uid) ) {
                        var sumofChildCount = 0;
                        var ageBreakupMap = planAgeBreakupMap[uid];
                        for (var key in ageBreakupMap) {
                            sumofChildCount += parseInt(ageBreakupMap[key]);
                        }

                        if(sumofChildCount != child_count) {
                            guestCountValid = false;
                            ErrorMessage += '<li>Incorrect child age breakup</li>';
                        }
                        else {
                            //console.log("Child breakup correct. Good to go2");
                        }
                    }
                    else
                    {
                        guestCountValid = false;
                        ErrorMessage += '<li>Child age break up not defined</li>';
                    }
                }
                else {
                    //No kids
                }
            }
        });

    }

    if(!guestCountValid) {
        $.alert({
            icon: 'fa fa-exclamation-triangle',
            title:  'Validation error!',
            content: ErrorMessage,
            type: 'red',
            typeAnimated: true,
        });
        // toastr.error(ErrorMessage);
    }

    return guestCountValid;
   // $("#form_guest_count").submit();
}
