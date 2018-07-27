<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package granted_champtheme
 */
$vc_enabled = get_post_meta($post->ID, '_wpb_vc_js_status', true);
if($vc_enabled != 'true') {
    $vc_check_class = 'granted-v-composer-disabled';
} else {
    $vc_check_class = '';
}
get_header(); ?>

    <div<?php if(has_post_thumbnail()) : ?> style="background-image:url(<?php echo esc_url(the_post_thumbnail_url('large')); ?>)"<?php endif; ?> class="granted-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_title(); ?></h2>
                    <?php if('project' === get_post_type()) : ?>
                    <div class="grantedcrumbs-area">
                        <div id="grantedcrumbs">
                            <a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo esc_html('Home', 'granted-champtheme'); ?></a> &nbsp; / &nbsp; <span class="current"><?php the_title(); ?></span>
                        </div>
                    </div>                    
                    <?php else : ?>
                    <?php if (function_exists('bcn_display')) bcn_display(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>   
    
    <div class="granted-internal-area <?php echo esc_attr($vc_check_class); ?>">
        <div class="container">
            <div class="row">
                <div class="<?php if('project' === get_post_type()) : ?>col-md-12<?php else : ?>col-md-8<?php endif; ?>">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                    
                        if('project' === get_post_type()) {} else {
                         
                            if(cs_get_option('blog_post_nav') != false){
                                the_post_navigation();
                            }

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        }

                    endwhile; // End of the loop.
                    ?>       
                </div>
                <?php if('project' === get_post_type()) {} else { get_sidebar(); } ?>
            </div> 
            
            <?php if('project' === get_post_type()) : ?>
            <div class="granted-related-projects">
                <h4>Related projects</h4>
                <div class="row">
                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => 4, 'post_type'=> 'project', 'post__not_in' => array(get_the_ID()));
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); 
                    $project_assigned_catname = get_the_terms( get_the_ID(), 'project_cat' );
                    $project_assigned_catname_array = array();

                    if( $project_assigned_catname && ! is_wp_error( $project_assigned_catname ) ) {
                    foreach ( $project_assigned_catname as $catname ) {
                        $project_assigned_catname_array[] = $catname->name;
                    }

                    $project_assigned_catname_list = join( ", ", $project_assigned_catname_array ); 
                    } else {
                        $project_assigned_catname_list = '';
                    }
                    
                    ?>
                    
                    <div class="single-granted-project-wrap col-md-3">
                        <a href="<?php the_permalink(); ?>" class="project-thumbnail-wrap">
                            <span class="project-thumb-loading"><i class="fa fa-cog fa-spin"></i> <?php esc_html_e('thumbnail loading', 'granted-champtheme'); ?></span>
                            <div class="granted-project-thumb" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)"></div>
                        </a>

                        <div class="granted-project-hover">
                            <div class="granted-project-inner"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo esc_html($project_assigned_catname_list); ?></p>
                            </div>
                        </div>
                    </div>   
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>           
        </div>
    </div>    

<?php
get_footer();
