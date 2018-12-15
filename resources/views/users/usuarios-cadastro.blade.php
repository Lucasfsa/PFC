@section('pageTitle', 'Cadastro de Usuários -')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<div class="block-content">
    <form action="/cadastro/usuario" method="post" class="row">
        @csrf
        <div class="container-fluid cadastro mt-4">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="text-center page-title">Cadastro de Usuários</h2>
                            <hr>
                        </div>

                        @if (session('alert'))
                        <div class="alert col-md-4 mx-auto mb-0">
                            <div class="msg msg-success text-success">
                                <i class="fa fa-check"></i>
                                <strong>{{ session('alert') }}</strong>
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif

                        @if (count($errors))
                        <div class="alert col-md-4 mx-auto mb-0">
                            <div class="msg msg-warning msg-warning-text">
                                <i class="fa fa-exclamation-triangle"></i>
                                <strong>Existem erros nos campos.</strong>
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        @endif

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="sub-title my-4">Informações do Usuário</h5>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name"><strong>* Nome</strong></label>
                                <input placeholder="Nome" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email"><strong>* E-mail</strong></label>
                                <input placeholder="E-mail" type="text" class="form-control" name="email" value="{{ old('email') }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <label for="password"><strong>* Senha</strong></label>
                                    <input placeholder="Senha" type="password" class="form-control" name="password">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12 {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                                    <label for="confirm_password"><strong>* Confirmar Senha</strong></label>
                                    <input placeholder="Repita a Senha" type="password" class="form-control" name="confirm_password">
                                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn my-3 form-button">
                                Cadastrar
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection


