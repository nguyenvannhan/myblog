$(document).ready(function () {
    $('.message-div').delay('2000').slideUp();

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
    
    $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        
        var id = button.data('id');
        var modal = $(this);
        
        $.ajax({
            url: base_url + '/api/category/get-from-id/' + id,
            method: 'GET'
        })
        .done(function(data) {
            var categoryItem = data.categoryItem;

            var parentName = (categoryItem.get_parent_category) ? categoryItem.get_parent_category.name : '';

            var htmlData = "Do you really want to delete this category?<br/><br/>"; 
            htmlData += "<table class='table table-bordered'>";
            htmlData += "<tr><td><b>ID</b></td><td>" + categoryItem.id + "</td><tr>";
            htmlData += "<tr><td><b>Name</b></td><td>" + categoryItem.name + "</td><tr>";
            htmlData += "<tr><td><b>Parent Category</b></td><td>" + parentName + "</td></tr>";
            htmlData += "</tr>";
            htmlData += "</tbody>";
            htmlData += "</table>";
            htmlData += "<input type='hidden' name='id' value='" + categoryItem.id +"'>";

            modal.find('.modal-body').html(htmlData);
        })
        .fail(function (xhr, status, error) {
            console.log(this.url);
            console.log(error);
        });
    });
});