<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Slides", "granted-toolkit" ),
        "base" => "granted_slides",
        "icon"  => granted_ACC_URL.'/assets/img/granted-slides.png',
        "category" => esc_html__( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Slides count", "granted-toolkit" ),
                "param_name" => "count",
                "std" => esc_html__( "3", "granted-toolkit" ),
                "value" => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    'Unlimited' => '-1',
                ),
                "description" => esc_html__( "How many slide you want to show?", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Height", "granted-toolkit" ),
                "param_name" => "height",
                "std" => "640",
                "description" => esc_html__( "Type slider height in number.", "granted-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select slide", "granted-toolkit" ),
                "param_name" => "slide_id",
                "value" => granted_toolkit_get_slides_as_list(),
                "description" => esc_html__( "Click here if you dont know slide ID.", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show arrows?", "granted-toolkit" ),
                "param_name" => "arrows",
                "std" => esc_html__( "true", "granted-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "If you want visible slide arrows then select Yes", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show dots?", "granted-toolkit" ),
                "param_name" => "dots",
                "std" => esc_html__( "false", "granted-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "Appear slides dot", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay?", "granted-toolkit" ),
                "param_name" => "autoplay",
                "std" => esc_html__( "true", "granted-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "If you want enable slides autoplay, select yes", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay time", "granted-toolkit" ),
                "param_name" => "autoplay_time",
                "std" => esc_html__( "5000", "granted-toolkit" ),
                "value" => array(
                    '1 Seconds' => '1000',
                    '2 Seconds' => '2000',
                    '3 Seconds' => '3000',
                    '4 Seconds' => '4000',
                    '5 Seconds' => '5000',
                    '6 Seconds' => '6000',
                    '7 Seconds' => '7000',
                    '8 Seconds' => '8000',
                    '9 Seconds' => '9000',
                    '10 Seconds' => '10000',
                ),
                "description" => esc_html__( "Select autoplay time..", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
        )
    )
);