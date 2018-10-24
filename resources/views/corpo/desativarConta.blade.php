<!DOCTYPE html>
<html>
<head>
	

	<title>Desativar Conta</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="icon" href="{{ asset('imagem/icon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/desativarconta.css') }}">


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

					<p align="center">Desativar Conta</p>

					<div id="legenda">
						<label>Após desativar sua conta, você não terá mais acesso ao sistema, para poder acessar novamente comunique ao administrador.</label>
					</div>

					
					<div align="center">
						<button class="buttonredefinir" type="submit" > Desativar </button>
					</div>
			

			</div>

	</div>		


  </div>

 @endsection

</body>
</html>