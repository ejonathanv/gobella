<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"  />
        <link rel="stylesheet" href="https://use.typekit.net/dyn5hye.css">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/wow.min.js') }}" defer></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" x-init="new WOW().init();">
        {{ $slot }}
    </body>
</html>
