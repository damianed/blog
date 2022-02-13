@props(['route' = '#', 'post' => []])

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

    <label for="is_published">Publish</label>
    <input type="checkbox" name="is_published" {{ @old('is_published') ? "checked='true'" : '' }} value="true"></input>

    <div class="mb-2 grid justify-items-end">
    <div class="flex">
        <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700" href="dashboard/post/new">Save</a>
    </div>
</div>
</form>
