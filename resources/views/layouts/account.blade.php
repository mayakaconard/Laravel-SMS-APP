<!DOCTYPE html>
<html lang="en" class="no-ie">

<head>
    <!-- Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>47Admin - Bootstrap Admin Skin</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/app/css/bootstrap.css')}}">
    <!-- Vendor CSS-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/animo/animate animo.css')}}">
    <!-- App CSS-->
    <link rel="stylesheet" href="{{asset('assets/app/css/app.css')}}">
    <!-- Modernizr JS Script-->
    <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="{{asset('assets/vendor/fastclick/fastclick.js')}}" type="application/javascript"></script>
</head>

<body>
    <!-- START wrapper-->
    <div style="height: 100%; padding: 50px 0; background-color: #2c3037" class="row row-table">
        <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">

            @yield('content')

        </div>
    </div>
    <!-- END wrapper-->
    <!-- START Scripts-->
    <!-- Main vendor Scripts-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Animo-->
    <script src="{{asset('assets/vendor/animo/animo.min.js')}}"></script>
    <!-- Custom script for pages-->
    <script src="{{asset('assets/app/js/pages.js')}}"></script>
    <!-- END Scripts-->
</body>

</html>