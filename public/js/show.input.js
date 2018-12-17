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

function showSystem() {
    document.getElementById('ac').style.display = "block";
    document.getElementById('btnac').style.display = "none";
}

function hiddenSystem() {
    document.getElementById('ac').style.display = "none";
    document.getElementById('btnac').style.display = "block";
    document.getElementById('removebtnac').style.display = "block";
}
