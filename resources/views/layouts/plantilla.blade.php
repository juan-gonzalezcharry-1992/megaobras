<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1, width=device-width">
    <meta name='author' href="https://github.com/MusculoCreativo" email="juan.gonzalezcharry@gmail.com"
        content='Juan Pablo Gonzalez CHarry - Desarrollador Senior'>
    <link rel="shortcut icon" href="{{ asset('images/logos/favicon.png') }}" type="image/x-icon">
    @yield('meta')
    <title>@yield('title')</title>

    {{-- Style --}}
    @vite('resources/css/app.css')
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>

<body class="antialiased w-full h-full bg-gray-100">
    <div class="flex flex-col h-screen w-screen">
        <header class="z-20">
            @include('components.navBar')
        </header>
        <main class="flex-grow z-0">
            @yield('slider')
            {{-- @yield('content')
            <a href="https://api.whatsapp.com/send?phone=57312%20431%208586" target="_blank" rel="noopener noreferrer">
                <div class="btn-wsp"></div>
            </a> --}}
        </main>
        {{-- <footer class="w-full z-10">
            <x-footer></x-footer>
        </footer> --}}

    </div>
    {{-- @yield('js') --}}
</body>

</html>
