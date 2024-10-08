<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index']) ->name('users.index');


/* Quand l'utilisateur se connecte affiche le dashboard (middleware 'auth' vérifie : email et mdp;
 lien vers logout et vers profile),
 si aucun utilisateur est connecté renvoie à la page login (middleware 'guest')*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/* Quand l'utilisateur est connecté affiche la page profile (middleware 'auth' form pour edit l'user, pour changer de mdp et pour supprimer l'user),
 si aucun utilisateur est connecté renvoie à la page login (middleware 'guest') */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//User Personal Wall
Route::middleware('auth')->group(function () {
    Route::get('/wall', [UserController::class, 'showWall'])->name('personal.wall');
});

//Specific user's wall
Route::get('/users/{user}', [UserController::class, 'showUserWall'])->name('user.profile');


//test
Route::get('/test', function () {
    return view('test');
});

require __DIR__.'/auth.php';

/* utiliser le resource (incluant toutes les requetes CRUD dans le controller) pour choisir seulement certaines action pour les routes,
Ici on choisi index pour la requête get (route name : posts.index) pour afficher un form et une list des posts
et on choisi store pour la requête post (route name : posts.store) pour enregistrer un post dans la db*/
// Route::resource('/posts', PostController::class)
//     ->only(['index', 'store'])
//     ->middleware(['auth', 'verified']);

Route::get('/users', function () {
    return view('users');
});

Route::get('/feed', [PostController::class, 'index'])->name('feed');
//Route::post('/posts', [PostController::class, 'create']);

Route::get('/publish', [PostController::class, 'showForm'])->name('publish');
Route::post('/publish', [PostController::class, 'handleForm']);

Route::get('/posts/{postId}', [PostController::class, 'showOnePost']);

require __DIR__.'/auth.php';
