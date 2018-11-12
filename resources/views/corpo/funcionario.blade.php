@section('pageTitle', 'Cadastrar Usuário -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/funcionario.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Cadastrar Usuário</h3>

<form method="POST" action="/cadastrar-usuario" aria-label="{{ __('Cadastro-funcionario') }}">
    @csrf
    <div class="form-group px-5">

        @if (session('alert'))
        <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
            <div class="row vertical-align">
                <div class="col-xs-1 mx-3 text-center vertical-align">
                    <i class="fa fa-check"></i>
                </div>
                <div class="col-xs-11">
                    <strong>{{ session('alert') }}</strong>
                </div>
                <button type="button" class="close vertical-align" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif

        <br>

        <label>Nome</label>
        <input placeholder="Digite o nome..." type="text" class="form-control" name="name" required>
        <br>

        <label>E-mail</label>
        <input placeholder="Digite o E-mail..." type="email" class="form-control" name="email" required>
        <br>

        <label>Senha</label>
        <input placeholder="Digite a senha..." type="password" class="form-control" name="password" required>
        <br>

        <label>Repita a senha</label>
        <input placeholder="Digite a senha..." type="password" class="form-control" name="confirm_password" required>

        <br>

        <button id="buttoncadastro" type="submit" class="btn">
            Cadastrar <i class="fas fa-user-plus"></i>
        </button>

    </div>

</form>

@endsection
