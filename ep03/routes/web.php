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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Form'], function () {

    /**
     * VERBO GET
     */
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@addUser')->name('user.add');
    Route::get('usuarios/editar/{user}', 'TestController@editUser')->name('user.edit');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('user.list');

    /**
     * VERBO POST
     */
    Route::post('usuarios/store', 'TestController@storeUser')->name('user.store');

    /**
     * VERBO PUT/PATCH
     */
    Router::put('usuarios/edit', 'TestController@edit')->name('user.edit/{user}');

    /**
     * VERBO DELETE
     */
    Router::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');

});
