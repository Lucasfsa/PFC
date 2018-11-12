@section('pageTitle', 'Login -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@extends('layouts.base', ['destino'=>'/'])

@section('base')
<div class="container">
    <div class="card">

        <img id="imgmenu" src="imagem/img001.png">

        <div class="card-body" >
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div >
                        <label for="email">{{ __('E-mail') }}</label>

                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>E-mail ou senha inválido.</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group ">
                    <label for="password">{{ __('Senha') }}</label>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>E-mail ou senha inválido.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button id="buttoncadastrar" type="submit" class="btn">
                        {{ __('Entrar') }}
                    </button>

                    <a class="btn btn-link" id="link" href="{{ url('esqueci-minha-senha') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
