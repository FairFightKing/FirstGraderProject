$(document).ready(function () {

    $('form').on('submit', function (event) {

        event.preventDefault();// using this page stop being refreshing

        $.ajax({
            type: 'POST',
            url: './php/sign-up-post.php',
            data: $('form').serialize(),
            success: function (data) {
                if (data.status == 200) {
                    $('.err-nickname-empty').addClass('hide').removeClass('show');
                    $('.err-nickname-short').addClass('hide').removeClass('show');
                    $('.err-nickname-long').addClass('hide').removeClass('show');
                    $('.err-password-empty').addClass('hide').removeClass('show');
                    $('.err-password-short').addClass('hide').removeClass('show');
                    $('.err-firstname-empty').addClass('hide').removeClass('show');
                    $('.err-lastname-empty').addClass('hide').removeClass('show');
                    $('.err-nickname-taken').addClass('hide').removeClass('show');
                    alert("Your account was successfully added !");
                    window.location = "./sign-in.php";
                } else if (data.status == 400) {
                    if (typeof data.nickname !== 'undefined') {
                        if (data.nickname == 'empty') {
                            $('.err-nickname-empty').addClass('show').removeClass('hide');
                        } else {
                            $('.err-nickname-empty').addClass('hide').removeClass('show');
                        }

                        if (data.nickname == 'too long') {
                            $('.err-nickname-long').addClass('show').removeClass('hide');
                        } else {
                            $('.err-nickname-long').addClass('hide').removeClass('show');
                        }

                        if (data.nickname == 'too short') {
                            $('.err-nickname-short').addClass('show').removeClass('hide');
                        } else {
                            $('.err-nickname-short').addClass('hide').removeClass('show');
                        }
                        if (data.nickname == 'taken') {
                            $('.err-nickname-taken').addClass('show').removeClass('hide');
                        } else {
                            $('.err-nickname-taken').addClass('hide').removeClass('show');
                        }
                    } else {
                        $('.err-nickname-taken').addClass('hide').removeClass('show');
                        $('.err-nickname-empty').addClass('hide').removeClass('show');
                        $('.err-nickname-long').addClass('hide').removeClass('show');
                        $('.err-nickname-short').addClass('hide').removeClass('show');
                    }
                    if (typeof data.password !== 'undefined') {
                        if (data.password == 'empty') {
                            $('.err-password-empty').addClass('show').removeClass('hide')
                        } else {
                            $('.err-password-empty').addClass('hide').removeClass('show')
                        }
                        if (data.password == 'too short') {
                            $('.err-password-short').addClass('show').removeClass('hide')
                        } else {
                            $('.err-password-short').addClass('hide').removeClass('show')
                        }
                    }
                    if (typeof data.firstname !== 'undefined') {
                        $('.err-firstname-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-firstname-empty').addClass('hide').removeClass('show')
                    }
                    if (typeof data.lastname !== 'undefined') {
                        $('.err-lastname-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-lastname-empty').addClass('hide').removeClass('show')
                    }

                }
            }


        })
    });

})
;

