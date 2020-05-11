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

Route::get('/','LinkController@Links')->name('Links');

Route::post('/create/link','LinkController@CreateLink')->name('CreateLink');
Route::get('/link/{id}','LinkController@Link')->name('Link');
