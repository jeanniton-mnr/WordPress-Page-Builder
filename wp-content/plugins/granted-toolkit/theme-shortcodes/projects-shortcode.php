<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_action('wp_ajax_nopriv_load_more_projects', 'load_more_projects_callback');
add_action('wp_ajax_load_more_projects', 'load_more_projects_callback');

function load_more_projects_callback() {
    
 
    
    
    $permission = check_ajax_referer( 'load_more_projects_nonce', 'nonce', false );
    if( $permission == false ) {
        echo 'error';
        $list = '
            <div class="granted-ajax-error-content">
                <i class="fa fa-warning"></i>
                <h3>'.esc_html__('I don\'t know what happened, but there is an error!', 'granted-toolkit').'</h3>
            </div>
        ';        
    }
    else {
        $post_count  = (isset($_POST['count'])) ? $_POST['count'] : 0;
        $columns  = (isset($_POST['columns'])) ? $_POST['columns'] : 0;
        $style  = (isset($_POST['style'])) ? $_POST['style'] : 0;
        $filter  = (isset($_POST['filter'])) ? $_POST['filter'] : 0;
        $static_count  = (isset($_POST['static_count'])) ? $_POST['static_count'] : 0;
        $total_loaded  = (isset($_POST['total_loaded'])) ? $_POST['total_loaded'] : 0;
        $base_no = 0;
        
        if($columns == 1) {
            $project_column_width = 'col-md-12';
        } elseif($columns == 3) {
            $project_column_width = 'col-md-4 col-sm-6';
        } elseif($columns == 4) {
            $project_column_width = 'col-md-3 col-sm-6';
        } else {
            $project_column_width = 'col-sm-6';
        }

        $ignore_posts = $post_count - $static_count;
        

        $settings = array(
            'showposts' => $post_count, 
            'post_type' => 'project'
        );  

        $granted_projects_query = new WP_Query($settings);      

        $list = '';
        while($granted_projects_query->have_posts()) : $granted_projects_query->the_post();
            $base_no++;
            $idd = get_the_ID();
        
            $post_content = get_the_excerpt();
        
  
            if($columns == 2) {
                $project_cw_varriation = 'col-sm-6';
            } elseif($columns == 4) {
                $project_cw_varriation = 'col-md-3 col-sm-6';
            } else {
                $project_cw_varriation = $project_column_width;  
            }
        
            $project_assigned_cat = get_the_terms( $idd, 'project_cat' );

            if ( $project_assigned_cat && ! is_wp_error( $project_assigned_cat ) ) { 

                $project_assigned_cat_array = array();

                foreach ( $project_assigned_cat as $cat ) {
                    $project_assigned_cat_array[] = $cat->slug;
                }

                $project_assigned_cat_list = join( " ", $project_assigned_cat_array ); 
            } else {
                $project_assigned_cat_list = '';
            }       



            $project_assigned_catname = get_the_terms( $idd, 'project_cat' );
            $project_assigned_catname_array = array();

            if ( $project_assigned_catname && ! is_wp_error( $project_assigned_catname ) ) { 
                foreach ( $project_assigned_catname as $catname ) {
                    $project_assigned_catname_array[] = $catname->name;
                }
                $project_assigned_catname_list = join( ", ", $project_assigned_catname_array ); 
            } else {
                $project_assigned_catname_list = '';
            }
        
            if(($base_no) > $total_loaded) {
                
                $list .= '
                    <div class="single-granted-project-wrap '.esc_attr($project_cw_varriation).' '.esc_attr($project_assigned_cat_list).' granted-project-no-'.esc_attr($base_no).'">
                        <a href="'.esc_url(get_permalink()).'" class="project-thumbnail-wrap">
                            <span class="project-thumb-loading"><i class="fa fa-cog fa-spin"></i> '.esc_html__('thumbnail loading', 'granted-toolkit').'</span>
                            
                            <span class="project-hover-link"><i class="fa fa-link"></i></span>
                            
                            <div class="granted-project-thumb" style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd, 'large')).')"></div>';
                if($style == 1) {
                $list .='</a>';
                }

                $list .='

                        <div class="granted-project-hover">
                            <div class="granted-project-inner">';

                if($style == 1) {
                    $list .='<h3><a href="'.esc_url(get_permalink()).'">'.esc_html(get_the_title($idd)).'</a></h3>';
                } else {
                    $list .='<h3>'.esc_html(get_the_title($idd)).'</h3>';
                }

                $list .='
                                <p>'.esc_html($project_assigned_catname_list).'</p>
                            </div>
                        </div>';

                if($style == 2 OR $style == 3) {
                $list .='</a>';
                } 

                $list .='
                    </div>    
                ';       
            }
        
        
        
        endwhile;
        wp_reset_query(); 
    }
 
    wp_die($list);
    
    
}



