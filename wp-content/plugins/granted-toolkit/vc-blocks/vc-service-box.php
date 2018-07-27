<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Service box", "granted-toolkit" ),
        "base" => "granted_service_box",
        "icon"  => granted_ACC_URL.'/assets/img/granted-service-box.png',
        "category" => esc_html__( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "granted-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type your service title", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Image type", "granted-toolkit" ),
                "param_name" => "icon_type",
                "std" => esc_html__( "1", "granted-toolkit" ),
                "value" => array(
                    'Upload' => '1',
                    'Font awesome icon' => '2',
                ),
                "description" => esc_html__( "Select service box icon type", "granted-toolkit" )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Image", "granted-toolkit" ),
                "param_name" => "icon",
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("1"),
                ),
                "description" => esc_html__( "Upload your service box icon here", "granted-toolkit" )
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Select icon", "granted-toolkit" ),
                "param_name" => "fa_icon",
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("2"),
                ),
                "description" => esc_html__( "Upload your service box icon here", "granted-toolkit" )
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__( "Description", "granted-toolkit" ),
                "param_name" => "desc",
                "description" => esc_html__( "Type your service description here", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link text", "granted-toolkit" ),
                "param_name" => "link_text",
                "std" => esc_html__( "View details", "granted-toolkit" ),
                "description" => esc_html__( "Type link text", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Link to", "granted-toolkit" ),
                "param_name" => "link_to",
                "std" => esc_html__( "1", "granted-toolkit" ),
                "value" => array(
                    'Page' => '1',
                    'External link' => '2',
                ),
                "description" => esc_html__( "Select your button link type", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select page", "granted-toolkit" ),
                "param_name" => "link_to_page",
                "value" => granted_toolkit_get_page_as_list(),
                "description" => esc_html__( "Select your page", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "link_to",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link", "granted-toolkit" ),
                "param_name" => "link_external",
                "description" => esc_html__( "Type your external link here", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "link_to",
                    "value" => array("2"),
                )
            ),
        )
    )
);