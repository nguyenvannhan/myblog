$(document).ready(function () {
    $('#add').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal

        var id = button.data('id');
        var modal = $(this);

        if (id == 0) {
            modal.find('.modal-title').html("<b>ADD NEW CATEGORY</b>");
        } else {
            modal.find('.modal-title').html("<b>EDIT CATEGORY</b>");
        }

        $.ajax({
            url: base_url + '/admin/category/get-add-modal/' + id,
            method: 'GET'
        })
        .done(function(data) {
            modal.find('.modal-body').html(data.view);
        })
        .fail(function(xhr, status, error) {
            console.log(this.url);
            console.log(error);
        });
    });
});