<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Moch Aldrian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, perferendis similique? Voluptatum eum suscipit minus perspiciatis impedit voluptate saepe officia. Minima corporis omnis cumque in obcaecati quos necessitatibus enim, vel molestias. Deserunt veniam perferendis labore, quam numquam nemo rem? Fugiat nostrum maxime a asperiores laboriosam explicabo, totam perferendis placeat ea quibusdam illo est expedita maiores commodi at eos, minus ad! Tenetur animi iste fugiat? Excepturi ex, id voluptatibus error quae obcaecati consectetur provident sapiente, impedit ipsum odio delectus? Unde, veritatis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ujang Amir",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, perferendis similique? Voluptatum eum suscipit minus perspiciatis impedit voluptate saepe officia. Minima corporis omnis cumque in obcaecati quos necessitatibus enim, vel molestias. Deserunt veniam perferendis labore, quam numquam nemo rem? Fugiat nostrum maxime a asperiores laboriosam explicabo, totam perferendis placeat ea quibusdam illo est expedita maiores commodi at eos, minus ad! Tenetur animi iste fugiat? Excepturi ex, id voluptatibus error quae obcaecati consectetur provident sapiente, impedit ipsum odio delectus? Unde, veritatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, perferendis similique? Voluptatum eum suscipit minus perspiciatis impedit voluptate saepe officia. Minima corporis omnis cumque in obcaecati quos necessitatibus enim, vel molestias. Deserunt veniam perferendis labore, quam numquam nemo rem? Fugiat nostrum maxime a asperiores laboriosam explicabo, totam perferendis placeat ea quibusdam illo est expedita maiores commodi at eos, minus ad! Tenetur animi iste fugiat? Excepturi ex, id voluptatibus error quae obcaecati consectetur provident sapiente, impedit ipsum odio delectus? Unde, veritatis."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
