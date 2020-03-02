$(document).ready(function () {

    $('form').on('submit', function (event) {

        event.preventDefault();// using this page stop being refreshing

        $.ajax({
            type: 'POST',
            url: './php/sign-in-post.php',
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
                    alert("Your are now logged in !");
                    window.location = "./index.php";

                } else if (data.status == 400) {
                    if (typeof data.nickname !== 'undefined') {
                        if (data.nickname == 'empty') {
                            $('.err-nickname-empty').addClass('show').removeClass('hide')
                        } else {
                            $('.err-nickname-empty').addClass('hide').removeClass('show')
                        }

                        if (data.nickname == 'too long') {
                            $('.err-nickname-long').addClass('show').removeClass('hide')
                        } else {
                            $('.err-nickname-long').addClass('hide').removeClass('show')
                        }

                        if (data.nickname == 'too short') {
                            $('.err-nickname-short').addClass('show').removeClass('hide')
                        } else {
                            $('.err-nickname-short').addClass('hide').removeClass('show')
                        }
                        if (data.nickname == 'wrong nickname') {
                            $('.err-nickname-wrong').addClass('show').removeClass('hide')
                        } else {
                            $('.err-nickname-wrong').addClass('hide').removeClass('show')
                        }
                    }else{
                        $('.err-nickname-empty').addClass('hide').removeClass('show');
                        $('.err-nickname-long').addClass('hide').removeClass('show');
                        $('.err-nickname-short').addClass('hide').removeClass('show');
                        $('.err-nickname-wrong').addClass('hide').removeClass('show');
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
                        if (data.password == 'wrong password') {
                            $('.err-password-wrong').addClass('show').removeClass('hide')
                        } else {
                            $('.err-password-wrong').addClass('hide').removeClass('show')
                        }
                    } else {
                        $('.err-password-empty').addClass('hide').removeClass('show');
                        $('.err-password-short').addClass('hide').removeClass('show');
                        $('.err-password-wrong').addClass('hide').removeClass('show');
                    }

                }
            }

        })
    });

})
;
