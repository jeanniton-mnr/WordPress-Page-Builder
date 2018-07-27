<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Section title", "granted-toolkit" ),
        "base" => "granted_section_title",
        "icon"  => granted_ACC_URL.'/assets/img/granted-section-title.png',
        "category" => __( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Style", "granted-toolkit" ),
                "param_name" => "style",
                "std" => esc_html__( "1", "granted-toolkit" ),
                "value" => array(
                    'Normal style' => '1',
                    'Boxed image style' => '2',
                    'Boxed border style' => '3',
                ),
                "description" => esc_html__( "Select section title style.", "granted-toolkit" )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Image", "granted-toolkit" ),
                "param_name" => "image",
                "description" => esc_html__( "Upload image here.", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "style",
                    "value" => array("2"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "granted-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type section title..", "granted-toolkit" )
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__( "Description", "granted-toolkit" ),
                "param_name" => "desc",
                "description" => esc_html__( "write about section title", "granted-toolkit" )
            )
        )
    )
);