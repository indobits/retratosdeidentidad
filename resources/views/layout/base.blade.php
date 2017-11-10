<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Retratos de Identidad | @yield('title')</title>
        <meta name="description" content="@yield('descripcion')">
        <meta property="og:title" content="Retratos de Identidad | @yield('title')">
        <meta property="og:image" content="{{ asset('img/retratos.jpg')}}">
        <meta property="og:description" content="@yield('descripcion')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/main.css?1.1.30')}}">
        <link rel="stylesheet" href="{{ asset('css/swiper.css')}}">
        @yield('css')
        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

       
        @yield('contenido')
 
    
   
        <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>

        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vendor/swiper.js') }}"></script>
        <script src="{{ asset('js/vendor/swiper.min.js') }}"></script>
        <script src="{{ asset('js/vendor/swiper.jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/swiper.jquery.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>

        <script type="text/javascript">
        $(document).ready(function() {

          @yield('js')

        });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        
    </body>
</html>
