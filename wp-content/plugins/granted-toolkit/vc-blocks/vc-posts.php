<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
vc_map(
    array(
        "name" => esc_html__( "Posts block", "granted-toolkit" ),
        "base" => "granted_posts",
        "category" => esc_html__( "granted", "granted-toolkit"),
        "icon"  => granted_ACC_URL.'/assets/img/granted-posts-block.png', 
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Columns", "granted-toolkit" ),
                "param_name" => "columns",
                "std" => esc_html__( "3", "granted-toolkit" ),
                "value" => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '6' => '6',
                ),
                "description" => esc_html__( "Select post column", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Posts count", "granted-toolkit" ),
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
                    esc_html__('Unlimited', 'granted-toolkit') => '-1',
                ),
                "description" => esc_html__( "How many posts you want to show?", "granted-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select category", "granted-toolkit" ),
                "param_name" => "category_id",
                "value" => granted_toolkit_get_post_taxonomies_as_list(),
                "description" => esc_html__( "Select post category", "granted-toolkit" ),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Read more link text", "granted-toolkit" ),
                "param_name" => "readmore_text",
                "std" => esc_html__("Read more", "granted-toolkit"),
                "description" => esc_html__( "Type link text here", "granted-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show post date?", "granted-toolkit" ),
                "param_name" => "date",
                "std" => esc_html__( "1", "granted-toolkit" ),
                "value" => array(
                    esc_html__('Yes', 'granted-toolkit') => '1',
                    esc_html__('No', 'granted-toolkit') => '2',
                ),
                "description" => esc_html__( "Show or hide post date", "granted-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show author?", "granted-toolkit" ),
                "param_name" => "author",
                "std" => esc_html__( "1", "granted-toolkit" ),
                "value" => array(
                    esc_html__('Yes', 'granted-toolkit') => '1',
                    esc_html__('No', 'granted-toolkit') => '2',
                ),
                "description" => esc_html__( "Show or hide post author name", "granted-toolkit" ),
            ),
        )
    )
);