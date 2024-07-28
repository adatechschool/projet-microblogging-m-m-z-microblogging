<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function list(): View
    {
        $posts = Post::all();
        return view('list-posts', ['allposts' => $posts]);
    }

    public function create(): String
    {
        return 'Gina';
    }
}
