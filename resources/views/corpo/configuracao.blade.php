<!DOCTYPE html>
<html>

<head>
	
	<title>Configurações</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
	<link rel="icon" href="{{ asset('imagem/icon.png') }}">

</head>

<body>

 @extends('layouts.escopo')
 @section('escopo')

  <div id="corpo">
  	

  	<div id="divtitle">
              
       <p align="center" id="titlepesquisa">Configurações</p>

    </div>

    <div id="buttonmenu" >

    		<div class="menuedit" align="center" >
	    		
		        <a class="btn buttonstyle" href="configurar/redefinir-senha"> Redefinir Senha</a>


			    <a class="btn buttonstyle" href="configurar/redefinir-nome"> Redefinir Nome </a>

	
				<a class="btn buttonstyle" href="configurar/redefinir-email"> Redefinir E-mail </a>

				<a class="btn buttonstyle" href="configurar/desativar-conta"> Desativar Conta</a>	
		
			</div>

	</div>		

	  <main class="py-4">

       @yield('config')
      </main>


  </div>
 
 @endsection
</body>

</html>