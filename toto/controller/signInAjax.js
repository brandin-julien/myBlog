$(function () {
    $('form').submit(function () {
        $('#errorBlock').html('');
        $('#successBlock').html('');

        $.ajax({
            url: '../controller/signInForm.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',

            success: function(data){
                var toPrint = 'pseudo : '+data.user.pseudo+'<br>';
                toPrint += 'password : '+data.user.password+'<br>';
                toPrint += "Connecting...";
                $('#successBlock').html(toPrint+'<meta http-equiv="refresh" content="2; URL= homepage.php">');
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