$("#basicdetails-tour_duration").on("input", function() {        
    setTourEndDate();
    console.log("here");
 });   

 function setTourEndDate(e){     
    var end_date = moment($("#basicdetails-tour_start_date").val(), "DD MMM YYYY").add(parseInt($("#basicdetails-tour_duration").val()), 'days').format('DD MMM YYYY');
    $('#tour_end_date').val(end_date);
}

$('#enquiry-guest_count_same_on_all_days :radio').change(function(){        
    // 1 => guest_count_same_on_all_days
    if ( $(this).val() == 1 ){
       // $('#add_plan_div').hide('slide');
        $('#guest_count_differnt').hide('slide');
        $('#guest_count_same').show('slide');
    }
    else {
        //$('#add_plan_div').show('slide');
        $('#guest_count_same').hide('slide');
        $('#guest_count_differnt').show('slide');        
    }  
});