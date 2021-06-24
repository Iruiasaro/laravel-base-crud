<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'HomeController@index')->name('welcome');



// Route::get("/comics", "HomeController@index")->name("comics.index");

// Route::post("/comics", "HomeController@store")->name("comics.store");

// Route::get("/comics/create", "HomeController@create")->name("comics.create");

// Route::get("/comics/{user}", "HomeController@show")->name("comics.show");


// //Route::resource("/comics", "HomeController");

Route::get('/', 'HomeController@index');

Route::get('/comics', 'ComicController@index')->name('comics.index');