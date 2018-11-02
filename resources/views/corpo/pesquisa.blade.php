<!DOCTYPE html>

<html>

<head>

  <title> Pesquisa </title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pesquisa.css') }}">
  <link rel="icon" href="{{ asset('imagem/icon.png') }}">

</head>

<body>

    @extends('layouts.escopo', ["current"=>"clientes"])

    @section('escopo')
    <div class="pr-5" id="corpo">

         <div>

              <div align="center">

                    <p id="titlepesquisa">Pesquisa de Clientes</p>


              </div>

    <form id="searchForm" action="/pesquisar" method="POST" class="pt-5 px-5">
        @csrf

        <div class="input-group">
            
            <input type="search" id="busca" class="form-control mr-1 pesquisa" name="busca" role="search" placeholder="O que deseja buscar ?  Ex. cnpj, nome, telefone.">

            
        </div>


    </form>

    <div id="resultados" class="p-5 table-responsive-sm">

        <table id="tabelaClientes" class="table table-sm table-hover mx-auto text-nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Segmentos</th>
                    <th>Detalhes</th>
                </tr>
            </thead>

            <tbody id="dadosClientes">
                @foreach ($clientes as $c)
                <tr>
                    <td class="ordem"></td>
                    <td>{{ $c->nome_fantasia }}</td>
                    <td>{{ $c->rz_social }}</td>
                    <td>{{ $c->cnpj }}</td>
                    <td>{{ $c->segmento_mercado }}</td>
                    <td>
                        <button class="btn btn-info btn-xs" data-title="info">
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

    <script src="{{ asset('js/search.js') }}" defer></script>
   @endsection


  </body>

</html>
