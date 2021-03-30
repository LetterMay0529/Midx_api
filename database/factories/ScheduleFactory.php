<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'viewer_id'      => rand(1, 20),
        'movie_id'       => rand(1, 20),
        'screening_date' => $faker->date($format = 'Y-m-d'),
        'screening_time' => $faker->time($format = 'H:i:s'),
    ];
});