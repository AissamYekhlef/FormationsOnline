<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker){

    return [
            'title'          => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'description'    => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'author_id'      => $faker->numberBetween($min = 1, $max = 7),
            // 'author_id'      => factory(App\User::class), //to create an new User and return it's id
        ];

});
