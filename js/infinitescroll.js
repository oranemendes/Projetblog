var max = 10;

var loadMore = function () {
    for (var i = max-10; i < max; i++) {
        $(".inner").append("<p>test "+i+"</p>");
    }
    max += 10;
}

$('.on').scroll(function () {
    var top = $('.on').scrollTop();
    $('.two').html("top: "+top+" diff: "+($(".inner").height() - $(".on").height()));
    if (top >= $(".inner").height() - $(".on").height()) {
        $('.top').append(" bottom");
        loadMore();
    }
});

loadMore();
