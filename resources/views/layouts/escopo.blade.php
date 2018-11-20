<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('pageTitle') {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('imagem/icon.png') }}" type="image/x-icon">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- CSS Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/escopo.css') }}">
    @yield('styles')
</head>
<body>
    <div class="wrapper">

        {{-- Sidebar --}}
        <nav id="sidebar">
            <div class="sidebar-header">
                <img id="imgheader" src="{{ asset('imagem/logo.png') }}" alt="{{ config('app.name') }}">
            </div>

            <ul class="list-unstyled components">
                <li class="dropdown-divider line-color"></li>
                <li>
                    <a class="botaomenu" href="{{ url('/pesquisar') }}">
                        <i>Pesquisar Cliente</i>
                    </a>
                </li>
                <li><a class="botaomenu" href="/cadastrar-cliente"><i>Cadastrar Cliente</i></a></li>
                @if (Auth::user()->is_admin())
                    <li><a class="botaomenu" href="/cadastrar-usuario"><i>Cadastrar Usuário</i></a></li>
                @endif
                <li>
                    <div>
                        <a class="botaomenu collapsed" href="#collapseitem"  data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
                            Controle de Chaves <i class="fas fa-angle-down"></i>

                        </a>

                        <div class="botaosubmenu collapse" id="collapseitem">
                            <a  href="/chave/historico">Histórico de Chaves  <i class="fas fa-history"></i></a>
                            <a  href="/chave/registrar">Registrar Chave  <i class="fas fa-file-medical"></i> </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown-divider line-color"></li>
            </ul>
        </nav>

        <div id="content">

            <nav class="navbar navbar-expand navbar-dark">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-list-ul"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="#" id="navbarDropdown" class="nav-link active dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
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

            @yield('escopo')
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/toggle.sidebar.js') }}"></script>
    @yield('scripts')
</body>
</html>
