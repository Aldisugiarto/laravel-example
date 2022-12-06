<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Aldi",
        "email" => "aldi@gmail.com",
        "image" => "aldi.png",
        "active" => "about",
    ]);
});

Route::get('/posts', [PostController::class,'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post by category: $category->name",
        'posts' => $category->posts->load('category', 'author'),
        "active" => "categories",
    ]);
});

Route::get('/authors/{author:username}',function(User $author){
    return view('posts',[
        'title' => "Post by author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
        "active" => "categories",
    ]);
});


Route::get('/test', function () {
    $p = Redis::incr('p');
    return $p;
});

Route::get("users_with_cache", [UserController::class, 'cache']);
Route::get("users_with_query", [UserController::class, 'getUser']);