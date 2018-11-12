@section('pageTitle', 'Cadastro de Clientes -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Cadastro de Clientes</h3>

<form action="/cadastrar-cliente" method="post">
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

        <label>Nome Fantasia</label>
        <input placeholder="Digite a Nome Fantasia" type="text" class="form-control" name="nomeFantasia" required>
        <br>

        <label>Razão Social</label>
        <input placeholder="Digite a Razão Social" type="text" class="form-control" name="razaoSocial" required>
        <br>

        <label>Cnpj</label>
        <input placeholder="Digite o Cnpj" type="text" class="form-control" name="cnpj" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );" required>
        <br>

        <label>Segmento</label>
        <input placeholder="Digite Segmento" type="text" class="form-control" name="segmento" required>
        <br>

        <label>E-mail</label>
        <input placeholder="Digite o E-mail" type="email" class="form-control" name="email" required>
        <br>

        <label>Telefone</label>
        <input placeholder="Digite o telefone..." type="text" class="form-control" name="telefone" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">

        <button id="buttoncadastro" type="submit" class="btn">
            Cadastrar
            <i class="fas fa-user-plus"></i>
        </button>
    </div>
</form>

@endsection

@section('scripts')
<script src="{{ asset('js/formatar-input.js') }}"></script>
@endsection
