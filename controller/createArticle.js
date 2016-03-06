$(function () {
    $('form').submit(function () {
        $('#result').html('');
        $.ajax({
            url: '../controller/createArticle.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',

            success: function(data){
                var toPrint = "Article créé avec succès";
                $('#result').html(toPrint);
            },

            error: function(data, status, error) {
                var toPrint = '';

                data = JSON.parse(data.responseText);
                for(var d in data.errors){
                    toPrint += d+' :'+data.errors[d]+'<br>';
                }
                $('#result').html(toPrint);
            }
        });
        return false;
    });
});