<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogPostController extends Controller
{
    function show(BlogPost $post) {
        return view('post', ['post' => $post]);
    }
}
