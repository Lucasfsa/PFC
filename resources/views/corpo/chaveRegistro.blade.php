@section('pageTitle', 'Registrar Chave -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/chaveRegistro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Registrar Chave</h3>

<form action="/chave/registrar" method="POST">
    @csrf
    <div class="form-group px-5">

        <br>

        <label>Chave</label>
        <input placeholder="Digite ou cole a chave gerada..." type="text" class="form-control" name="chave" required>
        <br>

        <label>Cliente</label>
        <input placeholder="Digite o nome do cliente..." type="text" class="form-control" name="cliente" required>
        <br>

        <label>Sistema</label>

        <select class="form-control" id="exampleFormControlSelect1">
            <option>Selecione...</option>
            <option value="syspdv">SysPDV</option>
            <option value="ecletica">Eclética</option>
            <option value="acsn">ACSN</option>
        </select>

        <br>
        <label>Observação</label>
        <br>
        <textarea class="form-control" type="text" name="observacao"></textarea>

        <button id="buttoncadastro" type="submit" class="btn">
            Registrar <i class="fas fa-check-circle"></i>
        </button>

    </div>
</form>

@endsection
