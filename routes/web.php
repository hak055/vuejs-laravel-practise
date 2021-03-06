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

Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/p/{slug}', 'PostsController@show')->name('p.show');


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::get('/page-items', function () {
    return view('items.index');
});

Route::get('/getItems', 'PageItemController@getItems');
Route::post('/getItems/storeItem', 'PageItemController@storeItem');
Route::post('/getItems/deleteItem/{id}', 'PageItemController@deleteItem');
Route::post ( '/getItems/editItem/{id}', 'PageItemController@editItems' );

