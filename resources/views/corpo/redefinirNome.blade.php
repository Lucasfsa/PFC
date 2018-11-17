@section('pageTitle', 'Redefinir Nome -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nome.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Configurações</h3>

<div id="buttonmenu" >

    <div class="menuedit" align="center" >
        <a class="btn buttonstyle" href="redefinir-senha"> Redefinir Senha</a>
        <a class="btn buttonstyle" href="redefinir-nome"> Redefinir Nome </a>
        <a class="btn buttonstyle" href="desativar-conta"> Desativar Conta</a>
    </div>

    <div  id="subcorpo">
        
        <form method="POST" action=  "/configurar/redefinir-nome/">
        @csrf

            <p align="center">Redefinir Nome</p>

                @if (session('alert'))
                <div class="alert col-md-4 mx-auto mb-0">
                    <div class="msg msg-success text-success">
                        <i class="fa fa-check"></i>
                        <strong>{{ session('alert') }}</strong>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif

            <div class="form-group">

                <label>Digite o novo nome</label>
                <input class="form-control" value = "{{auth()->user()->name}}" class="inputredefinir" type="text" name="nomeFunc" placeholder="Digite o seu novo nome...">

                <br>

                <button class="buttonredefinir" type="submit" > Confirmar </button>

            </div>
        </form>
    </div>

</div>
@endsection
