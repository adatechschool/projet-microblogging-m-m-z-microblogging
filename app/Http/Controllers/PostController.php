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
    public function index():View {

    //On récupère tous les Post
    $posts = Post::all();
    
    // On transmet les Post à la vue
    return view('feed', compact('posts'));
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


    public function list(Request $request): View
    {
        $user_id = $request->user()->id;
        $posts = Post::where('user_id', $user_id)->get();
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
        $image = $request->file('image');

        var_dump($givenText);
        var_dump($image);

        if ($givenText == null && $image == null) {
            return view('showForm', ['error' => true]);
        }

        if ($image) {
            $imageId = $image->store('public');
        } else {
            $imageId = null;
        }

        //change user-id to logged-in user_id //
        $newPost = Post::create(['content' => $givenText, 'user_id' => $user_id, 'picture' => $imageId]);
        var_dump($newPost->id);
        return redirect('/posts/' . $newPost->id);
    }

    public function showOnePost(Request $request) {
        $post = Post::find($request->postId);
        var_dump($post);
        return view('showOnePost', ['post' => $post]);
    }
}
