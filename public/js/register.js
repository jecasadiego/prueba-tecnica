$(document).ready(function () {
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();
        var $spinner = $('#spinner');
        var $button = $('#submit-button');
        $spinner.show();
        $button.prop('disabled', true);

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
                    $spinner.hide();
                    $button.prop('disabled', false);
                } else {
                    $('#responseMessage').html('<div class="alert alert-success">' +
                        response.success + '</div>');
                    $spinner.hide();
                    $button.prop('disabled', false);
                }
            }
        });
    });
});
