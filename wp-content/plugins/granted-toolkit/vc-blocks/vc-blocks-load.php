<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Class started
class grantedVCExtendAddonClass {

    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'grantedIntegrateWithVC' ) );
    }
 
    public function grantedIntegrateWithVC() {
        // Checks if Visual composer is not installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'grantedShowVcVersionNotice' ));
            return;
        }
 

        // visual composer addons.
        
        include granted_ACC_PATH . '/vc-blocks/vc-section-title.php';
        include granted_ACC_PATH . '/vc-blocks/vc-video-popup.php';
        include granted_ACC_PATH . '/vc-blocks/vc-cta.php';
        include granted_ACC_PATH . '/vc-blocks/vc-logo-carousel.php';
        include granted_ACC_PATH . '/vc-blocks/vc-posts.php';
        include granted_ACC_PATH . '/vc-blocks/vc-projects.php';
        include granted_ACC_PATH . '/vc-blocks/vc-service-box.php';
        include granted_ACC_PATH . '/vc-blocks/vc-slides.php';
        include granted_ACC_PATH . '/vc-blocks/vc-team.php';
        include granted_ACC_PATH . '/vc-blocks/vc-testimonials.php';
        include granted_ACC_PATH . '/vc-blocks/vc-iconic-btn.php';
        include granted_ACC_PATH . '/vc-blocks/vc-iconic-info.php';
        include granted_ACC_PATH . '/vc-blocks/vc-template-loader.php';

    }

    public function grantedShowVcVersionNotice() {
        $theme_data = wp_get_theme();
        echo '
        <div class="notice notice-warning">
          <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.esc_url(site_url()).'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'granted-toolkit'), $theme_data->get('Name')).'</p>
        </div>';
    }
}
// Finally initialize code 
new grantedVCExtendAddonClass();