function granted_projects_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '12',
        'columns' => '4',
        'style' => '1',
        'filter_style' => '1',
        'filter' => '1',
        'button_text' => esc_html__('Load more', 'granted-toolkit'),
    ), $atts) );

    $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'project') );
    
    
    $a_little_sum = $count + $count;
    $total_found_posts = $q->found_posts;
    $total_loaded = $a_little_sum - $count;
    
    if($columns == 1) {
        $project_column_width = 'col-md-12';
    } elseif($columns == 3) {
        $project_column_width = 'col-md-4 col-sm-6';
    } elseif($columns == 4) {
        $project_column_width = 'col-md-3 col-sm-6';
    } else {
        $project_column_width = 'col-sm-6';
    }
    
    $project_no = 0;
    
    $list = '';
    
  
    
    if($filter == 2) {
        $projects_categories = get_terms( 'project_cat' );
        
        if ( ! empty( $projects_categories ) && ! is_wp_error( $projects_categories ) ){
            $list .= '
            <script>
                jQuery(document).ready(function($){
                    
                    $(".granted-project-categories li").click(function(){ 

                      $(".granted-project-categories li").removeClass("active");
                      $(this).addClass("active");        

                        var selector = $(this).attr("data-filter"); 
                        $(".granted-all-projects").isotope({ 
                            filter: selector, 
                            animationOptions: { 
                                duration: 750, 
                                easing: "linear", 
                                queue: false, 
                            } 
                        });
                        
                        $(".load-more-projects-wrap").hide();
                    });
                    $("#granted-all-projects-filter").click(function(){
                        $(".load-more-projects-wrap").show();
                    }); 
                    
                    
                });
                
                jQuery(window).load(function(){
                    jQuery(".granted-all-projects").isotope({
                        itemSelector: ".single-granted-project-wrap",
                        layoutMode: "masonry",
                    });
                });                
            </script>
            <div class="row"><div class="col-md-12"><ul class="granted-project-categories granted-project-category-style-'.esc_attr($filter_style).'"><li id="granted-all-projects-filter" class="active" data-filter="*">'.esc_html__('All', 'granted-toolkit').'</li>';
            foreach ( $projects_categories as $category ) {
                $list .= '<li data-filter=".' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</li>';
            }
            $list .= '</ul></div></div>';
        }        
    }    
    
    


    
    $list .= ' 
    <script>
        (function ($) {
            "use strict";

            jQuery(window).load(function(){

                jQuery(".granted-all-projects").masonry({ 
                    
                });

            });

        }(jQuery));
    </script>
    <div class="all-projects-wrapper granted-project-style-'.esc_attr($style).' granted-project-column-'.esc_attr($columns).'">
    <div class="row granted-all-projects">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $post_content = get_the_excerpt();
        $project_no++;
    
        
        if($columns == 2) {
            $project_cw_varriation = 'col-sm-6';
        } elseif($columns == 4) {
            $project_cw_varriation = 'col-md-3 col-sm-6';
        } else {
            $project_cw_varriation = $project_column_width;  
        }
    
        if($filter == 2) {

            $project_assigned_cat = get_the_terms( $idd, 'project_cat' );

            if ( $project_assigned_cat && ! is_wp_error( $project_assigned_cat ) ) { 

                $project_assigned_cat_array = array();

                foreach ( $project_assigned_cat as $cat ) {
                    $project_assigned_cat_array[] = $cat->slug;
                }

                $project_assigned_cat_list = join( " ", $project_assigned_cat_array ); 
            }
        } else {
            $project_assigned_cat_list = '';
        }    

        
        $project_assigned_catname = get_the_terms( $idd, 'project_cat' );
        $project_assigned_catname_array = array();

        if( $project_assigned_catname && ! is_wp_error( $project_assigned_catname ) ) {
        foreach ( $project_assigned_catname as $catname ) {
            $project_assigned_catname_array[] = $catname->name;
        }

        $project_assigned_catname_list = join( ", ", $project_assigned_catname_array ); 
        } else {
            $project_assigned_catname_list = '';
        }

        $list .= '
            <div class="single-granted-project-wrap '.esc_attr($project_cw_varriation).' '.esc_attr($project_assigned_cat_list).' granted-project-no-'.esc_attr($project_no).'">
                <a href="'.esc_url(get_permalink()).'" class="project-thumbnail-wrap">
                    <span class="project-thumb-loading"><i class="fa fa-cog fa-spin"></i> '.esc_html__('thumbnail loading', 'granted-toolkit').'</span>
                    
                    <span class="project-hover-link"><i class="fa fa-link"></i></span>
                    
                    <div class="granted-project-thumb" style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd, 'large')).')"></div>';
        if($style == 1) {
        $list .='</a>';
        }
    
        $list .='
                
                <div class="granted-project-hover">
                    <div class="granted-project-inner">';
    
        if($style == 1) {
            $list .='<h3><a href="'.esc_url(get_permalink()).'">'.esc_html(get_the_title($idd)).'</a></h3>';
        } else {
            $list .='<h3>'.esc_html(get_the_title($idd)).'</h3>';
        }
            
        $list .='
                        <p>'.esc_html($project_assigned_catname_list).'</p>
                    </div>
                </div>';
    
        if($style == 2 OR $style == 3) {
        $list .='</a>';
        } 
    
        $list .='
            </div>    
        ';
    endwhile;
    

    
    $list.= '</div></div>';
    
    if($count == -1 OR $total_found_posts < $count) {} else {
    $list .='
    
    
                        <script>
                        jQuery(document).ready(function($){
                            $(".loadmore-project-btn").click(function(){
                                $.ajax({
                                    type: \'POST\',
                                    url: "'.esc_url(site_url()).'/wp-admin/admin-ajax.php",
                                    dataType: \'html\',
                                    data: {
                                        count: $(this).attr("data-count"),
                                        columns: $(this).attr("data-columns"),
                                        style: $(this).attr("data-style"),
                                        filter: $(this).attr("data-filter"),
                                        static_count: $(this).attr("data-static-count"),
                                        total_loaded: $(this).attr("data-total-loaded"),
                                        action: \'load_more_projects\',
                                        nonce: $(this).data(\'nonce\')
                                    },
                                    beforeSend: function(data) {
                                        $("#load-next-projects-message").append("<div class=\'projectmore-loading-text\'><div class=\'preloader2\'><span></span><span></span><span></span><span></span><span></span></div></div>");
                                        $(".loadmore-project-btn").hide();
                                    },
                                    success: function(data, result){
                                        if( result != \'error\' ) {
                                            $(".granted-all-projects").append(data);
                                            
                                            var $content = $(".granted-all-projects");
                                            $content.masonry("reloadItems");
                                            $content.masonry("layout");
                                            
                                            $(".granted-all-projects").isotope( \'reloadItems\' ).isotope();
                                            
                                            var posts_per_page = '.esc_attr($count).';
                                            var final_count = parseInt($(".loadmore-project-btn").attr("data-count")) + parseInt(posts_per_page);
                                            
                                            var total_found_posts = parseInt('.esc_attr($total_found_posts).');
                                            $(".loadmore-project-btn").removeAttr("data-count");
                                            $(".loadmore-project-btn").attr("data-count", final_count);
                                            
                                            
                                            
                                            var total_loaded_count = parseInt($(".loadmore-project-btn").attr("data-count")) - parseInt(posts_per_page);
                                            
                                            $(".loadmore-project-btn").removeAttr("data-total-loaded");
                                            $(".loadmore-project-btn").attr("data-total-loaded", total_loaded_count);
                                            $("#load-next-projects-message").empty();
                                            $(".loadmore-project-btn").show();

                                            if ( parseInt($(".loadmore-project-btn").attr("data-total-loaded")) > total_found_posts) {
                                                $("#load-next-projects-message").append("'.esc_html__('No more projects available', 'granted-toolkit').'");
                                                $(".load-more-projects-wrap, #load-next-projects-message").fadeOut();
                                                $(".loadmore-project-btn").hide();
                                            }
                                        }
                                    }
                                }); 
                            });
                        });
                        </script>     
    
    <div id="load-next-projects-message"></div>
    <p class="load-more-projects-wrap"><span data-nonce="'.wp_create_nonce('load_more_projects_nonce').'" data-count="'.esc_attr($a_little_sum).'" data-static-count="'.esc_attr($count).'" data-style="'.esc_attr($style).'" data-filter="'.esc_attr($filter).'" data-columns="'.esc_attr($columns).'" data-total-loaded="'.esc_attr($total_loaded).'" class="loadmore-project-btn loadmore-project-style-'.esc_attr($style).'"><span>'.esc_attr($button_text).'</span></span></p>
    ';
    }
    wp_reset_query();
        
    return $list;
}
add_shortcode('granted_projects', 'granted_projects_shortcode');