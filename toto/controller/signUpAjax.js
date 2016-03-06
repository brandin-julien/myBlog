$(function () {
    $('form').submit(function () {
        $('#errorBlock').html('');
        $('#successBlock').html('');
        $.ajax({
            url: '../controller/signUpForm.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',

            success: function(data){
                var toPrint = 'pseudo : '+data.user.pseudo+'<br>';
                toPrint += 'lastname : '+data.user.lastname+'<br>';
                toPrint += 'firstname : '+data.user.firstname+'<br>';
                toPrint += 'You have successfully subscribed ! Redirecting to the login page...';
                $('#successBlock').html(toPrint+'<meta http-equiv="refresh" content="3; URL= signInPage.php">');
            },

            error: function(data, status, error) {
                var toPrint = '';
                data = JSON.parse(data.responseText);
                for(var d in data.errors){
                    toPrint += d+' :'+data.errors[d]+'<br>';
                }
                $('#errorBlock').html(toPrint);
            }
        });
        return false;
    });
});