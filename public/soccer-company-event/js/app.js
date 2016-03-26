$(document).foundation();

Menu = {
    link: function() {
        $(".top-bar-left .menu-text").click(function(){
            location.href = "/";
        });
    }
}

Menu.link();
