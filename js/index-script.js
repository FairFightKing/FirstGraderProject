$(document).ready(function () {


//--------------- ANIMATION IMAGE BLOODHOUND APPARITION-------------//
    setTimeout(function () {
            $('.Bloodhounder-pic').addClass("animationBH");
        }, 500
    );


    $(window).scroll(function () {
        let IntroPosition = $('#btn').offset().top;
        let position = $(window).scrollTop() + ($(window).height() * 0.80);
        if (position >= IntroPosition) {
            $(".btn-img,.btn-txt").addClass("animation-btn");
        }
    });
    //-------------Youtube Iframe responsive 16:9 aspect ratio -----------//

    function initialSize() {
        let iwidth = $('#iframe').width();
        let iheight = iwidth * (0.5625); // 16:9 ratio //
        $('#iframe').height(iheight);
    }
    initialSize();

    $(window).resize(function () {
        let iwidth = $('#iframe').width();
        let iheight = iwidth * (0.5625); // 16:9 ratio //
        $('#iframe').height(iheight);
    })


})
;