@section('pageTitle', 'Alterar Dados -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Alterar Dados do Cliente</h3>

<form action="/pesquisar" method="post">
    @csrf
    <div class="form-group px-5">
        <br>
        <label>Nome Fantasia</label>
        <input value="{{ $c->nome_fantasia }}" type="text" class="form-control" name="nomeFantasia">
        <br>

        <label>Razão Social</label>
        <input value="{{ $c->razao_social }}" type="text" class="form-control" name="razaoSocial">
        <br>

        <label>CNPJ</label>
        <input value="{{ $c->cnpj }}" type="text" class="form-control" name="cnpj" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );">
        <br>

        <label>Segmento</label>
        <input value="{{ $c->segmento_mercado }}" type="text" class="form-control" name="segmento">
        <br>

        <label for="software">Software Adquirido</label>
        <select name="software" class="form-control">
            @if ($c->software_id == null)
                <option selected></option>
                @foreach ($softs as $s)
                    <option value="{{ $s->id }}">{{ $s->nome_software }}</option>
                @endforeach
            @else
                @foreach($softs as $s)
                    @if ($s->id == $c->software_id)
                        <option value="{{ $s->id }}">{{ $s->nome_software }}</option>
                    @else
                        <option value="{{ $s->id }}">{{ $s->nome_software }}</option>
                    @endif
                @endforeach
            @endif
        </select>
        <br>

        <label>E-mail</label>
        <input value="{{ $c->email }}" type="email" class="form-control" name="email">
        <br>

        <label>Telefone</label>
        <input value="{{ $c->telefone }}" type="text" class="form-control" name="telefone" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">
        <br>

        <button id="buttoncadastro" type="submit" class="btn">
            Alterar Dados
        </button>
        &nbsp;
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalConfirmDelete">
            Remover Cadastro
        </button>

        <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDelete" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header d-flex justify-content-center danger text-light">
                        <h4>Você tem certeza?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Você realmente deseja excluir esse registro?</p>
                    </div>
                    <div class="modal-footer flex-center">
                        <a href="/cliente/{{$c->id}}/remover" class="btn danger">Confirmar</a>
                        <a type="button" class="btn secondary" data-dismiss="modal" >Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@section('scripts')
<script src="{{ asset('js/formatar-input.js') }}"></script>
@endsection
