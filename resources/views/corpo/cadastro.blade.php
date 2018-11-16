@section('pageTitle', 'Cadastro de Clientes -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<div class="block-content">
    <form action="/cadastrar-cliente" method="post" class="row">
        @csrf
        <div class="container-fluid cadastro mt-4">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="text-center page-title">Cadastro de Clientes</h2>
                            <hr>
                        </div>

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

                        @if (count($errors))
                        <div class="alert col-md-4 mx-auto mb-0">
                            <div class="msg msg-warning msg-warning-text">
                                <i class="fa fa-exclamation-triangle"></i>
                                <strong>Existem erros nos campos.</strong>
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title my-4">Informações da Empresa</h5>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group {{ $errors->has('nome_fantasia') ? 'has-error' : '' }}">
                                <label for="nome_fantasia"><strong>* Nome Fantasia</strong></label>
                                <input placeholder="Nome Fantasia" type="text" class="form-control" name="nome_fantasia" value="{{ old('nome_fantasia') }}">
                                <span class="text-danger">{{ $errors->first('nome_fantasia') }}</span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-8 col-md-8 col-sm-12 col-xs-12 {{ $errors->has('razao_social') ? 'has-error' : '' }}">
                                    <label for="razao_social"><strong>* Razão Social</strong></label>
                                    <input placeholder="Razão Social" type="text" class="form-control" name="razao_social" value="{{ old('razao_social') }}">
                                    <span class="text-danger">{{ $errors->first('razao_social') }}</span>
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6 {{ $errors->has('cnpj') ? 'has-error' : '' }}">
                                    <label for="cnpj"><strong>* CNPJ</strong></label>
                                    <input placeholder="CNPJ" type="text" class="form-control" name="cnpj" value="{{ old('cnpj') }}" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );">
                                    <span class="text-danger">{{ $errors->first('cnpj') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="segmento"><strong>Segmento de Mercado</strong></label>
                                    <input placeholder="Segmento" type="text" class="form-control" name="segmento" value="{{ old('segmento') }}">
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6 ml-auto {{ $errors->has('software') ? 'has-error' : '' }}">
                                    <label for="software"><strong>* Software Contratado</strong></label>
                                    <select name="software" class="form-control">
                                        <option disabled selected>Selecione</option>
                                        @foreach($softs as $s)
                                        <option value="{{ $s->id }}">{{ $s->nome_software }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('software') }}</span>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title mb-4">Contato</h5>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-8 col-md-12 col-sm-12 col-xs-12 {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email"><strong>* E-mail</strong></label>
                                    <input placeholder="E-mail" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-6 {{ $errors->has('telefone') ? 'has-error' : '' }}">
                                    <label for="telefone"><strong>* Telefone</strong></label>
                                    <input placeholder="Telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">
                                    <span class="text-danger">{{ $errors->first('telefone') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn my-3 form-button">
                                Cadastrar
                                <i class="fas fa-user-plus"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script src="{{ asset('js/formatar-input.js') }}"></script>
@endsection
