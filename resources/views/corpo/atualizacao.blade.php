<!DOCTYPE html>
<html>

<head>
	
	<title>Atualizar Dados</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atualizar.css') }}">
	<link rel="icon" href="{{ asset('imagem/icon.png') }}">

</head>

<body>

 @extends('layouts.escopo')
 @section('escopo')

 	<div id="corpo">
 	 
 	  <div align="center">
              
        <p id="titlepesquisa">Atualização de dados</p>

     </div>

         <form id="searchForm" action="{{ url('resultado')}}" method="POST" class="pt-5 px-5">
        @csrf

        <div class="input-group">
            <input type="search" class="form-control mr-1 pesquisa" name="busca" role="search" placeholder="Busque o cliente e selecione-o para pode realizar alterações.">

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
                    <th class="th-sm">Razão Social<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                    <th class="th-sm">CNPJ<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                    <th class="th-sm">E-mail<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                    <th class="th-sm">Telefone<i class="fa fa-sort float-right m-1" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->rz_social }}</td>
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


 
 @endsection

</body>

</html>