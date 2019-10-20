<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Package;
use Faker\Generator as Faker;

$factory->define(Package::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    return [
        'title' => $title,
        'service' => 'App/ForexSignalPackage',
        'duration' => 0,
        'price' => 5200,
        'details' => $faker->paragraph(3),
        'status' => 0,
        'created_by' => rand(1, 5)
    ];
});
