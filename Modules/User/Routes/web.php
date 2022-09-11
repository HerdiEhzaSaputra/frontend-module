<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::prefix('user')->group(function() {
        Route::get('/', 'UserController@index')->name('user.index');
    });

    //Users
    Route::resource('users', 'UsersController')->except('show');

    Route::prefix('users')->group(function() {
        //Roles
        Route::resource('roles', 'RolesController')->except('show');
    });

});
