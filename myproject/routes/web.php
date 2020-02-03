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



Auth::routes();

Route::get('/home', 'CategotyController@index')->name('home');
Route::resource ('/category','CategotyController');
Route::resource ('/activity','ActivityController');
Route::resource ('/user','UserController');
Route::resource ('/comment','CommentController');


//Route::get('/{activity_id}/info', 'ActivityController@info')->name('info');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add','ActivityController@create');
Route::post('/search/{id}','ActivityController@search')->name("search");


// Route::get('/add', function () {
//     return view('add');
// });

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/profile','UserController@index')->name("profile");

// Route::get('/profile', function () {
//     return view('profile');
// });


// Route::get('/edit', function () {
//     return view('Edit.edit');
// });

Route::get('/cat', function () {
    return view('cat');
});

Route::get('/edit/{id}','ActivityController@edit');
Route::get('/delete/{id}','ActivityController@destroy');
