<?php

namespace Database\Seeders;

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
        // User::create([
        //     'name' => 'Muhammad Wildhan',
        //     'email' => 'muhammadwildhan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sofyan Egi',
        //     'email' => 'sofyanegi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi, et minus aspernatur nam beatae necessitatibus aperiam voluptatem dolorem quis aut eveniet, nemo repudiandae quibusdam, consequuntur doloribus repellendus facere quidem. Autem possimus doloribus, voluptatibus eligendi ducimus itaque dolore mollitia sunt reiciendis, blanditiis, qui dolores deleniti recusandae. Nihil commodi tempora totam repellat eveniet aliquam quas blanditiis voluptatem id corrupti, fugiat dolorum animi quae quod sit consequuntur nesciunt iusto! Suscipit tempore temporibus beatae consequuntur accusamus voluptatem at, qui vero dolor totam magnam necessitatibus voluptates rerum vitae dignissimos quod incidunt repellat iure reiciendis?.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        //  Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi, et minus aspernatur nam beatae necessitatibus aperiam voluptatem dolorem quis aut eveniet, nemo repudiandae quibusdam, consequuntur doloribus repellendus facere quidem. Autem possimus doloribus, voluptatibus eligendi ducimus itaque dolore mollitia sunt reiciendis, blanditiis, qui dolores deleniti recusandae. Nihil commodi tempora totam repellat eveniet aliquam quas blanditiis voluptatem id corrupti, fugiat dolorum animi quae quod sit consequuntur nesciunt iusto! Suscipit tempore temporibus beatae consequuntur accusamus voluptatem at, qui vero dolor totam magnam necessitatibus voluptates rerum vitae dignissimos quod incidunt repellat iure reiciendis?.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        //  Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi, et minus aspernatur nam beatae necessitatibus aperiam voluptatem dolorem quis aut eveniet, nemo repudiandae quibusdam, consequuntur doloribus repellendus facere quidem. Autem possimus doloribus, voluptatibus eligendi ducimus itaque dolore mollitia sunt reiciendis, blanditiis, qui dolores deleniti recusandae. Nihil commodi tempora totam repellat eveniet aliquam quas blanditiis voluptatem id corrupti, fugiat dolorum animi quae quod sit consequuntur nesciunt iusto! Suscipit tempore temporibus beatae consequuntur accusamus voluptatem at, qui vero dolor totam magnam necessitatibus voluptates rerum vitae dignissimos quod incidunt repellat iure reiciendis?.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi numquam itaque accusantium, nemo repellendus atque. Rerum dolor velit eligendi animi, et minus aspernatur nam beatae necessitatibus aperiam voluptatem dolorem quis aut eveniet, nemo repudiandae quibusdam, consequuntur doloribus repellendus facere quidem. Autem possimus doloribus, voluptatibus eligendi ducimus itaque dolore mollitia sunt reiciendis, blanditiis, qui dolores deleniti recusandae. Nihil commodi tempora totam repellat eveniet aliquam quas blanditiis voluptatem id corrupti, fugiat dolorum animi quae quod sit consequuntur nesciunt iusto! Suscipit tempore temporibus beatae consequuntur accusamus voluptatem at, qui vero dolor totam magnam necessitatibus voluptates rerum vitae dignissimos quod incidunt repellat iure reiciendis?.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
