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
use yii\helpers\Url;
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
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
<!--<script src="https://cdn.datatables.net/1.13.1/js/dataTables.material.min.js"></script>-->
<script>
    $(document).ready(function() {

        /* Formatting function for row details - modify as you need */
        function format(d) {
            // `d` is the original data object for the row
            return (
                '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                '<tr>' +
                '<td>Full name:</td>' +
                '<td>' +
                d.name +
                '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extension number:</td>' +
                '<td>' +
                d.extn +
                '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extra info:</td>' +
                '<td>And any further details here (images etc)...</td>' +
                '</tr>' +'<tr>' +
                '<td>Extra info:</td>' +
                '<td>And any further details here (images etc)...</td>' +
                '</tr>' +'<tr>' +
                '<td>Extra info:</td>' +
                '<td>And any further details here (images etc)...</td>' +
                '</tr>' +'<tr>' +
                '<td>Extra info:</td>' +
                '<td>And any further details here (images etc)...</td>' +
                '</tr>' +
                '</table>'
            );
        }


        var table = $('#example').DataTable({
            ajax: {
                "type" : "GET",
                "url" : "index.php?r=property/data",
                "dataSrc": function ( json ) {
                    //Make your callback here.
                    // alert("Done!");
                    return json.data;
                }
            },
            columns: [
                {
                    className: 'dt-control mdc-data-table__cell',
                    orderable: false,
                    data: null,
                    defaultContent: '',
                },
                { data: 'name' },
                { data: 'position' },
                { data: 'office' },
                { data: 'salary' },
                {
                    data: null,
                    className: "dt-center editor-edit",
                    defaultContent: ' <a href="<?= Url::toRoute(['/property/ppe11', 'id' => '"+data+"' ]) ?>" class="info-btn"><img src="images/user-icons/info-icon.svg" alt=""></a>',
                    orderable: false
                },
                {
                   data: null,
                   className: "dt-center editor-delete",
                   defaultContent: ' <a class="eye-btn"><img src="images/user-icons/eye-icon.png" alt=""></a>',
                   orderable: false
                }
            ],


            order: [[1, 'asc']],
        });

        // Add event listener for opening and closing details
        $('#example tbody').on('click', 'td.dt-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
            }
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
