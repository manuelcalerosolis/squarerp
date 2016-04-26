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

Route::resource('user', 'UserController');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', function () {
        return view('/dashboard/home');
    });

    Route::resource('entity', 'EntityController');

    Route::get('entity/address/{entity}',
        ['uses' => 'AddressController@create', 'as' => 'entity.address.create']);
    Route::post('entity/address/{entity}',
        ['uses' => 'AddressController@store', 'as' => 'entity.address.store']);
    Route::put('entity/address/{address}/{entity}',
        ['uses' => 'AddressController@update', 'as' => 'entity.address.update']);
    Route::get('entity/address/{address}/edit/{entity}',
        ['uses' => 'AddressController@edit', 'as' => 'entity.address.edit']);
    Route::get('entity/address/{address}/destroy/{entity}',
        ['uses' => 'AddressController@destroy', 'as' => 'entity.address.destroy']);

    Route::resource('role', 'RoleController');


});

// demo de polymer

Route::get('/polymer', function () {
    return view('welcome-polymer');
});

// Autenticacion routes...
Route::get('auth/login',
    [ 'uses' => 'Auth\AuthController@getLogin', 'as' => 'auth/login']);

Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout',
    ['uses' => 'Auth\AuthController@getLogout', 'as' => 'auth/logout']);

// Registration routes...
Route::get('auth/register',
    ['uses' => 'Auth\AuthController@getRegister', 'as' => 'auth/register']);

Route::post('auth/register', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email',
    ['uses' => 'Auth\PasswordController@getEmail', 'as' => 'password/email']);

Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}',
    [ 'uses' => 'Auth\PasswordController@getReset', 'as' => 'password/reset']);

Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::get('gestool/products',
    ['uses' => 'Gestool\ProductsController@index', 'as' => 'gestool/products']);
