$(document).ready(function () {
    $('#add').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal

        var funcData = button.data('function');
        var modal = $(this);

        if (funcData == 'add') {
            modal.find('.modal-title').html("<b>ADD NEW CATEGORY</b>");
        }

        if (funcData == 'edit') {
            modal.find('.modal-title').html("<b>EDIT CATEGORY</b>");
        }
    });
});