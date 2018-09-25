<!DOCTYPE html>

<html lang="pt-br">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Cadastrar</title>
    <link rel="icon" href="imagem/icon.png">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/cadastrocliente.css') }}">

  </head>
  
  <body>  

      <nav id="navbar" class="navbar navbar-custom">
       <div class="container-fluid">
         
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">    
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div id="menu" class="navbar-collapse collapse">
         
            <ul class="nav navbar-nav navbar-right">
      
              <li> <a  href="">Configurações</a> </li>
              <li> <a  href="">Sair</a> </li>  
             
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
         
            <div >
              <p id="titlepesquisa">Cadastro de Clientes</p>
            </div>

            <form method="POST" action="{{ route('cliente.store') }}" aria-label="{{ __('Cadastro') }}">
              @csrf
              <div id="area">

                <div  class="form-group inputform" >
                    
                    <label  class="fontfrontpage" for="razaosocial">Razão Social</label>           
                    
                    <input name="rz_social" type="text" class="form-control input00" placeholder="Digite a razao social..." required autofocus />
                                        
                </div>

                 <div  class="form-group inputform" >
                    <label  class="fontfrontpage" for="email">E-mail</label>           
                    
                    <input name="email" type="email" class="form-control input00" placeholder="Digite o e-mail..." required />
                    
                </div>

                 <div  class="form-group inputform" >
                    <label  class="fontfrontpage" for="cnpj">CNPJ</label>           
                    
                    <input name="cnpj" type="text" class="form-control  input01" placeholder="Digite o cnpj..." required />
                    
                </div>

                 <div class="form-group inputform" >                    
                  
                    <label class="fontfrontpage" for="telefone">Telefone </label>          
                  
                    <input name="telefone" type="tel" class="form-control input01" placeholder="Digite o telefone..." required />                    
                   
                </div>
                
              </div>
            

            <div id="pesquisar"  >
              <button type="submit" id="buttoncadastrar" class="btn ">Cadastrar  <i class="glyphicon glyphicon-ok"></i></button>

            </div>
          </form>
           
        </div>

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>    
  </body>
</html>