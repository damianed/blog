<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\BlogPost;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Request;

class BlogPostController extends Controller
{
    function show(BlogPost $post)
    {
        if (!$post->is_published && Auth::user() != $post->author) {
            abort(404);
        }

        return view('post', ['post' => $post]);
    }

    function create()
    {
        return view('post_create');
    }

    function store(StorePostRequest $request)
    {
        $input = $request->validated();
        $post = BlogPost::create([
            'title' => $input['title'],
            'body' => $input['body'],
            'slug' => Str::slug($input['title']),
            'user_id' => Auth::user()->id,
            'is_published' => Arr::get($input, 'is_published', false),
        ]);

        return redirect()->route('post.show', [$post]);
    }

    function edit(BlogPost $post)
    {
        return view('post_edit')->with('post', $post);
    }

    function update(Request $request, BlogPost $post)
    {
        $post->fill($request->all())->save();
        return redirect()->route('post.show', [$post]);
    }

    function destroy(BlogPost $post)
    {
        $post->delete();

        return back()->with('success', true);
    }
}
