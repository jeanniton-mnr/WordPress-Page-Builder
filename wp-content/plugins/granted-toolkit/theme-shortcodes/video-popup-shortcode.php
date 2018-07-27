<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function granted_video_popup_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'url' => '',
        'thumbnail' => '',
        'text' => esc_html__('Watch video', 'granted-toolkit'),
    ), $atts ) );
    $video_thumbnail = wp_get_attachment_image_src($thumbnail, 'large'); 
    $video_popup_markup = '
        <a href="'.esc_url($url).'" class="granted-video-thumbnail mfp-iframe"><img src="'.esc_url($video_thumbnail[0]).'" alt=""/><span><i class="fa fa-play"></i> '.esc_html($text).'</span></a>';

    return $video_popup_markup;
}
add_shortcode('granted_video_popup', 'granted_video_popup_shortcode');