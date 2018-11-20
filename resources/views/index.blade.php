<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('imagem/icon.png') }}" type="image/x-icon">

    {{-- CSS Styles --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('imagem/logo.png') }}" alt="{{ config('app.name') }}" id="logoBc" class="text-white grow">
            </a>

            <a href="http://www.dataautomacao.com.br" class="navbar-brand">
                <img src="{{ asset('imagem/img002.png') }}" alt="Data Automação" id="logoData" class="text-white grow">
            </a>
        </div>
    </nav>

    <div id="main">
        <div id="content" class="container-fluid">
            <label>Esteja sempre no controle.</label>
            <br>
            <button type="button" class="btn btn-outline-light" onclick="window.location='{{ route('login') }}'">Login</button>
        </div>
    </div>
</body>
</html>
