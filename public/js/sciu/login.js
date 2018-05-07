$( document ).ready(function() {

    $('#login').on('click', function (e) {
        e.preventDefault();
        var userName = $('#user_name').val();
        var password = $('#password').val();

        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: {
                password: password,
                user_name: userName
            },
            success: function(results) {
                if (results === 'true') {
                    location.reload();
                } else {
                    $('#login_message').text('Username or Password invalid!');
                }
            },
        });
    })
});