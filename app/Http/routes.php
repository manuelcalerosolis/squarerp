<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('address', function () {
    $entity = App\Entity::find(1);
    return view('address',['entity' => $entity]);

//    echo $entity->company;
//    echo $entity->first_name;
//    echo $entity->last_name;
//
//    foreach ($entity->address as $address) {
//        echo $address->address1;//        ', 'address2', 'postal_code', 'city', 'other', 'phone', 'phone_mobile', 'active';
//    }

    return 'Hello World';
});

