<!DOCTYPE html>
<html>
<head>
	

	<title>Redefinir Senha</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="icon" href="{{ asset('imagem/icon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/senha.css') }}">


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

	</div>	

			<div  id="subcorpo">

					<p align="center">Redefinir Senha</p>

					<i>Insira um e-mail.</i>
					<br>
					<i>Enviaremos um link para redefinição.</i>
				

					<span>
					
					<input class="inputredefinir" type="email" name="enviaremail" placeholder="Digite o seu endereço de e-mail...">
					
					<button class="buttonredefinir" type="submit" > Enviar link </button>
				</span>

			</div>

  </div>

 @endsection

</body>
</html>