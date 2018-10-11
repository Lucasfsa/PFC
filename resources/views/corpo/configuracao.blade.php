<!DOCTYPE html>
<html>

<head>
	
	<title>Configurações</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">


</head>

<body>

 @extends('layouts.escopo')
 @section('escopo')

  <div id="corpo">
  	

  	<div id="divtitle">
              
       <p id="titlepesquisa">Configurações</p>

    </div>

    <div id="buttonmenu" align="center">


  			<button type="button" class="btn buttonstyle" data-toggle="modal" data-target="#">
			  Alterar Nome 
			</button>	
			
			<button type="button" class="btn buttonstyle" data-toggle="modal" data-target="#">
			  Alterar Senha
			</button>

			<button type="button" class="btn buttonstyle" data-toggle="modal" data-target="#">
			  Alterar E-mail
			</button>
		
			<button type="button" class="btn buttonstyle" data-toggle="modal" data-target="#">
			  Alterar Idioma
			</button>
			
			<button type="button" class="btn buttonstyle" data-toggle="modal" data-target="#">
			  Excluir Conta
			</button>


	</div>		



  </div>
 
 @endsection
</body>

</html>