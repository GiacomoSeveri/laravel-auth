<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('cdn')

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('includes.navbar')

    <div id="app">
        <main class="black-hole">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
