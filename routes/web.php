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
Route::get('/', 'IndexController@index');

//Rota de Login
Auth::routes();

//Página inicial pós login
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/soft', 'SoftwareController@index')->middleware('auth');

//Lista de Clientes
Route::get('/clientes', 'ClienteController@index')->middleware('auth');

//Cadastro de cliente
Route::get('/cadastro/cliente', 'ClienteController@create')->middleware('auth');
Route::post('/cadastro/cliente', 'ClienteController@store')->middleware('auth');

//Editar Dados do Cliente
Route::get('/cliente/{id}/dados', 'ClienteController@edit')->middleware('auth');
Route::post('/cliente/{id}/dados', 'ClienteController@update')->middleware('auth');


Route::get('/cliente/{id}/remover', 'ClienteController@destroy')->middleware('auth');
Route::get('/clientes/deletados', 'ClienteController@indexWithTrashed')->middleware('auth');
Route::get('/cliente/{id}/restaurar', 'ClienteController@restore')->middleware('auth');
Route::get('/cliente/{id}/deletar', 'ClienteController@delete')->middleware('auth');

//Página de cadastro de funcionário
Route::get('/cadastrar-usuario', 'FuncionarioController@create')->middleware('auth');
Route::post('/cadastrar-usuario', 'FuncionarioController@store')->middleware('auth');

//Página de atualização de dados
//Route::get('/atualizar', 'AtualizacaoController@index');

//Página de Configuração
Route::get('/configurar', 'ConfiguracaoController@index')->middleware('auth')->middleware('auth');
Route::get('/configurar', 'ConfiguracaoController@index');
Route::get('/configurar/redefinir-senha/', 'FuncionarioController@editSenha');
Route::post('/configurar/redefinir-senha/','FuncionarioController@updateSenha');
Route::get('/configurar/redefinir-nome/', 'FuncionarioController@editNome');
Route::post('/configurar/redefinir-nome/','FuncionarioController@updateNome');
Route::get('/configurar/desativar-funcionario', 'FuncionarioController@destroy');

//Página de Configuração - Redefinir Senha/Email/Nome/desativar conta
Route::get('/configurar/redefinir-senha', 'ConfiguracaoController@RedefinirSenha')->middleware('auth');
Route::get('/configurar/redefinir-nome', 'ConfiguracaoController@RedefinirNome')->middleware('auth');
Route::get('/configurar/desativar-conta', 'ConfiguracaoController@DesativarConta')->middleware('auth');

Route::get('esqueci-minha-senha', 'SenhaController@index');

Route::get('/chave/historico', 'ChaveHistoricoController@index')->middleware('auth');

Route::get('/chave/registrar', 'ChaveRegistroController@create')->middleware('auth');
Route::post('/chave/registrar', 'ChaveRegistroController@store')->middleware('auth');




