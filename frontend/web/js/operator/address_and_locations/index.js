
$( document ).ready(function() {
    $('.address_select2').select2({
    });
});

$('.country_id').on('change', function() {
    $('.location_id').empty();
    $('.destination_id').empty();
    $.get("index.php?r=operator/locationlist",{ countryID: this.value}, function(response){
   console.log(response)
        $('.location_id')
            .append($('<option >', { value : "" })
                .text("Select Location"));
        $.each(response, function(key, value) {
            $('.location_id')
                .append($('<option>', { value : key })
                    .text(value));
        });

    });
});
$('.location_id').on('change', function() {
    $('.destination_id').empty();
    $.get("index.php?r=operator/destinationlist",{ location_id: this.value}, function(response){
        console.log(response)
        $('.destination_id')
            .append($('<option >', { value : "" })
                .text("Select Destination"));
        $.each(response, function(key, value) {
            $('.destination_id')
                .append($('<option>', { value : key })
                    .text(value));
        });

    });
});
