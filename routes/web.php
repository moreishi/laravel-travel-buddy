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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function() {
	Route::get('/users', 'UsersController@index')->name('users');
	Route::get('/user/{id}', 'UsersController@show')->name('user');
	Route::get('/profile/edit', 'UsersController@profile')->name('profile');
	Route::get('/profile/edit/{id}', 'UsersController@edit')->name('edit-profile');
	Route::post('/profile/edit', 'UsersController@update')->name('edit-profile');

	Route::get('/profile/views','VisitorsController@index');

});