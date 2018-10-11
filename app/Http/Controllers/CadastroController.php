<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Cliente;
Use DB;

class CadastroController extends Controller{

	public function __construct__(){}


	public function index(){
		return view('corpo/cadastro');
	} 

	public function store(Request $request){
		$cliente = new Cliente();
		$cliente->email = $request->input('email');
		$cliente->rz_social = $request->input('rz_social');
		$cliente->cnpj = $request->input('cnpj');
		$cliente->telefone = $request->input('telefone');
		$cliente->save();
			
		return redirect('cadastrar-cliente')->with('msg', 'cliente cadastrado');		
	}

		
	}




