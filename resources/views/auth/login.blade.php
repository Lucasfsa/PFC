<!DOCTYPE html>

<html>

<head>
   
    <title>Entrar</title>

    <meta charset="utf-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <link rel="icon" href="imagem/icon.png">

               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

                    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

</head>

<body>

@extends('layouts.base')

@section('base')

<div class="container">
         
            <div class="card">
               
                <img id="imgmenu" src="imagem/img001.png">
                
                <div class="card-body"  >
                    
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
                           
                            
                            <div>
                                <label for="password">{{ __('Senha') }}</label>    

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>E-mail ou senha inválido.</strong>
                                    </span>
                                @endif
                           
                            </div>

                        </div>


                        <div class="form-group">
                            
                            <div >
                                <button id="buttoncadastrar" type="submit" class="btn">
                                    {{ __('Entrar') }}
                                </button>

                                <a class="btn btn-link" id="link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
     
    
</div>
@endsection



</body>

</html>


