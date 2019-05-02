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

// Route::resource('users','PersonController');
Route::get('/users','PersonController@index');
Route::post('/add','PersonController@add');
Route::put('/update/{id}','PersonController@update');
Route::delete('/delete/{id}','PersonController@delete');