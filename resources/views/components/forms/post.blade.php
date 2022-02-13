@props(['route' => '#', 'post' => ['title' => '', 'body' => '', 'is_published' => null]])

<form method="POST" action="{{ $route }}" class="p-6 bg-white border-b border-gray-200">
    @csrf
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="title">Title</label>
    <input class="w-full mb-5" type="text" name="title" value="{{ @old('title') ?: $post['title'] }}"></input>

    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="body">Body</label>
    <textarea name="body" id="body">{{ @old('body') ?: $post['body'] }}</textarea>

    <label for="is_published">Publish</label>
    <input type="checkbox" name="is_published" {{ (@old('is_published') ?: $post['is_published'])  ? "checked='true'" : '' }} value="true"></input>

    <div class="mb-2 grid justify-items-end">
    <div class="flex">
        <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Save</a>
    </div>
</div>
</form>
@section('scripts')
    <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
    <script src="{{ asset('js/dashboard/post_edit.js') }}" defer></script>
@endsection
