<!DOCTYPE html>
<html>

<head>
	
	<title>Cadastrar Funcionário</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/funcionario.css') }}">

</head>

<body>

 @extends('layouts.escopo')
 @section('escopo')

 <div id="corpo">
 	 
 	 <div>
              
        <p id="titlepesquisa">Cadastro de Funcionários</p>

     </div>

      <form method="POST" action="{{ route('cliente.store') }}" aria-label="{{ __('Cadastro-funcionario') }}">
              @csrf
              
              <div id="area">

                <div  class="form-group inputform" >
                    
                    <label  class="fontfrontpage" for="razaosocial">Nome</label>           
                    
                    <input name="rz_social" type="text" class="form-control input00" placeholder="Digite o nome..." required autofocus />
                                        
                </div>


                     <div  class="form-group inputform" >
                        
                        <label  class="fontfrontpage" for="email">E-mail</label>           
                        
                        <input name="email" type="email" class="form-control input00" placeholder="Digite o e-mail..." required />
                        
                    </div>


                         <div  class="form-group inputform" >
                            
                            <label  class="fontfrontpage" for="cnpj">Senha</label>           
                            
                            <input name="cnpj" type="text" class="form-control  input01" placeholder="Digite a senha..." required />
                            
                        </div>

                         <div  class="form-group inputform" >
                            
                            <label  class="fontfrontpage" for="cnpj">Repita a senha</label>           
                            
                            <input name="cnpj" type="text" class="form-control  input01" placeholder="Repita a senha..." required />
                            
                        </div>


                             
                
              </div>
            

                      <div id="pesquisar"  >
                       
                        <button type="submit" id="buttoncadastrar" class="btn ">Cadastrar<i class="glyphicon glyphicon-ok"></i>

                        </button>

                      </div>


          </form>


 </div>


 @endsection

</body>

</html>