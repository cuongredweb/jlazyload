jQuery.noConflict();
jQuery(document).ready(function($) {
    $("img").each(function() {
        $(this).attr("data-original",$(this).attr("src"));
        $(this).removeAttr("src");
    });
    $("img").lazyload({
        effect : "fadeIn",
        placeholder : "media/rlazyload/images/transparent.gif"
    });
});