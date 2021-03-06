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

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::POST('api/verify/productkpi/','AController@AController');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('clients','ClientController');
    Route::resource('products','ProductController');
    Route::resource('managesubcribe','ManageSubcribeController');
});



