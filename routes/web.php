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

use App\Mail\NewUserWelcomeMail;

Auth::routes();

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

Route::get('/', 'SearchesController@index');
Route::get('/search', 'SearchesController@words');
Route::get('/kangxi', 'SearchesController@kangxi');
Route::get('/radicals', 'SearchesController@radicals');
Route::get('/rad', 'SearchesController@rad');
Route::get('/en_rad', 'SearchesController@en_rad');
Route::get('/eng_radicals', 'SearchesController@eng_radicals');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
