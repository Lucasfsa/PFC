@section('pageTitle', 'Configurações -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Configurações</h3>
<hr>

<div class="card">

	<div class="card-body">

		<h4 align="center" class="card-title">Opções do usuário</h4>
		<hr>
   		<div class="row">
	        <a class="btn buttonstyle col-md-6" href="configurar/redefinir-senha"> Redefinir Senha</a>
	        <a class="btn buttonstyle col-md-6" href="configurar/redefinir-nome"> Redefinir Nome</a>
        </div>
    </div>
        
</div>


<main class="py-4">
    @yield('config')
</main>

@endsection
