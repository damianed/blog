<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Damian Escobedo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans">
        <div class="min-h-screen text-gray-300 bg-gray-800">
            <!-- Page Heading -->
            <x-header></x-header>

            <!-- Page Content -->
            <main class="w-full px-6 mx-auto lg:px-0 lg:w-1/3">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
