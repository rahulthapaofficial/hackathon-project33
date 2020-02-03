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

// Route::get('/', function () {
//     return view('front.index');
// });

Route::get('/', 'HomePageController@index')->name('front.index');

Route::get('/contact', function () {
    return view('front.contact');
});

Auth::routes();
// Auth::routes(['register' => false]);

Route::prefix('dashboard')->middleware('auth:web')->group(function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

    Route::prefix('roles')->group(function () {
        Route::get('/', 'Dashboard\RoleController@index')->name('roles.index');
        Route::get('/create', 'Dashboard\RoleController@create')->name('roles.create');
        Route::post('/', 'Dashboard\RoleController@store')->name('roles.store');
        Route::get('/fetchRoles', 'Dashboard\RoleController@fetchRoles')->name('users.fetchRoles');
        Route::get('/edit/{id}', 'Dashboard\RoleController@edit')->name('roles.edit');
        Route::patch('/{id}', 'Dashboard\RoleController@update')->name('roles.update');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'Dashboard\UserController@index')->name('users.index');
        Route::get('/create', 'Dashboard\UserController@create')->name('users.create');
        Route::get('/fetchUsers', 'Dashboard\UserController@fetchUsers')->name('users.fetchUsers');
        Route::get('/edit/{id}', 'Dashboard\UserController@edit')->name('users.edit');
        Route::patch('/updatestatus/{id}', 'Dashboard\UserController@updatestatus')->name('users.updatestatus');
    });

    Route::prefix('companies')->group(function () {
        Route::get('/', 'Dashboard\CompanyController@index')->name('companies.index');
        Route::get('/create', 'Dashboard\CompanyController@create')->name('companies.create');
        Route::post('/', 'Dashboard\CompanyController@store')->name('companies.store');
        Route::get('/fetchCompanies', 'Dashboard\CompanyController@fetchCompanies')->name('companies.fetchCompanies');
        Route::get('/edit/{id}', 'Dashboard\CompanyController@edit')->name('companies.edit');
        Route::patch('/updatestatus/{id}', 'Dashboard\CompanyController@updatestatus')->name('companies.updatestatus');
    });

    Route::prefix('vehicles')->group(function () {
        Route::get('/', 'Dashboard\VehicleController@index')->name('vehicles.index');
        Route::get('/create', 'Dashboard\VehicleController@create')->name('vehicles.create');
        Route::get('/getBrandsById/{brandId}', 'Dashboard\VehicleController@getBrandsById')->name('vehicles.getBrandsById');
        Route::post('/', 'Dashboard\VehicleController@store')->name('vehicles.store');
        Route::get('/fetchVehicles', 'Dashboard\VehicleController@fetchVehicles')->name('vehicles.fetchVehicles');
        Route::get('/edit/{id}', 'Dashboard\VehicleController@edit')->name('companies.edit');
        Route::patch('/updatestatus/{id}', 'Dashboard\VehicleController@updatestatus')->name('vehicles.updatestatus');
    });
});
