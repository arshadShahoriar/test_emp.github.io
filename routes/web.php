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

Route::get('/', function () {
    return view('login');
});


Route::get('/home','homeController@index')->name('home_index');
Route::post('sendvalues','homeController@showvalues')->name('showvalues');
Route::post('/login','homeController@login')->name('login');
Route::get('/login','homeController@login_page')->name('login_page');
Route::get('/search','homeController@action')->name('action');
