<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Iconic Info", "granted-toolkit" ),
        "base" => "granted_iconic_info",
        "icon"  => granted_ACC_URL.'/assets/img/granted-iconic-info.png',
        "category" => __( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Select icon", "granted-toolkit" ),
                "param_name" => "icon",
                "description" => esc_html__( "Select icon for box.", "granted-toolkit" )
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__( "Box info", "granted-toolkit" ),
                "param_name" => "text",
                "description" => esc_html__( "Type box info", "granted-toolkit" )
            ),
        )
    )
);