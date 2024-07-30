<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

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
    public function showForm(): View
    {
        return view('showForm');
    }
    public function handleForm(Request $request): string 
    {
        $user_id = $request->user()->id;
        $input = $request->all();
        // var_dump = console.log //
        var_dump($input);
        $givenText = $input['typedText'];
        $postedImage = $input['image'];
        //change user-id to logged in user_id //
        Post::create(['text' => $givenText, 'user_id' => $user_id, 'image_url' => $postedImage]);
        return "Coucou";
    }
}
