<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import de Auth
use App\Models\Post; // Import de Post

class UserController extends Controller
{
    public function index()
    {
    $users = User::all();
    return view('users.index', compact('users'));
    }

    public function showWall ()
    {
        $user = Auth::user();
        $posts=Post::where('user_id', $user->id)->orderBy('created_at','desc')->paginate(10); /* syntaxe manuelle, il existe syntaxe plus simple qui reflète davantage la relation du modèle 
        mais ne permet pas de gérer la pagination : $posts = $user->posts()->latest()->get(); */

        return view('wall', compact ('user','posts'));
    }
}
