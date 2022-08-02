$(document).ready(function() {
    $("#basicdetails-tour_duration").on("input", function() {        
        setTourEndDate();    
     });
    $("#basicdetails-tour_start_date").on("change", function() {
        setTourEndDate();
    });
});

function setTourEndDate(e){
    var end_date = moment($("#basicdetails-tour_start_date").val(), "DD MMM YYYY").add(parseInt($("#basicdetails-tour_duration").val()), 'days').format('DD MMM YYYY');
    $('#tour_end_date').val(end_date);
}