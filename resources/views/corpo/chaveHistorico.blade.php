<!DOCTYPE html>
<html>
<head>
	
	<title>Histórico de Chaves</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/chaveHistorico.css') }}">
  	<link rel="icon" href="{{ asset('imagem/icon.png') }}">

</head>

<body>

	@extends('layouts.escopo')
	@section('escopo')

	<div id="corpo">
		 
		 <div align="center">
             <p id="titlepesquisa">Histórico de  Chaves</p>
          </div>

          <form id="searchForm" action="/historico" method="POST" class="mt-4 px-5">
        @csrf

        <div class="input-group">
            
          <div id="resultados" class="p-5 table-responsive-sm">

		        <table id="tabelaClientes" class="table table-sm table-hover mx-auto text-nowrap" cellspacing="0" width="100%">
		            <thead>
		                <tr>
		                    
		                    <th>Sistema</th>
		                    <th>Usuário</th>
		                    <th>Cliente</th>
		                    <th>Chave</th>
		                    <th>Data</th>
		                </tr>
		            </thead>

		            <tbody >
		                @foreach ($clientes as $c)
		                <tr>
		                    <td class="ordem"></td>
		                    <td>{{ $c-> }}</td>
		                    <td>{{ $c-> }}</td>
		                    <td>{{ $c-> }}</td>
		                    <td>{{ $c-> }}</td>
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


    </form>


	</div>

	@endsection
</body>
</html>