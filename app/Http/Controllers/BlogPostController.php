<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    function show(BlogPost $post)
    {
        return view('post', ['post' => $post]);
    }

    function create()
    {
        return view('post_edit');
    }

    function store(StorePostRequest $request)
    {
        $input = $request->validated();
        $post = BlogPost::create([
            'title' => $input['title'],
            'body' => $input['body'],
            'slug' => Str::slug($input['title']),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('post.show', [$post]);
    }

    function destroy(BlogPost $post)
    {
        $post->delete();

        return back()->with('success', true);
    }
}
