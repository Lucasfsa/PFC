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


                <img class="img-responsive grow" id="logo" src="{{ asset('imagem/img001.png') }}">
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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>
