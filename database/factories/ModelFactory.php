<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entity::class, function(Faker\Generator $faker){
    return[
        'company' => $faker->company,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName
    ];
});
