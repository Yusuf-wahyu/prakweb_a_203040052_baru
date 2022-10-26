<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/blog', function () {
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



// halaman single post
Route::get('posts/{slug}', function($slug) {
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

    $new_post = [];
    foreach ($blog_posts as $post){
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});