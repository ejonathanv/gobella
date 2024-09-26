<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="Energy Supplements, Performance Boosters, Lifestyle Enhancement, Energy Boost, Vitamin Supplements, Performance Supplements, Natural Energy, Focus and Energy, Daily Energy Formula, Wellness Supplements, Vitality Boosters, Health and Energy, Energy and Performance, Natural Performance Enhancers, Supplement for Energy, Optimal Performance Supplements, Enhanced Vitality, Active Lifestyle Supplements, Healthy Energy Levels, Nutritional Energy Support, Go Bella Wellness, Go Bella Wellness Supplements, Go Bella Energy, Go Bella Performance, Go Bella Wellness Products">
        <meta name="description" content="Power Your Lifestyle with Go Bella Wellness, a potent blend of vitamins, selenium, and L-theanine in a tasty, orange-flavored supplement. Specially formulated to support your active lifestyle, it offers a healthy, sugar-free way to stay energized and focused.">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

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
        <script src="https://kit.fontawesome.com/1b2e97ddb1.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/wow.min.js') }}" defer></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" x-init="new WOW().init();">
        <!-- HEADER -->
        <x-landing-page-header />
        {{ $slot }}
        <!-- SUSCRIPTION FORM -->
        <x-landing-page-suscription-form />
        <!-- FOOTER -->
        <x-landing-page-footer />
    </body>
</html>
