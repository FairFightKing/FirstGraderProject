$(document).ready(function () {


    setTimeout(function () {
            $('.content').addClass('appear')
        }, 500
    );


    $('.color a').on('click', function () {

        let selection = '.' + $(this).attr('data-a');

        $('.in').addClass('out').removeClass('in');

        $(selection).addClass('in').removeClass('out');

        let select = "[data-a = " + $(this).attr('data-a') + "]";

        $('.on').addClass('off').removeClass('on');

        $(select).addClass('on').removeClass('off');

        console.log(this);


    })


});