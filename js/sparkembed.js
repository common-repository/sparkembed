jQuery(function() {
    if (typeof jQuery('#spark-embed iframe')[0] !== 'undefined') {
        var sparkembed_wht = jQuery(window).height() * .9;
        if (jQuery('#spark-embed iframe')[0].style.height == false) {
            jQuery('#spark-embed iframe').height(sparkembed_wht);
        }
    }
 });