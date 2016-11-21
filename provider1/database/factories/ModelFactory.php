<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Book::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(4),
        'authors' => $faker->firstName." ".$faker->lastName,
        'description' => $faker->sentences(random_int(4,8), true),
        'is_borrowed' => random_int(0, 1),
        'pages' => random_int(30, 500),
        'publisher' => $faker->company
    ];
});
