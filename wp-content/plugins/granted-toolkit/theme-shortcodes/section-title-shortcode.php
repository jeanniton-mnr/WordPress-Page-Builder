<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function granted_section_title_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        'style' => '1',
        'image' => '',
        'desc' => '',
    ), $atts ) );
    
    $granted_toolkit_allowed_html_in_st = array(
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

    $section_title_markup = '<div class="granted-section-title granted-section-title-'.esc_html($style).'">';
    
        if($style == 2) {
            $section_title_markup_img = wp_get_attachment_image_src($image, 'large');
            $section_title_markup .= '<img src="'.esc_url($section_title_markup_img[0]).'" alt="'.esc_html($title).'"/>';
        }

        if($title) {
            $section_title_markup .= '<h2>'.esc_html($title).'</h2>';
        }

        if($desc) {
            $section_title_markup .= ''.wp_kses(wpautop($desc), $granted_toolkit_allowed_html_in_st).'';
        }
    
    $section_title_markup .= '</div>';

    return $section_title_markup;
}
add_shortcode('granted_section_title', 'granted_section_title_shortcode');