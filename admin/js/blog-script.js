$(document).ready(function () {


    $('form').on('submit', function (event) {

        event.preventDefault();// using this page stop being refreshing

        $.ajax({
            type: 'POST',
            url: './php/blog-post.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                if (data.status == 200) {
                    $('.err-title-empty').addClass('hide').removeClass('show');
                    $('.err-title-taken').addClass('hide').removeClass('show');
                    $('.err-date-empty').addClass('hide').removeClass('show');
                    $('.err-img-empty').addClass('hide').removeClass('show');
                    $('.err-img-type').addClass('hide').removeClass('show');
                    $('.err-description-empty').addClass('hide').removeClass('show');
                    $('.err-subject-empty').addClass('hide').removeClass('show');
                    $('.err-content-empty').addClass('hide').removeClass('show');
                    $('.err-content-length').addClass('hide').removeClass('show');
                    alert("Your Article was successfully sent !");

                } else if (data.status == 400) {
                    if (typeof data.title !== 'undefined') {
                        if (data.title == 'empty') {
                            $('.err-title-taken').addClass('hide').removeClass('show');
                            $('.err-title-empty').addClass('show').removeClass('hide');
                        } else if (data.title == 'taken') {
                            $('.err-title-taken').addClass('show').removeClass('hide');
                            $('.err-title-empty').addClass('hide').removeClass('show');
                        }

                    } else {
                        $('.err-title-taken').addClass('hide').removeClass('show')
                    }
                    if (typeof data.img == 'wrong type') {
                        $('.err-img-empty').addClass('hide').removeClass('show');
                        $('.err-img-type').addClass('show').removeClass('hide')

                    } else if (typeof data.img == 'empty') {
                        $('.err-img-empty').addClass('show').removeClass('hide');
                        $('.err-img-type').addClass('hide').removeClass('show')
                    } else {
                        $('.err-img-empty').addClass('hide').removeClass('show');
                        $('.err-img-type').addClass('hide').removeClass('show')

                    }
                    if (typeof data.date !== 'undefined') {
                        $('.err-date-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-date-empty').addClass('hide').removeClass('show')

                    }
                    if (typeof data.subject !== 'undefined') {
                        $('.err-subject-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-subject-empty').addClass('hide').removeClass('show')
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
                    if (typeof data.description !== 'undefined') {
                        $('.err-description-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-description-empty').addClass('hide').removeClass('show')
                    }
                    if (typeof data.description !== 'undefined') {
                        $('.err-description-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-description-empty').addClass('hide').removeClass('show')
                    }
                }

            }
        });

    });

});