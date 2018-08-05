$(function () {

    var lastScrollTop = 0;
    $(window).scroll(function (event) {
        var st = $(this).scrollTop();
        if (st) {

            $(".navbarPart").addClass("fixed");
        } else {
            $(".navbarPart").removeClass("fixed");
        }
        lastScrollTop = st;
    });
});