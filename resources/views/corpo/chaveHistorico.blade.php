@section('pageTitle', 'Histórico de Chaves -')

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
                            <h2 class="text-center page-title">Histórico de Chaves</h2>
                            <hr>
                        </div> 

                        <div id="resultados" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2 table-responsive">

                            <table id="tabelaClientes" class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Chave<i  aria-hidden="true"></i>
                                        </th>

                                        <th>Cliente<i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                        </th>

                                        <th>Sistema<i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                        </th>

                                        <th>Observação<i aria-hidden="true"></i>
                                        </th>

                                        <th>Usuário<i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                        </th>

                                        <th class="text-center">Data/Hora
                                            <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody id="dadosClientes">
                                    @foreach ($chaves as $c)
                                    <tr>
                                        <td class="ordem"></td>
                                        <td>
                                            @if ($c->cod_chave!= null)
                                                {{ $c->cod_chave }}
                                            @else
                                                -
                                            @endif
                                            
                                        </td>
                                             
                                        <td>
                                            @if ($c->cliente!= null)
                                                {{ $c->cliente }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                           @if ($c->sistema!= null)
                                                {{ $c->sistema }}
                                            @else
                                                -
                                            @endif
                                        </td>

                                        <td>
                                            @if ($c->observacao!= null)
                                                {{ $c->observacao }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                           @if ($c->user_id!= null)
                                                {{ $c->user['name']}}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="text-center">
                                                {{ $c->created_at->format('d M Y - H:i:s') }}
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
