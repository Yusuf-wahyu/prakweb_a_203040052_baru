<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Yusuf Wahyu Syahroni",
        "email" => "yuswhys@gmail.com",
        "image" => "yusuf.jpg"
    ]);
});

Route::get('/Post', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('category', [
        'title'=> 'Post Categories',
        'posts'=> Category::all(),

    ]);
});


Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title'=> "Post by Category : $category->name",
         'posts'=> $category->posts->load('category','author')

    ]);
});

Route::get('/authors/{author:username}', function (User $author){
    return view('posts', [
        'title'=> "Post By Author : $author->name",
        'posts'=> $author->posts->load('category', 'author'),

    ]);
});



Route::get('/categories', function () {
    $blog_posts =[
        [
            "title" => "judul post pertama",
            "slug" =>"judul-post-pertama",
            "author" => "Cupz Stuword",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, suscipit? Facere nisi non ipsam exercitationem, est consequuntur illum impedit a delectus sint necessitatibus iste sit vel saepe quidem ullam nostrum."
        ],
        [
            "title" => "judul post kedua",
            "slug" =>"judul-post-kedua",
            "author" => "Yusuf Wahyu Syahroni",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, suscipit? Facere nisi non ipsam exercitationem, est consequuntur illum impedit a delectus sint necessitatibus iste sit vel saepe quidem ullam nostrum."
        ],
    ];


    return view ('posts', [
        "title"=> "Posts",
        "posts"=> $blog_posts
    ]);
});
