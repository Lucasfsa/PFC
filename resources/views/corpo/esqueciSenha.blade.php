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
            <h3 align="center">Redefinir Senha</h3>

            <div id="legenda">
                <p>Insira o endereço de e-mail vinculado a sua conta e será enviado um link para redefinição de sua senha.</p>
            </div>

            <input class="inputredefinir" type="email" name="enviaremail" placeholder="Digite o seu endereço de e-mail...">

            <button class="buttonredefinir" type="submit">Enviar</button>
        </div>
    </div>
</div>
@endsection


