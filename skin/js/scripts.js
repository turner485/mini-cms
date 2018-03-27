

$(document).ready(function() {
    var bodyHeight = $("body").height();
    var vwptHeight = $(window).height();
    if (vwptHeight > bodyHeight) {
        $("footer#sticky-footer").css("position","fixed").css("bottom",0);
    }
});
