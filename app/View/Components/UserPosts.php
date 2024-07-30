<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Post; // important d'importer le modèle Post
use Illuminate\View\Component;

class UserPosts extends Component
{
    /**
     * Create a new component instance.
     */
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

                // Récupérer les posts de l'utilisateur avec pagination
                $posts = Post::where('user_id', $this->user->id)
                ->orderBy('created_at', 'desc')
                ->paginate(10);

   return view('components.user-posts', compact('posts'));
 
    }
}
