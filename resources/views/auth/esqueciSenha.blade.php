<!DOCTYPE html>

<html>

<head>
   
    <title>Esqueci minha Senha</title>

    <meta charset="utf-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">
    
            <link rel="icon" href="imagem/icon.png">

               <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

                    <link rel="stylesheet" type="text/css" href="{{ asset('css/esquecisenha.css') }}">

</head>

<body>

@extends('layouts.base')

@section('base')

<div class="container">
         
            
            <div class="card">
               
                <img id="imgmenu" src="imagem/img001.png">
                
                <div class="card-body"  >
                    
                 
                </div>
            
            </div>
    
</div>
@endsection



</body>

</html>


