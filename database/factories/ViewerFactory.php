<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Viewer;
use Faker\Generator as Faker;

$factory->define(Viewer::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male','female']);
   

    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'age'        => $faker->randomNumber($nbDigits = 2, $strict = false),
        'gender'     => $gender,
        'address'    => $faker->address,
       
       
    ];
});
