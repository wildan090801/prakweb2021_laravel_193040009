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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Wildhan",
        "email" => "muhammadwildhan@unpas.ac.id",
        "image" => "193040009.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halama single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
