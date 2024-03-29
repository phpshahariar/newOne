<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Blog::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    return [
        'category_id' => rand(1,60),
        'title' => $title,
        'slug' => Str::slug($title, '-'),
        'body' => $faker->paragraph(5),
        'feature_image' => $faker->imageUrl($width = 640, $height = 480),
        'status' => 3,
        'created_by' => rand(1, 10)
    ];
});
