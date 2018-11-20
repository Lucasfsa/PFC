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
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <a id="item_nav" class="navbar-brand" href="{{ url($destino) }}"> <span><i class="fas fa-arrow-left"></i></span> </a>
        </div>
    </nav>

    @yield('base')

	{{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
