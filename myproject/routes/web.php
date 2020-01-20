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

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/edit_profile', function () {
    return view('Edit.edit_name');
});

Auth::routes();

Route::get('/home', 'CategoryController@index')->name('home');
Route::resource ('/category','CategoryController');
Route::resource ('/event','EventController');
Route::resource ('/user','UserController');
Route::resource ('/comment','CommentController');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/{event_id}/info', 'EventController@info')->name('info');
Route::put('/{event_id}/update_point', 'UserController@update_point')->name('update_point');

//Route::get('/home', 'HomeController@index')->name('home');

