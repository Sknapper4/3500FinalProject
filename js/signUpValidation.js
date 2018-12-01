

function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {

});

$(document).ready(function () {
    $(':submit').click(function (e) {
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        if (password.length < 6)
            $("#divCheckPasswordMatch").html("Password must be at least 6 characters.");
        else
            if (password != confirmPassword)
                $("#divCheckPasswordMatch").html("Passwords do not match!");
            else
                $("#divCheckPasswordMatch").html("Passwords match!");

        $('.password').keyup(function () {
            $(this).onchange($("#divCheckPasswordMatch").html(""));
        })

        $('.required').each(function () {
            if ($(this).val().length == 0) {
                $(this).addClass('error');
            }
        });

        $('.error').keyup(function () {
            if ($(this).val().length > 0) {
                $(this).removeClass('error');
            }
        });

        e.preventDefault();
    });

})