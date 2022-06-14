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
        validateGuestCount();
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

function showChildBreakupModal(row){
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
            $("#age_breakup_table").append('<tr><td><input type="text" class="form-control form-control-sm" name="age[]" value="'+ key + '"/></td><td><input type="text" class="form-control form-control-sm" name="count[]" value="'+ ageBreakupMap[key] + '"/></td><td><button id="remr1" onclick="deleteAgeSplitupRow(this)" class="btn btn-sm bg-danger" style="border-radius: 50%"><i class="fa fa-minus"></i></button></td></tr>');    
        }
    }
    else
    {   
        $("#age_breakup_table").append('<tr><td><input type="text" class="form-control form-control-sm" name="age[]" /></td><td><input type="text" class="form-control form-control-sm" name="count[]" /></td><td></td></tr>');
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

    var sumOfCount = 0;
    var plan_id = $('#plan_id').val();
    var totalChild =  Number($('#children_'+plan_id).val());

    $('input[name^="count"]').each(function () {
        sumOfCount += Number(this.value);
    });

    //console.log("sumOfCount: " + sumOfCount);
    //console.log("totalChild: " + totalChild);

    if(sumOfCount === totalChild ){        
        $('#span_child_validation_'+plan_id).text("OK");        
        $('#child_validation_'+plan_id).val("OK");        
    }
    else if (sumOfCount < totalChild ) {
        $('#span_child_validation_'+plan_id).text("Short by "+ (totalChild - sumOfCount));         
    }
    else if (sumOfCount >totalChild ) {        
        $('#span_child_validation_'+plan_id).text("Excess by "+ (sumOfCount - totalChild)); 
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

    $("#age_breakup_table").append('<tr><td><input type="text" id="'+num+'" class="form-control form-control-sm" name="age[]" /></td><td><input type="text" class="form-control form-control-sm" name="count[]" /></td><td><button id="remr1" onclick="deleteAgeSplitupRow(this)" class="btn btn-sm bg-danger" style="border-radius: 50%"><i class="fa fa-minus"></i></button></td></tr>');
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
    $("#guest_count_differnt_table").append('<tr><td>Plan '+ (rowCount) +'</td><td><input type="hidden" id="plan_uid" name="plan_uid[]" value="'+ unique_plan_id +'"><input type="text" class="inputTextClass" style="width: 100px;height: 33px" name="adults[]" /></td><td><input uid="'+ unique_plan_id +'" type="text" class="inputTextClass" style="width: 100px;height: 33px" name="children[]" id="children_' + unique_plan_id+ '" /></td><td><button type="button" id="add_age_breakup" onclick="showChildBreakupModal(this)"class="btn btn-sm btn-outline-primary" unique_plan_id="' + unique_plan_id + '">\n' +
        '<i class="fa fa-plus"></i></button></td><td><span style="color: red;font-size: 12px;display: inline" id="total_guests_' + unique_plan_id +'"> NA </span></td><td> <span style="color: red;font-size: 12px;display: inline" id="span_child_validation_' + unique_plan_id +'" >NA</span></td> <td><button id="remr" onclick="deletePlanRow(this)" class="btn btn-sm bg-danger" style="border-radius: 50%" unique_plan_id="' + unique_plan_id + '" ><i class="fa fa-minus"></i></button></td></tr>');

    unique_plan_id++;
}

function deletePlanRow(row)
{    
    var i = row.parentNode.parentNode.rowIndex;
    var uid = $(row).attr('unique_plan_id');
    //console.log("UID: " + uid);
    //console.log("Deleting row: " + i);
    delete planAgeBreakupMap[uid];
    document.getElementById('guest_count_differnt_table').deleteRow(i);
}

function validateGuestCount() {
    
    var guest_count_same = $('input[name="Enquiry[guest_count_same_on_all_days]"]:checked').val();     
    console.log(planAgeBreakupMap);
    var childAgeBreakupValid = true;

    if(guest_count_same == 1) {
        if( parseInt($('#adults_0').val()) <= 0 ){
            //Error, adult is mandatory
            console.log("Error, adult is mandatory");
        }
        var child_count = parseInt($('#children_0').val());
        if( child_count > 0 )
        {
            //Check Check child breakup
            console.log("Check child breakup");
            if (planAgeBreakupMap.hasOwnProperty(0) ) {
                var sumofChildCount = 0;
                var ageBreakupMap = planAgeBreakupMap[0];
                console.log(ageBreakupMap);
                for (var key in ageBreakupMap) {
                    sumofChildCount += parseInt(ageBreakupMap[key]);                
                }

                if(sumofChildCount != child_count) {
                    childAgeBreakupValid = false;
                    console.log("Incorrect child breakup");
                }
                else {                        
                    console.log("Child breakup correct. Good to go");
                }                
            }
            else
            {
                childAgeBreakupValid = false;
                console.log("Error Child age break up not defined");
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
                if (planAgeBreakupMap.hasOwnProperty(uid) ) {
                    var sumofChildCount = 0;
                    var ageBreakupMap = planAgeBreakupMap[uid];                
                    for (var key in ageBreakupMap) {
                        sumofChildCount += parseInt(ageBreakupMap[key]);                
                    }

                    if(sumofChildCount != child_count) {
                        childAgeBreakupValid = false;
                        console.log("Incorrect child breakup");
                    }
                    else {                        
                        console.log("Child breakup correct. Good to go");
                    }                
                }
                else
                {
                    childAgeBreakupValid = false;
                    console.log("Error Child age break up not defined");
                }
            }
        });

        return;
        
        for (var key in planAgeBreakupMap) {                    
            var child_count =  Number($('#children_'+key).val());
            console.log("Plan:" + key + " Childs: " + child_count);  

            let age_break_up = planAgeBreakupMap[key];
            var sumofChildCount = 0;
            for (var key2 in age_break_up) {
                sumofChildCount += Number(age_break_up[key2]);               
            }
            
            if(sumofChildCount != child_count) {
                childAgeBreakupValid = false;
                console.log("Incorrect child breakup");
            }
            else {                        
                console.log("Child breakup correct. Good to go");
            } 
        }
    }

    //$("#form_guest_count").submit();
}