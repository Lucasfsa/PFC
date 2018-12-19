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

                        <input type="checkbox" name="showSyspdvCard" class="sr-only" id="showSyspdvCard" @if($c->syspdv->count() > 0) checked @else {{ old('showSyspdvCard') == true ? 'checked' : '' }} @endif>
                        <div class="col-12" id="syspdvCard" @if(old('showSyspdvCard') == true) style="display: block" @elseif($c->syspdv->count() <= 0) style="display: none" @endif>
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                                    <div class="card">
                                        <h6 class="card-header">
                                            <a data-toggle="collapse" href="#collapseSyspdv" aria-expanded="false" aria-controls="collapseSyspdv" @if(old('showSyspdvCard') == true ? 'checked' : '') class="d-block" @else class="collapsed d-block" @endif>
                                                <strong>SYSPDV</strong>
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>
                                        </h6>

                                        <div id="collapseSyspdv" role="tabpanel" aria-labelledby="headingOne" @if(old('showAcsnCard') == true) class="collapse px-3 py-2 show" @else class="collapse px-3 py-2" @endif>
                                            <div class="form-group {{ $errors->has('controle') ? 'has-error' : '' }}">
                                                <label for="controle"><strong>Controle</strong></label>
                                                @if ($c->syspdv->count() > 0)
                                                    @foreach ($c->syspdv as $s)
                                                        <input type="text" class="form-control" name="controle" value="{{ $s->controle }}">
                                                    @endforeach
                                                @else
                                                    <input type="text" class="form-control" name="controle">
                                                @endif
                                                <span class="text-danger">{{ $errors->first('controle') }}</span>
                                            </div>

                                            <div class="form-group {{ $errors->has('versao') ? 'has-error' : '' }}">
                                                <label for="versao"><strong>Versão</strong></label>
                                                @if ($c->syspdv->count() > 0)
                                                    @foreach ($c->syspdv as $s)
                                                        <input type="text" class="form-control" name="versao" value="{{ $s->versao }}">
                                                    @endforeach
                                                @else
                                                    <input type="text" class="form-control" name="versao">
                                                @endif
                                                <span class="text-danger">{{ $errors->first('versao') }}</span>
                                            </div>

                                            <div class="form-group {{ $errors->has('serie') ? 'has-error' : '' }}">
                                                <label for="serie"><strong>Série</strong></label>
                                                @if ($c->syspdv->count() > 0)
                                                    @foreach ($c->syspdv as $s)
                                                        <input type="text" class="form-control" name="serie" value="{{ $s->serie }}">
                                                    @endforeach
                                                @else
                                                    <input type="text" class="form-control" name="serie">
                                                @endif
                                                <span class="text-danger">{{ $errors->first('serie') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    @if ($c->syspdv->count() > 0)
                                        <a data-toggle="modal" data-target="#removerSistema" class="btn btn-link p-0 remove">
                                            <i class="fa fa-times"></i>
                                            Remover Sistema
                                        </a>
                                    @else
                                        <a onclick="hiddenSyspdvCard()" class="btn btn-link p-0 remove">
                                            <i class="fa fa-times"></i>
                                            Remover Sistema
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        &nbsp;

                        <input type="checkbox" name="showAcsnCard" class="sr-only" id="showAcsnCard" @if($c->acsn->count() > 0) checked @else {{ old('showAcsnCard') == true ? 'checked' : '' }} @endif>
                        <div class="col-12" id="acsnCard" @if(old('showAcsnCard') == true) style="display: block" @elseif($c->acsn->count() <= 0) style="display: none" @endif>
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                                    <div class="card">
                                        <h6 class="card-header">
                                            <a data-toggle="collapse" href="#collapseAcsn" aria-expanded="false" aria-controls="collapseAcsn" @if(old('showAcsnCard') == true ? 'checked' : '') class="d-block" @else class="collapsed d-block" @endif>
                                                <strong>ACSN</strong>
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>
                                        </h6>

                                        <div id="collapseAcsn" role="tabpanel" aria-labelledby="headingTwo" @if(old('showAcsnCard') == true) class="collapse px-3 py-2 show" @else class="collapse px-3 py-2" @endif>
                                            <div class="form-group {{ $errors->has('contrato') ? 'has-error' : '' }}">
                                                <label for="contrato"><strong>Contrato</strong></label>
                                                @if ($c->acsn->count() > 0)
                                                    @foreach ($c->acsn as $a)
                                                        <input type="text" class="form-control" name="contrato" value="{{ $a->contrato }}">
                                                    @endforeach
                                                @else
                                                    <input type="text" class="form-control" name="contrato" value="{{ old('contrato') }}">
                                                @endif
                                                <span class="text-danger">{{ $errors->first('contrato') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    @if ($c->acsn->count() > 0)
                                        <a data-toggle="modal" data-target="#removerSistema" class="btn btn-link p-0 remove">
                                            <i class="fa fa-times"></i>
                                            Remover Sistema
                                        </a>
                                    @else
                                        <a onclick="hiddenAcsnCard()" class="btn btn-link p-0 remove">
                                            <i class="fa fa-times"></i>
                                            Remover Sistema
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        &nbsp;

                        <input type="checkbox" name="showEcleticaCard" class="sr-only" id="showEcleticaCard" @if($c->ecletica->count() > 0) checked @else {{ old('showEcleticaCard') == true ? 'checked' : '' }} @endif>
                        <div class="col-12" id="ecleticaCard" @if(old('showEcleticaCard') == true) style="display: block" @elseif($c->ecletica->count() <= 0) style="display: none" @endif>
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                                    <div class="card">
                                        <h6 class="card-header">
                                            <a data-toggle="collapse" href="#collapseEcletica" aria-expanded="false" aria-controls="collapseEcletica" @if(old('showEcleticaCard') == true ? 'checked' : '') class="d-block" @else class="collapsed d-block" @endif>
                                                <strong>ECLÉTICA</strong>
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            </a>
                                        </h6>

                                        <div id="collapseEcletica" role="tabpanel" aria-labelledby="headingThree" @if(old('showEcleticaCard') == true) class="collapse px-3 py-2 show" @else class="collapse px-3 py-2" @endif>
                                            <div class="form-group {{ $errors->has('cod_rede') ? 'has-error' : '' }}">
                                                <label for="cod_rede"><strong>Código da Rede</strong></label>
                                                @if ($c->ecletica->count() > 0)
                                                    @foreach ($c->ecletica as $e)
                                                        <input type="text" class="form-control" name="cod_rede" value="{{ $e->cod_rede }}">
                                                    @endforeach
                                                @else
                                                    <input type="text" class="form-control" name="cod_rede" value="{{ old('cod_rede') }}">
                                                @endif
                                                <span class="text-danger">{{ $errors->first('cod_rede') }}</span>

                                            </div>

                                            <div class="form-group {{ $errors->has('cod_loja') ? 'has-error' : '' }}">
                                                <label for="cod_loja"><strong>Código da Loja</strong></label>
                                                @if ($c->ecletica->count() > 0)
                                                    @foreach ($c->ecletica as $e)
                                                        <input type="text" class="form-control" name="cod_loja" value="{{ $e->cod_loja }}">
                                                    @endforeach
                                                @else
                                                    <input type="text" class="form-control" name="cod_loja" value="{{ old('cod_loja') }}">
                                                @endif
                                                <span class="text-danger">{{ $errors->first('cod_loja') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                        @if ($c->ecletica->count() > 0)
                                            <a data-toggle="modal" data-target="#removerSistema" class="btn btn-link p-0 remove">
                                                <i class="fa fa-times"></i>
                                                Remover Sistema
                                            </a>
                                        @else
                                            <a onclick="hiddenEcleticaCard()" class="btn btn-link p-0 remove">
                                                <i class="fa fa-times"></i>
                                                Remover Sistema
                                            </a>
                                        @endif
                                </div>
                            </div>
                        </div>
                        &nbsp;

                        @if ($c->syspdv->count() <= 0 or $c->acsn->count() <= 0 or $c->ecletica->count() <= 0)
                            <div class="col-12">
                                <a data-toggle="modal" data-target="#modalSystems" class="btn btn-link p-0">
                                    <i class="fa fa-plus"></i>
                                    Clique para adicionar sistemas
                                </a>
                            </div>
                        @endif

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

@component('components.remover-sistema', array('c' => $c))
@endcomponent

@endsection

@section('scripts')
<script src="{{ asset('js/formatar-input.js') }}"></script>
<script src="{{ asset('js/show.input.js') }}"></script>
@endsection
