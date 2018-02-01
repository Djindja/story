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

// route to show the login form
// Route::get("login", 'HomeController@showLogin');
// Route::post('login', [ 'as' => 'login', 'uses' => 'HomeController@showLogin']);
//
// route to process the form
// Route::post("/login", 'HomeController@doLogin');
//
Route::get("/logout", 'HomeController@doLogout');

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::group(["prefix" => "job"], function () {
    Route::get("/", "Admin\JobsController@index");

    Route::get("/create", "Admin\JobsController@create");
    Route::post("/create", "Admin\JobsController@postCreate");
    Route::get("/edit/{id}", "Admin\JobsController@edit");
    Route::get("/{id}", "Admin\JobsController@edit");
    Route::post("/edit/{id}", "Admin\JobsController@postEdit");
    Route::get("/delete/{id}", "Admin\JobsController@delete");
});
