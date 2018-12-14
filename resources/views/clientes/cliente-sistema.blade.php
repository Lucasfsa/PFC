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

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="/clientes/{{ $c->id }}/dados" class="btn btn-link p-0"><i class="fa fa-arrow-left"></i> Voltar</a>
                        </div>
                        &nbsp;
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title mb-4">Sistema Contratado</h5>
                        </div>

                        @foreach($c->acsn as $a)
                        <div class="col-12">
                            <div class="row">
                                <div id="accordion2" role="tablist" class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                    <div class="card">
                                        <div class="card-header pl-2" role="tab" id="acsn">
                                            <h6 class="mb-0 ml-2">
                                                <strong>ACSN</strong>
                                            </h6>
                                        </div>

                                        <div id="acsnDados" class="px-3 py-2 show" role="tabpanel" aria-labelledby="acsn">
                                            <div class="form-group">
                                                <label for="contrato"><strong>Contrato</strong></label>
                                                <input value="{{ $a->contrato }}" type="text" class="form-control" name="contrato">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

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

@endsection

@section('scripts')
<script src="{{ asset('js/formatar-input.js') }}"></script>
@endsection
