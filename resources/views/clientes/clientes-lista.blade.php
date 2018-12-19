@section('pageTitle', 'Clientes -')

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
                        <h2 class="text-center page-title">Clientes</h2>
                        <hr>
                    </div>

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
                                    <th>CPF / CNPJ
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th>Segmento
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th class="text-center">Detalhes</th>
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
                                    <td>
                                        @if ($c->segmento != null)
                                            {{ $c->segmento }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-bc btn-xs" data-toggle="modal" data-target="#{{'clienteInfo'.$c->id}}">
                                            <span class="fas fa-info"></span>
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
                                                <div class="row">
                                                    <p class="col-md-6"><b>CPF/CNPJ:</b>
                                                        @if($c->pessoa_j["cnpj"] != null)
                                                            {{ $c->pessoa_j["cnpj"] }}
                                                        @else
                                                            {{ $c->pessoa_f["cpf"] }}
                                                        @endif
                                                    </p>
                                                    <p class="col-md-6"><b>Segmento:</b> {{ $c->segmento }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-6"><b>Email:</b> {{ $c->email }}</p>
                                                    <p class="col-sm-6"><b>Telefone:</b> {{ $c->telefone }}</p>
                                                </div>
                                                <ul class="list-unstyled components">

                                                    <li>
                                                        <a href="#sistemaSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sistema-menu">Sistema Contratado</a>
                                                        <ul class="collapse list-unstyled row" id="sistemaSubMenu">
                                                            <hr class="col-12">
                                                            @foreach ($c->syspdv as $s)
                                                                <li class="col-md-4 col-sm-6">
                                                                    SYSPDV
                                                                    <p class="mt-3 mb-1"><b>Controle:</b> {{ $s->controle }}</p>
                                                                    <p class="mb-1"><b>Versão:</b> {{ $s->versao }}</p>
                                                                    <p class="mb-2"><b>Série:</b> {{ $s->serie }}</p>
                                                                </li>
                                                            @endforeach
                                                            @foreach ($c->acsn as $a)
                                                                <li class="col-md-4 col-sm-6">
                                                                    ACSN
                                                                    <p class="mt-3 mb-2"><b>Contrato:</b> {{ $a->contrato }}</p>
                                                                </li>
                                                            @endforeach
                                                            @foreach ($c->ecletica as $e)
                                                                <li class="col-md-4 col-sm-6">
                                                                    ECLÉTICA
                                                                    <p class="mt-3 mb-1"><b>Código da Rede:</b> {{ $e->cod_rede }}</p>
                                                                    <p class="mb-2"><b>Código da Loja:</b> {{ $e->cod_loja }}</p>
                                                                </li>
                                                            @endforeach
                                                            <hr class="col-12">
                                                        </ul>
                                                    </li>

                                                </ul>
                                                <p><b>Registrado por:</b> {{ $c->user['name'] }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-bc" onclick="window.location='/clientes/{{ $c->id }}/dados'">Editar Informações</button>
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
