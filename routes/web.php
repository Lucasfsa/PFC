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

//Página inicial do site
Route::get('/', 'HomePageController@index'); 

//Página inicial pós login
Route::get('/inicio', 'InicioController@index'); 

//Página de cadastro
Route::get('/cadastrar', 'CadastroController@index');
Route::resource('cliente', 'CadastroController');

//Página de pesquisa
Route::get('/pesquisar', 'PesquisaController@index');
Route::POST('/resultado', 'PesquisaController@resultadosPesquisa');

//Página de cadastro de funcionário
Route::get('/cadastrar-funcionario', 'FuncionarioController@index');

//Página de atualização de dados
Route::get('/atualizar', 'AtualizacaoController@index');

//Página de Configuração
Route::get('/configurar', 'ConfiguracaoController@index');

//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


