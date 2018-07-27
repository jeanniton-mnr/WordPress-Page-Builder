<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package granted_champtheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <?php if(has_post_thumbnail() && get_post_type() != 'project') : ?>
        <div class="granted-post-featured-content">
           
            <?php if(!is_singular()){ echo '<a href="'.get_the_permalink().'">';} ?>
                <?php the_post_thumbnail('granted-champtheme-thumb'); ?>
            <?php if(!is_singular()){ echo '</a>';} ?>
        </div>
        <?php endif; ?>
		<?php

		if ( 'post' === get_post_type() ) :  if(!is_singular()): ?>
		       <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		   <?php endif; ?>
		<div class="entry-meta">
			<?php granted_champtheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php 
            if(get_post_type() == 'project') : 
            if(get_post_meta($post->ID, 'granted_project_meta', true)) {
                $project_meta= get_post_meta($post->ID, 'granted_project_meta', true); 
            } else {
                $project_meta = array();
            }
        
            if(array_key_exists('info', $project_meta)) {
                $infos = $project_meta['info'];
            } else {
                $infos = '';
            }
        ?>
	    <div class="row">
	        <div class="<?php if(!empty($infos)) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?>">
                <?php if(has_post_thumbnail()) : ?>
                <div class="project_image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <?php endif; ?>
	            <?php the_content(); ?>
	        </div>
	        <?php if(!empty($infos)) : ?>
	        <div class="col-md-4">
	            
	            <ul class="project-detail-meta">
                    <?php foreach($infos as $info) : ?>
	                <li><strong><?php echo esc_html($info['title']); ?></strong> <span> <?php echo esc_html($info['info']); ?></span></li>
	                <?php endforeach; ?>
	            </ul>
	            
	            <?php dynamic_sidebar('project-sidebar'); ?>
	        </div>
	        <?php endif; ?>
	    </div>
	    <?php else : ?>
		<?php
            if(is_single()) {
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'granted-champtheme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
            
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'granted-champtheme' ),
				'after'  => '</div>',
			) );
            } else {
                the_excerpt();
                echo '<div style="clear:both"></div><a href="' . esc_url( get_permalink() ) . '" class="granted-btn">'.esc_html__('Lire suite', 'granted-champtheme').'</a>';
            }
		?>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php granted_champtheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
