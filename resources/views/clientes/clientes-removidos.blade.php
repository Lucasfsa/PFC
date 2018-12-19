@section('pageTitle', 'Registros Removidos -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pesquisa.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<div class="block-content">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
                        <h2 class="text-center page-title">Registros Removidos</h2>
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

                    <div id="resultados" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2 table-responsive">

                        <table id="tabelaClientes" class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome Fantasia
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th>Razão Social
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th>CPF/CNPJ
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th class="text-center">Detalhes</th>
                                    <th class="text-center">Restaurar</th>
                                    <th class="text-center">Deletar</th>
                                </tr>
                            </thead>

                            <tbody id="dadosClientes">
                                @foreach ($clientes as $c)
                                <tr>
                                    <td class="ordem"></td>
                                    <td>
                                        @if ($c->nome_fantasia != null)
                                            {{ $c->nome_fantasia }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($c->razao_social != null)
                                            {{ $c->razao_social }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($c->pessoa_j["cnpj"] != null)
                                            {{ $c->pessoa_j["cnpj"] }}
                                        @elseif ($c->pessoa_f["cpf"] != null)
                                            {{ $c->pessoa_f["cpf"] }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-bc btn-xs" data-toggle="modal" data-target="#{{'clienteInfo'.$c->id}}">
                                            <span class="fas fa-info"></span>
                                        </button>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-bc btn-xs" data-toggle="modal" data-target="#restaurarCliente">
                                            <span class="fas fa-undo-alt"></span>
                                        </button>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#apagarPermanente">
                                            <span class="fas fa-trash"></span>
                                        </button>
                                    </td>
                                </tr>

                                <div id="{{'clienteInfo'.$c->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="clienteInfoLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>@if($c->nome_fantasia != null){{ $c->nome_fantasia }}@else{{ $c->razao_social }}@endif</h4>
                                                <button class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p><b>Razão Social:</b> {{ $c->razao_social }}</p>
                                                <p><b>CPF / CNPJ:</b>
                                                    @if($c->pessoa_j["cnpj"] != null)
                                                        {{ $c->pessoa_j["cnpj"] }}
                                                    @else
                                                        {{ $c->pessoa_f["cpf"] }}
                                                    @endif
                                                </p>
                                                <p><b>Segmento:</b> {{ $c->segmento }}</p>
                                                <p><b>Email:</b> {{ $c->email }}</p>
                                                <p><b>Telefone:</b> {{ $c->telefone }}</p>
                                                <p><b>Registrado por:</b> {{ $c->user['name'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="restaurarCliente" tabindex="-1" role="dialog" aria-labelledby="confirmDelete" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content text-center">
                                            <div class="modal-header d-flex justify-content-center danger text-light">
                                                <h4>@if($c->nome_fantasia != null){{ $c->nome_fantasia }}@else{{ $c->razao_social }}@endif</h4>
                                            </div>
                                            <div class="modal-body text-gray">
                                                <p>Deseja recuperar o registro do cliente e suas demais informações?</p>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <a href="/clientes/{{ $c->id }}/restaurar" class="btn btn-bc m-0">Restaurar</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="apagarPermanente" tabindex="-1" role="dialog" aria-labelledby="confirmDelete" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content text-center">
                                            <div class="modal-header d-flex justify-content-center modal-danger text-light">
                                                <h3>Atenção!</h3>
                                            </div>
                                            <div class="modal-body text-gray">
                                                <p>Esta ação deleta permanentemente o registro e suas demais informações.</p>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <a href="/cliente/{{ $c->id }}/deletar" class="btn btn-danger">Deletar</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
@endsection
