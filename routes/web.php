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

//Página de cadastro de cliente
Route::get('/cadastrar-cliente', 'ClienteController@create');
Route::resource('cliente', 'CadastroController');

//Página de pesquisa
Route::get('/pesquisar', 'ClienteController@index');
Route::POST('/pesquisar', 'ClienteController@show');

//Página de cadastro de funcionário
Route::get('/cadastrar-usuario', 'FuncionarioController@create');
Route::post('/cadastrar-usuario', 'FuncionarioController@store');

//Página de atualização de dados
Route::get('/atualizar', 'AtualizacaoController@index');

//Página de Configuração
Route::get('/configurar', 'ConfiguracaoController@index');

//Página de Configuração - Redefinir Senha/Email/Nome/desativar conta
Route::get('/configurar/redefinir-senha', 'ConfiguracaoController@RedefinirSenha');
Route::get('/configurar/redefinir-nome', 'ConfiguracaoController@RedefinirNome');
Route::get('/configurar/redefinir-email', 'ConfiguracaoController@RedefinirEmail');
Route::get('/configurar/desativar-conta', 'ConfiguracaoController@DesativarConta');

Route::get('esqueci-minha-senha', 'SenhaController@index');
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chave/pesquisar', 'ChavePesquisaController@index');
Route::get('/chave/registrar', 'ChaveRegistroController@index');
Auth::routes();


