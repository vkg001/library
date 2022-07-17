$(document).on("click", ".toggleVisibility", function() {
    var th = $(this) ;
    if (th.data("onclick-show")) {
        $(th.data("onclick-show")).fadeIn();
    }

    if (th.data("onclick-hide")) {
        $(th.data("onclick-hide")).hide();
    }
})