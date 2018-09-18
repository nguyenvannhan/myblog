<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ $pageTitle }} | Admin Dashboard</title>
    
    {{-- Bootstrap 4.0.1 CSS --}}
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    {{-- FontAwesome 5.3.1 --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    {{-- DataTable CSS 1.10.19 --}}
    {{-- <link rel="stylesheet" href="{{ asset('vendors/datatables/datatables.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('vendors/datatables/plugins/css/dataTables.bootstrap4.min.css') }}">
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('_admin/css/home.css') }}">
</head>
<body class="bg-light">
    
    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-12 col-sm-3 col-md-2 bg-dark" id="sidebar">
                @include('admin.includes.sidebar')
            </div>
            {{-- End Sidebar --}}
            <div class="col">
                {{-- Top Bar --}}
                <div class="row d-none d-sm-flex">
                    <div class="col-12 justify-content-between flex-row d-flex p-0" id="topbar">
                        @include('admin.includes.topbar')
                    </div>
                </div>
                {{-- End Top Bar --}}
                
                {{-- Content --}}
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
                {{-- End Content --}}
            </div>
        </div>
    </div>
    
    {{-- Jquery --}}
    <script src="{{ asset('vendors/jquery/jquery-3.3.1.min.js') }}"></script>
    {{-- Popperjs for BS4 --}}
    <script src="{{ asset('js/popper.min.js') }}"></script>
    {{-- BS4 --}}
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- DataTables --}}
    <script src="{{ asset('vendors/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables/plugins/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables/plugins/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('_admin/js/main.js') }}"></script>

    {{ isset($scripts) ? $scripts : '' }}
</body>
</html>