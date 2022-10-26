<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title"=> "Judul Tulisan Yusuf",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae natus provident laboriosam assumenda id impedit, molestias voluptatibus enim laborum, ea dignissimos placeat. Impedit doloribus vitae ullam in animi veritatis."
        ],
        [
            "title"=> "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae natus provident laboriosam assumenda id impedit, molestias voluptatibus enim laborum, ea dignissimos placeat. Impedit doloribus vitae ullam in animi veritatis." 
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = self::all();
    //     $post = [];
    // foreach ($blog_posts as $p){
    //     if($post["slug"] === $slug) {
    //         $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);
    }
    

}


