<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- heading -->
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/posts">Ruth's Blog</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if ($_SERVER['REQUEST_URI'] == '/about')

                    <!-- route object laravel -->
                    <li class='active'>
                        <a href="/about">About</a>
                    </li>
                    @else
                    <li>
                        <a href="/about">About</a>
                    </li>
                    @endif
                    @if ($_SERVER['REQUEST_URI'] == '/resume')
                    <li class='active'>
                        <a href="/resume">Resume</a>
                    </li>
                    @else
                    <li>
                        <a href="/resume">Resume</a>
                    </li>
                    @endif
                    @if ($_SERVER['REQUEST_URI'] == '/portfolio')
                    <li class='active'>
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    @else
                    <li>
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div> <!-- END NAV CONTAINER -->
    </nav>

    <div class='container'>
        <div class='row'>

            <!-- this shows a message after submitting a post -->
            @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif

            <!-- PAGE MAIN CONTENT -->
            @yield('content')

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div> <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                            </ul>
                        </div> <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                                <li><a href="#">Category Name</a></li>
                            </ul>
                        </div> <!-- /.col-lg-6 -->
                    </div> <!-- /.row -->
                </div>
        <hr>
        <footer>
            </div> <!-- END FOOTER ROW -->
        </footer>

    </div> <!-- END CONTAINER -->

    @yield('bottom-script')

</body>
</html>
