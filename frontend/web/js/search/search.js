
$(".sort-dropdown-item").click(function() {
    var sortVal =  $(this).attr("data-sort")

$(".sort-value").val(sortVal);

    if (sortVal){
        $('#enquiry_room_search').submit();
    }

})

//Make property favourite
$(".btn-favorite").click(function() {
    let propID =  $(this).attr("data-property-id");
    let Val =  $(this).val();

    let data = new FormData();

    data.append('property_id', propID);
    data.append('value', Val);

    $.ajax({
        type: "post",
        enctype: 'multipart/form-data',
        url: "index.php?r=search/makepropertyfavourite",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 800000,
        success: function (response) {

            if (response.status == 0) {
                console.log(response.data);
                $(".fav-check"+propID).attr('checked', true)
                toastr.success(response.message);
            }else {
                $(".fav-check"+propID).attr('checked', false)
                toastr.info(response.message);
            }
        },
        error: function (e) {
            // $("#overlay").fadeOut(300);

            console.log(e.responseText);
            toastr.error("Server error: " + e.responseText);
        }
    });

});

//single room select
$(".room-checkbox").change(function() {
    var roomID =  $(this).attr("data-room-id")
    var AccommodationID =  $(this).attr("data-accomodation-id")
    var Key =  $(this).attr("data-key")
    var infant_count =  $('#infant_count' + AccommodationID).val();   // infant pax count prop policy applied
    var child_count = $('#child_count' + AccommodationID).val();   // child pax count prop policy applied
    var adultCount = $('#adult_count' + AccommodationID).val();    // adult pax count prop policy applied
    var slab_id = $('#slab_id' + AccommodationID).val();    // Slab ID for this date applied
    var room =  $('#room-value' +roomID + AccommodationID).val();   // Room rate for this date applied
    var eba =  $('#eba-value' +roomID + AccommodationID).val();    // EBA rate for this date applied
    var cwb =  $('#cwb-value'+roomID + AccommodationID).val();   // CWB rate for this date applied
    var cnb =  $('#cnb-value'+roomID + AccommodationID).val();    // CNB rate for this date applied
    var sgl =  $('#sgl-value' +roomID+ AccommodationID).val();   // SGL rate for this date applied


    $(".check-active"+roomID+Key).addClass("active");
    if(this.checked) {

        var data = new FormData();

        var enquiryID = $('#enquiry_id').val();

        data.append('room_id', roomID);
        data.append('enquiry_id', enquiryID);
        data.append('infant_count', infant_count);
        data.append('child_count',child_count);
        data.append('adultCount', adultCount);
        data.append('AccommodationID', AccommodationID);
        data.append('slab_id', slab_id);
        data.append('room', room);
        data.append('eba', eba);
        data.append('cwb', cwb);
        data.append('cnb', cnb);
        data.append('sgl', sgl);

        $.ajax({
            type: "post",
            enctype: 'multipart/form-data',
            url: "index.php?r=search/enquirysingleroomselectioncreate",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (response) {

                if (response.status == 0) {
                    console.log(response.data);

                    // toastr.success(response.message);
                }
            },
            error: function (e) {
                // $("#overlay").fadeOut(300);

                console.log(e.responseText);
                // toastr.error("Server error: " + e.responseText);
            }
        });


    }else{

        $(".check-active"+roomID+Key).removeClass("active");
        var data = new FormData();

        var enquiryID = $('#enquiry_id').val();

        data.append('room_id', roomID);
        data.append('enquiry_id', enquiryID);
        data.append('AccommodationID', AccommodationID);

        $.ajax({
            type: "post",
            enctype: 'multipart/form-data',
            url: "index.php?r=search/deleteselectedrooms",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (response) {

                if (response.status == 0) {
                    // console.log(response.data);

                    toastr.error(response.message);
                }
            },
            error: function (e) {
                // $("#overlay").fadeOut(300);

                console.log(e.responseText);
                toastr.error("Server error: " + e.responseText);
            }
        });

    }

});


