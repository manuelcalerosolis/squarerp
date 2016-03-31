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

Route::get('users/{user}', function(App\Models\User $user){
    return $user;
});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', function () {
        return view('/dashboard/home');
    });

    Route::resource('user', 'UserController');
    Route::resource('entity', 'EntityController');

//    Route::resource('address', 'AddressController');
    Route::get('entity.address', ['uses' => 'AddressController@index', 'as' => 'entity.address.store']);
    Route::get('entity.address/{entity}', ['uses' => 'AddressController@create', 'as' => 'entity.address.create']);
    Route::post('entity.address/{entity}', ['uses' => 'AddressController@store', 'as' => 'entity.address.store']);
//    Route::delete('entity.address/{address}/{entity}', ['uses' => 'AddressController@destroy', 'as' => 'entity.address.destroy']);
    Route::put('entity.address/{address}/{entity}', ['uses' => 'AddressController@update', 'as' => 'entity.address.update']);
    Route::get('entity.address/{address}', ['uses' => 'AddressController@show', 'as' => 'entity.address.show']);
    Route::get('entity.address/{address}/edit/{entity}', ['uses' => 'AddressController@edit', 'as' => 'entity.address.edit']);
    Route::get('entity.address/{address}/destroy/{entity}', ['uses' => 'AddressController@destroy', 'as' => 'entity.address.destroy']);
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
