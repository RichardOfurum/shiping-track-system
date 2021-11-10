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

Route::get('package', function () {
    return view('track');
})->name('package.track');

Route::get('sample' , 'fetchLocationsController@sample');

Route::post('track', 'fetchLocationsController@fetch')->name('track');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home');

Route::prefix('/admin')->group(function(){

	Route::get('/', 'AdminController@index')->name('admin');

	Route::get('profile', 'ProfilesController@index')->name('admin.profiles');

	Route::get('profiles/active', 'ProfilesController@active')->name('profile.active');
	Route::get('profiles/in_active', 'ProfilesController@inActive')->name('profile.in_Active');
	

	Route::get('profiles/create', 'ProfilesController@create')->name('profile.create');
	Route::get('profiles/{profile}', 'ProfilesController@show')->name('profile.show');
	Route::get('profiles/{profile}/edit', 'ProfilesController@edit')->name('profile.edit');
	Route::patch('profile/{profile}', 'ProfilesController@update')->name('profile.update');
	Route::delete('profile/{profile}','ProfilesController@destroy')->name('profile.destroy');

	Route::post('profiles', 'ProfilesController@store')->name('profile.store');



	Route::get('locations/{location}/edit', 'LocationsController@edit')->name('location.edit');
	Route::patch('locations/{location}','LocationsController@update')->name('location.update');
	Route::delete('locations/{location}','LocationsController@destroy')->name('location.destroy');

	Route::post('location', 'LocationsController@store')->name('location.store');


	Route::get('users', 'UsersController@index')->name('users');
	Route::delete('users/{user}', 'UsersController@destroy')->name('user.destroy');




});