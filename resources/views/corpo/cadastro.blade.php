<!DOCTYPE html>

<html>
  
  <head>
 
    
    <title>Cadastro</title>
  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cadastro.css') }}">


  </head>
  
  <body>  

        @extends('layouts.escopo')
        @section('escopo')

        <div id="corpo">
         
            <div>
              
              <p id="titlepesquisa">Cadastro de Clientes</p>

            </div>

           <div id="content">

            <form action="{{ route('cliente.store') }}" method="post">
                @csrf
                <div class="form-group px-5 py-4">
                   
                    <br>

                    <label>Razão Social</label> 
                    <input placeholder="Digite a Razão Social" type="text" class="form-control" name="rz_social" required>
                    <br>
                    
                    <label>Cnpj</label>
                    <input placeholder="Digite o Cnpj" type="text" class="form-control" name="cnpj" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );" required>
                    <br>
                    
                    <label>E-mail</label>
                    <input placeholder="Digite o E-mail" type="email" class="form-control" name="email" required>
                    <br>
                    
                    <label>Telefone</label>
                    <input placeholder="Digite o telefone..." type="text" class="form-control" name="telefone" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">

                    <br>
                    
                    <div >
                        <button id="buttoncadastro" type="submit" class="btn">
                           
                          Cadastrar  <i class="fas fa-user-plus"></i>
                        </button>
                    </div>

                </div>

            </form>

      </div>

      <script src="{{ asset('js/formatar-input.js') }}" defer></script>
           
        </div>

        @endsection

  </body>

</html>