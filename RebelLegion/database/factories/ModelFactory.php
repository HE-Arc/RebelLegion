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
    static $password;

    return [
        'userName' => $faker->userName,
        'firstName' => $faker->name,
        'lastName' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phoneNumber' => $faker->phoneNumber,
        'facebookURL' => $faker->url,
        'isPersonalDataVisiblle' => $faker->boolean,
        'position' => $faker->randomElement($array = array ('officier','chef')),
        'status' => $faker->randomElement($array = array ('actif','suspendu','irradié')),
        'internationalRebelLegionURL' => $faker->url,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];


});

$factory->define(App\Costume::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'size' => $faker->name
    ];
});
