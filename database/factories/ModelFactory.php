<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Entity::class, function(Faker\Generator $faker){
    return[
        'company' => $faker->company,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName
    ];
});

$factory->define(App\Models\Address::class, function(Faker\Generator $faker){
    return[
        'name' => $faker->name,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'phone' => $faker->phoneNumber,
        'phone_mobile' => $faker->phoneNumber];
});

$factory->define(App\Models\EntityRole::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});
