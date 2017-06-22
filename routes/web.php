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

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {


    Route::get('/mycvs', 'CVController@index');
    Route::get('/mycvs/new', 'CVController@newCv');
    Route::get('/mycvs/{id}/preview', 'CVController@viewCv');

    Route::post('/mycvs', 'CVController@createCv');
    Route::post('/mycvs', 'CVController@createCv');
});

