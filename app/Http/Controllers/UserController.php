<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Input;
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
}
