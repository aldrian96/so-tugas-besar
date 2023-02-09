<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Facade;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        // Seed Pembuatan Author
        User::create([
            'name' => 'Moch Aldrian',
            'username' => 'mchsaa',
            'email' => 'mhmdsaldrian96@gmail.com',
            'password' => bcrypt('12345')
        ]);
       
        // User::create([
        //     'name' => 'Dody Irawan',
        //     'email' => 'dody@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);
        
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);
        
        Category::create([
            'name' => 'Animal',
            'slug' => 'animal'
        ]);
        
        Category::create([
            'name' => 'Photography',
            'slug' => 'photography'
        ]);
        
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        Category::create([
            'name' => 'Other',
            'slug' => 'other'
        ]);

        Category::create([
            'name' => 'Movie',
            'slug' => 'movie'
        ]);
        
        Category::create([
            'name' => 'Food & Drink',
            'slug' => 'food-and-drink'
        ]);

        Category::create([
            'name' => 'Music',
            'slug' => 'music'
        ]);
        
        Category::create([
            'name' => 'Fruits & Vegetables',
            'slug' => 'fruit-and-vegetables'
        ]);

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis? Possimus eligendi fugiat enim aperiam velit quidem nihil neque a provident, doloremque laudantium ab iure! Numquam incidunt praesentium vero quidem quasi dolore nesciunt nulla, hic, voluptatum consequatur non minus sint eos nobis soluta deserunt dolor corrupti recusandae earum repellat impedit. Sunt quae excepturi ullam eum dolores labore molestias, eligendi ratione nisi modi necessitatibus quam soluta amet commodi, debitis at, ducimus ut? Itaque voluptate repudiandae veritatis ea possimus autem fugit natus, quae et placeat quam reiciendis perferendis quaerat repellat dicta! Debitis eum similique eius tempora minus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis? Possimus eligendi fugiat enim aperiam velit quidem nihil neque a provident, doloremque laudantium ab iure! Numquam incidunt praesentium vero quidem quasi dolore nesciunt nulla, hic, voluptatum consequatur non minus sint eos nobis soluta deserunt dolor corrupti recusandae earum repellat impedit. Sunt quae excepturi ullam eum dolores labore molestias, eligendi ratione nisi modi necessitatibus quam soluta amet commodi, debitis at, ducimus ut? Itaque voluptate repudiandae veritatis ea possimus autem fugit natus, quae et placeat quam reiciendis perferendis quaerat repellat dicta! Debitis eum similique eius tempora minus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis? Possimus eligendi fugiat enim aperiam velit quidem nihil neque a provident, doloremque laudantium ab iure! Numquam incidunt praesentium vero quidem quasi dolore nesciunt nulla, hic, voluptatum consequatur non minus sint eos nobis soluta deserunt dolor corrupti recusandae earum repellat impedit. Sunt quae excepturi ullam eum dolores labore molestias, eligendi ratione nisi modi necessitatibus quam soluta amet commodi, debitis at, ducimus ut? Itaque voluptate repudiandae veritatis ea possimus autem fugit natus, quae et placeat quam reiciendis perferendis quaerat repellat dicta! Debitis eum similique eius tempora minus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos omnis aliquam perspiciatis repellat non blanditiis? Possimus eligendi fugiat enim aperiam velit quidem nihil neque a provident, doloremque laudantium ab iure! Numquam incidunt praesentium vero quidem quasi dolore nesciunt nulla, hic, voluptatum consequatur non minus sint eos nobis soluta deserunt dolor corrupti recusandae earum repellat impedit. Sunt quae excepturi ullam eum dolores labore molestias, eligendi ratione nisi modi necessitatibus quam soluta amet commodi, debitis at, ducimus ut? Itaque voluptate repudiandae veritatis ea possimus autem fugit natus, quae et placeat quam reiciendis perferendis quaerat repellat dicta! Debitis eum similique eius tempora minus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

