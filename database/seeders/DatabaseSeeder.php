<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();


        User::create([
            'name'=> "Yusuf",
            'email'=> "yuswhys@gmail,com",
            'password'=> bcrypt('12345')
        ]);

        User::create([
            'name'=> "cupz",
            'email'=> "yuswhys1@gmail,com",
            'password'=> bcrypt('12345')
        ]);

        Category::create([
            'name'=> 'Web Programing',
            'slug'=> 'web programing'
        ]);
        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'

        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title'=> 'judul pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?'
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'title'=> 'judul kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?'
        //     'category_id'=> 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=> 'judul ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?'
        //     'category_id'=> 2,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=> 'judul keempat',
        //     'slug'=> 'judul-keempat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus saepe, corrupti, hic iusto eos assumenda dolorem vel quisquam laboriosam cupiditate fugit pariatur? Dolores facilis corrupti mollitia distinctio dolore? Exercitationem, doloremque?'
        //     'category_id'=> 2,
        //     'user_id'=>1
        // ]);


    }
}
