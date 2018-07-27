<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package granted_champtheme
 */

get_header(); ?>
    <div class="granted-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php esc_html_e('Search Result', 'granted-champtheme'); ?></h2>
                    <a href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Home', 'granted-champtheme'); ?></a>
                    &nbsp; / &nbsp; 
                    <span class="current"><?php esc_html_e('Search result for: '.get_search_query(), 'granted-champtheme'); ?></span>
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

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );

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
