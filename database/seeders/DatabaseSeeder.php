<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([
        //      'name' => 'Aldi Sugiarto',
        //      'email' => 'aldi@gmail.com',
        //      'password' => bcrypt('12345')
        // ]);

        // User::create([
        //      'name' => 'Sugiarto',
        //      'email' => 'sugi@gmail.com',
        //      'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => "Web Programming",
            'slug' => "web-programming",
        ]);

        
        Category::create([
                'name' => "Web Design",
                'slug' => "web-design",
            ]);

        Category::create([
                'name' => "Personal",
                'slug' => "personal",
            ]);
            
        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto sequi repellat, laborum fugiat qui autem commodi rem sit soluta fuga, pariatur molestias?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto sequi repellat, laborum fugiat qui autem commodi rem sit soluta fuga, pariatur molestias? </p><p> Eaque quod eligendi, assumenda reprehenderit explicabo earum nisi ipsam reiciendis quo nihil doloribus alias consectetur corporis </p><p>Repellat magni ex vero laboriosam aperiam nemo non odit? Unde aliquid quia nam est soluta earum cupiditate dolore nostrum quisquam tempore deserunt distinctio doloribus beatae aliquam molestias odio eveniet, iusto ex praesentium reprehenderit velit delectus suscipit sequi facere! Sit, quibusdam repudiandae.</p>',
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto sequi repellat, laborum fugiat qui autem commodi rem sit soluta fuga, pariatur molestias?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto sequi repellat, laborum fugiat qui autem commodi rem sit soluta fuga, pariatur molestias? </p><p> Eaque quod eligendi, assumenda reprehenderit explicabo earum nisi ipsam reiciendis quo nihil doloribus alias consectetur corporis </p><p>Repellat magni ex vero laboriosam aperiam nemo non odit? Unde aliquid quia nam est soluta earum cupiditate dolore nostrum quisquam tempore deserunt distinctio doloribus beatae aliquam molestias odio eveniet, iusto ex praesentium reprehenderit velit delectus suscipit sequi facere! Sit, quibusdam repudiandae.</p>',
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto sequi repellat, laborum fugiat qui autem commodi rem sit soluta fuga, pariatur molestias?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iusto sequi repellat, laborum fugiat qui autem commodi rem sit soluta fuga, pariatur molestias? </p><p> Eaque quod eligendi, assumenda reprehenderit explicabo earum nisi ipsam reiciendis quo nihil doloribus alias consectetur corporis </p><p>Repellat magni ex vero laboriosam aperiam nemo non odit? Unde aliquid quia nam est soluta earum cupiditate dolore nostrum quisquam tempore deserunt distinctio doloribus beatae aliquam molestias odio eveniet, iusto ex praesentium reprehenderit velit delectus suscipit sequi facere! Sit, quibusdam repudiandae.</p>',
        // ]);


    }
}
