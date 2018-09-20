@extends('auth.master')

@section('content') 
<div class="container h-100">
    <div class="row h-100">
        <div class="col-12 col-sm-4 offset-sm-4 d-flex align-items-center">
            <div class="col-12 w-100 bg-white py-3 rounded">
                <h2 class="text-center py-3">GIA LANG BLOG</h2>
                <form method="POST" action="{{ route('post_login_route') }}">
                    @csrf
                    @if(session('error')) 
					<br/>
					<p class="text-danger bg-white text-center">{{ session('error') }}</p>
					@endif
                    <div class="form-group">
                        <label for="ip_email">Email: </label>
                        <input type="text" class="form-control" id="ip_email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="ip_password">Password: </label>
                        <input type="password" class="form-control" id="ip_password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block btn-primary mb-2">Login</button>
                        <a href="#">Go to home page</a>
                    </div>
                </form>   
            </div>
        </div>
    </div>
</div>
@stop