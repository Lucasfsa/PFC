<!DOCTYPE html>

<html>

<head>
  
  <title> Pesquisa </title>


  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                
            
                <form>
                  
                    <div class="form-group" id="subcorpo" >
                        
                        <label class="label01" for="razaosocial">Razão Social </label>           
                        <input  type="text" class="form-control input01" placeholder=" Digite a razão social..." /> 
                        
                        <label class="label01"  for="cnpj">CNPJ</label>         
                        
                        <input  type="text" class="form-control input01" placeholder=" Digite o cnpj..." /> 
                        
                    </div>

                    <div id="labelsolo">
                          
                          <label>Sistema</label>

                    </div>
                  
                  <div id="checkbusca" class="checkbox" >                
                      
                  
                      <div>     
                        
                        <label>
                          
                          <input type="checkbox">

                            <span class="cr">

                              <i class="cr-icon glyphicon glyphicon-ok"></i>

                            </span> 

                            Syspdv

                        </label>

                      </div>
                      
                          <div class="checkbox">
                                
                                <label>
                                  
                                  <input type="checkbox" > 
                                  
                                    <span class="cr">
                                    
                                      <i class="cr-icon glyphicon glyphicon-ok"></i>
                                  
                                    </span>
                                  
                                    Eclética

                                </label>

                          </div>
                      
                              <div class="checkbox">
                                
                                <label>

                                    <input type="checkbox" >
                                      
                                      <span class="cr">
                                        
                                        <i class="cr-icon glyphicon glyphicon-ok"></i>
                                    
                                    </span>
                                  
                                  ACSN
                                
                                </label>

                              </div>
           
                  </div>
    
                      <div>
                                
                        <button class="btn" id="buttonpesquisar" type="submit">Pesquisar 
                          
                          <i class="glyphicon glyphicon-search"></i>

                        </button>

                      </div>
                
                </form>

              </div>
              
          </div>


   @endsection
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>    
  
  </body>
  
</html>