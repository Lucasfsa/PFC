<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisaController extends Controller
{
    public function index (){
		return view('corpo/pesquisa');
    }

   public function resultadosPesquisa()
    {
        $busca = Input::get('busca');
        if($busca != ""){
            $cliente = Cliente::where('nome', 'LIKE', '%' . $busca . '%')
                                    ->orWhere('email', 'LIKE', '%' . $busca . '%')
                                    ->get();
            if(count($cliente) > 0)
                return view('corpo/pesquisa')->withDetails($cliente)->withQuery($busca);
        }
        return view('corpo/pesquisa')->withMessage("Dados não existem");
    }
}
