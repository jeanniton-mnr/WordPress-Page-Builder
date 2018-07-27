<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function granted_iconic_info_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'icon' => '',
        'text' => '',
    ), $atts ) );
    
    $granted_allowed_html_in_ii = array(
        'a' => array(
            'href' => array(),
            'class' => array(),
            'target' => array(),
        ),
        'img' => array(
            'href' => array(),
            'class' => array(),
            'alt' => array(),
        ),
        'p' => array(),
        'br' => array(),
        'strong' => array(),
        'i' => array(),
    );
    
    $iconic_info_markup = '<div class="granted-iconic-info">
        <i class="'.esc_attr($icon).'"></i> 
        '.wp_kses(wpautop($text), $granted_allowed_html_in_ii).'
    </div>';

    return $iconic_info_markup;
}
add_shortcode('granted_iconic_info', 'granted_iconic_info_shortcode');