@section('pageTitle', 'Registros Removidos -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pesquisa.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Registros Removidos</h3>

<div id="resultados" class="px-5 py-3 table-responsive">

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
                <th class="text-center">Detalhes</th>
                <th class="text-center">Restaurar</th>
                <th class="text-center">Apagar</th>
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
                <td class="text-center">
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#restaurarCliente">
                        <span class="fas fa-undo-alt"></span>
                    </button>
                </td>
                <td class="text-center">
                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#apagarPermanente">
                        <span class="fas fa-trash"></span>
                    </button>
                </td>
            </tr>

            <div id="{{'clienteInfo'.$c->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="clienteInfoLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>{{ $c->razao_social }}</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Razão Social: {{ $c->razao_social }}</p>
                            <p>CNPJ: {{ $c->cnpj }}</p>
                            <p>Segmento: {{ $c->segmento_mercado }}</p>
                            <p>Sistema: {{ $c->software['nome_software'] }}</p><a href="">gerar chave >>></a>
                            <p>Email: {{ $c->email }}</p>
                            <p>Telefone: {{ $c->telefone }}</p>
                            <p>Registrado por: {{ $c->user['name'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="restaurarCliente" tabindex="-1" role="dialog" aria-labelledby="confirmDelete" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-header d-flex justify-content-center danger text-light">
                            <h4>{{ $c->razao_social }}</h4>
                        </div>
                        <div class="modal-body">
                            <p>Esta ação recupera o registro e suas demais informações.</p>
                        </div>
                        <div class="modal-footer flex-center">
                            <a href="/cliente/{{ $c->id }}/restaurar" class="btn">Restaurar</a>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" >Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="apagarPermanente" tabindex="-1" role="dialog" aria-labelledby="confirmDelete" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-header d-flex justify-content-center danger text-light">
                            <h4>{{ $c->razao_social }}</h4>
                        </div>
                        <div class="modal-body">
                            <p>Esta ação deleta permanentemente o registro e suas demais informações.</p>
                        </div>
                        <div class="modal-footer flex-center">
                            <a href="/cliente/{{ $c->id }}/deletar" class="btn">Deletar</a>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" >Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>

</div>

@endsection

@section('scripts')
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
@endsection