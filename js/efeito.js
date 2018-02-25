function addVideo(url) {
    var objYoutube = document.getElementById("iframeyoutube");
    objYoutube.src = url;
}


(function() {

    $('#live-chat header').on('click', function() {

        $('.chat').slideToggle(300, 'swing');
        $('.chat-message-counter').fadeToggle(300, 'swing');

    });

    $('.chat-close').on('click', function(e) {

        e.preventDefault();
        $('#live-chat').fadeOut(300);

    });

})();

function Login() {
    var done = 0;
    var usuario = document.getElementsByName('usuario')[0].value;
    usuario = usuario.toLowerCase();
    var senha = document.getElementsByName('senha')[0].value;
    seha = senha.toLowerCase();
    if (usuario == "admin" && senha == "admin") {
        window.location = "curso.php";
        done = 1;
    }
    if (done == 0) { alert("Dados incorretos, tente novamente"); }
}