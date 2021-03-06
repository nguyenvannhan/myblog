@extends('auth.master')

@section('content') 
<div class="container h-100">
    <div class="row h-100">
        <div class="col-12 col-sm-4 offset-sm-4 d-flex align-items-center">
            <div class="col-12 w-100 bg-white py-3 rounded">
                <h2 class="text-center py-3">GIA LANG BLOG</h2>
                <form>
                    <div class="form-group">
                        <label for="ip_name">Name: </label>
                        <input type="text" class="form-control" id="ip_name" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="ip_email">Email: </label>
                        <input type="text" class="form-control" id="ip_email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="ip_password">Password: </label>
                        <input type="password" class="form-control" id="ip_password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="ip_password">Role: </label>
                        <select class="form-control" name="role">
                            @foreach ($roleList as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block mb-2">Register</button>
                        <a href="{{ URL::to('/') }}">Back to Home Page</a>
                    </div>
                </form>   
            </div>
        </div>
    </div>
</div>
@stop