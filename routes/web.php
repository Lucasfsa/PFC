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

Route::prefix('clientes')->group(function() {

    //Lista de Clientes
    Route::get('/', 'ClienteController@index')->middleware('auth');

    //Cadastro de Clientes
    Route::get('/cadastro', 'ClienteController@create')->middleware('auth');
    Route::post('/cadastro', 'ClienteController@store')->middleware('auth');

    //Editar Dados do Cliente
    Route::get('/{id}/dados', 'ClienteController@edit')->middleware('auth');
    Route::post('/{id}/dados', 'ClienteController@update')->middleware('auth');

    //Editar Dados dos Sistemas Contratados pelo do Cliente
    Route::get('/{id}/dados/sistema', 'ClienteController@editSystemData')->middleware('auth');

    //Remover Sistema Contratado pelo Cliente

});

Route::post('/clientes/{id}/dados/sistema', 'ClienteController@updateSystemData')->middleware('auth');
Route::post('/clientes/{id}/dados/sistema/#', 'ClienteController@removerSistema')->middleware('auth');

Route::get('/cliente/{id}/remover', 'ClienteController@destroy')->middleware('auth');
Route::get('/clientes/removidos', 'ClienteController@indexWithTrashed')->middleware('auth');
Route::get('/cliente/{id}/restaurar', 'ClienteController@restore')->middleware('auth');
Route::get('/cliente/{id}/deletar', 'ClienteController@delete')->middleware('auth');

//Página de cadastro de funcionário
Route::get('/cadastro/usuario', 'UserController@create')->middleware('auth');
Route::post('/cadastro/usuario', 'UserController@store')->middleware('auth');

//Página de atualização de dados
//Route::get('/atualizar', 'AtualizacaoController@index');

//Página de Configuração
Route::get('/configurar', 'ConfiguracaoController@index')->middleware('auth')->middleware('auth');
Route::get('/configurar', 'ConfiguracaoController@index');
Route::get('/configurar/redefinir-senha/', 'UserController@editSenha');
Route::post('/configurar/redefinir-senha/','UserController@updateSenha');
Route::get('/configurar/redefinir-nome/', 'UserController@editNome');
Route::post('/configurar/redefinir-nome/','UserController@updateNome');
Route::get('/configurar/desativar-funcionario', 'UserController@destroy');

//Página de Configuração - Redefinir Senha/Email/Nome/desativar conta
Route::get('/configurar/redefinir-senha', 'ConfiguracaoController@RedefinirSenha')->middleware('auth');
Route::get('/configurar/redefinir-nome', 'ConfiguracaoController@RedefinirNome')->middleware('auth');
Route::get('/configurar/desativar-conta', 'ConfiguracaoController@DesativarConta')->middleware('auth');

Route::get('esqueci-minha-senha', 'SenhaController@index');


/*Route::prefix('chaves')->group(function() {

    Route::get('/geradas', 'ChaveController@verificarChavesGeradas')->middleware('auth');

});*/

Route::get('/chave/historico', 'ChaveHistoricoController@index');

Route::get('/chave/registrar', 'ChaveRegistroController@create')->middleware('auth');
Route::post('/chave/registrar', 'ChaveRegistroController@store')->middleware('auth');




