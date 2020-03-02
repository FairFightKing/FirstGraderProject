$(document).ready(function () {

    //-------------- ANCRES DOUCES -----------//

    $('.aTop').on('click', function () {
        let target = $(this).attr('href');
        if (target.substr(0, 1) == '#') {

            $('html,body')
                .stop()
                .animate({
                    scrollTop: $(target).offset().top - 80
                }, 500);
        }
    });

    $('.disconnect').on('click', function () {
            if (confirm("Are you sure you want to disconnect?")) {
                $.ajax({
                    type: 'POST',
                    url: './php/disconnect-post.php',
                    data: {'action' : 'disconnect'},
                    success: function (data) {
                        window.location = "./index.php";
                    }
                })
            }
        }
    );

    // ----------- RECUPERER LE NOMBRE DE PIXEL SCROLLER ---------//


    $(window).scroll(function () {

        if ($(window).scrollTop() >= 70) {
            $('.containerMenu').removeClass('attach').addClass('detach');
            if ($(document).width() > 981) {
                $('#header').css('height', '112px')
            } else if ($(document).width() > 560) {
                $('#header').css('height', '152px')
            }
        } else {
            $('.containerMenu').removeClass('detach').addClass('attach');
            $('#header').css('height', '70px');
        }
    });

    // ----------- BURGER ----------- //


    $('#burger').on('click', function () {
        $('#menu').stop().slideToggle('slow');
    });

    $(window).resize(function () {
        if ($(window).width() > 560) {
            $('#menu').css('display', 'block');
        } else {
            $('#menu').css('display', 'none');
        }
    });

    // ----------- Get scrolled pixel to make the "back to top" button appear  ---------//
    hauteurDocument = $(document).height();


    $(window).scroll(function () {
        if ($(window).scrollTop() > 500) {
            $('#btnTop').show();
        } else {
            $('#btnTop').hide();
        }
    });

});