$(document).ready(function () {


    setTimeout( function() {

        if ($(document).width() > 450) {

            setTimeout(function () {
                    $('.infos').addClass('appear appear-right');
                    $('.story').addClass('appear appear-left')
                }, 500
            );
        } else {
            $('.infos,.story').addClass('appear');
        }
    },500);


});