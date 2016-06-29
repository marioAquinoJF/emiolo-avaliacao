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

$factory->define(Emiolo\Entities\User\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'USER',
        'email' => 'user@user.com',
        'password' => bcrypt(123456),
        'remember_token' => str_random(10),
        'presentation' => $faker->paragraph(),
        'url_image' => "img/users/USER1.png",
    ];
});
