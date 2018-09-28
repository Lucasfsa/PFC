<!DOCTYPE html>

<html lang="pt-br">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pesquisar</title>
    <link rel="icon" href="imagem/icon.png">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylepaginainicial.css') }}">


  </head>
  
  <body>  

       <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        </div>

      <nav  class="navbar">
       <div class="container-fluid">
         
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">    
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div id="menu" class="navbar-collapse collapse">
         
            <ul  class="nav navbar-nav navbar-right">
      
              <li> <a href="">Configurações</a></li>
              <li> <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a></li>  

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
             
            </ul>   

          </div> 

        </div>

      </nav>      

      <div class="wrapper">
        
        <nav id="sidebar">
            <div class="sidebar-header" align="center" >
                <img id="imgheader" src="imagem/img001.png">
            </div>

            <ul class="list-unstyled components">
                
                <li>
                    <a class="botaomenu" href="pesquisa">Pesquisar Cliente</a>
                </li>
                <li>
                    <a class="botaomenu" href="cadastro">Cadastrar Cliente</a>
                </li>
                              
            </ul>        
        </nav>

        <div id="corpo"  >
          
         <div>
                <p id="titlepesquisa">Pesquisa de Clientes</p>
            
                <form method="POST" action="{{ route('cliente.index') }}" aria-label="{{ __('Pesquisa') }}>
                  
                  <div class="form-group" id="subcorpo" >
                      
                      <label class="label01" for="razaosocial">Razão Social </label>           
                      <input  name="rzsocial" type="text" class="form-control input01" placeholder=" Digite a razão social..." /> 
                      
                      <label class="label01"  for="cnpj">CNPJ</label>         
                      <input name="cnpj" type="text" class="form-control input01" placeholder=" Digite o cnpj..." /> 
                      
                  </div>

                  <div id="labelsolo">
                        <label>Sistema</label>
                  </div>
                  
                  <div id="checkbusca" class="checkbox" >                
                      
                  
                      <div>     
                        
                        <label>
                          <input type="checkbox">
                          <span class="cr">
                            <i class="cr-icon glyphicon glyphicon-ok"></i>
                          </span>
                          Syspdv
                        </label>

                      </div>
                  
                      <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" > 
                          <span class="cr">
                            <i class="cr-icon glyphicon glyphicon-ok"></i>
                          </span>
                          Eclética
                        </label>

                      </div>
                      
                      <div class="checkbox">
                        
                        <label>
                          <input type="checkbox" >
                          <span class="cr">
                            <i class="cr-icon glyphicon glyphicon-ok"></i>
                          </span>
                          ACSN
                        </label>

                      </div>
   
                  </div>
    
                  <div>
                            
                     <button class="btn" id="buttonpesquisar" type="submit">Pesquisar 
                      <i class="glyphicon glyphicon-search"></i>
                     </button>

                  </div>
                
                </form>

              </div>
              
          </div>


   
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>    
  </body>
</html>