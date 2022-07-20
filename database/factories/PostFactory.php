<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'        => $faker->sentence,
        'body'         => $faker->paragraph(30),
        'user_id'      => rand(1, 10),
        'category_id'  => rand(1, 10),
        'is_published' => rand(0, 1)
    ];
});
