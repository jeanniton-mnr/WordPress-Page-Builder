<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function granted_service_box_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'link_text' => esc_html__('View details', 'granted-toolkit'),
        'icon_type' => '1',
        'icon' => '',
        'fa_icon' => '',
        'link_to' => '1',
        'link_to_page' => '',
        'link_external' => '',
    ), $atts ) );
    
    if($link_to == 1) {
        $link_markup = get_page_link($link_to_page);
    } else {
        $link_markup = $link_external;
    }
    
    $granted_allowed_html_in_st = array(
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
    $service_box_markup = '<div class="granted-service-box">';
    
        if($icon_type == 1) {
            $service_icon_arr = wp_get_attachment_image_src($icon, 'large');
            $service_box_markup .='
                <div class="service-box-bg" style="background-image:url('.esc_url($service_icon_arr[0]).')"></div>
            ';
        } else {
            $service_box_markup .='<i class="service-icon '.esc_attr($fa_icon).'"></i>';
        }
        
        $service_box_markup .='
        <div class="service-box-inner">
            <h2>'.esc_html($title).'</h2>
            <div class="granted-service-box-content">
                '.wp_kses(wpautop($desc), $granted_allowed_html_in_st).'
            </div>';
    
        if($icon_type == 1) {
        $service_box_markup .='
            <a class="service-box-readmore button-3" href="'.esc_url($link_markup).'">'.esc_html($link_text).' <i class="fa fa-plus"></i></a>';
        }
        $service_box_markup .='
        </div>
        ';

    $service_box_markup .= '</div>';

    return $service_box_markup;
}
add_shortcode('granted_service_box', 'granted_service_box_shortcode');