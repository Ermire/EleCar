<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Elecars') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/font_awesome_5.12.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">

        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgb(255, 255, 255);">
        <a class="text-dark">©2021 Copyright EleCars</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>
