@section('pageTitle', 'Desativar Conta -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/desativarconta.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Configurações</h3>

<div id="buttonmenu" >
    <div class="menuedit" align="center">
        <a class="btn buttonstyle" href="redefinir-senha"> Redefinir Senha</a>
        <a class="btn buttonstyle" href="redefinir-nome"> Redefinir Nome </a>
        <a class="btn buttonstyle" href="desativar-conta"> Desativar Conta</a>
    </div>

    <div  id="subcorpo">
        <p align="center">Desativar Conta</p>

        <div id="legenda">
            <label>Após desativar sua conta, você não terá mais acesso ao sistema, para poder acessar novamente comunique ao administrador.</label>
        </div>

        <div align="center">
            <button class="buttonredefinir" type="submit" > Desativar </button>
        </div>
    </div>
</div>

 @endsection
