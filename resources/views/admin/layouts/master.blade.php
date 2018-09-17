<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ $pageTitle }} | Admin Dashboard</title>
    
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>