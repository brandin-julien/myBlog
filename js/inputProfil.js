$(document).ready(function () {
    $(".imgAcc").click(function () {
        var $this = $(this);
        if ($this.attr('editing') != '1') {
            $this.attr('editing', 1);
            $('.requiredForUpdate').fadeIn();
            $(document).find('.editable').each(function () {
                var namephp = $(this).data("formname");
                var typeinput = $(this).data("formtype");
                var input = $('<input type="' + typeinput + '" class="editing infoPhp" name="' + namephp + '">').val($(this).text());
                $(this).replaceWith(input);
            });
            $('input[name="username"]').focus();
            $('.infoPhp').animate({
                'color': 'white'
            }, 500);
        }
        else {
            $this.removeAttr('editing');
            $('.requiredForUpdate').fadeOut();
            $(document).find('input.editing').each(function () {
                var namephp = $(this).attr('name');
                var typeinput = $(this).attr('type');
                var div = $('<div class="editable infoPhp" data-formtype="' + typeinput + '" data-formname="' + namephp + '">').text($(this).val());
                $(this).replaceWith(div);
            });
        }
    });
});

