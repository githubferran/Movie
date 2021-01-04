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

Route::get('/genero', 'HomeController@buscarGenero')->name('genero');
Route::get('/buscar', 'HomeController@buscar');
Route::get('/ficha/{id}', 'HomeController@fichaPelicula')->name('ficha_producto');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
