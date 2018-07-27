<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

vc_map(
    array(
        "name" => esc_html__( "Team", "granted-toolkit" ),
        "base" => "granted_team",
        "icon"  => granted_ACC_URL.'/assets/img/granted-team.png',
        "category" => esc_html__( "granted", "granted-toolkit"),
        "params" => array(
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Photo", "granted-toolkit" ),
                "param_name" => "photo",
                "description" => esc_html__( "Upload team photo..", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "granted-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type team name or team title", "granted-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Designation", "granted-toolkit" ),
                "param_name" => "job",
                "description" => esc_html__( "Write team designation", "granted-toolkit" )
            ),
            array(
                "type" => "param_group",
                "heading" => esc_html__( "Social Links", "granted-toolkit" ),
                "param_name" => "links",
                "params" => array(
                    array(
                        "type" => "iconpicker",
                        "heading" => esc_html__( "Select icon", "granted-toolkit" ),
                        "param_name" => "icon",
                        "description" => esc_html__( "Select an icon for team social links", "granted-toolkit" )
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => esc_html__( "Link", "granted-toolkit" ),
                        "param_name" => "link",
                        "value" => esc_html__( "http://", "granted-toolkit" ),
                        "description" => esc_html__( "Enter team social profile link", "granted-toolkit" )
                    ),
                ),
                "description" => esc_html__( "Add stuff social link", "granted-toolkit" )
            ),

        )
    )
);