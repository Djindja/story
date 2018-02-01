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
    return view('index');
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
