@extends('admin.layouts.master')

@section('content')
<div class="row no-gutters py-2">
    <a href="#add" data-toggle="modal" data-function="add" class="btn btn-primary ml-auto" role="button">Add New</a>
</div>
<div class="row no-gutters py-2">
    <div class="table-responsive">
        <table class="datatables table table-stripped table-bordered" style="font-size: 0.9rem;">
            <thead class="thead-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Category 1</td>
                    <td></td>
                    <td class="text-center">
                        <a href="#">
                            <i class="fas fa-check-circle text-success"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="px-1" href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="px-1" href="#">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Category 1</td>
                    <td></td>
                    <td class="text-center">
                        <a href="#">
                            <i class="fas fa-times-circle text-danger"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="px-1" href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="px-1" href="#">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Category 1</td>
                    <td>Category 1</td>
                    <td class="text-center">
                        <a href="#">
                            <i class="fas fa-check-circle text-success"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="px-1" href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="px-1" href="#">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Category 1</td>
                    <td></td>
                    <td class="text-center">
                        <a href="#">
                            <i class="fas fa-times-circle text-danger"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="px-1" href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="px-1" href="#">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Category 1</td>
                    <td></td>
                    <td class="text-center">
                        <a href="#">
                            <i class="fas fa-check-circle text-success"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="px-1" href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="px-1" href="#">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Category 1</td>
                    <td>Category 1</td>
                    <td class="text-center">
                        <a href="#">
                            <i class="fas fa-times-circle text-danger"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="px-1" href="#">
                            <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="px-1" href="#">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div id="add" class="modal zoomIn animated" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Modal title</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="input-id">ID: </label>
                        <input type="text" class="form-control" id="input-id" value="0" readonly>
                    </div>
                    <div class="form-group">
                        <label for="input-name">Name: </label>
                        <input type="text" class="form-control" id="input-name" required>
                    </div>
                    <div class="form-group">
                        <label for="sl-parent-category">Parent Category: </label>
                        <select class="form-control" id="sl-parent-category">
                            <option value="0">No</option>
                            <option value="1">...</option>
                            <option value="2">..</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop