<!DOCTYPE html>
<html>
<head>
    <title> R. Spina</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!--CDN link for the latest TweenMax-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"/></script>
    @yield('top-script')
</head>
<body>
    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
    <!---standard heading-->
    <!--nav bar-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="http://blog.dev/resume">Resume</a></li>
            <li><a href="http://blog.dev/portfolio">Portfolio</a></li>
        </ul>
    </nav>
    @yield('content')
    <!--footer-->
    <!--javascript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/text.js"></script>
    @yield('bottom-script')
</body>
</html>
