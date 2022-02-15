<x-app-layout>
    @section('meta-tags')
        <meta name="og:title" content="{{ $post->title }}">
        <meta name="og:type" content="article">
        <meta name="og:url" content="{{ route('post.show', $post->slug) }}">
        <meta name="og:image" content="">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@_damianeduardo">
        <meta name="twitter:title" content="{{ $post->title }}">
        <meta name="twitter:image" content="">
        <meta name="twitter:creator" content="@_damianeduardo">
    @endsection
    @section('title')
        {{ $post->title }}
    @endsection
    <article class="mt-6">
        <p class="text-2xl font-bold">{{ $post->title }}</p>
        <p class="mt-2 text-sm font-light opacity-50">{{ $post->created_at->format('F jS, Y') }}</p>
        <div class="pb-6 mt-4 leading-relaxed body markdown">
            <x-markdown theme="github-dark">
                {!! $post->body !!}
            </x-markdown>
        </div>
    </article>
</x-app-layout>
