$(function () {
    $('form').submit(function () {
        $('#blocErreur').html('');
        $('#blocSuccess').html('');
        $.ajax({
            url: '../controller/inscription.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',

            success: function(data){
                var toPrint = 'username : '+data.user.username+'<br>';
                toPrint += 'password : '+data.user.password+'<br>';
                $('#blocSuccess').html(toPrint);
            },

            error: function(data, status, error) {
                var toPrint = '';

                data = JSON.parse(data.responseText);
                for(var d in data.errors){
                    toPrint += d+' :'+data.errors[d]+'<br>';
                }
                $('#blocErreur').html(toPrint);
            }
        });
        return false;
    });
});