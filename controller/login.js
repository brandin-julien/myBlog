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
                var toPrint = 'Connexion réussie, redirection en cours... '+'<meta http-equiv="refresh" content="0.5; URL=../view/index.php">';
                $('#blocSuccess').html(toPrint);
            },

            error: function(data, status, error) {
                var toPrint = 'Erreur de l\'email ou du mot de passe';
                $('#blocErreur').html(toPrint);
            }
        });
        return false;
    });
});