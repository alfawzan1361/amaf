// Services parallax
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    $(".serviceFullText").css({
        width: (100 + scroll / 50) + "%"
    })
})
