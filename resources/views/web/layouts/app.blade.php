<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | FruttyLooks</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}" type="text/css">
</head>


 <body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
     @include('web.includes.header')
     </header>

     <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="{{ asset('web/img/hero-bg.jpg') }}">
        @include('web.includes.banner')
    </section>
    <!-- Hero Section End -->

        @yield('content')

        <!-- Blog Section Begin -->
    <div class="blog-section latest-blog spad">
        @include('web.includes.blog')
    </div>
    <!-- Blog Section End -->

        <!-- Footer Section Begin -->
    <section class="footer-section">
        @include('web.includes.footer')
    </section>

     <!-- Js Plugins -->
     <script src="{{ asset('web/js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('web/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('web/js/mixitup.min.js') }}"></script>
     <script src="{{ asset('web/js/jquery.slicknav.js') }}"></script>
     <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('web/js/main.js') }}"></script>
 </body>

 </html>
