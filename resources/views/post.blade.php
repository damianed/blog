<x-app-layout>
    @section('title')
        {{ $post->title }}
    @endsection
    <article class="mt-6">
        <p class="text-2xl font-bold">{{ $post->title }}</p>
        <p class="mt-2 text-sm font-light opacity-50">{{ $post->created_at->format('F jS, Y') }}</p>
        <div class="mt-4 leading-relaxed body markdown">
            <x-markdown theme="github-dark">
                {!! $post->body !!}
            </x-markdown>
        </div>
    </article>
</x-app-layout>
