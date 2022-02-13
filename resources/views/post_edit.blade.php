<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('post.create') }}" class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="title">Title</label>
                    <input class="w-full mb-5" type="text" name="title" value="{{ @old('title') }}"></input>

                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="body">Body</label>
                    <textarea name="body" id="body">{{ @old('body') }}</textarea>
                    <div class="mb-2 grid justify-items-end">
                        <div class="flex">
                            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700" href="dashboard/post/new">Save</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
</x-dashboard-layout>
