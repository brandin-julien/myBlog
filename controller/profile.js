$(function () {
    $('form[name="updateProfil"]').submit(function () {
        $('.errorUpdate').html('');
        $.ajax({
            url: '../controller/profil.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',

            success: function(data){
                var toPrint = '<meta http-equiv="refresh" content="0.5; URL=../view/profil.php">';
                $('.errorUpdate').html(toPrint);
            },

            error: function(data, status, error) {
                var toPrint = '';

                data = JSON.parse(data.responseText);
                for(var d in data.errors){
                    toPrint += d+' :'+data.errors[d]+'<br>';
                }
                $('.errorUpdate').html(toPrint);
            }
        });
        //return false;
    });
});