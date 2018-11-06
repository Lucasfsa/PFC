$(document).ready( function () {
    $('#tabelaClientes').DataTable();
} );

$(document).ready(function() {
    $('select').css('color','#3c5baa');
    $('select').change(function() {
       var current = $('select').val();
       if (current != 'null') {
           $('select').css('color','#3c5baa');
       } else {
           $('select').css('color','#3c5baa');
       }
    }); 
 });
