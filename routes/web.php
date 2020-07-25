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

/* Route::get('/', function () {
    return view('main');
}); */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/getPhrases', 'HomeController@getPhrases')->name('GetPhrases');
Route::post('/changeStyle', 'HomeController@changeStyle')->name('ChangeStyle');
Route::post('/changeColor', 'HomeController@changeColor')->name('ChangeColor');
Route::post('/changePosition', 'HomeController@changePosition')->name('ChangePosition');
