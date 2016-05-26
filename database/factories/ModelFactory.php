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

$factory->define(App\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});

$factory->define(App\Models\Lang::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'iso_code' => $faker->countryCode,
        'language_code' => $faker->countryISOAlpha3];
});

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'ean13' => $faker->ean13,
        'upc' => $faker->ean8,
        'price' => $faker->randomFloat(6,3),
        'width' => $faker->randomNumber(2),
        'height' => $faker->randomNumber(2),
        'depth' => $faker->randomNumber(2),
        'weight' => $faker->randomNumber(2)];
});

$factory->define(App\Models\ProductLang::class, function (Faker\Generator $faker) {
    return [
        'product_id' => $faker->numberBetween(1,50),
        'lang_id' => 1,
        'name' => $faker->text(),
        'description' => $faker->text(),
        'description_short' => $faker->text,
        'description_meta' => $faker->text,
        'keywords_meta' => $faker->text,
        'title_meta' => $faker->text ];
});
