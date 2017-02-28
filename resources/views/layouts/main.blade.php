<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fontawesome-4.3.0.min.css') }}"
          media="all"/>

    <link rel="stylesheet" href="{{ URL::asset('css/framework.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all"/>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-inputmask.js') }}"></script>
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

@include('main.includes.header')

@yield('content')

@include('main.includes.footer')

<a id="backtotop" href="#"><i class="fa fa-chevron-up"></i></a>

<!-- Scripts -->
<script src="{{ URL::asset('js/jquery.mobilemenu.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="{{ URL::asset('js/index_script.js') }}"></script>
<script src="{{ URL::asset('js/form_js.js') }}"></script>
<script src="{{ URL::asset('js/sendform.js') }}"></script>
</body>
</html>
