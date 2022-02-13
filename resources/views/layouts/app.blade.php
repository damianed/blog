<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Damian Escobedo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @production
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-2PK0BZ1TQ3"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-2PK0BZ1TQ3');
            </script>
        @endproduction
    </head>
    <body class="font-sans">
        <div class="min-h-screen text-gray-300 bg-gray-800">
            <!-- Page Heading -->
            <x-header></x-header>

            <!-- Page Content -->
            <main class="w-full px-6 mx-auto lg:px-0 lg:w-2/3 xl:w-1/3">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
