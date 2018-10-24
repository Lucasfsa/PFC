<!DOCTYPE html>

<html>

<head>
   
    <title>Esqueci minha senha</title>

    <meta charset="utf-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <link rel="icon" href="imagem/icon.png">

               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

                    <link rel="stylesheet" type="text/css" href="{{ asset('css/esquecisenha.css') }}">

</head>

<body>

@extends('layouts.base', ['destino'=>'login'])

@section('base')

<div class="container">
          
            
            <div class="card">
               
                <img id="imgmenu" src="imagem/img001.png">
                
                <div class="card-body"  >
                    
                      <h3 align="center">Redefinir Senha</h3>

                      <div id="legenda">
                       
                        <i>Insira um endereço de e-mail e será enviado um link para redefinição da sua senha.</i>

                      </div>

                        <input class="inputredefinir" type="email" name="enviaremail" placeholder="Digite o seu endereço de e-mail...">
                        
                        <button class="buttonredefinir" type="submit" >Enviar</button>
          

                 
                </div>
            
            </div>
    
</div>
@endsection



</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>   

</html>


