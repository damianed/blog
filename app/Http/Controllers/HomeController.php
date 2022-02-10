<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index() {
        $posts = BlogPost::all();
        return view('homepage', ['posts' => $posts]);
    }
}


