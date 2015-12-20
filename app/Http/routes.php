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
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', function () {
        return view('home');
    });

    // esto debe estar dentro del midelware auth

    Route::resource('user', 'UserController');
    Route::resource('entity','EntityController');

});

// demo de polymer

Route::get('/polymer', function () {
    return view('welcome-polymer');
});

// Autenticacion routes...
Route::get('auth/login', [
    'as' => 'auth/login',
    'uses' => 'Auth\AuthController@getLogin',
]);

Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', [
    'as' => 'auth/logout',
    'uses' => 'Auth\AuthController@getLogout',
]);

// Registration routes...
Route::get('auth/register',[
    'as' => 'auth/register',
    'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email', [
    'as' => 'password/email',
    'uses' => 'Auth\PasswordController@getEmail'
]);

Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', [
    'as' => 'password/reset',
    'uses' => 'Auth\PasswordController@getReset'
]);

Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::get('gestool/products', [
    'as' => 'gestool/products',
    'uses' => 'Gestool\ProductsController@index',
]);
