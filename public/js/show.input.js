$('#software').bind('change', function(event) {

    var i= $('#software').val();

    if(i == 1)
    {
        $('#syspdv').show();// By using this id you can show your content
        $("input[name=controle]").prop('required',true);
        $("input[name=versao]").prop('required',true);
        $("input[name=serie]").prop('required',true);
    }
    else
    {
        $('#syspdv').hide();// otherwise hide
        $("input[name=controle]").val('');
        $("input[name=controle]").prop('required',false);
        $("input[name=versao]").val('');
        $("input[name=versao]").prop('required',false);
        $("input[name=serie]").val('');
        $("input[name=serie]").prop('required',false);
    }

    if(i == 2)
    {
        $('#acsn').show();// By using this id you can show your content
        $("input[name=contrato]").prop('required',true);
    }
    else
    {
        $('#acsn').hide();// otherwise hide
        $("input[name=contrato]").val('');
        $("input[name=contrato]").prop('required',false);
    }

    if(i == 3)
    {
        $('#ecletica').show();// By using this id you can show your content
        $("input[name=cod_rede]").prop('required',true);
        $("input[name=cod_loja]").prop('required',true);
    }
    else
    {
        $('#ecletica').hide();// otherwise hide
        $("input[name=cod_rede]").val('');
        $("input[name=cod_rede]").prop('required',false);
        $("input[name=cod_loja]").val('');
        $("input[name=cod_loja]").prop('required',false);
    }
});
