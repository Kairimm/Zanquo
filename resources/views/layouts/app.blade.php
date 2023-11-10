<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Zanquo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
    @if(!request()->is('/menu'))
        <header>
            @include('layouts.navigation')
        </header>
    @endif
        <div class="min-h-screen" id="main">
            <main id="slot">
                {{ $slot }}
            </main>
            <main id="menu" class="hidden">
                <section class="grid grid-cols-2 w-screen h-screen">
                    <img class="col-start-2 h-full w-full object-cover hidden sm:block" src="{{ asset('images/watch_header_1.png') }}" alt="">
                </section>
            </main>
        </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </body>
</html>
