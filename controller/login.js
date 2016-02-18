$(function () {
    $('form').submit(function () {
        $('#blocErreur').html('');
        $('#blocSuccess').html('');
        $.ajax({
            url: '../controller/login.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',

            success: function(data){
                var toPrint = 'Connexion réussis, redirection en cours... '+'<meta http-equiv="refresh" content="0.5; URL=../view/index.php">';
                $('#blocSuccess').html(toPrint);
            },

            error: function(data, status, error) {
                var toPrint = 'Error of login or password';

                /*data = JSON.parse(data.responseText);
                for(var d in data.errors){
                    toPrint += d+' :'+data.errors[d]+'<br>';
                }*/
                $('#blocErreur').html(toPrint);
            }
        });
        return false;
    });
});