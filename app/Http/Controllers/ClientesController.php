<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Cliente;
Use DB;

class ClientesController extends Controller{

	public function __construct__(){}


	public function index(Clientes $cliente){
		$clientes = $cliente->all();
		return view('cadastro');
	} 

	public function store(Request $request){
		$cliente = new Cliente();
		$cliente->email = $request->input('email');
		$cliente->rz_social = $request->input('rz_social');
		$cliente->cnpj = $request->input('cnpj');
		$cliente->telefone = $request->input('telefone');
		$cliente->save();
			
		return print "<script> alert('O CLIENTE FOI CADASTRADO COM SUCESSO!'); window.history.go(-1); </script>\n";
		}

	
		
	}




