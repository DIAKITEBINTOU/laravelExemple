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
/*
Route::get('/', 'NavController@home');
Route::get('/insert', 'NavController@insert');

Route::get('/description', function () {
    return view("Description");
});

*/
Route::get('/', 'NavController@home');
Route::get('/insert', 'NavController@insert');
Route::get('/update', 'ActionController@tupdate');

Route::post('/insert', 'ActionController@insertOne');
Route::post('/delete', 'ActionController@deleteOne');
Route::post('/update', 'ActionController@updateOne');