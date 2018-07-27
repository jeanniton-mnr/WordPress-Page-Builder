<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function granted_cta_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'color' => '#ffffff',
        'link_text' => esc_html__('Contact us today', 'granted-toolkit'),
        'link_to' => '1',
        'link_to_page' => '',
        'link_external' => '',
    ), $atts ) );
    
    $granted_allowed_html_in_cta = array(
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
    
    if($link_to == 1) {
        $link_markup = get_page_link($link_to_page);
    } else {
        $link_markup = $link_external;
    }
    
    $cta_markup = '';
    $cta_markup .='
        <div class="granted-cta-area">
            <div class="granted-cta-area-text" style="color:'.esc_attr($color).'">
                <h2 style="color:'.esc_attr($color).'">'.esc_html($title).'</h2>
                '.wp_kses(wpautop($desc), $granted_allowed_html_in_cta).'
            </div>
            <a href="'.esc_url($link_markup).'" class="granted-btn cta-btn  wow fadeInRight">'.esc_html($link_text).'</a>
        </div>
    ';

    return $cta_markup;
}
add_shortcode('granted_cta', 'granted_cta_shortcode');