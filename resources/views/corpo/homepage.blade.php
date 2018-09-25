<!DOCTYPE html>

<html lang="pt-br">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>BC Organizer</title>
    <link rel="icon" href="{{ asset('imagem/icon.png') }}">

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  </head>
  
  <body>  
        
        <nav class="navbar">
          <div class="container">
            <div class="navbar-header">
         
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
              
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>
              
              <a id="logoimg" href="#"> 
                <img class="img-responsive grow" id="logo" src="{{ asset('imagem/img001.png') }}"> </a>
           </div>

            <div id="barra-navegacao" class="navbar-collapse collapse">
              
              <ul class="nav navbar-nav navbar-right">
                
                <li> 
                  <a href="http://www.dataautomacao.com.br">Data Automação</a> 
                </li>
               
              </ul> 

            </div>

          </div>
        </nav>

     
      
        <div  align="center" id="corpo" >
        <img   class="img-responsive" id="img01" src="{{ asset('imagem/logo.png') }}">
        </div>         
     
      <div id="acess" align="center" >
      <a type="button" id="one" class="btn" href="{{ asset('login') }}">Entrar</a>
      </div>
       

      <!--<div id="janela" class="modal">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
        <span id="icon">&times;</span>
        </button>
        
        <h4 align="center">Realize seu login</h4>      
      </div>
          
    
    <div class="modal-body">
      

      <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
        <div class="form-group ">
          
          <label for="email">E-mail</label> <br> 
          
          <div class="input-group">
            
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            
            <input id="usuario" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus/>

             @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif

          </div>

        </div>

        <div class="form-grupo">
         
          <label for="password">Senha </label> 

          <div class="input-group">
            
           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''}} " id="password" name="password" placeholder="***********" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="modalbutton" class="btn">Entrar</button>
          <button type="button" id="modalbutton" class="btn" data-dismiss="modal">Cancelar</button>
      </div>
      </form>

    </div>
    
    </div>
    </div>
    </div>!-->
      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>    
  </body>
</html>