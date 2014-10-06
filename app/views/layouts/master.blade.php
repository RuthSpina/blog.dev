<!DOCTYPE html>
<html>
<head>
    <title> My Laravel site</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    @yield('top-script')
</head>
    <body>
        <!---standard heading-->
        <!--nav bar-->
        @yield('content')
        <!--footer-->
        <!--javascript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        @yield('bottom-script')
    </body>
</html>
