<?php

namespace App\Models;


class post
{
        private static $blog_post =[
            [
                "Judul" => "Artikel Pertama",
                "paragraf" => "artikel-pertama",
                "penulis"  => "Soekarno",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, architecto modi? Architecto nam vel nostrum repellendus nesciunt officia? Nam perferendis ducimus eaque architecto placeat expedita maiores voluptas rem, nobis consequuntur."
            ],
            [
                "title" => "Artikel Kedua",
                "slug" => "artikel-kedua",
                "penulis"  => "Satu Peta",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, sint!."
            ],
        ];

        public static function all()
        {
            return collect(self::$blog_post);
        }
        public static function find($slug)
        {
            $post = static::all();
            return $post->firstWhere('slug', $slug);
        }
}
