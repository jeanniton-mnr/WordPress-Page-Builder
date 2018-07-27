<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package granted_champtheme
 */

get_header(); ?>
   
    <div class="granted-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_archive_title(); ?></h2>
                    <?php if (function_exists('bcn_display')) bcn_display(); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="granted-internal-area granted-v-composer-disabled">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    if ( have_posts() ) : ?>

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_format() );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>            
                </div>
                <?php get_sidebar(); ?>
            </div>            
        </div>
    </div>

<?php
get_footer();
