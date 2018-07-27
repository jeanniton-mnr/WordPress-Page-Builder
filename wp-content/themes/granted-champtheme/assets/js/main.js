(function($) {
    "use strict";
    
    
    function plugin_active() {
        $('.mainmenu ul.menu').slicknav({
            appendTo: '.menu_col',
            allowParentLinks: true
        });
        
        $('.preloader_wrap').fadeOut(1000, function() {
            $(this).remove();
        });
    }
    
    function wl_cole() {
        $('.preloader-wrap').fadeOut(1000, function() {
            $(this).remove();
        });
    }
    
    $(document).ready(function() {
        plugin_active();
    });
    
    $(window).on('load', function() {
        wl_cole();
    });
    
})(jQuery);