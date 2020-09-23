<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'order_id' => $faker->unique()->randomDigit,
        'user_id' => $faker->randomDigit,
        'customer_id' => $faker->shuffle(array(1, 2, 3, 4)),
        'shipping' => $faker->boolean($chanceOfGettingTrue = 50),
        'payment' => $faker->randomElement($array = array ('on cash', 'fpx', 'e-banking'))
    ];
});
