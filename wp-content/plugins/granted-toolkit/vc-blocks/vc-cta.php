<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Call to action", "granted-toolkit" ),
        "base" => "granted_cta",
        "icon"  => granted_ACC_URL.'/assets/img/granted-call-to-action.png',
        "category" => esc_html__( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "granted-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type your CTA title", "granted-toolkit" )
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__( "Description", "granted-toolkit" ),
                "param_name" => "desc",
                "description" => esc_html__( "Type your CTA description", "granted-toolkit" )
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Text color", "granted-toolkit" ),
                "param_name" => "color",
                "std" => "#ffffff",
                "description" => esc_html__( "Select CTA text color", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link text", "granted-toolkit" ),
                "param_name" => "link_text",
                "std" => esc_html__( "Contact us today", "granted-toolkit" ),
                "description" => esc_html__( "Type CTA link text here..", "granted-toolkit" )
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
                "description" => esc_html__( "You are able to select a page for linking into the CTA button...", "granted-toolkit" ),
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