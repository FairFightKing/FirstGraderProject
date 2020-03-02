$(document).ready(function () {


    setTimeout(function () {
            $('.container').addClass('appear')
        }, 500
    );


    $('form').on('submit', function (event) {

        event.preventDefault();// using this page stop being refreshing

        $.ajax({
            type: 'POST',
            url: './php/contact-post.php',
            data: $('form').serialize(),
            success: function (data) {
                if (data.status == 200) {
                    $('.err-mail').addClass('hide').removeClass('show');
                    $('.err-name').addClass('hide').removeClass('show');
                    $('.err-subject-empty').addClass('hide').removeClass('show');
                    $('.err-subject-length').addClass('hide').removeClass('show');
                    $('.err-content-empty').addClass('hide').removeClass('show');
                    $('.err-content-length').addClass('hide').removeClass('show');
                    alert("Your email was successfully sent !");

                } else if (data.status == 400) {
                    if (typeof data.email !== 'undefined') {
                        $('.err-mail').addClass('show').removeClass('hide')
                    } else {
                        $('.err-mail').addClass('hide').removeClass('show')

                    }
                    if (typeof data.name !== 'undefined') {
                        $('.err-name').addClass('show').removeClass('hide')
                    } else {
                        $('.err-name').addClass('hide').removeClass('show')

                    }
                    if (typeof data.subject !== 'undefined') {
                        if (data.subject == 'empty') {
                            $('.err-subject-empty').addClass('show').removeClass('hide')
                        } else {
                            $('.err-subject-empty').addClass('hide').removeClass('show')
                        }

                        if (data.subject == 'too long') {
                            $('.err-subject-length').addClass('show').removeClass('hide')
                        } else {
                            $('.err-subject-length').addClass('hide').removeClass('show')
                        }

                    }
                    if (typeof data.content !== 'undefined') {

                        if (data.content == 'empty') {
                            $('.err-content-empty').addClass('show').removeClass('hide')
                        } else {
                            $('.err-content-empty').addClass('hide').removeClass('show')
                        }

                        if (data.content == 'too long') {
                            $('.err-content-length').addClass('show').removeClass('hide')
                        } else {
                            $('.err-content-length').addClass('hide').removeClass('show')
                        }
                    }
                }


            }
        });

    });

});