Eventos = {
    inicializar: function() {
        $('input[name="data"]').mask('00/00/0000 00:00');
        $('input[name="periodo"]').mask('00:00');
    },
    adicionar: function() {
        $("#btn-evento").click(function(e){

            $("#messages").html("");

            $.ajax({
                "type": "post",
                "url": "/eventos/add",
                "data": $('form[name="adicionar-evento"]').serialize(),
                "success": function(data) {
                    if (data.ok == false) {
                        data.messages.forEach(function(message){
                            $("#messages").append("<li><span class=\"alert label\">"+message+"</span></li>");
                        });
                    } else {
                        $("#messages").append(
                            "<li><span class=\"success label\">Adicionado! <a href=\"/\">ir para o painel.</a></span></li>"
                        );
                    }
                }
            });

            e.preventDefault();
        });
    }
}

Eventos.inicializar();
Eventos.adicionar();
