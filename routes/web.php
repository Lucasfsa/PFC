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

Route::get('/', 'Controller@homepage'); 
Route::get('/cadastro', 'Controller@cadastrar');
Route::get('/pesquisa', 'PesquisaController@index');
Route::get('/inicio', 'Controller@inicio'); 

Route::resource('cliente', 'ClientesController');
Route::POST('resultado', 'PesquisaController@resultadosPesquisa');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
