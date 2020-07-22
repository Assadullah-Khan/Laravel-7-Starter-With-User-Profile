<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'uuid' => (string) Str::orderedUuid(),
        'gender' => $faker->randomElement(['male', 'female', 'other']),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = '-18 years'),
    ];
});
