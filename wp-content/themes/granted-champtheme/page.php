<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package granted_champtheme
 */
if(get_post_meta($post->ID, 'granted_page_meta', true)) {
    $page_meta = get_post_meta($post->ID, 'granted_page_meta', true); 
} else {
    $page_meta = array();
}
if(array_key_exists('titlebar', $page_meta)) {
    $titlebar = $page_meta['titlebar'];
} else {
    $titlebar = true;
}
$vc_enabled = get_post_meta($post->ID, '_wpb_vc_js_status', true);
if($vc_enabled != 'true') {
    $vc_check_class = 'granted-v-composer-disabled';
} else {
    $vc_check_class = '';
}
get_header(); ?>
   
   
    <?php if($titlebar == true) : ?>
    <div<?php if(has_post_thumbnail()) : ?> style="background-image:url(<?php echo esc_url(the_post_thumbnail_url('large')); ?>)"<?php endif; ?> class="granted-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_title(); ?></h2>
                    <?php if (function_exists('bcn_display')) bcn_display(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="granted-internal-area <?php echo esc_attr($vc_check_class); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>       
                </div>
            </div>            
        </div>
    </div>    

<?php
get_footer();
