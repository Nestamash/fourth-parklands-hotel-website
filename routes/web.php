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
Route::get('/', 'PhotoController@index');

Route::post('/photo', 'PhotoController@store');

Route::get('/slides', 'PhotoController@slider');

Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');



//overall hotel images i.e bar restaurant and rooms
Route::get('hotel-gallery', 'HotelGalleryController@index');
Route::post('hotel-gallery', 'HotelGalleryController@upload');
Route::delete('hotel-gallery/{id}', 'HotelGalleryController@destroy');

//datepicker
Route::get('datepicker', 'HotelGalleryController@datepicker');




