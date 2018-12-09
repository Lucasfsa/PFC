@section('pageTitle', 'Esqueci a senha -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/esquecisenha.css') }}">
@endsection

@extends('layouts.base', ['destino'=>'login'])

@section('base')
<div class="container">
    <div class="card">
        <img id="imgmenu" src="imagem/img001.png">

        <div class="card-body">
           
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
            @endif


            <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <h3 align="center">Redefinir Senha</h3>

            <div id="legenda">
                <p>Será enviado um link para redefinição de senha. Insira o endereço de e-mail vinculado a sua conta.</p>
                
            </div>



            <input id="email" class="inputredefinir form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="Digite o seu endereço de e-mail..." required>


                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif



            <button class="buttonredefinir" type="submit">Enviar</button>

        </form>
        </div>
    </div>
</div>
@endsection


