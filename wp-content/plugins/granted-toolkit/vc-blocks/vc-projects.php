<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Projects", "granted-toolkit" ),
        "base" => "granted_projects",
        "icon"  => granted_ACC_URL.'/assets/img/granted-projects.png',
        "category" => esc_html__( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Projects count", "granted-toolkit" ),
                "param_name" => "count",
                "std" => esc_html__( "12", "granted-toolkit" ),
                "description" => esc_html__( "How many projects you want to show?", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Projects columns", "granted-toolkit" ),
                "param_name" => "columns",
                "std" => esc_html__( "4", "granted-toolkit" ),
                "value" => array(
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                ),
                "description" => esc_html__( "How many column do u want to use on portgranted..", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Load more text", "granted-toolkit" ),
                "param_name" => "button_text",
                "std" => esc_html__( "Load more", "granted-toolkit" ),
                "description" => esc_html__( "Type project more button text.", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Enable filter?", "granted-toolkit" ),
                "param_name" => "filter",
                "std" => __( "1", "granted-toolkit" ),
                "value" => array(
                    esc_html__('No', 'granted-toolkit') => '1',
                    esc_html__('Yes', 'granted-toolkit') => '2',
                ),
                "description" => esc_html__( "If you want to enable project filter, select yes.", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Filter Style", "granted-toolkit" ),
                "param_name" => "filter_style",
                "std" => __( "1", "granted-toolkit" ),
                "value" => array(
                    esc_html__('Right align', 'granted-toolkit') => '1',
                    esc_html__('Left align', 'granted-toolkit') => '2',
                    esc_html__('Center align', 'granted-toolkit') => '3',
                ),
                "description" => esc_html__( "Select a style for projects.", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "filter",
                    "value" => array("2"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Style", "granted-toolkit" ),
                "param_name" => "style",
                "std" => __( "1", "granted-toolkit" ),
                "value" => array(
                    esc_html__('Style 1', 'granted-toolkit') => '1',
                    esc_html__('Style 2', 'granted-toolkit') => '2',
                    esc_html__('Style 3', 'granted-toolkit') => '3',
                ),
                "description" => esc_html__( "Select a style for projects.", "granted-toolkit" )
            ),
        )
    )
);