//Select all rooms
$(".room-check-box").change(function() {
    var ID = this.id;
    var roomID = $('#' + ID).val();

    $('.plan-'+roomID).attr('checked', true);
    $(".check-active-all"+roomID).addClass("active");
    var enq_acc_ids = [];

    $('.accommodation_id:checked').each(function (){
        enq_acc_ids.push($(this).val());
    });
    console.log(enq_acc_ids);
    var Accommodation_policy = [];
    enq_acc_ids.forEach(function (value) {
        Accommodation_policy.push({
            accommodation_id: value,  //accommodation id
            infant_count: $('#infant_count' + value).val(),   // infant pax count prop policy applied
            child_count: $('#child_count' + value).val(),    // child pax count prop policy applied
            adultCount: $('#adult_count' + value).val(),    // adult pax count prop policy applied
            slab_id : $('#slab_id' + value).val(),    // Slab ID for this date applied
            room :  $('#room-value' + roomID+ value).val(),    // Room rate for this date applied
            eba :  $('#eba-value' + roomID+ value).val(),    // EBA rate for this date applied
            cwb :  $('#cwb-value' + roomID+ value).val(),    // CWB rate for this date applied
            cnb :  $('#cnb-value' + roomID+ value).val(),    // CNB rate for this date applied
            sgl :  $('#sgl-value'+ roomID + value).val(),    // SGL rate for this date applied
        });
    });
    console.log(Accommodation_policy);
    if(this.checked) {
        var data = new FormData();

        var enquiryID = $('#enquiry_id').val();
        var destinationID = $('#destination').val();

        data.append('room_id', roomID);
        data.append('enquiry_id', enquiryID);
        data.append('destination_id', destinationID);
        data.append('accommodation_policy', JSON.stringify(Accommodation_policy));
        // data.append("_csrf", yii.getCsrfToken());

        $.ajax({
            type: "post",
            enctype: 'multipart/form-data',
            url: "index.php?r=search/enquiryroomselectioncreate",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (response) {

                if (response.status == 0) {
                    console.log('response.status');

                    toastr.success(response.message);
                }

                else {
                    $('#' + ID).prop('checked', false); // Unchecks it
                    toastr.warning(response.message);
                }
            },
            error: function (e) {
                // $("#overlay").fadeOut(300);

                console.log(e.responseText);
                toastr.error("Server error: " + e.responseText);
            }
        });
    }

});



$("#destination").on('change', function() {

    $('.advanced-search').show();
    var destination_id =this.value ;
    var destinationName = $( "#destination option:selected" ).text();
    var enquiryID = $('#enquiry_id').val();

    $("#destination-title").text(destinationName);
    $.get("index.php?r=search/destinationdates",{  destination_id: destination_id,
        enquiry_id: enquiryID,}, function(response){
        if (response.status == 0) {
            console.log(response.data);
            $("#destination-dates").empty();
            $("#selected-dates").empty();
            $.each(response.data, function (key, value)
            {
                if(value['status'] === 1) {
                    $("#destination-dates").append(
                        '<tr><td>' +
                        (parseInt(key) + 1)
                        + '</td><td>' +

                        moment(value['day']).format('DD MMM') + ' | ' + moment(value['day']).format('YY') + ' - ' + moment(value['day']).format('dddd')

                        // 'DD MMM | YY - WK Day'
                        + '</td><td>' +
                        ' Required'
                        + '</td><td>' +
                        '<div class="custom-control custom-checkbox">' +
                        '<input checked name="accommodation_id[]" id="destination-' + key + '" type="checkbox" class="custom-control-input" value="' + value['id'] + '"/>' +
                        '<label class="custom-control-label ml-1" For="destination-' + key + '"> </label>' +
                        '</div></td> </tr>'
                    )

                    $('#selected-dates').append(
                        '                            <div class="d-flex col-md-2 date-range has-divider justify-content-between text-center">\n' +
                        '                                <p>\n' +
                        '                                    <strong>'+moment(value['day']).format('DD MMM Y')+'</strong>\n' +
                        '                                </p>\n' +
                        '                            </div>\n'
                    )

                }
                if(value['status'] === 0) {

                    $("#destination-dates").append(
                        '<tr class="invalid">\n' +
                        '    <td>'+ (parseInt(key) + 1)+' </td>\n' +
                        '    <td> '+ moment(value['day']).format('DD MMM') + ' | ' + moment(value['day']).format('YY') + ' - ' + moment(value['day']).format('dddd')
                        +'</td>\n' +
                        '    <td> Not Required</td>\n' +
                        '    <td></td>\n' +
                        '</tr>'
                    )
                }
            })

        }
    });
});

