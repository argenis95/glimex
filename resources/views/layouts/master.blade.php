<!DOCTYPE html>
<html>
    <head>
        <title>GLI de México - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="GLI de México, global language instruction para empresas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
        <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="/styles/header_styles.css">
        <link rel="stylesheet" type="text/css" href="/styles/footer_styles.css">
        <link rel="stylesheet" type="text/css" href="/styles/responsive.css">
        <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="/DataTables/Responsive-2.2.2/css/responsive.dataTables.min.css"/>
    </head>
    <body>
        <div class='super-container'>
            @include('layouts.partials.header')
            @if (Session::has('message'))
            <div class="rounded message-log text-white bg-success m-3 p-2 font-weight-bold text-center">
                {{ Session::get('message')}}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="rounded message-log text-white bg-danger m-3 p-2 font-weight-bold text-center">
                {{ Session::get('error')}}
            </div>
            @endif
            @yield('content')
        </div>
        @include('layouts.partials.modal-menu')
        @include('layouts.partials.footer')
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjL-wor4RKTbXlXk0TsEUhhE0VSMaZQA4&callback=initMap"></script>
        <script src="/js/Jquery-3.3.1/jquery-3.3.1.min.js"></script>
        <script src="/styles/bootstrap4/popper.js"></script>
        <script src="/styles/bootstrap4/bootstrap.min.js"></script>
        <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="/plugins/easing/easing.js"></script>
        <script src="/js/bootbox/bootbox.min.js"></script>
        <script src="/plugins/parallax-js-master/parallax.min.js"></script>
        <script type="text/javascript" src="/DataTables/datatables.min.js"></script>
        <script type="text/javascript" src="/DataTables/Responsive-2.2.2/js/dataTables.responsive.min.js"></script>
        <script src="/js/responsive-menu.js"></script>
        <script src="/js/custom.js"></script>
        <script src="/js/users.js"></script> 
        <script src="/js/companies.js"></script>
        <script src="/js/groups.js"></script>
        <script src="/js/notes.js"></script>
        <script src="/js/map.js"></script>
    </body>
</html>