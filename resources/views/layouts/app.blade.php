<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- font awesome icons -->
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-200 lg:flex" x-data="{isNavOpen:false}">
            @include('layouts.navigation')

            <div class="relative z-0 lg:flex-grow">
                @include('layouts.header')

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>

            </div>



        </div>
    </body>
</html>
