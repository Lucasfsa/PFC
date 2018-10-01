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

Route::get('/', ['uses' => 'Controller@homepage']); 
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);
Route::get('/pesquisa', ['uses' => 'Controller@pesquisa']);
Route::resource('cliente', 'ClientesController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
