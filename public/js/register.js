$(document).ready(function () {
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '/register',
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                if (response.errors) {
                    let errors = '';
                    $.each(response.errors, function (key, value) {
                        errors += '<p>' + value[0] + '</p>';
                    });
                    $('#responseMessage').html('<div class="alert alert-danger">' +
                        errors + '</div>');
                } else {
                    $('#responseMessage').html('<div class="alert alert-success">' +
                        response.success + '</div>');
                }
            }
        });
    });
});
