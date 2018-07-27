<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package granted_champtheme
 */

?>


	<footer id="colophon" class="site-footer">
        <?php if(is_active_sidebar('footer-widgets')) : ?>
        <div class="footer-top-widgets">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>	
        	
		<!--
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <?php 
                                $footer_right_txt = cs_get_option('copyright_text');
                                if($footer_right_txt && !empty($footer_right_txt)){
                                    echo esc_html($footer_right_txt);
                                }else{
                                    esc_html_e('Designed &amp; developed by champtheme', 'granted-champtheme');
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
