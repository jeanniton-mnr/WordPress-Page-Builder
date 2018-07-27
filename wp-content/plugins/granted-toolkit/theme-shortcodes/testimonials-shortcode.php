<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function granted_testimonials_shortcode($atts){
    extract( shortcode_atts( array(
        'type' => '1',
        'count' => '-1',
        'columns' => '2',
        'category' => '',
        'autoplay' => 'true',
        'autoplay_time' => '5000',
        'nav' => 'true',
        'dots' => 'false',
    ), $atts) );
    if($category) {
        $q = new WP_Query(array(
            'posts_per_page' => $count, 
            'post_type' => 'testimonial', 
            'tax_query' => array(
                array(
                    'taxonomy' => 'testimonial_cat',
                    'field'    => 'term_id',
                    'terms'    => $category,
                ),
            ),
        ));
    } else {
        $q = new WP_Query(array('posts_per_page' => $count, 'post_type' => 'testimonial'));
    }
    
    
    
    
    $testimonial_no = 0;
    $testimonial_random_id = rand(32987, 54972);
    

    $granted_testimonials_markup = '
    <div class="granted-testimonial-list-wrap">
    <script>';
    
    if($type == 1) {
        $granted_testimonials_markup .= '
        jQuery(document).ready(function($){
            $("#granted-testimonial-list-'.esc_attr($testimonial_random_id).'").owlCarousel({
                nav: '.esc_attr($nav).',
                navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                loop: true,
                dots: '.esc_attr($dots).',
                margin: 30,
                //autoplay: '.esc_attr($autoplay).',
                autoplayTimeout: '.esc_attr($autoplay_time).',
                items: '.esc_attr($columns).',
                smartSpeed: 700,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: '.esc_attr($columns).',
                    }
                }
            });
        });';
    
    } else {
        $granted_testimonials_markup .= '
            jQuery(window).load(function() {
                jQuery(".granted-testimonial-list-masonry").masonry();
            });
        ';
    }
    
    $granted_testimonials_markup .= '
    </script>
    <div id="granted-testimonial-list-'.esc_attr($testimonial_random_id).'" class="granted-testimonial-list">';
    
    if($type == 2) {
        $granted_testimonials_markup .= '<div class="row granted-testimonial-list-masonry">';
    }    

    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $testimonial_meta = get_post_meta($idd, 'granted_testimonial_meta', true);
        $post_content = get_the_content();
    
        if($type == 2) {
            if($columns == 1) {
                $column_markup = 'col-md-12';
            } elseif($columns == 2) {
                $column_markup = 'col-md-6 col-sm-6';
            } elseif($columns == 4) {
                $column_markup = 'col-md-3 col-sm-6';
            } else {
                $column_markup = 'col-md-4 col-sm-6';
            }
            $granted_testimonials_markup .= '<div class="'.esc_attr($column_markup).'">';
        }
    
        $granted_testimonials_markup .= '
            <div class="single-granted-testimonial">
                '.get_the_post_thumbnail($idd, 'thumbnail').'
                <div class="granted-testimonial-inner">
                    <div class="granted-testimonial-content">
                        '.wpautop($post_content).'
                        <h3>'.esc_html(get_the_title($idd)).' <span>'.esc_html($testimonial_meta['position']).'</span></h3>
                    </div>
                </div> 
            </div>
                ';
    
        if($type == 2) {
            $granted_testimonials_markup .= '</div>';
        } 
    
    endwhile;
    wp_reset_query();
    
    if($type == 2) {
        $granted_testimonials_markup .= '</div>';
    } 
    
    $granted_testimonials_markup .= '</div></div>';
    
    
    
    
    
    return $granted_testimonials_markup;
}
add_shortcode('granted_testimonials', 'granted_testimonials_shortcode');