<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker, $params) {
    $name = $faker->word;
    return [
        'parent_id' => array_key_exists('parent_id', $params) ? $params['parent_id'] : null,
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'service' => $params['service'],
    ];
});
