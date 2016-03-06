$(function () {
    var trueMenu = true;

    $('.onClick').click(function () {
        if (trueMenu === true) {
            $('#c-menu--slide-left').fadeIn("slow");
            $('body').addClass('stop-scrolling');
            trueMenu = false;
        }
        else {
            $('#c-menu--slide-left').fadeOut("slow");
            $('body').removeClass('stop-scrolling');
            trueMenu = true;
        }
    });
});