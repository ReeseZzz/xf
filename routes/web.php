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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/business', 'IndexController@business')->name('business');


Route::get('/cases', 'CaseController@show')->name('cases');
Route::get('/cases/{id}', 'CaseController@detail')->name('cases.detail');
