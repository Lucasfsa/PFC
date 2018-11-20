@section('pageTitle', 'Login -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@extends('layouts.base', ['destino'=>'/'])

@section('base')

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 mx-auto">
            <div class="card my-5 login-card">
                <div class="card-header text-center">
                    <img src="{{ asset('imagem/logo.png') }}" alt="{{ config('app.name') }}" class="mx-auto">
                </div>

                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        @if(count($errors))
                            <div class="alert alert-danger">
                                E-mail ou Senha inválidos!
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="email"><strong>{{ __('E-mail') }}</strong></label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password"><strong>{{ __('Senha') }}</strong></label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <a class="btn btn-link px-0" href="{{ url('esqueci-minha-senha') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn mt-3 btn-login">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
