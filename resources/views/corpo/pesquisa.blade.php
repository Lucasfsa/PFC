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
                        <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#clienteInfo" data-target-id="{{ $c->id }}">
                            <span class="fas fa-info"></span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@component('components.cliente-info')
@endcomponent

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
