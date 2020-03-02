$(document).ready(function () {


    $("#decision").on("change", function () {
            if ($(this).val() == 'delete') {
                $('.choice').hide();
                $('.modify').addClass('hide').removeClass('show');
                $('#modify-yes').addClass('hide').removeClass('show');
                $('#delete').addClass('show').removeClass('hide');
            } else {
                $('.choice').show();
                $('.modify').addClass('show').removeClass('hide');
                $('#modify-yes').addClass('show').removeClass('hide');
                $('#delete').addClass('hide').removeClass('show');
            }
        }
    );


    $('input[type=checkbox]').on('change', function () {

        console.log($(this).val());

        $target = '.' + $(this).val();

        $($target).toggle();

    });


    $('#verify').on('click', function () {
        if (confirm('Are you sure you want to delete this article ?')) {

            $.ajax({
                type: 'POST',
                url: './php/blog-modify-post.php',
                data: $('form').serialize(),
                success: function (data) {
                    console.log(data);
                    if (data.status == 200) {
                        alert("Your article was successfully removed !");
                        window.location = "./blog-select.php";
                    } else if (data.status == 400) {
                        alert('Your article was not removed');
                    }
                }
            })
        }
    });

    $('form').on('submit', function (event) {

        event.preventDefault();// using this page stop being refreshing

        $.ajax({
            type: 'POST',
            url: './php/blog-modify-post.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                if (data.status == 200) {
                    $('.err-title-empty').addClass('hide').removeClass('show');
                    $('.err-date-empty').addClass('hide').removeClass('show');
                    $('.err-img-empty').addClass('hide').removeClass('show');
                    $('.err-img-type').addClass('hide').removeClass('show');
                    $('.err-description-empty').addClass('hide').removeClass('show');
                    $('.err-subject-empty').addClass('hide').removeClass('show');
                    $('.err-content-empty').addClass('hide').removeClass('show');
                    $('.err-content-length').addClass('hide').removeClass('show');
                    alert("Your Article was successfully updated !");
                    window.location = "./blog-select.php";

                } else if (data.status == 400) {
                    if (typeof data.title !== 'undefined') {
                        if (data.title == 'empty') {
                            $('.err-title-empty').addClass('show').removeClass('hide');
                        } else {
                            $('.err-title-empty').addClass('hide').removeClass('show');

                        }
                        if (typeof data.img == 'wrong type') {
                            $('.err-img-empty').addClass('hide').removeClass('show');
                            $('.err-img-type').addClass('show').removeClass('hide')

                        } else {
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
            }
        });

    });


});
