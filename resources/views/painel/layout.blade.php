<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <link rel="stylesheet" href="{{asset("assets/fontawesome-free/css/all.min.css")}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link rel="stylesheet" href="{{asset("css/style.css")}}">
      <link rel="stylesheet" href="{{asset("css/sb-admin-2.min.css")}}">
        <title>@yield('title') - Locadora de veiculos</title>
    </head>
    <body id="page-top">
        @include("painel/aside")
        <section class="container">
            @yield('content')
        </section>
        @include('painel/footer')
        @stack('scripts')
        <script src="{{asset("assets/jquery/jquery.min.js")}}"></script>
        <script src="{{asset("assets/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/jquery-easing/jquery.easing.min.js")}}"></script>
        <script src="{{asset("assets/js/sb-admin-2.min.js")}}"></script>
    </body>
</html>