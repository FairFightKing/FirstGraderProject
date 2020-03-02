$(document).ready(function () {


    $("#decision").on("change", function () {
            if ($(this).val() == 'delete') {
                $('#modify').addClass('hide').removeClass('show');
                $('#modify-yes').addClass('hide').removeClass('show');
                $('#delete').addClass('show').removeClass('hide');
            } else {
                $('#modify').addClass('show').removeClass('hide');
                $('#modify-yes').addClass('show').removeClass('hide');
                $('#delete').addClass('hide').removeClass('show');
            }
        }
    );


    $('#verify').on('click', function () {
        if (confirm('Are you sure you want to delete this image ?')) {

            $.ajax({
                type: 'POST',
                url: './php/gallery-modify-post.php',
                data: $('form').serialize(),
                success: function (data) {
                    if (data.status == 200) {
                        alert("Your image was successfully removed !");
                        window.location = "./gallery-select.php";
                    } else if (data.status == 400) {
                        alert('Your image was not removed');
                    }
                }
            })
        }
    });

    $('form').on('submit', function (event) {

        event.preventDefault();// using this page stop being refreshing

        $.ajax({
            type: 'POST',
            url: './php/gallery-modify-post.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                if (data.status == 200) {
                    $('.err-position-high').addClass('hide').removeClass('show');
                    $('.err-position-low').addClass('hide').removeClass('show');
                    $('.err-position-empty').addClass('hide').removeClass('show');
                    if (data.action == 'move') {
                        alert('Your image was successfully moved !');
                    } else if (data.action == 'swap') {
                        alert('Your images was successfully swapped !');
                    }
                    window.location = "./gallery-select.php";

                } else if (data.status == 400) {

                    if (data.select == 'file dont exist') {
                        $('.err-select-exist').addClass('show').removeClass('hide')
                    } else if (data.select == 'empty') {
                        $('.err-select-empty').addClass('show').removeClass('hide')
                    } else {
                        $('.err-select-empty').addClass('hide').removeClass('show');
                        $('.err-select-exist').addClass('hide').removeClass('show');
                        $('.err-select-empty').addClass('hide').removeClass('show')

                    }
                    if (data.position == 'too high') {
                        $('.err-position-high').addClass('show').removeClass('hide');
                    } else if (data.position == 'too low') {
                        $('.err-position-low').addClass('show').removeClass('hide');
                    } else if (data.position == 'empty') {
                        $('.err-position-empty').addClass('show').removeClass('hide');

                    } else {
                        $('.err-position-high').addClass('hide').removeClass('show');
                        $('.err-position-low').addClass('hide').removeClass('show');
                        $('.err-position-empty').addClass('hide').removeClass('show');
                    }

                }
            }
        });


    });


});
