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
        $("#btnShowSyspdv").hide();
    } else {
        $("#syspdvCard").hide();
        $("#btnShowSyspdv").show();
    }
}

function hiddenSyspdvCard() {
    document.getElementById("showSyspdvCard").checked = false;
    if (!(document.getElementById("showSyspdvCard").checked)) {
        $("#syspdvCard").hide();
        $("#btnShowSyspdv").show();
    } else {
        $("#syspdvCard").show();
        $("#btnShowSyspdv").hide();
    }
}

function showAcsnCard() {
    document.getElementById("showAcsnCard").checked = true;
    if (document.getElementById("showAcsnCard").checked) {
        $("#acsnCard").show();
        $("#btnShowAcsn").hide();
    } else {
        $("#acsnCard").hide();
        $("#btnShowAcsn").show();
    }
}

function hiddenAcsnCard() {
    document.getElementById("showAcsnCard").checked = false;
    if (!(document.getElementById("showAcsnCard").checked)) {
        $("#acsnCard").hide();
        $("#btnShowAcsn").show();
    } else {
        $("#acsnCard").show();
        $("#btnShowAcsn").hide();
    }
}

function showEcleticaCard() {
    document.getElementById("showEcleticaCard").checked = true;
    if (document.getElementById("showEcleticaCard").checked) {
        $("#ecleticaCard").show();
        $("#btnShowEcletica").hide();
    } else {
        $("#ecleticaCard").hide();
        $("#btnShowEcletica").show();
    }
}

function hiddenEcleticaCard() {
    document.getElementById("showEcleticaCard").checked = false;
    if (!(document.getElementById("showEcleticaCard").checked)) {
        $("#ecleticaCard").hide();
        $("#btnShowEcletica").show();
    } else {
        $("#ecleticaCard").show();
        $("#btnShowEcletica").hide();
    }
}
