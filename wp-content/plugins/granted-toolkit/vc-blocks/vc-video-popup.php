<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Video popup box", "granted-toolkit" ),
        "base" => "granted_video_popup",
        "icon"  => granted_ACC_URL.'/assets/img/granted-video-popup-box.png',
        "category" => esc_html__( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Video URL", "granted-toolkit" ),
                "param_name" => "url",
                "description" => esc_html__( "Type video URL", "granted-toolkit" )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Video thumbnail", "granted-toolkit" ),
                "param_name" => "thumbnail",
                "description" => esc_html__( "Upload video thumbnail.", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Video text", "granted-toolkit" ),
                "std" => esc_html__( "Watch video", "granted-toolkit" ),
                "param_name" => "text",
                "description" => esc_html__( "Type video text", "granted-toolkit" )
            ),
        )
    )
);