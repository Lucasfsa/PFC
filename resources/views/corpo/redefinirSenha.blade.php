@section('pageTitle', 'Redefinir Senha -')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/configuracao.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/senha.css') }}">
@endsection

@extends('layouts.escopo')

@section('escopo')

<h3 class="text-center mt-4">Configurações</h3>

<div id="buttonmenu" >

    <div class="menuedit" align="center" >
        <a class="btn buttonstyle" href="redefinir-senha"> Redefinir Senha</a>
        <a class="btn buttonstyle" href="redefinir-nome"> Redefinir Nome </a>
        <a class="btn buttonstyle" href="desativar-conta"> Desativar Conta</a>
    </div>

    <div  id="subcorpo">
            
        <p align="center">Redefinir Senha</p>

         @if (session('alertsucess'))
            
            <div class="alert alert-success col-md-4 mx-auto mb-0">
               
                <strong>{{ session('alertsucess') }}</strong>
                        
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>

            </div>

        @endif


         @if (session('alerterror'))
            
            <div class="alert alert-danger col-md-4 mx-auto mb-0">
               
                <strong>{{ session('alerterror') }}</strong>
                        
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>

            </div>
            
        @endif

        @if ($errors->any())
             
             <div class="alert alert-danger">
                
                <ul>
                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach
                </ul>

            </div>
        @endif


           <form action=  "/configurar/redefinir-senha/" method="POST">
                        @csrf

                <div class="form-group">

                   
                    <label>Senha atual</label>
                    <input placeholder="Digite a senha atual..." class="form-control" type="password" name="senhaAntiga" required>
                    <br>

                    <label>Nova Senha</label>      
                    <input placeholder="Digite a nova senha..." id="password" class="form-control" type="password" name="password" required>
                    <br>

                    <label>Confirmar Senha</label>         
                    <input placeholder="Confirme a nova senha..." id= "password_confirmation" class="form-control" type="password" name= "password_confirmation" required onkeyup="checkPass();">
                    <br>

                    <button class="buttonredefinir" type="submit" > Confirmar </button>

                </div>

            </form>

    </div>

</div>

<script>function checkPass()
{
    //Store the password field objects into variables ...
    var senha1 = document.getElementById('password');
    var senha2= document.getElementById('password_confirmation');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(senha1.value == senha2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        senha2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Senhas conferem!"
    }
    else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        senha2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Senhas Não Conferem!"
    }
}  
</script>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection