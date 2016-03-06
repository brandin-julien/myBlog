(function ($) {
    $.fn.hoverArticle = function () {
        $(this).hover(function(e) {
            $(this).css("opacity",e.type === "mouseenter"?"0.6":"1")
        })
    }
})(jQuery);