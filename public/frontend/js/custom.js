$(document).ready(function () {
    $(".nav-effect1 a").mouseover(function () {
        // $(".nav-effect1").addClass("opacity-50");
        $(this).parent().removeClass("opacity-50");
        $(this).parent().siblings().addClass("opacity-50");
    });
    $(".nav-effect1 a").mouseleave(function () {
        $(".nav-effect1").removeClass("opacity-50");
        $(".dropdown-menu li").removeClass("opacity-50");
    });
    $(".nav-effect2 a").mouseover(function () {
        $(this).parent().siblings().addClass("opacity-50");
    });
    $(".nav-effect2 a").mouseleave(function () {
        $(".nav-effect2").removeClass("opacity-50");
    });

    // Parallax JS + jQuery
    $('.parallax-window-1').parallax({
        positionX: '100px',
    });
    $('.parallax-window-2').parallax({
    });

    $('.carousel').carousel();

});
$(document).ready(function () {
    // LightBox2 Gallery
    lightbox.option({
        'showImageNumberLabel': false,
    });
    $('.lb-close').css({
        "display": "none",
    });
});