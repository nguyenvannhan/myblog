@extends('admin.layouts.master')

@section('content')
<div class="row no-gutters py-2">
    <a href="#add" data-toggle="modal" data-function="add" class="btn btn-primary ml-auto" role="button">Add New</a>
</div>
<div class="row no-gutters py-2">
    <div class="table-responsive">
        <table class="datatables table table-stripped table-bordered">
            <thead class="thead-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Category 1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Category 1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Category 1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Category 1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Category 1</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Category 1</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="add" class="modal zoomIn animated" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Modal title</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@stop