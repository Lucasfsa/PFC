<!DOCTYPE html>

<html lang="pt-br">
  
  <head>
  <title> Início </title>  
    <meta charset="utf-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <link rel="icon" href="imagem/icon.png">

               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
                  <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}">

  </head>
<body>

	<div>
			
      <div class="imagem">
        
        <img align="center" src="{{ asset('imagem/img001.png') }}">

      </div>

        <div class="titulo">
        
        <ul>
          <li>
            <h2>Seja bem-vindo</h2>
          </li>

         <li> 
          
          <a class="btn" href=""><span><i class="glyphicon glyphicon-arrow-right"></i></span></a>
          
         </li>
        </ul>

        </div>

          
    				
    				

    			

	</div>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script>	

</body>
</html>