<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

    //On récupère tous les Post
    $posts = Post::latest()->get();

    // On transmet les Post à la vue
    return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
}


    public function list(): View
    {
        $posts = Post::all();
        return view('list-posts', ['allposts' => $posts]);
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
        Post::create(['content' => $givenText, 'user_id' => $user_id, 'picture' => $postedImage]);
        return 'Coucou';
    }
}
