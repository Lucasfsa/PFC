<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Cliente;
use App\Software;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('nome_fantasia', 'asc')->get();
        return view('corpo.pesquisa', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $softs = Software::all();
        return view('corpo/cadastro',compact('softs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome_fantasia = $request->input('nomeFantasia');
        $cliente->razao_social = $request->input('razaoSocial');
        $cliente->cnpj = $request->input('cnpj');
        $cliente->segmento_mercado = $request->input('segmento');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $id = \Auth::user()->id;
        $cliente->user_id = $id;

        $cliente->software_id = $request->input('software');

        $cliente->save();

        return redirect('/cadastrar-cliente')->with('alert', 'Cliente Cadastrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
