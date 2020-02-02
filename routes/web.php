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
    return view('front.index');
});

Auth::routes();

Route::prefix('dashboard')->middleware('auth:web')->group(function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

    Route::prefix('roles')->group(function () {
        Route::get('/', 'Dashboard\RoleController@index')->name('roles.index');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'Dashboard\UserController@index')->name('users.index');
        Route::get('/fetchUsers', 'Dashboard\UserController@fetchUsers')->name('users.fetchUsers');
        Route::get('/edit/{id}', 'Dashboard\UserController@edit')->name('users.edit');
        Route::patch('/updatestatus/{id}', 'Dashboard\UserController@updatestatus')->name('users.updatestatus');
    });
});
