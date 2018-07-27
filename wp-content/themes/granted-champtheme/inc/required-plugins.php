<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'granted_champtheme_register_required_plugins' );


function granted_champtheme_register_required_plugins() {

	$plugins = array(
		array(
			'name'      			=> esc_html__('Contact Form 7', 'granted-champtheme'),
			'slug'      			=> 'contact-form-7',
			'version'				=> '4.7',
			'required'     		=> false
		),
		array(
			'name'         		=> esc_html__('One Click Demo Import', 'granted-champtheme'),
			'slug'         		=> 'one-click-demo-import',
			'version'				=> '2.2.0',
			'required'     		=> false,
		),
		array(
			'name'         		=> esc_html__('Breadcrumb NavXT', 'granted-champtheme'),
			'slug'         		=> 'breadcrumb-navxt',
			'version'				=> '5.6.0',
			'required'     		=> true,
		),
		array(
			'name'      			=> esc_html__('WPBakery Visual Composer', 'granted-champtheme'),
			'slug'      			=> 'js_composer',
			'source'					=> get_template_directory(). '/inc/plugins/js_composer.zip',
			'version'				=> '5.1',
			'required'     		=> true
		),
		array(
			'name'      			=> esc_html__('granted Toolkit', 'granted-champtheme'),
			'slug'      			=> 'granted-toolkit',
			'source'					=> get_template_directory(). '/inc/plugins/granted-toolkit.zip',
			'version'				=> '1.0',
			'required'     		=> true
		),

	);
    
	$config = array(
		'id'           => 'granted-champtheme',
		'default_path' => '',
		'menu'         => 'granted-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '', 
	);

	tgmpa( $plugins, $config );
}