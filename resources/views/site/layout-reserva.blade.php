<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="LocaVeiculo.">
    <meta name="keywords" content="LocaVeiculo" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>@yield('titulo','LocaVeículo')</title>

<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset("site/assets/images/favicon.ico")}}">
    <link rel="apple-touch-icon" href="{{asset("site/assets/images/apple-touch-icon.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset("site/assets/images/apple-touch-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset("site/assets/images/apple-touch-icon-114x114.png")}}">

    <!-- Custom Font
    ================================================== -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto+Slab:400,700" rel="stylesheet">

       <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset("site/assets/css/plugins.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/assets/css/icons.min.css")}}">
    <link rel="stylesheet" href="{{asset("site/assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("site/assets/css/color-schemer.css")}}">  

    <link rel="stylesheet" href="{{asset("site/assets/jquery-ui/jquery-ui.min.css")}}">   
     @yield("style")
</head>

<body>
    <!-- inicio header -->
     @include("site/header")
    <!-- fim header -->
    
     <!-- inicio animacao -->
     @include("site/animacao")
    <!-- fim animacao -->

    <div class="vehicle-single-block vehicle-padding">
        <div class="container">
         @yield('content')
         </div><!-- /.container  -->
    </div><!-- /.Popular Vehicle Block --> 

    <!-- inicio footer -->
     @include("site/footer")
    <!-- fim footer -->
    
        
    <!-- All The JS Files
    ================================================== --> 
    <script src="{{asset("site/assets/js/plugins.min.js")}}"></script>
    <script src="{{asset("site/assets/js/carrent.min.js")}}"></script> <!-- main-js -->

    <script src="{{asset("site/assets/jquery-ui/jquery-ui.min.js")}}"></script> <!-- main-js -->
</body>
</html>