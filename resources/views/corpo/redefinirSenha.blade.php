@section('pageTitle', 'Redefinir Senha -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/senha.css') }}">
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
            <p align="center">Redefinir Senha</p>

           <form method="POST">

            <div class="form-group">
            <label>Senha atual</label>
            <input class="form-control" type="password" name="senhaAntiga" required>
            <br>

            <label>Nova Senha</label>      
            <input class="form-control" type="password" name="senhaAtual" required>
            <br>

            <label>Confirmar Senha</label>         
            <input class="form-control" type="password" name="confirmarSenha" required>
            <br>

            <button class="buttonredefinir" type="submit" > Enviar </button>
            </div>

            </form>

    </div>

</div>

@endsection
