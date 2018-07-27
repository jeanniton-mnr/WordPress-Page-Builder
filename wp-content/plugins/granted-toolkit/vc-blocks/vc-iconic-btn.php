<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Iconic Button", "granted-toolkit" ),
        "base" => "granted_iconic_btn",
        "icon"  => granted_ACC_URL.'/assets/img/granted-iconic-button.png',
        "category" => __( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Select icon", "granted-toolkit" ),
                "param_name" => "icon",
                "description" => esc_html__( "Select icon for button.", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Buttont text", "granted-toolkit" ),
                "param_name" => "text",
                "description" => esc_html__( "Type button text", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Link to", "granted-toolkit" ),
                "param_name" => "link_to",
                "std" => __( "1", "granted-toolkit" ),
                "value" => array(
                    esc_html__('Page', 'granted-toolkit') => '1',
                    esc_html__('External link', 'granted-toolkit') => '2',
                ),
                "description" => esc_html__( "If you want to select page or external any link for cta button. Select your choice", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select page", "granted-toolkit" ),
                "param_name" => "link_to_page",
                "value" => granted_toolkit_get_page_as_list(),
                "description" => esc_html__( "You are able to select a page for linking into the button...", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "link_to",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link", "granted-toolkit" ),
                "param_name" => "link_external",
                "description" => esc_html__( "Enter CTA button external link here..", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "link_to",
                    "value" => array("2"),
                )
            ),
        )
    )
);