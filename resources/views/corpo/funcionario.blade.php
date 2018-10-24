<!DOCTYPE html>
<html>

<head>

	<title>Cadastrar Usuário</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/funcionario.css') }}">
  <link rel="icon" href="{{ asset('imagem/icon.png') }}">

</head>

<body>

 @extends('layouts.escopo')
 @section('escopo')

 <div id="corpo">

 	  <div align="center">

        <p id="titlepesquisa">Cadastro de Usuários</p>
        <div data-dismiss="alert" id="msg"> {{ Session::get('alert') }} </div>

     </div>

    

      <form method="POST" action="/cadastrar-usuario" aria-label="{{ __('Cadastro-funcionario') }}">
              @csrf

              <div id="area">

                 <div class="form-group px-5 py-4">

                    <br>

                    <label>Nome</label>
                    <input placeholder="Digite o nome..." type="text" class="form-control" name="name" required>
                    <br>


                    <label>E-mail</label>
                    <input placeholder="Digite o E-mail..." type="email" class="form-control" name="email" required>
                    <br>

                    <label>Senha</label>
                     <input placeholder="Digite a senha..." type="password" class="form-control" name="password" required>
                    <br>

                     <label>Repita a senha</label>
                     <input placeholder="Digite a senha..." type="password" class="form-control" name="confirm_password" required>
                    <br>


                    <br>

                    <div >
                        <button id="buttoncadastro" type="submit" class="btn">

                          Cadastrar  <i class="fas fa-user-plus"></i>
                        </button>
                    </div>

                </div>

              </div>



          </form>


 </div>


 @endsection

</body>

</html>
