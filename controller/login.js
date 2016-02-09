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
                console.log('succes');
                var toPrint = 'username : '+data.user.username+'<br>';
                toPrint += 'password : '+data.user.password+'<br>';
                $('#blocSuccess').html(toPrint);
            },

            error: function(data, status, error) {
                console.log('error');
                var toPrint = '';
                console.log('error2');
                console.log(data);
                data = JSON.parse(data.responseText);
                console.log('error3');
                for(var d in data.errors){
                    console.log('for');
                    toPrint += d+' :'+data.errors[d]+'<br>';
                }
                $('#blocErreur').html(toPrint);
            }
        });
        return false;
    });
});