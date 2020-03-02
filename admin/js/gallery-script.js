$(document).ready(function () {


    $('form').on('submit', function (event) {
        event.preventDefault();// using this page stop being refreshing

        $.ajax({
            type: 'POST',
            url: './php/gallery-post.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data.status == 200) {
                    $('.err-position-high').addClass('hide').removeClass('show');
                    $('.err-position-low').addClass('hide').removeClass('show');
                    $('.err-position-empty').addClass('hide').removeClass('show');
                    $('.err-file-empty').addClass('hide').removeClass('show');
                    $('.err-file-type').addClass('hide').removeClass('show');
                    if (data.select == 'empty') {
                        $('.suc-name-empty').addClass('show').removeClass('hide');
                    }
                    $('.err-alt-empty').addClass('hide').removeClass('show');
                    alert('Your image was successfully sent !');
                    window.location = "./gallery-select.php";
                } else if (data.status == 400) {

                    if (data.file == 'wrong type') {
                        $('.err-file-type').addClass('show').removeClass('hide')

                    } else if (data.file == 'empty') {
                        $('.err-file-empty').addClass('show').removeClass('hide')

                    } else {
                        $('.err-file-empty').addClass('hide').removeClass('show');
                        $('.err-file-type').addClass('hide').removeClass('show')

                    }

                    if (data.select == 'taken') {
                        $('.err-name-taken').addClass('show').removeClass('hide')
                    } else if (data.select == 'empty') {
                        $('.suc-name-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.suc-name-empty').addClass('hide').removeClass('show');
                        $('.err-name-taken').addClass('hide').removeClass('show')
                    }

                    if (data.position == 'too high') {
                        $('.err-position-high').addClass('show').removeClass('hide');
                        $('.err-position-low').addClass('hide').removeClass('show');
                        $('.err-position-empty').addClass('hide').removeClass('show');
                    } else if (data.position == 'too low') {
                        $('.err-position-low').addClass('show').removeClass('hide');
                        $('.err-position-high').addClass('hide').removeClass('show');
                        $('.err-position-empty').addClass('hide').removeClass('show');
                    } else if (data.position == 'empty') {
                        $('.err-position-low').addClass('hide').removeClass('show');
                        $('.err-position-high').addClass('hide').removeClass('show');
                        $('.err-position-empty').addClass('show').removeClass('hide');
                    } else {
                        $('.err-position-empty').addClass('hide').removeClass('show');
                        $('.err-position-high').addClass('hide').removeClass('show');
                        $('.err-position-low').addClass('hide').removeClass('show');
                    }
                    if (data.alt == 'empty') {
                        $('.err-alt-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-alt-empty').addClass('hide').removeClass('show')
                    }
                    if (data.source == 'empty') {
                        $('.err-source-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-source-empty').addClass('hide').removeClass('show')
                    }


                }

            }

        });
    });


});