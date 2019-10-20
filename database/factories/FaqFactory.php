<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FAQ;
use Faker\Generator as Faker;

$factory->define(FAQ::class, function (Faker $faker) {
    return [
        'service' => 'App/ForexSignalFaq',
        'question' => $faker->sentence(5),
        'answer' => $faker->paragraph,
        'status' => 0,
        'created_by' => 1,
    ];
});
