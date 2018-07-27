<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function granted_iconic_btn_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'icon' => '',
        'text' => '',
        'link_to' => '1',
        'link_to_page' => '',
        'link_external' => '',
    ), $atts ) );
    
    if($link_to == 1) {
        $link_markup = get_page_link($link_to_page);
    } else {
        $link_markup = $link_external;
    }
    
    $iconic_btn_markup = '<a class="granted-btn granted-iconic-btn" href="'.esc_url($link_markup).'"><i class="'.esc_attr($icon).'"></i> '.esc_html($text).'</a>';

    return $iconic_btn_markup;
}
add_shortcode('granted_iconic_btn', 'granted_iconic_btn_shortcode');