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

/**
 * VERBO GET
 */
Route::get('usuarios', 'Form\\TestController@listAllUsers')->name('users.listAll');
Route::get('usuarios/novo', 'Form\\TestController@addUser')->name('user.add');
Route::get('usuarios/editar/{user}', 'Form\\TestController@editUser')->name('user.edit');
Route::get('usuarios/{user}', 'Form\\TestController@listUser')->name('user.list');

/**
 * VERBO POST
 */
Route::post('usuarios/store', 'Form\\TestController@storeUser')->name('user.store');

/**
 * VERBO PUT/PATCH
 */
Router::put('usuarios/edit', 'Form\\TestController@edit')->name('user.edit/{user}');

/**
 * VERBO DELETE
 */
