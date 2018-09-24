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
                            <li class="nav-item second-level">
                                <a class="nav-link text-white" href="#">
                                    All
                                </a>
                            </li>
                            <li class="nav-item second-level">
                                <a class="nav-link text-white" href="#">
                                    New
                                </a>
                            </li>
                            <li class="nav-item second-level">
                                <a class="nav-link text-white" href="{{ URL::to('admin/category') }}">
                                    Category
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>