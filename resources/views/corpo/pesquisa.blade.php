<!DOCTYPE html>

<html>

<head>
  
  <title> Pesquisa </title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pesquisa.css') }}">

</head>

<body>
    
    @extends('layouts.escopo')
    @section('escopo')
    <div id="corpo">
          
         <div>
                
              <div>
                  
                  <p id="titlepesquisa">Pesquisa de Clientes</p>

              </div>

              <form id="searchForm" action="{{ url('resultado')}}" method="POST" class="pt-5 px-5">
        @csrf

        <div class="input-group ">
            <input type="search" class="form-control mr-1 pesquisa" name="busca" role="search">

            <div id="formButton">
                <button type="submit" class="btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

    </form>

    <div id="resultados" class="px-5">

    @if(isset($details))
        <p>Resultados de pesquisa para <b> {{ $query }} </b> são: </p>

        {{-- <div class="dataTables_length bs-select" id="dtBasicExample_length">
            <label>
                Show 
                <select name="dtBasicExample_length" aria-controls="dtBasicExample" class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> 
                entries
            </label>
        </div> --}}

        <table id="tabelaDados" class="table table-striped table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th class="th-sm">Id<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                    <th class="th-sm">Nome<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                    <th class="th-sm">Cnpj<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                    <th class="th-sm">Email<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                    <th class="th-sm">Telefone<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $user)
                    <tr>
                        <td>{{ $user->id_cliente }}</td>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->cnpj }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->telefone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @elseif(isset($message))
        <p> {{ $message }} </p>

    @endif

    </div>

</div>
             
        </div>
              
    </div>


   @endsection
 
    
  </body>
  
</html>