$(document).foundation();

JogadoresSuggest = {

    find: function() {
        $("#nome-jogador").keyup(function(e) {
            JogadoresSuggest.mount([]);

            if ($(this).val() == "") {
                JogadoresSuggest.umount();
                $("#id-jogador").val("");
                $("#btn-jogador").attr('disabled', 'disabled');
            }
        });
    },
    mount: function(data) {
        var html = "<ul>";
        html += "<li><a data-val=\"1\" href=\"#\">Caio Almeida (Devel)</a></li>";
        html += "</ul>";

        $(".suggest").html(html);
        JogadoresSuggest.selecionarJogador();
        $(".suggest").show();
    },
    umount: function() {
        $(".suggest").hide();
        $(".suggest").html("");
    },
    selecionarJogador: function() {
        $(".suggest ul li a").click(function() {
            $("#id-jogador").val($(this).data('val'));
            $("#nome-jogador").val($(this).text());
            JogadoresSuggest.umount();
            $("#btn-jogador").removeAttr('disabled');
        });
    }
}

JogadoresSuggest.find();

Menu = {
    link: function() {
        $(".top-bar-left .menu-text").click(function(){
            location.href = "/";
        });
    }
}

Menu.link();
