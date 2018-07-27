<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


function granted_posts_shortcode($atts){
    extract( shortcode_atts( array(
        'columns' => '3',
        'count' => '3',
        'readmore_text' => 'Read more',
        'category_id' => '',
        'date' => '1',
        'author' => '1',
    ), $atts) );

    if($category_id) {
        $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'post', 'cat' => $category_id) );
    } else {
        $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'post') );
    }
    
    if($columns == 1) {
        $column_markup = 'col-md-12 col-sm-6';
    } elseif($columns == 2) {
        $column_markup = 'col-md-6 col-sm-6';
    } elseif($columns == 3) {
        $column_markup = 'col-md-4 col-sm-6';
    } elseif($columns == 4) {
        $column_markup = 'col-md-3 col-sm-6';
    } elseif($columns == 6) {
        $column_markup = 'col-md-2 col-sm-6';
    } 

    $list = '';

    if(!empty($section_title)) {
    $list .= '<h2 class="post-block-title">'.esc_html($section_title).'</h2>';
    }
    
    $list .='
    <div class="row">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        if(has_post_thumbnail()){
            $posts_img_markup = 'style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd, 'medium')).')"';
        } else {
            $posts_img_markup = '';
        }
        $post_excerpt = get_the_excerpt();
    
        $user_info = get_userdata(get_post_field( 'post_author', $idd ));
        $list .= '
            <div class="'.esc_attr($column_markup).'">
                <div class="granted-single-post-block">
                    <a href="'.esc_url(get_permalink($idd)).'" class="post-block-thumb" '.$posts_img_markup.'></a>
                    
                    <div class="post-block-content">
                        <h3><a href="'.esc_url(get_permalink($idd)).'">'.esc_html(get_the_title($idd)).'</a></h3>
                        <p class="post-block-meta">';
                        
                        if($date == 1) {
                            $list .='<span class="post-block-date">'.esc_html(get_the_date('d, m, Y', $idd)).'</span>';
                        }
                        if($author == 1) {
                            $list .='<span class="post-block-author">'.esc_html(get_the_author()).'</span>';
                        }
                        
    
                        $list .= '
                        </p>
                        
                        
                        <a href="'.esc_url(get_permalink($idd)).'" class="post-block-readmore button-3">'.esc_html($readmore_text).' <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>    
            </div>    
        ';
    endwhile;
    $list.= '</div>';
    wp_reset_query();
        
    return $list;
}
add_shortcode('granted_posts', 'granted_posts_shortcode');