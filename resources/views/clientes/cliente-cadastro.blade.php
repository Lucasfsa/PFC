@section('pageTitle', 'Cadastro de Clientes -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<div class="block-content">
    <form action="/cadastro/cliente" method="post" class="row">
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
                                <input placeholder="Nome Fantasia" type="text" class="form-control" name="nome_fantasia" value="{{ old('nome_fantasia') }}" >
                                <span class="text-danger">{{ $errors->first('nome_fantasia') }}</span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-8 col-md-8 col-sm-12 col-xs-12 {{ $errors->has('razao_social') ? 'has-error' : '' }}">
                                    <label for="razao_social"><strong>* Razão Social</strong></label>
                                    <input placeholder="Razão Social" type="text" class="form-control" name="razao_social" value="{{ old('razao_social') }}" >
                                    <span class="text-danger">{{ $errors->first('razao_social') }}</span>
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6 {{ $errors->has('cnpj') ? 'has-error' : '' }}">
                                    <label for="cnpj"><strong>* CNPJ</strong></label>
                                    <input placeholder="CNPJ" type="text" class="form-control" name="cnpj" value="{{ old('cnpj') }}" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );" >
                                    <span class="text-danger">{{ $errors->first('cnpj') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="segmento"><strong>Segmento de Mercado</strong></label>
                                <input placeholder="Segmento" type="text" class="form-control" name="segmento" value="{{ old('segmento') }}">
                                <br>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title mb-4">Contato</h5>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-8 col-md-12 col-sm-12 col-xs-12 {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label for="email"><strong>* E-mail</strong></label>
                                    <input placeholder="E-mail" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-6 {{ $errors->has('telefone') ? 'has-error' : '' }}">
                                    <label for="telefone"><strong>* Telefone</strong></label>
                                    <input placeholder="Telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}" maxlength="14" onkeydown="javascript: fMasc( this, mTel );" >
                                    <span class="text-danger">{{ $errors->first('telefone') }}</span>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title mb-4">Sistema Contratado</h5>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('software') ? 'has-error' : '' }}">
                                <label for="software"><strong>* Software</strong></label>
                                <select id="software" name="software" class="form-control" value="{{ old('software') }}">
                                    <option disabled selected>Selecione</option>
                                    @foreach($softs as $s)
                                        <option value="{{ $s->id }}">{{ $s->nome_software }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('software') }}</span>
                            </div>
                        </div>

                        <div id="syspdv" class="col-12" style="display: none;" >
                            <div class="form-row">
                                <div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12 {{ $errors->has('controle') ? 'has-error' : '' }}">
                                    <label for="controle"><strong>* Controle</strong></label>
                                    <input placeholder="Controle" type="text" class="form-control" name="controle" value="{{ old('controle') }}">
                                    <span class="text-danger">{{ $errors->first('controle') }}</span>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12 {{ $errors->has('versao') ? 'has-error' : '' }}">
                                    <label for="versao"><strong>* Versão</strong></label>
                                    <input placeholder="Versão" type="text" class="form-control" name="versao" value="{{ old('versao') }}">
                                    <span class="text-danger">{{ $errors->first('versao') }}</span>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12 {{ $errors->has('serie') ? 'has-error' : '' }}">
                                    <label for="serie"><strong>* Série</strong></label>
                                    <input placeholder="Série" type="text" class="form-control" name="serie" value="{{ old('serie') }}">
                                    <span class="text-danger">{{ $errors->first('serie') }}</span>
                                </div>
                            </div>
                        </div>

                        <div id="acsn" class="col-12" style="display: none;" >
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 {{ $errors->has('contrato') ? 'has-error' : '' }}">
                                    <label for="contrato"><strong>* Contrato</strong></label>
                                    <input placeholder="Contrato" type="text" class="form-control" name="contrato" value="{{ old('contrato') }}">
                                    <span class="text-danger">{{ $errors->first('contrato') }}</span>
                                </div>
                            </div>
                        </div>

                        <div id="ecletica" class="col-12" style="display: none;" >
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 {{ $errors->has('cod_rede') ? 'has-error' : '' }}">
                                    <label for="cod_rede"><strong>* Código da Rede</strong></label>
                                    <input placeholder="Código da Rede" type="text" class="form-control" name="cod_rede" value="{{ old('cod_rede') }}">
                                    <span class="text-danger">{{ $errors->first('cod_rede') }}</span>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 {{ $errors->has('cod_loja') ? 'has-error' : '' }}">
                                    <label for="cod_loja"><strong>* Código da Loja</strong></label>
                                    <input placeholder="Código da Loja" type="text" class="form-control" name="cod_loja" value="{{ old('cod_loja') }}" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">
                                    <span class="text-danger">{{ $errors->first('cod_loja') }}</span>
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
<script src="{{ asset('js/show.input.js') }}"></script>
@endsection
