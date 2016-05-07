<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- yield title -->
    <title>
        @yield('title')
    </title>

    
    <!-- include css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/app.css">

    <!-- yield foot head -->
    @yield('head')
</head>

<body id="app-layout">

    @section("navbar")
    @include("partials.navbar")
    @show

    @yield('content')

    <!-- go_top -->
    <a href="#" id="goTop" class="btn btn-lg btn-info">Go Top</a>

    <!--include script -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/app.js"></script>
    <!-- Bao loi input -->

    @section("footer")
    @include("partials.footer")
    @show

    @if (count($errors) > 0)
        <script type="text/javascript">
            var t = "@foreach($errors->all() as $e){{ $e }} @endforeach";
            swal("Whoops!", t, "error");
        </script>
    @endif

</body>
</html>
