$(".select2").select2({
    minimumResultsForSearch: -1,
    dropdownAutoWidth: true,
    width: "100%",
});

$('.dropdown-menu').on('click', (e) => {
    e.stopPropagation();
});

$(".datepicker").datepicker({
    format: "dd/mm/yyyy",
    startDate: new Date(),
    autoclose: true
}).focus(function() {
    $(".ui-datepicker-prev, .ui-datepicker-next").remove();
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

$('#searchModal').modal();
$('#searchModal').modal('show');



$('.rooming-type').each(function (index, element) {
    $(this).on('change', () => {
        $(this).val() == 'auto-rooming' ? $('#auto-rooming-modal').modal('show') : $('#manual-rooming-modal').modal('show');
    });
});