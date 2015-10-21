<?php

// Route::get('/', 'GalleryController@index');

Route::get('/', [
	'as' => 'home',
	'uses' => 'GalleryController@index'
	]);

Route::get('users', 'UsersController@index');

Route::get('gallery/index', 'GalleryController@index');
Route::post('gallery/save', 'GalleryController@saveGallery');

Route::get('gallery/delete/{id}', 'GalleryController@delete');

Route::get('gallery/view/{id}', 'GalleryController@show');
Route::post('image/do-upload', 'GalleryController@doImageUpload');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');