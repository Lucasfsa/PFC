@section('pageTitle', 'Redefinir Email -')


@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/email.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Configurações</h3>

<div id="buttonmenu" >

    <div class="menuedit" align="center" >
        <a class="btn buttonstyle" href="redefinir-senha"> Redefinir Senha</a>
        <a class="btn buttonstyle" href="redefinir-nome"> Redefinir Nome </a>
        <a class="btn buttonstyle" href="redefinir-email"> Redefinir E-mail </a>
        <a class="btn buttonstyle" href="desativar-conta"> Desativar Conta</a>
    </div>

    <div  id="subcorpo">
        <p align="center">Redefinir E-mail</p>

        <div id="legenda">
            <label>Insira um endereço de e-mail e será enviado um link para redefinição do seu e-mail.</label>
        </div>

        <input class="inputredefinir" type="email" name="enviaremail" placeholder="Digite o seu endereço de e-mail...">

        <button class="buttonredefinir" type="submit" > Enviar </button>
    </div>

</div>

@endsection
