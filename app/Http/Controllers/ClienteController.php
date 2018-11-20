<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Input;
use App\Cliente;
use App\Software;
use App\ClienteSoftware;
use App\Syspdv;
use App\Acsn;
use App\Ecletica;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('razao_social', 'asc')->get();
        return view('clientes.clientes-lista', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $softs = Software::all();
        return view('clientes.cliente-cadastro',compact('softs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente();
        $cliente->nome_fantasia = $request->input('nome_fantasia');
        $cliente->razao_social = $request->input('razao_social');
        $cliente->cnpj = $request->input('cnpj');
        $cliente->segmento = $request->input('segmento');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $id = \Auth::user()->id;
        $cliente->user_id = $id;

        $cliente->save();

        $cliente_software = new ClienteSoftware();
        $cliente_software->cliente_id = $cliente->id;
        $cliente_software->software_id = $request->input('software');

        $cliente_software->save();

        if($request->input('software') == 1){
            $software = new Syspdv();
            $software->cliente_software_id = $cliente_software->id;
            $software->controle = $request->input('controle');
            $software->versao = $request->input('versao');
            $software->serie = $request->input('serie');

            $software->save();
        }

        else if($request->input('software') == 2){
            $software = new Acsn();
            $software->cliente_software_id = $cliente_software->id;
            $software->contrato = $request->input('contrato');

            $software->save();
        }

        else if($request->input('software') == 3){
            $software = new Ecletica();
            $software->cliente_software_id = $cliente_software->id;
            $software->cod_rede = $request->input('cod_rede');
            $software->cod_loja = $request->input('cod_loja');

            $software->save();
        }

        return redirect('/cadastro/cliente')->with('alert', 'Cliente Cadastrado!');
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
        $softs = Software::all();
        $c = Cliente::find($id);
        return view('clientes.cliente-dados', compact('softs', 'c'));
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
        $cliente = Cliente::find($id);
        $cliente->nome_fantasia = $request->input('nome_fantasia');
        $cliente->razao_social = $request->input('razao_social');
        $cliente->cnpj = $request->input('cnpj');
        $cliente->segmento = $request->input('segmento');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $cliente->software_id = $request->input('software');

        $cliente->save();

        return redirect('/cliente/{id}/dados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/pesquisar');
    }

    public function indexWithTrashed(){
        $clientes = Cliente::onlyTrashed()->get();
        return view('corpo/cliente-deletar', compact('clientes'));
    }

    public function restore($id){
        $cliente = Cliente::onlyTrashed()->find($id);
        $cliente->restore();
        return redirect('/pesquisar');
    }

    public function delete($id){
        $cliente = Cliente::onlyTrashed()->find($id);
        $cliente->forceDelete();
        return redirect('/pesquisar');
    }
}
