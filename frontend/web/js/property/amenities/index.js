const complimentaryHtml = `
    <div class="d-flex form-group complimentary-item align-items-center">
        <div class="form-material w-100 mr-2">
            <input type="text" name="complimentary_input[]" id="" class="form-control w-100" placeholder="Amenities">
        </div>
        <div class="d-flex remove-complimentary align-self-start" role="button">
            <div class="delete-icon my-1">
                <i class="fas fa-minus text-white"></i>
            </div>
        </div>
    </div>
`;

$('.add-complimentary').on('click', () => {
    $('.complimentary-list').append(complimentaryHtml);
    deleteComplimentary();
});

function deleteComplimentary() {
    $('.remove-complimentary .delete-icon').each(function () {
        $(this).on('click', () => {
            $(this).closest('.complimentary-item').remove();
        });
    });
}
