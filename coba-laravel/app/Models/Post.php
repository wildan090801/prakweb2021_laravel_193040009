<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Wildhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eum ea cumque nobis, deleniti odit minima non temporibus, esse doloribus quam! Qui amet eum et hic. Voluptas dolorum assumenda fugiat minima culpa deleniti soluta explicabo deserunt cum beatae sed eum veniam eveniet dolorem consectetur modi obcaecati aperiam, id iure. Magni, vel? Nemo eaque libero accusantium magnam eveniet distinctio possimus deserunt quis adipisci explicabo sint ea animi architecto maiores voluptatem cupiditate quidem et labore, non exercitationem optio ipsum. Eum, quia ratione."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sofyan Egi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam est delectus ipsam eveniet excepturi totam, fuga placeat neque culpa molestias voluptate, aspernatur iste corrupti laudantium provident eius nesciunt! Facilis, ullam veritatis ipsum recusandae fuga exercitationem voluptatem, vero quaerat cupiditate magni saepe voluptatum tenetur perspiciatis assumenda qui harum magnam soluta. Delectus ducimus soluta, sequi, expedita consectetur officiis nostrum quasi hic tempore error ex, labore fuga. At aliquid, modi veritatis vitae minima expedita unde itaque esse dignissimos eos nam asperiores sit, facilis alias dolore sunt illo ipsa soluta doloribus quae voluptatem quasi. Sunt reprehenderit quo molestias delectus neque nemo animi dignissimos fugit!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
