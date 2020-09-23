<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Tea;
use Faker\Generator as Faker;

$factory->define(Tea::class, function (Faker $faker) {
    return [
        'name' => $faker->text(20),
        'description' => $faker->text(100),
        'price' => 11.90,
        'quantity' => $faker->randomDigit,
        'rate' => 4
    ];
});
