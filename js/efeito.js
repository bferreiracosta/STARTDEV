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

function openUrl(ID) {
    location.href = 'http://localhost/quizinicio.php' + ID + '';
}