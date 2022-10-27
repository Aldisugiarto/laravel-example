<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sugiarto",
            "post" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, excepturi. Quisquam sequi, deleniti minima cumque vitae officiis harum adipisci fuga nisi accusamus vel. Cumque, adipisci eveniet nihil voluptas impedit commodi dolores nesciunt earum iure nemo possimus magnam eaque ducimus mollitia reiciendis qui aut, esse id inventore voluptatem molestiae natus. Ea quidem eligendi, deleniti officia illo provident inventore aspernatur explicabo neque veniam omnis asperiores ducimus molestias eum obcaecati saepe nobis magni natus numquam commodi modi similique aliquid sed! Optio, magnam ipsum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aldi",
            "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ullam dignissimos esse mollitia reiciendis quibusdam, eveniet commodi dicta pariatur autem, optio magni, est culpa perferendis! Et, at veritatis deserunt magnam atque illum quibusdam quia adipisci, praesentium sequi debitis voluptates maxime, voluptatibus quod magni unde suscipit iure minus. Dignissimos quisquam incidunt optio accusantium maiores deleniti, sit aspernatur? Deleniti suscipit ipsum fugiat eveniet, harum ad quia ipsam cum accusamus eaque nisi recusandae. Harum, nostrum vitae molestias quaerat doloremque magnam accusamus laboriosam excepturi maiores iure nemo corporis unde voluptatem alias? A velit itaque maiores molestiae quasi repellat rem, cumque iure facere, eum impedit."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach ($posts as $key => $value) {
        //     # code...
        //     if ($value["slug"] === $slug) {
        //         # code...
        //         $post = $value;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
