<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', function() {
        return 'rota com privilegios';  
    });

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'Admin\UsersController@index');
        Route::post('/', 'Admin\UsersController@store');
        Route::get('create', 'Admin\UsersController@create');
        Route::get('get-collection', 'Admin\UsersController@getCollection');

        Route::get('/{id}', 'Admin\UsersController@show');
    });

    Route::get('products', function() {
       return 'rota com privilegios';  
    });
});

Route::get('/', 'TestController@index');
Route::get('add-user-test', 'TestController@addUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

