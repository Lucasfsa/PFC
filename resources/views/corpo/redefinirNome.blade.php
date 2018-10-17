<!DOCTYPE html>
<html>
<head>
	

	<title>Redefinir Senha</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="icon" href="{{ asset('imagem/icon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nome.css') }}">


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
	    		
		        <a class="btn buttonstyle" href="redefinir-senha"> Redefinir Senha</a>


			    <a class="btn buttonstyle" href="redefinir-nome"> Redefinir Nome </a>

	
				<a class="btn buttonstyle" href="redefinir-email"> Redefinir E-mail </a>

				<a class="btn buttonstyle" href="desativar-conta"> Desativar Conta</a>	
		
			</div>

			<div  id="subcorpo">

					<p align="center">Redefinir Nome</p>

					
					
					<span>
						<br>
						<label>Nome: </label>
						
						<input class="inputredefinir" type="text" name="name" placeholder="Digite o novo nome...">
						
						<label>Comfirme o nome: </label>
						<input class="inputredefinir" type="text" name="nameconfirme" placeholder="Digite o novo nome...">
					</span>

			</div>


	</div>		


  </div>

 @endsection

</body>
</html>