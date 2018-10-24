<!DOCTYPE html>

<html lang="pt-br">
  
<head>
    
    <meta charset="utf-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <link rel="icon" href="imagem/icon.png">

               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

					<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
 
</head>
<body>

	<nav>
		
		<nav class="navbar navbar-custom">
           
              <div class="container-fluid">
             
                 <a id="item_nav" class="navbar-brand" href="{{ url($destino) }}"> <span><i class=" 	glyphicon glyphicon-arrow-left"></i></span> </a>

                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">   

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                 </button>


 

              </div>

          </nav> 

      <main class="py-4">
        @yield('base')
  </main>
	</nav>

	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>   

</body>

</html>