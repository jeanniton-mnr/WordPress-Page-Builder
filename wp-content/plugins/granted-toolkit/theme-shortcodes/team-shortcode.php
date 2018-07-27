<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function granted_team_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'photo' => '',
        'title' => '',
        'job' => '',
        'links' => '',
    ), $atts ) );

    $granted_social_links_markup = vc_param_group_parse_atts( $links );
    

    $team_markup = '<div class="granted-single-team">';

    $team_markup .= '

                        <div class="granted-team-img">';
    if($photo) {
        $photo_image_array = wp_get_attachment_image_src($photo, 'large');
        $team_markup .= '<img src="'.esc_url($photo_image_array[0]).'" alt="'.esc_html($title).'">';
    }
    
    if($links) {
        $team_markup .= '<ul class="granted-team-social-link">';
        foreach($granted_social_links_markup as $link) {
            if(!empty($link['link']) && !empty($link['icon'])) {
                $team_markup .= '<li><a href="'.esc_url($link['link']).'" target="_blank"><i class="'.esc_attr($link['icon']).'"></i></a></li>';
            }
        }
        $team_markup .= '</ul>';
    }

    $team_markup .= '
                        </div>
                        <div class="granted-team-detail">
                            <h4>'.esc_html($title).'</h4>';
    if($job) {
        $team_markup .= '<span class="granted-team-position">'.esc_html($job).'</span>';
    }
     
    
   
    
    $team_markup .= '
                        </div>
    ';
    $team_markup .= '</div>';

    return $team_markup;
}
add_shortcode('granted_team', 'granted_team_shortcode');