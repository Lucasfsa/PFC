<!DOCTYPE html>

<html>

<head>

  <title> Pesquisa </title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pesquisa.css') }}">
  <link rel="icon" href="{{ asset('imagem/icon.png') }}">

</head>

<body>

    @extends('layouts.escopo', ["current"=>"clientes"])

    @section('escopo')
    <div class="pr-5" id="corpo">

         <div>

              <div align="center">

                    <p id="titlepesquisa">Pesquisa de Clientes</p>


              </div>

    <form id="searchForm" action="/pesquisar" method="POST" class="mt-4 px-5">
        @csrf

        <div class="input-group">
            
            <input type="search" id="myInput" class="form-control mr-1 pesquisa" name="busca" role="search" placeholder="O que deseja buscar ?  Ex. cnpj, nome, telefone.">

            
        </div>


    </form>

    <div id="resultados" class="px-5 m-5">

        <table id="tabelaDados" class="table table-sm table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Fantasia</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Informações</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($clientes as $c)
                    <tr>
                        <td class="ordem"></td>
                        <td>{{ $c->nome_fantasia }}</td>
                        <td>{{ $c->rz_social }}</td>
                        <td>{{ $c->cnpj }}</td>
                        <td class="text-center">
                            <button class="btn btn-outline-primary">
                                <span class="fas fa-info"></span>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <nav>
            <ul class="pagination justify-content-end">
                <li class="disabled">
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>


</div>

        </div>

    </div>

    <script src="{{ asset('js/search.js') }}" defer></script>
    <script src="vendor/datatables.mark.js/dist/datatables.mark.js"></script>

   @endsection


  </body>

</html>
