<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function granted_slides_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '3',
        'arrows' => 'true',
        'dots' => 'true',
        'autoplay' => 'true',
        'height' => '640',
        'autoplay_time' => '5000',
        'slide_id' => '',
    ), $atts) );

    if($count == 1) {
        $q = new WP_Query( array('posts_per_page' => 1, 'post_type' => 'slide', 'p' => $slide_id) );
    } else {
        $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'slide') );
    }

    $list = '
        <script>
    ';

    if($count != 1) {
    $list .= '
    
        jQuery(window).load(function(){
            jQuery("#granted-slides-'.esc_attr($slide_id).'").owlCarousel({
                items: 1,
                loop: true,
                autoplay: '.esc_attr($autoplay).',
                dots: '.esc_attr($dots).',
                nav: '.esc_attr($arrows).',
                autoplayTimeout: '.esc_attr($autoplay_time).',
                navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                autoplayHoverPause: false,
                touchDrag: false,
                mouseDrag: false,
                smartSpeed: 800
            });
            
            jQuery("#granted-slides-'.esc_attr($slide_id).'").on("translate.owl.carousel", function () {
                jQuery(this).find(".owl-item .granted-slide-text > *").removeClass("fadeInUp animated").css("opacity","0");
                jQuery(this).find(".owl-item .granted-slide-st-img").removeClass("fadeInRight animated").css("opacity","0");
            });          
            jQuery("#granted-slides-'.esc_attr($slide_id).'").on("translated.owl.carousel", function () {
                jQuery(this).find(".owl-item.active .granted-slide-text > *").addClass("fadeInUp animated").css("opacity","1");
                jQuery(this).find(".owl-item.active .granted-slide-st-img").addClass("fadeInRight animated").css("opacity","1");
            });
            
        });
    ';
    }
    
    $list .='
    </script>
    ';
    
    $list .='
    <div style="height:'.esc_attr($height).'px" class="slider-preloader-wrap">
        <div class="preloader-wrap"><div class="preloader4"></div></div>
        <div class="granted-slides" id="granted-slides-'.esc_attr($slide_id).'">';

        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            if(get_post_meta($idd, 'granted_slide_meta', true)) {
                $slide_meta = get_post_meta($idd, 'granted_slide_meta', true);
            } else {
                $slide_meta = array();
            }
            $granted_allowed_html_in_slide = array(
                'a' => array(
                    'href' => array(),
                    'class' => array(),
                    'target' => array(),
                ),
                'img' => array(
                    'href' => array(),
                    'class' => array(),
                    'alt' => array(),
                ),
                'p' => array(),
                'h1' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h2' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h3' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h4' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h5' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h6' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'br' => array(),
                'strong' => array(),
                'i' => array(),
            );
            $post_content = get_the_content();
            $list .= '
                <div style="height:'.esc_attr($height).'px;background-image:url('.get_the_post_thumbnail_url($idd, 'large').')" class="single-granted-slide-item" id="single-granted-slide-item-'.esc_attr($idd).'">
                        <div class="granted-slide-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="granted-slide-text">
                                            <h2>'.esc_html(get_the_title($idd)).'</h2>
                                            '.wp_kses(wpautop($post_content), $granted_allowed_html_in_slide).'';

            if(array_key_exists('buttons', $slide_meta) && $slide_meta['buttons']) {
            $list .='

                                            <div class="granted-slide-buttons">';
                                            foreach($slide_meta['buttons'] as $button) {
                                                if($button['linkto'] == 1) {
                                                    $btn_link_markup = get_page_link($button['to_page']);
                                                } else {
                                                    $btn_link_markup = $button['to_external'];
                                                }
                                                $list .='<a target="'.$button['tab'].'" href="'.esc_url($btn_link_markup).'" class="granted-btn btn_effect '.esc_attr($button['type']).'-btn">'.esc_html($button['btn_text']).'</a>';
                                            }
                $list .='
                                            </div>';
            }
            
            $list .='
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>'; 
            $list .='
                </div>
                ';
        endwhile;
        $list.= '</div> </div>';
    wp_reset_query();
        
    return $list;
}
add_shortcode('granted_slides', 'granted_slides_shortcode');