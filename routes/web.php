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
Route::get('/buscar', function () {
    return view('buscar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ser', function () {
    return view('ser');
});
Route::post('/ser','GudmomController@guardar');
Route::get('/registros','GudmomController@show ');