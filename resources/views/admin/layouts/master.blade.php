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
            <div class="col-12 col-sm-3 col-md-2 bg-dark" id="sidebar">
                <div class="row">
                    <nav class="navbar navbar-dark bg-dark px-sm-0 w-100">
                        <a class="navbar-brand text-white text-center font-weight-bold text-uppercase" href="#">
                            GiaLang Blog
                        </a>
                        <button class="navbar-toggler d-block d-sm-none" type="button" data-toggle="collapse" data-target="#side-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon text-white"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="side-menu">
                            <ul class="nav flex-column">
                                <li class="nav-item first-level">
                                    <a class="nav-link text-white" href="#">
                                        <i class="fas fa-home"></i> Home
                                    </a>
                                </li>
                                <li class="nav-item first-level">
                                    <a class="nav-link text-white" data-toggle="collapse" href="#post-child" role="button" aria-expanded="false" aria-controls="post-child">
                                        <i class="far fa-newspaper"></i> Posts
                                    </a>
                                    <div class="collapse" id="post-child" >
                                        <ul class="nav flex-column p-0 menu-children">
                                            <li class="nav-item seconde-level">
                                                <a class="nav-link text-white" href="#">
                                                    All
                                                </a>
                                            </li>
                                            <li class="nav-item seconde-level">
                                                <a class="nav-link text-white" href="#">
                                                    New
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col">
                
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