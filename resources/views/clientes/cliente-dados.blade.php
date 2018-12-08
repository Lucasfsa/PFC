@section('pageTitle', 'Dados do Cliente -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<div class="block-content">
    <form action="/clientes/{{ $c->id }}/dados" method="post" class="row">
        @csrf
        <div class="container-fluid cadastro mt-4">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="text-center page-title">Dados do Cliente</h2>
                            <hr>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title my-4">Informações da Empresa</h5>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="razao_social"><strong>Razão Social</strong></label>
                                <input value="{{ $c->razao_social }}" type="text" class="form-control" name="razao_social">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <label for="nome_fantasia"><strong>Nome Fantasia</strong></label>
                                    <input value="{{ $c->nome_fantasia }}" type="text" class="form-control" name="nome_fantasia">
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <label for="segmento"><strong>Segmento de Mercado</strong></label>
                                    <input value="{{ $c->segmento }}" type="text" class="form-control" name="segmento">
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title mb-4">Contato</h5>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                    <label for="email"><strong>E-mail</strong></label>
                                    <input value="{{ $c->email }}" type="email" class="form-control" name="email">
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-6">
                                    <label for="telefone"><strong>Telefone</strong></label>
                                    <input value="{{ $c->telefone }}" type="text" class="form-control" name="telefone" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn my-3 form-button">
                                Alterar Dados
                            </button>
                            &nbsp;
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalConfirmRemove">
                                Remover Cadastro
                            </button>
                        </div>

                        <div class="modal fade" id="modalConfirmRemove" tabindex="-1" role="dialog" aria-labelledby="confirmDelete" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content text-center">
                                    <div class="modal-header d-flex justify-content-center modal-danger text-light">
                                        <h4>Você tem certeza?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Você realmente deseja remover esse registro?</p>
                                    </div>
                                    <div class="modal-footer flex-center">
                                        <a href="/cliente/{{$c->id}}/remover" class="btn btn-danger">Confirmar</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
                                    </div>
                                </div>
                            </div>
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
