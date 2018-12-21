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

Route::get('/',"ProductController@index");

Route::get('/NewPost',"ProductController@create");
Route::post('/NewPost',"ProductController@create");

Route::get('/products/view/{id}', "ProductController@view")->name('article');

Route::get('/products/edit/{id}', "ProductController@edit");
Route::post('/products/edit/{id}', "ProductController@edit");
Route::get('/products/delete/{id}', "ProductController@delete");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




