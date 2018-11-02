<!DOCTYPE html>
<html>
<head>
	
	<title>Pesquisar Chave</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/chavePesquisa.css') }}">
  	<link rel="icon" href="{{ asset('imagem/icon.png') }}">

</head>

<body>

	@extends('layouts.escopo')
	@section('escopo')

	<div id="corpo">
		 
		 <div align="center">
             <p id="titlepesquisa">Pesquisar Chave</p>
          </div>

          <form id="searchForm" action="/pesquisar" method="POST" class="mt-4 px-5">
        @csrf

        <div class="input-group">
            
            <input type="search" id="myInput" class="form-control mr-1 pesquisa" name="busca_chaves" role="search" placeholder="Busca de registros de chaves">

            
        </div>


    </form>


	</div>

	@endsection
</body>
</html>