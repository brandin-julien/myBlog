$(document).ready(function () {
    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function () {
        $(this).toggleClass('open');
    });

    $("body").css("display", "none");
    $("body").fadeIn(1500);
    $("a.transition").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(750, redirectPage);
    });
    function redirectPage() {
        window.location = linkLocation;
    }

});