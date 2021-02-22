<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'addr' => $faker->city,
        'frequency' => rand(0,10),
        'amount' => $faker->randomFloat(2, 0, 10),
        'status' => rand(1,2),
        'start_time' => $faker->unixTime,
        'end_time' =>$faker->unixTime,
    ];
});
