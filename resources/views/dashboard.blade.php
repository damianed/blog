<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-2 grid justify-items-end">
                @if (session('success'))
                    <p class="text-green-600">Post deleted</p>
                @endif
                <div class="flex">
                    <a class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700" href="{{ route('post.new') }}">Write new</a>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($posts as $post)
                        <div class="flex flex-row justify-between mt-5">
                            <div>{{$post->title}}</div>
                            <div class="flex flex-row space-x-5">
                                <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                <a class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700" href="{{ route('post.delete', $post) }}">Delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
