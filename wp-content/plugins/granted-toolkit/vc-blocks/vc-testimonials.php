<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(
    array(
        "name" => esc_html__( "Testimonials", "granted-toolkit" ),
        "base" => "granted_testimonials",
        "icon"  => granted_ACC_URL.'/assets/img/granted-testimonials.png',
        "category" => esc_html__( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Type", "granted-toolkit" ),
                "param_name" => "type",
                "std" => "carousel",
                "value" => array(
                    'Carousel' => '1',
                    'List' => '2',
                ),
                "description" => esc_html__( "Select how testimonials will appear.", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Columns", "granted-toolkit" ),
                "param_name" => "columns",
                "std" => "2",
                "description" => esc_html__( "Type how many columns you want to show. Number only", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Count", "granted-toolkit" ),
                "param_name" => "count",
                "std" => "-1",
                "description" => esc_html__( "Type how many testimonials you want to show. Type -1 for show all.", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "type",
                    "value" => array("2"),
                ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select category", "pro-toolkit" ),
                "param_name" => "category",
                "value" => granted_toolkit_testimonial_cat_list(),
                "description" => esc_html__( "Select category for testimonial.", "pro-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay?", "granted-toolkit" ),
                "param_name" => "autoplay",
                "std" => "true",
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "dependency" => array(
                    "element" => "type",
                    "value" => array("1"),
                ),
                "description" => esc_html__( "Select how many column you want to show.", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay time", "granted-toolkit" ),
                "param_name" => "autoplay_time",
                "std" => "5000",
                "value" => array(
                    '1 Second' => '1000',
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
                "description" => esc_html__( "Select autoplay time", "granted-toolkit" ),
                "dependency" => array(
                    "element" => "type",
                    "value" => array("1"),
                ),
            ),
        )
    )
);