$("input[name=opt]").on("click", function() {
    var valor = $("input[name=opt]:checked").val();

    if(valor == "cpf"){
        $("div#cpf").show();
        $("input[name=cpf]").prop('required',true);
    } else {
        $("div#cpf").hide();
        $("input[name=cpf]").val('');
        $("input[name=cpf]").prop('required',false);
    }

    if(valor == "cnpj"){
        $("div#cnpj").show();
        $("input[name=cnpj]").prop('required',true);
    } else {
        $("div#cnpj").hide();
        $("input[name=cnpj]").val('');
        $("input[name=cnpj]").prop('required',false);
    }
})

function showSyspdvCard() {
    document.getElementById("showSyspdvCard").checked = true;
    if (document.getElementById("showSyspdvCard").checked) {
        $("#syspdvCard").show();
    } else {
        $("#syspdvCard").hide();
    }
}

function showAcsnCard() {
    document.getElementById("showAcsnCard").checked = true;
    if (document.getElementById("showAcsnCard").checked) {
        $("#acsnCard").show();
    } else {
        $("#acsnCard").hide();
    }
}

function hiddenSystem() {
    document.getElementById('btnac').style.display = "block";
    document.getElementById('removebtnac').style.display = "block";
}

function showEcleticaCard() {
    document.getElementById("showEcleticaCard").checked = true;
    if (document.getElementById("showEcleticaCard").checked) {
        $("#ecleticaCard").show();
    } else {
        $("#ecleticaCard").hide();
    }
}
