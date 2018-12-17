<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use App\Http\Requests\UpdateSystemRequest;
use Illuminate\Support\Facades\Input;
use App\Cliente;
use App\PessoaJ;
use App\PessoaF;
use App\Syspdv;
use App\Acsn;
use App\Ecletica;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get()->sortBy('razao_social');
        return view('clientes.clientes-lista', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.cliente-cadastro');
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
        $cliente->segmento = $request->input('segmento');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $id = \Auth::user()->id;
        $cliente->user_id = $id;

        $cliente->save();

        if($request->opt == 'cnpj') {
            $cnpj = new PessoaJ();
            $cnpj->cnpj = $request->input('cnpj');

            $cliente->pessoa_j()->save($cnpj);
        }

        else if($request->opt == 'cpf') {
            $cpf = new PessoaF();
            $cpf->cpf = $request->input('cpf');

            $cliente->pessoa_f()->save($cpf);
        }


        if($request->syspdv == true) {
            $syspdv = new Syspdv();
            $syspdv->controle = $request->input('controle');
            $syspdv->versao = $request->input('versao');
            $syspdv->serie = $request->input('serie');

            $syspdv->save();
            $cliente->syspdv()->sync($syspdv);
        }

        if($request->acsn == true) {
            $acsn = new Acsn();
            $acsn->contrato = $request->input('contrato');

            $acsn->save();
            $cliente->acsn()->sync($acsn);
        }

        if($request->ecletica == true) {
            $ecletica = new Ecletica();
            $ecletica->cod_rede = $request->input('cod_rede');
            $ecletica->cod_loja = $request->input('cod_loja');

            $ecletica->save();
            $cliente->ecletica()->sync($ecletica);
        }

        return redirect('/clientes/cadastro')->with('alert', 'Cliente Cadastrado!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Cliente::findOrFail($id);
        return view('clientes.cliente-dados', compact('c'));
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
        $cliente->segmento = $request->input('segmento');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $cnpj = ['cnpj' => $request->input('cnpj')];
        $cpf = ['cpf' => $request->input('cpf')];

        $cliente->save();
        $cliente->pessoa_j()->update($cnpj);
        $cliente->pessoa_f()->update($cpf);

        return redirect('/clientes/'.$id.'/dados')->with('alert', 'Dados Alterados!');
    }

    public function editSystemData($id)
    {
        $c = Cliente::findOrFail($id);
        return view('clientes.cliente-sistema', compact('c'));
    }

    public function updateSystemData(Request $request, UpdateSystemRequest $us, $id)
    {
        $cliente = Cliente::find($id);

        $cliente_syspdv = DB::table('cliente_syspdv')->where('cliente_id',$cliente->id)->first();
        if($cliente_syspdv != null) {
            $syspdv = Syspdv::findOrFail($cliente_syspdv ->syspdv_id);

            $syspdv->controle = $request->input('controle');
            $syspdv->versao = $request->input('versao');
            $syspdv->serie = $request->input('serie');

            $syspdv->save();
        }

        $cliente_acsn = DB::table('cliente_acsn')->where('cliente_id',$cliente->id)->first();
        if($cliente_acsn != null) {
            $acsn = Acsn::findOrFail($cliente_acsn->acsn_id);

            $acsn->contrato = $request->input('contrato');

            $acsn->save();
        } elseif ($us->input('acsn') == true) {
            $acsn = new Acsn();
            $acsn->contrato = $us->input('contrato');

            $acsn->save();
            $cliente->acsn()->sync($acsn);
        }

        $cliente_ecletica = DB::table('cliente_ecletica')->where('cliente_id',$cliente->id)->first();
        if($cliente_ecletica != null) {
            $ecletica = Ecletica::findOrFail($cliente_ecletica->ecletica_id);

            $ecletica->cod_rede = $request->input('cod_rede');
            $ecletica->cod_loja = $request->input('cod_loja');

            $ecletica->save();
        }

        return redirect('/clientes/'.$id.'/dados/sistema')->with('alert', 'Dados Alterados!');
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
        return redirect('/clientes/removidos');
    }

    public function indexWithTrashed(){
        $clientes = Cliente::onlyTrashed()->get();
        return view('corpo/cliente-deletar', compact('clientes'));
    }

    public function restore($id){
        $cliente = Cliente::onlyTrashed()->find($id);
        $cliente->restore();
        return redirect('/clientes');
    }

    public function delete($id){
        $cliente = Cliente::onlyTrashed()->find($id);
        $cliente->forceDelete();
        return redirect('/pesquisar');
    }
}
