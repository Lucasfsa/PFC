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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}">
</head>
<body>

    <div id="main">
        <div id="content" class="container-fluid my-auto">

            <img src="{{ asset('imagem/img001.png') }}">

            <div class="titulo">
                <h2>Seja bem-vindo {{ Auth::user()->name }}</h2>
            </div>

            <a class="btn" href="{{ url('/clientes') }}">
                <span> Acessar <i class="fa fa-arrow-right"></i> </span>
            </a>

        </div>
    </div>

</body>
</html>
