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

    <!-- RS5.4 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset("site/assets/revolution/css/settings.css")}}">
    <!-- RS5.4 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset("site/assets/revolution/css/layers.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("site/assets/revolution/css/navigation.css")}}">
     @yield("style")
</head>

<body>
    <!-- inicio header -->
     @include("site/header")
    <!-- fim header -->
    
     <!-- inicio animacao -->
     @include("site/animacao")
    <!-- fim animacao -->

   <div class="regular-vehicle-block pd-90 bg-gray-color">
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

    <!-- RS5.4 Core JS Files -->
    <script src="{{asset("site/assets/revolution/js/jquery.themepunch.tools.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/jquery.themepunch.revolution.min.js")}}"></script>
  
    <script>
        jQuery(document).ready(function() {
            var $sliderSelector = jQuery(".carrent-slider");
            $sliderSelector.revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "gyges",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: true,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                },
                responsiveLevels:[1400,1368,992,480],
                visibilityLevels:[1400,1368,992,480],
                gridwidth:[1400,1368,992,480],
                gridheight:[600,600,500,380],
                disableProgressBar:"on"
            });
        });
    </script>

   <!-- SLIDER REVOLUTION 5.4 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.video.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.actions.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.migration.min.js")}}"></script>
    <script src="{{asset("site/assets/revolution/js/extensions/revolution.extension.parallax.min.js")}}"></script>
</body>
</html>