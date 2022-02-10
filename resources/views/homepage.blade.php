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
            <x-header></x-header>
        </div>
    </body>
</html>
