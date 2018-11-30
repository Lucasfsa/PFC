@section('pageTitle', 'Chaves -')

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
                        <h2 class="text-center page-title">Chaves</h2>
                        <hr>
                    </div>

                    <div id="resultados" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2 table-responsive">

                        <table id="tabelaClientes" class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Chave
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th>Cliente
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th>Software
                                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                    </th>
                                    <th class="text-center">Data</th>
                                </tr>
                            </thead>

                            <tbody id="dadosClientes">
                                @foreach ($clientes as $c)
                                <tr>
                                    <td class="ordem"></td>
                                    <td>
                                        @if ($c->id == $c->cliente_ecletica["cliente_id"])
                                            1
                                        @else
                                            2
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
