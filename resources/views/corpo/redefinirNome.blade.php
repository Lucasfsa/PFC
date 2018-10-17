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

					<div id="legenda">
						<label>Insira um endereço de e-mail e será enviado um link para redefinição do seu nome.</label>
					</div>

					
					
					<input class="inputredefinir" type="email" name="enviaremail" placeholder="Digite o seu endereço de e-mail...">
					
					<button class="buttonredefinir" type="submit" > Enviar </button>
			

			</div>


	</div>		


  </div>

 @endsection

</body>
</html>