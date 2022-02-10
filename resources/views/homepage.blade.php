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
        <main class="w-full px-6 mx-auto lg:px-0 lg:w-1/3">
            @foreach($posts as $post)
                <article class="mt-6">
                    <a class="font-semibold text-lg hover:text-blue-300" href="/blog/{{$post->slug}}">{{ $post->title }}</a>
                    <p class="text-sm opacity-50">{{ $post->created_at->format('F jS, Y') }}</p>
                </article>
            @endforeach
        </main>
        </div>
    </body>
</html>
