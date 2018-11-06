<!DOCTYPE html>

<html>

  <head>


    <title>Cadastro</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cadastro.css') }}">
    <link rel="icon" href="{{ asset('imagem/icon.png') }}">

  </head>

  <body>

        @extends('layouts.escopo')
        @section('escopo')

        <div id="corpo">

            <div align="center">

              <p id="titlepesquisa">Cadastro de Clientes</p>

            </div>

           <div id="content">

            <form action="/cadastrar-cliente" method="post">
                @csrf
                <div class="form-group px-5 py-4">

                  @if (session('alert'))
                  <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
                      <div class="row vertical-align">
                          <div class="col-xs-1 mx-3 text-center vertical-align">
                              <i class="fa fa-check"></i>
                          </div>
                          <div class="col-xs-11">
                              <strong>{{ session('alert') }}</strong>
                          </div>
                          <button type="button" class="close vertical-align" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
                  @endif

                    <br>

                    <label>Nome Fantasia</label>
                    <input placeholder="Digite a Nome Fantasia" type="text" class="form-control" name="nomeFantasia" required>
                    <br>

                    <label>Razão Social</label>
                    <input placeholder="Digite a Razão Social" type="text" class="form-control" name="razaoSocial" required>
                    <br>

                    <label>Cnpj</label>
                    <input placeholder="Digite o Cnpj" type="text" class="form-control" name="cnpj" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );" required>
                    <br>

                    <label>Segmento</label>
                    <input placeholder="Digite Segmento" type="text" class="form-control" name="segmento" required>
                    <br>

                    <label>E-mail</label>
                    <input placeholder="Digite o E-mail" type="email" class="form-control" name="email" required>
                    <br>

                    <label>Telefone</label>
                    <input placeholder="Digite o telefone..." type="text" class="form-control" name="telefone" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">

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
