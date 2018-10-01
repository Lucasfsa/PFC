<!DOCTYPE html>

<html>
  
  <head>
 
    
    <title>Cadastro</title>
  
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cadastro.css') }}">

  </head>
  
  <body>  

        @extends('layouts.escopo')
        @section('escopo')

        <div id="corpo">
         
            <div>
              
              <p id="titlepesquisa">Cadastro de Clientes</p>

            </div>

            <form method="POST" action="{{ route('cliente.store') }}" aria-label="{{ __('Cadastro') }}">
              @csrf
              
              <div id="area">

                <div  class="form-group inputform" >
                    
                    <label  class="fontfrontpage" for="razaosocial">Razão Social</label>           
                    
                    <input name="rz_social" type="text" class="form-control input00" placeholder="Digite a razao social..." required autofocus />
                                        
                </div>


                     <div  class="form-group inputform" >
                        
                        <label  class="fontfrontpage" for="email">E-mail</label>           
                        
                        <input name="email" type="email" class="form-control input00" placeholder="Digite o e-mail..." required />
                        
                    </div>


                         <div  class="form-group inputform" >
                            
                            <label  class="fontfrontpage" for="cnpj">CNPJ</label>           
                            
                            <input name="cnpj" type="text" class="form-control  input01" placeholder="Digite o cnpj..." required />
                            
                        </div>


                             <div class="form-group inputform" >                    
                              
                                <label class="fontfrontpage" for="telefone">Telefone </label>          
                              
                                <input name="telefone" type="tel" class="form-control input01" placeholder="Digite o telefone..." required />                                                 
                            </div>
                
              </div>
            

                      <div id="pesquisar"  >
                       
                        <button type="submit" id="buttoncadastrar" class="btn ">Cadastrar<i class="glyphicon glyphicon-ok"></i>

                        </button>

                      </div>


          </form>
           
        </div>

        @endsection

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>    
  
  </body>

</html>