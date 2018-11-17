<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('corpo.funcionario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('corpo.funcionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new User();

        $funcionario->name = $request->name;
        $funcionario->email = $request->email;
        $funcionario->password = bcrypt($request->password);
        $funcionario->save();

        return redirect('/cadastrar-usuario')->with('alert', 'Usuário Cadastrado!');

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
     public function editSenha($id)
    {
        $funcionario= User::find($id);

         return view("redefinirSenha", compact('funcionario'));
    }

    public function editNome($id)
    {
        $funcionario= User::find(auth()->user()->id);
        
         return view("redefinirNome", compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSenha(Request $request)
    {
        $funcionario = User::find(auth()->user()->id);
        
        $request->validate([

            'password'=>'required|confirmed',

        ]);

        $senhaAntiga = $funcionario->password;

        if (Hash::check($request->input('senhaAntiga'), $senhaAntiga)) {

            if ( ! $request->input('password') == '') {

                    $funcionario->password = bcrypt($request->input('password')); 
                    $funcionario->save();
        
                    return redirect('/configurar/redefinir-senha')->with('alertsucess', 'Senha Alterada!');
            }
        }

        else{
           
        return redirect('/configurar/redefinir-senha')->with('alerterror', 'Senha atual errada!');

        }

            /*if(bcrypt($senhaAntiga) === bcrypt($request->input('senhaAntiga'))){
                echo "vish2";
                if ( ! $request->input('password') == '') {// verifica se a senha foi alterada
                $funcionario->password = bcrypt($request->input('password')); // muda a senha do seu usuario já criptografada pela função bcrypt
            }
            else{
                echo "vish";
            }
        }
        
        */

  
    }

    public function updateNome(Request $request)
    {
        $funcionario = User::find(auth()->user()->id);
        $funcionario->name = $request->input('nomeFunc');
        $funcionario->save();
       
        return redirect('/configurar/redefinir-nome')->with('alert', 'Nome Alterado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $funcionario= User::find(auth()->user()->id);

        $funcionario->delete();

        return redirect('/');
    }
}