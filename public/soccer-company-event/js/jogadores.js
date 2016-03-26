Jogadores = {
    adicionar: function () {
        $("#btn-jogador").click(function(){

            $("#errors").html("");

            $.ajax({
                "type": "post",
                "url": "/jogadores/add",
                "data": $('form[name="adicionar-jogador"]').serialize(),
                "success": function(data) {
                    if (data.ok == false) {
                        data.messages.forEach(function(message){
                            $("#messages").append("<li><span class=\"alert label\">"+message+"</span></li>");
                        });
                    } else {
                        $("#messages").append(
                            "<li><span class=\"success label\">Adicionado! <a href=\"/jogadores\">atualizar agora.</a></span></li>"
                        );
                    }
                }
            });
        });
    }
}

Jogadores.adicionar();
