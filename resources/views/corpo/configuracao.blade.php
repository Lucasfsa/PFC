@section('pageTitle', 'Configurações -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Configurações</h3>

<div id="buttonmenu" >
    <div class="menuedit" align="center" >
        <a class="btn buttonstyle" href="configurar/redefinir-senha"> Redefinir Senha</a>
        <a class="btn buttonstyle" href="configurar/redefinir-nome"> Redefinir Nome </a>
        <a class="btn buttonstyle" href="configurar/desativar-conta"> Desativar Conta</a>
    </div>
</div>

<main class="py-4">
    @yield('config')
</main>

@endsection
