@section('pageTitle', 'Dados do Cliente -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<div class="block-content">
    <form action="/clientes/{{ $c->id }}/dados/sistema" method="POST" class="row">
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
                            <a href="/clientes/{{ $c->id }}/dados" class="btn btn-link p-0"><i class="fa fa-arrow-left"></i> Voltar</a>
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

                        &nbsp;
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title mb-4">Sistema Contratado</h5>
                        </div>

                        <div class="col-12">

                            <div id="accordion" role="tablist" aria-multiselectable="true" class="row">

                                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                                    <div class="card">
                                        <h6 class="card-header" role="tab" id="headingOne">
                                            <a class="collapsed d-block" data-toggle="collapse" data-parent="#accordion" href="#collapseSyspdv" aria-expanded="false" aria-controls="collapseSyspdv">
                                                <strong>SYSPDV</strong>
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>
                                        </h6>

                                        <div id="collapseSyspdv" class="collapse px-3 py-2" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="form-group">
                                                <label for="controle"><strong>Controle</strong></label>
                                                <input type="text" class="form-control" name="controle">
                                            </div>

                                            <div class="form-group">
                                                <label for="versao"><strong>Versão</strong></label>
                                                <input type="text" class="form-control" name="versao">
                                            </div>

                                            <div class="form-group">
                                                <label for="serie"><strong>Série</strong></label>
                                                <input type="text" class="form-control" name="serie">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;

                                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 mt-3">
                                    <div class="card">
                                        <h6 class="card-header" role="tab" id="headingTwo">
                                            <a class="collapsed d-block" data-toggle="collapse" data-parent="#accordion" href="#collapseAcsn" aria-expanded="false" aria-controls="collapseAcsn">
                                                <strong>ACSN</strong>
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>
                                        </h6>

                                        <div id="collapseAcsn" class="collapse px-3 py-2" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="form-group">
                                                <label for="contrato"><strong>Contrato</strong></label>
                                                <input type="text" class="form-control" name="contrato">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                &nbsp;

                                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                                    <div class="card">
                                        <h6 class="card-header" role="tab" id="headingThree">
                                            <a class="collapsed d-block" data-toggle="collapse" data-parent="#accordion" href="#collapseEcletica" aria-expanded="false" aria-controls="collapseEcletica">
                                                <strong>ECLÉTICA</strong>
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>
                                        </h6>

                                        <div id="collapseEcletica" class="collapse px-3 py-2" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="form-group">
                                                <label for="cod_rede"><strong>Código da Rede</strong></label>
                                                <input type="text" class="form-control" name="cod_rede">
                                            </div>

                                            <div class="form-group">
                                                <label for="cod_loja"><strong>Código da Loja</strong></label>
                                                <input type="text" class="form-control" name="cod_loja">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn my-3 form-button">
                                Alterar Dados
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@component('components.escolher-sistema', array('c' => $c))
@endcomponent

@endsection

@section('scripts')
<script src="{{ asset('js/formatar-input.js') }}"></script>
<script src="{{ asset('js/show.input.js') }}"></script>
@endsection
