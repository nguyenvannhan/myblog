@extends('admin.layouts.master')

@section('content')
<div class="row no-gutters py-2">
    <a href="#add" data-toggle="modal" data-id="0" class="btn btn-primary ml-auto" role="button">Add New</a>
</div>
@if(session('d_action'))
<div class="row no-gutters py-2 message-div">
    @php $action = session('d_action'); @endphp
    <div class="alert {{ $action['result'] ? 'alert-success' : 'alert-danger' }}">
        {{ $action['error'] }}
    </div>
</div>
@endif

<div class="row no-gutters py-2">
    <div class="table-responsive">
        <table class="datatables table table-stripped table-bordered" style="font-size: 0.9rem;">
            <thead class="thead-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Categories</th>
                    <th>User</th>
                    <th>Last Update</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td class="text-left"> Lập trình Hướng đối tượng với PHP</td>
                    <td>Lập trình hướng đối tượng</td>
                    <td>Nhan</td>
                    <td>Nhan</td>
                    <td>Nhan</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop