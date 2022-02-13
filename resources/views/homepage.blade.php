<x-app-layout>
    @section('title')
        {{ "Damian Escobedo" }}
    @endsection
    @foreach($posts as $post)
        <article class="mt-6">
            <a class="text-lg font-semibold hover:text-blue-300" href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a>
            <p class="text-sm opacity-50">{{ $post->created_at->format('F jS, Y') }}</p>
        </article>
    @endforeach
</x-app-layout>
