$('#room-number_of_extra_beds').blur(function(){
    if( parseInt($('#room-number_of_extra_beds').val().trim()) > 0 ){
        $('#room-extra_bed_type_id').removeAttr('disabled');
    }
    else {
        $('#room-extra_bed_type_id').attr('disabled', 'disabled');
    }
});