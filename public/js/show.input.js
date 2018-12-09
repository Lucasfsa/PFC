$("input[name=opt]").on("click", function() {
    var valor = $("input[name=opt]:checked").val();

    if(valor == "cpf"){
        $("div#cpf").show();
        // $("input[name=cpf]").prop('required',true);
    } else {
        $("div#cpf").hide();
        $("input[name=cpf]").val('');
        $("input[name=cpf]").prop('required',false);
    }

    if(valor == "cnpj"){
        $("div#cnpj").show();
        // $("input[name=cnpj]").prop('required',true);
    } else {
        $("div#cnpj").hide();
        $("input[name=cnpj]").val('');
        $("input[name=cnpj]").prop('required',false);
    }
})
