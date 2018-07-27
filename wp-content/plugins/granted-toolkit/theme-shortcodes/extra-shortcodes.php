<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function granted_toolkit_logo_shortcode($atts, $content = null) {
    
    extract( shortcode_atts( array(
        'attribute' => '',
        'another' => ''
    ), $atts ) );
    
    $logo_markup ='';
    
    $granted_logo = cs_get_option('granted_logo');
    if(!empty($granted_logo)) {
        $granted_logo_img_array = wp_get_attachment_image_src(cs_get_option('granted_logo'), 'medium');
        $logo_markup .='<img class="footer-logo-img" src="'.esc_url($granted_logo_img_array[0]).'" alt="'.esc_html(get_bloginfo('name')).'"/>';
    } else {
        $logo_markup .= '<h2 class="footer-logo"><span>'.esc_html(get_bloginfo('name')).'</span></h2>';
    }
    
    return $logo_markup;
    
}
add_shortcode('logo', 'granted_toolkit_logo_shortcode');


function granted_toolkit_footer_socials($atts, $content = null){
    extract( shortcode_atts( array(
        'title' => '',
        'url' => ''
    ), $atts ) );
    
    $granted_social_markup = '';
    
    $social_array = cs_get_option('social_icons');
    
    
    $granted_social_markup .= '<div class="footer-social">';
    
        if(!empty($social_array)){
            foreach($social_array as $social){
                $title = $social['title'];
                $url = $social['url'];
                
                $granted_social_markup .= '<a href="'.esc_url($url).'" class="fa fa-'.esc_attr($title).'"></a>';
                
            }
        }
    
    $granted_social_markup .= '</div>';
    
    return $granted_social_markup;
}
add_shortcode('socials', 'granted_toolkit_footer_socials');

