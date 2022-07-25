$(function () {
    const cancellationRowHtml = `
    <div class="row cancellation-detail-item align-items-center mb-2">
        <div class="col-2 fit-width-112px">
            <div class="form-group">
                <input type="text" name="percentage[]" id="" class="form-control input-sh">
            </div>
        </div>
        <div class="col-4 fit-width-215px">
            <p> % of package amount if cancelled </p>
        </div>
        <div class="d-flex col-2 fit-width-105px align-items-center pr-0">
            <div class="form-group mr-3">
                <input type="text" name="from_days[]" readonly="readonly" id="" class="form-control input-sh">
            </div>
            <p> To </p>
        </div>
        <div class="col-2 fit-width-70px">
            <div class="form-group">
                <input type="text" name="to_days[]" id="" class="form-control input-sh">
            </div>
        </div>
        <div class="col-3">
            <p> days before arrival date </p>
        </div>
        <div class="col-1 remove-cancellation-detail align-self-start">
            <div class="delete-icon my-1">
                <i class="far fa-trash-alt"></i>
            </div>
        </div>
    </div>`;
    $('.add-cancellation-detail').on('click', () => {
        $('.cancellation-detail').append(cancellationRowHtml);
        deleteRow();
    });

    function deleteRow() {
        $('.remove-cancellation-detail .delete-icon').each(function () {
            $(this).on('click', () => {
                $(this).closest('.cancellation-detail-item').remove();
            });
        });
    }

    $('input[name="Property[admin_cancellation_type]"]').on('change',  () => {
        var value = $('input[name="Property[admin_cancellation_type]"]:checked').val();
        console.log(value);
        $('.admin-charges-item').hide();
        if(value == 1) {
            $('.lum_sum_amt').fadeIn();
        }
        else if(value == 2) {
            $('.package-amt').fadeIn();
        }
        else if(value = 3) {
            $('.kids-amt').fadeIn();
        }
    });

    $( document ).ready(function() {
        deleteRow();
    });
});
