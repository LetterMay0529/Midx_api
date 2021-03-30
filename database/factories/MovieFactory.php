<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    
    return [
        'movie_title' => $faker->title,
        'viewer_id' => rand(1, 20),
        'production_name'   =>$faker->company,
        'rating' => rand(1, 20),
        
    ];
});