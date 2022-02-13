<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index() {
        $posts = BlogPost::where('is_published', true)->get();
        return view('homepage', ['posts' => $posts]);
    }
}


