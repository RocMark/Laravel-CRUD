<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        // 產出假資料
        'title'   => $faker->word,
        'content' => $faker->paragraph,
    ];
});
