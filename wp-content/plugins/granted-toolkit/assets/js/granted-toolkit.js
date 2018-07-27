(function ($) {
	"use strict";

    jQuery(document).ready(function($){

        $( ".image-popup-link" ).magnificPopup({
            type:"image",
            gallery: {
              enabled: true
            },
            removalDelay: 300,
            mainClass: 'mfp-fade'
        });

        $( ".granted-video-thumbnail" ).magnificPopup({
            type:"video",
            mainClass: 'mfp-fade'
        });


    });


    jQuery(window).load(function(){

        
    });


}(jQuery));	