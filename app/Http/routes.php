<?php

Route::get('/', 'GalleryController@viewGalleryList');

// Route::get('/', [
// 	'as' => 'home',
// 	'uses' => 'PagesController@home'
// 	]);

Route::get('gallery/list', 'GalleryController@viewGalleryList');
Route::post('gallery/save', 'GalleryController@saveGallery');

Route::get('gallery/view/{id}', 'GalleryController@viewGalleryPics');
Route::post('image/do-upload', 'GalleryController@doImageUpload');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');