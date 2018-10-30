<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">

            <link rel="icon" href="imagem/icon.png">

            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

            <link rel="stylesheet" type="text/css" href="{{ asset('css/escopo.css') }}">

            <script src="{{ asset('js/app.js') }}" defer></script>

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

  </head>

  <body>

      <div>

           <nav class="navbar navbar-expand navbar-dark">
            <div class="container-fluid">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" class="nav-link active dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true">
                             {{ explode(" ", Auth::user()->name)[0] }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/configurar" class="dropdown-item">
                                <i class="fas fa-cog"></i>
                                Configurações
                            </a>

                            <div class="dropdown-divider"></div>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </div>
          </nav>


              <div class="wrapper">


                <nav id="sidebar">

                    <div class="sidebar-header" align="center">

                        <img id="imgheader" src="../imagem/img001.png">

                    </div>

                     <ul class="list-unstyled components">

                         <li> <a class="botaomenu" href="/pesquisar"><i>Pesquisar Cliente</i></a>
                         </li>

                         <li> <a class="botaomenu" href="/cadastrar-cliente"><i>Cadastrar Cliente</i></a>
                         </li>
                         @if (Auth::user()->is_admin())
                         <li> <a class="botaomenu" href="/cadastrar-usuario"><i>Cadastrar Usuário</i></a>
                         </li>
                         @endif

                         <li> <a class="botaomenu" href="/inicio" ><i>Atualizar Dados</i></a>
                         </li>

                         <li> 

                            <div class="dropdown show">
                             
                              <a class="botaomenu titledrop dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Controle de Chaves </a>

                              <div class="dropmenu dropdown-menu" aria-labelledby="dropdownMenuLink">
                                
                                <a class="dropdown-item" href="/chaves/pesquisar">Pesquisar Chave <i class="fas fa-search"></i></a>
                                
                                <a class="dropdown-item" href="/chaves/registrar">Registrar Chave <i class="fas fa-key"></i> </a>
                               
                              </div>

                            </div>


                         </li>
                     </ul>

                 </nav>

              </div>


                    <main class="py-4">
                        @yield('escopo')
                    </main>

      </div>


  </body>

</html>
