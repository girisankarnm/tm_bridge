<?php
frontend\assets\AppAsset::register($this);
$this->registerCssFile('/css/ppe/style.css');
$this->registerCssFile('/css/datepicker.css');
$this->registerCssFile('/css/users/user-styles.css');
$this->registerCssFile('/css/booking-request/booking-request.css');
$this->registerCssFile('/css/custom-style.css');
$this->registerCssFile('/css/datepicker/jquery-ui.css');
$this->registerCssFile('/css/messages/messages.css');
$this->registerCssFile('/css/data-table.css');
?>
<div class="wrapper">
    <div class="room-booking-header">
        <div class="room-booking-header-left">
            <div class="heading border-none">Messages</div>
        </div>
        <div class="room-booking-header-right">
            <div class="message-tabs">
                <a href="#">Booking <span class="notify-msg">2</span></a>
                <a href="#">Block <span class="notify-msg">2</span></a>
                <a href="#">SRR <span class="notify-msg">2</span></a>
                <a href="#">Check Availabilty <span class="notify-msg">2</span></a>
                <a href="#" class="active">Message <span class="notify-msg">2</span></a>
            </div>
        </div>
    </div>
    <div class="datatable-wrapper">
        <table id="example" class="mdl-data-table" style="width:100%">
            <thead>
                <tr>
                    <th>Ref Number</th>
                    <th>Profile Name</th>
                    <th>Inquiry ID</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>AB67788-353-11A</td>
                    <td>Kallada Tours and Travells</td>
                    <td>AB67788-353-11A</td>
                    <td>
                        <div class="status-select-wrapper">
                            <select name="" id="" class="status-select status-text status-paid">
                                <option value="">Paid</option>
                                <option value="">Pending</option>
                                <option value="">Due</option>
                                <option value="">Over Due</option>
                                <option value="">Partially Paid</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="view-info-area justify-center">
                            <button class="info-btn"><img src="images/user-icons/info-icon.svg" alt=""></button>
                            <button class="eye-btn"><img src="images/user-icons/eye-icon.png" alt=""></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AB67788-353-11A</td>
                    <td>Kallada Tours and Travells</td>
                    <td>AB67788-353-11A</td>
                    <td>
                        <div class="status-select-wrapper">
                            <select name="" id="" class="status-select status-text status-paid">
                                <option value="">Paid</option>
                                <option value="">Pending</option>
                                <option value="">Due</option>
                                <option value="">Over Due</option>
                                <option value="">Partially Paid</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="view-info-area justify-center">
                            <button class="info-btn"><img src="images/user-icons/info-icon.svg" alt=""></button>
                            <button class="eye-btn"><img src="images/user-icons/eye-icon.png" alt=""></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>AB67788-353-11A</td>
                    <td>Kallada Tours and Travells</td>
                    <td>AB67788-353-11A</td>
                    <td>
                        <div class="status-select-wrapper">
                            <select name="" id="" class="status-select status-text status-paid">
                                <option value="">Paid</option>
                                <option value="">Pending</option>
                                <option value="">Due</option>
                                <option value="">Over Due</option>
                                <option value="">Partially Paid</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="view-info-area justify-center">
                            <button class="info-btn"><img src="images/user-icons/info-icon.svg" alt=""></button>
                            <button class="eye-btn"><img src="images/user-icons/eye-icon.png" alt=""></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.material.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.material.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        autoWidth: false,
        columnDefs: [{
            targets: ['_all'],
            className: 'mdc-data-table__cell',
        }, ],
    });
});
</script>



<script>
// $(window).scroll(function() {
//     console.log($(this).scrollTop())
//     if ($(this).scrollTop() > 50) {
//         $('.fix-this-div').addClass('newClass');
//     } else {
//         $('.fix-this-div').removeClass('newClass');
//     }
// });
// window.addEventListener("scroll", function() {
//     console.log(123)
// }, false);
window.addEventListener('scroll', function() {
    console.log('Scroll event');
});

const divs = document.querySelectorAll('.scroll-table');
divs.forEach(div => div.addEventListener('scroll', e => {
    divs.forEach(d => {
        // d.scrollTop = div.scrollTop;
        d.scrollLeft = div.scrollLeft;
        d.scrollRight = div.scrollRight;
    });
}));


// function moveToLeft() {
//     divs.forEach(element => {
//         element.scrolRight -= (element.offsetWidth);
//     });
// }

// function moveToRight() {
//     divs.forEach(element => {
//         element.scrollLeft += (element.offsetWidth);
//     });
// }

function moveToRight() {
    event.preventDefault();
    $('#scroll-table-1').animate({
        scrollLeft: "+=1000px"
    }, "slow");
}

function moveToLeft() {
    event.preventDefault();
    $('.scroll-table').animate({
        scrollLeft: "-=1000px"
    }, "slow");
}
// $(document).ready(function() {
//     $(".bulk-edit-btn").click(function() {
//         $(".right-side-popup-wrapper").toggleClass("bulk-edit-on");
//     });
// });
var flag = 0;

function bulkEdit() {
    $('.right-side-popup-wrapper').addClass("bulk-edit-on");
    // $('.datepicker').addClass("datepicker-on");
    flag = 0;
    $('.date').datepicker('show')
}

function popClose() {
    $('.right-side-popup-wrapper').removeClass("bulk-edit-on");
    // $('.datepicker').removeClass("datepicker-on");
    flag = 1;
    $('.date').datepicker('hide')
}
// $('.month-picker').datepicker({
//     multidate: false,
//     format: "MM-yyyy",
//     viewMode: "months",
//     minViewMode: "months"
// });
$('.date').datepicker({
    multidate: true,
    format: 'dd-mm-yyyy'
});
// $('.date').datepicker('show')
$('.date').datepicker()
    .on('hide', function(e) {
        if (flag === 0) {
            $('.date').datepicker('show')
        }
    });
$(function() {
    $(".month-picker").datepicker({
        multidate: false,
        format: "MM-yyyy",
        viewMode: "months",
        minViewMode: "months",
    }).datepicker('update', new Date());
});

function viewDetails(id) {
    $(`#matching-boxes-main-${id}`).slideToggle(500);
    $(`#view-details-btn-0${id}`).toggleClass(`view-details-on`);
}

// $(window).on('load', function() {
//     $('#BookingConfirmationModal').modal('show');
// });
$(document).ready(function() {
    $(".comment-btn").click(function() {
        $(".comment-box-main").slideToggle();
    });
    $(".activity-btn").click(function() {
        $(".show-activity-wrapper").slideToggle();
    });
    $(function() {
        // $("#datepicker").datepicker();
        $(".datepicker").datepicker();
    });

});

// jQuery(document).ready(function($) {
//     $(".show-more-btn").click(function(e) {
//         $(".activity-chat-single:hidden").slice(0, 3).fadeIn();
//         if ($(".activity-chat-single:hidden").length < 1) $(this).fadeOut();
//     })
// })
</script>