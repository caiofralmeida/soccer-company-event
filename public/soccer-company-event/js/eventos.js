Eventos = {
    inicializar: function() {
        $('input[name="data"]').mask('00/00/0000 00:00:00');
        $('input[name="periodo"]').mask('00:00');
    }
}

Eventos.inicializar();
