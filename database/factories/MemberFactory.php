<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        'remember_token' => Str::random(10),
    ];
});
