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

Route::prefix('upload')->group(function() {
    Route::get('/', 'UploadController@index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () { 
    Route::post('/dropzone/upload', 'UploadController@dropzoneUpload')->name('dropzone.upload');
    Route::post('/dropzone/delete', 'UploadController@dropzoneDelete')->name('dropzone.delete');
    //Filepond
    Route::post('/filepond/upload', 'UploadController@filepondUpload')->name('filepond.upload');
    Route::delete('/filepond/delete', 'UploadController@filepondDelete')->name('filepond.delete');
});