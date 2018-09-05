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
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
        <link rel="stylesheet" type="text/css" href="/styles/header_styles.css">
        <link rel="stylesheet" type="text/css" href="/styles/footer_styles.css">
        <link rel="stylesheet" type="text/css" href="/styles/responsive.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        
    </head>
    <body>
        <div class='super-container'>
            @include('layouts.partials.header')
            @yield('content')
        </div>
        @include('layouts.partials.footer')
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/styles/bootstrap4/popper.js"></script>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
        <script src="/styles/bootstrap4/bootstrap.min.js"></script>
        <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="/plugins/easing/easing.js"></script>
        <script src="/js/bootbox/bootbox.min.js"></script>
        <script src="/plugins/parallax-js-master/parallax.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="/js/custom.js"></script>
        <script src="/js/users_table.js"></script>
        
    </body>
</html>