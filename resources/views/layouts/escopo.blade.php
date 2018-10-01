<!DOCTYPE html>

<html lang="pt-br">
  
  <head>
    
    <meta charset="utf-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <link rel="icon" href="imagem/icon.png">

               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
                  <link rel="stylesheet" type="text/css" href="{{ asset('css/escopo.css') }}">

  </head>
  
  <body>  

      <div>

          <nav class="navbar navbar-custom">
           
              <div class="container-fluid">
             
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">   

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                 </button>

                    <div id="menu" class="navbar-collapse collapse">
                         
                       <ul class="nav navbar-nav navbar-right">
                      
                          <li> <a  href="">Configurações</a></li>
                          
                          <li> <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
                          </li>  

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">                       
                              @csrf


                            </form> 
                             
                        </ul>   

                    </div> 

              </div>

          </nav>      

              <div class="wrapper">

                          
                <nav id="sidebar">
                     
                    <div class="sidebar-header" align="center">
                                  
                        <img id="imgheader" src="imagem/img001.png">
                  
                    </div>

                     <ul class="list-unstyled components">
                                  
                         <li> <a class="botaomenu" href="pesquisa">Pesquisar Cliente</a> </li>
                         
                         <li> <a class="botaomenu" href="cadastro">Cadastrar Cliente</a> </li>                                            
                     </ul>    

                 </nav>

              </div>

           
                    <main class="py-4">
                        @yield('escopo')
                    </main>

      </div>  

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    
      <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>