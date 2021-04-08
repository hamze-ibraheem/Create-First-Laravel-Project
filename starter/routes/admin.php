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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/admin/test1', function () {
    return view('welcome');
});

Route::get('/admin/test2/{id}', function ($id) {
    return $id;
})->name('a');


Route::get('/admin/test3/{id?}', function () {
    return view('welcome');
})->name('b');

// Route::namespace('Front')->group(function(){
//     Route::get('users','UserController@showAdminName');
// });

// Route::prefix('users')->group(function(){
//     Route::get('show','UserController@showAdminName');
//     Route::get('delete','UserController@deleteAdminName');
// });

Route::group(['prefix' => 'users','middleware'=>'auth'],function(){
    Route::get('/',function(){
        return 'work';
    });
    Route::get('show','UserController@showAdminName');
    Route::get('delete','UserController@deleteAdminName');
});
