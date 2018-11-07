@section('pageTitle', 'Clientes')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pesquisa.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')
<div class="pr-5" id="corpo">

    <div align="center">
        <p id="titlepesquisa">Pesquisa de Clientes</p>
    </div>

    <div id="resultados" class="px-5 pt-3 pb-5 table-responsive">

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
                    <th>CNPJ
                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                    </th>
                    <th>Segmentos
                        <i class="fa fa-sort float-right my-1" aria-hidden="true"></i>
                    </th>
                    <th>Detalhes</th>
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
                        @if ($c->cnpj != null)
                        {{ $c->cnpj }}
                        @else
                        -
                        @endif
                    </td>
                    <td>
                        @if ($c->segmento_mercado != null)
                            {{ $c->segmento_mercado }}
                        @else
                        -
                        @endif
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#{{'clienteInfo'.$c->id}}">
                            <span class="fas fa-info"></span>
                        </button>
                    </td>
                </tr>
                

                <div id="{{'clienteInfo'.$c->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="clienteInfoLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>{{ $c->nome_fantasia }}</h4>
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Razão Social: {{ $c->razao_social }}</p>
                                <p>CNPJ: {{ $c->cnpj }}</p>
                                <p>Segmento: {{ $c->segmento_mercado }}</p>
                                <p>Email: {{ $c->email }}</p>
                                <p>Telefone: {{ $c->telefone }}</p>
                                <p>Registrado por: {{ $c->user['name'] }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location='/cadastrar-cliente'">Editar Informações</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                @endforeach
            </tbody>
        </table>

    </div>

</div>

{{-- @component('components.cliente-info')
@endcomponent --}}

{{-- <div id="clienteInfo" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>{{ $c->nome_fantasia }}</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div> --}}

@endsection

@section('scripts')
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>

{{-- <script>
    $(document).ready(function(){
        $("#clienteInfo").on("show.bs.modal", function(e) {
            var id = $(e.relatedTarget).data('target-id');
            $.get('/cliente/detalhes/' + id, function( data ) {
                $(".modal-body").html(data);
            });

        });
    });
</script> --}}
@endsection
