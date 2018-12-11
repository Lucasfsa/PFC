<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.usuarios-cadastro');
    }

    public function store(UserRequest $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();

        return view('users.usuarios-cadastro')->with('alert', 'Usuário Cadastrado!');
    }

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
