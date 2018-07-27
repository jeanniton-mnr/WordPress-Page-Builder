<?php

$granted_body_font_get = cs_get_option('granted_body_font');
$granted_heading_font_get = cs_get_option('granted_headding_font');

function granted_champtheme_body_gf_url() {
    $font_url = '';
    $granted_body_font_get = cs_get_option('granted_body_font');
    
    if(!empty($granted_body_font_get)) {
        $granted_body_font_get = cs_get_option('granted_body_font');
    } else {
        $granted_body_font_get = array();
    }
    
    
    if(array_key_exists('family', $granted_body_font_get)) {
        $granted_body_font_get_family = $granted_body_font_get['family'];
    } else {
        $granted_body_font_get_family = 'Montserrat';
    }
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'granted-champtheme' ) ) {
        $font_url = add_query_arg( 'family', urlencode( ''.$granted_body_font_get_family.':100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,900,900i&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

if($granted_heading_font_get['family'] == $granted_body_font_get['family']) {} else {
    function granted_champtheme_heading_gf_url() {
        $font_url = '';
        $granted_heading_font_get = cs_get_option('granted_headding_font');
        
        
        if(!empty($granted_body_font_get)) {
            $granted_heading_font_get = cs_get_option('granted_headding_font');
        } else {
            $granted_heading_font_get = array();
        }
        
        if(array_key_exists('family', $granted_heading_font_get)) {
            $granted_heading_font_get_family = $granted_heading_font_get['family'];
        } else {
            $granted_heading_font_get_family = 'Montserrat';
        }
        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'granted-champtheme' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''.$granted_heading_font_get_family.':300,300i,400,400i,700,700i,900,900i&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }    
}

function granted_champtheme_options_gf() {
    wp_enqueue_style( 'granted-champtheme-custom-google-fonts', granted_champtheme_body_gf_url(), array(), '1.0.0' );
    
    $granted_body_font_get = cs_get_option('granted_body_font');
    $granted_heading_font_get = cs_get_option('granted_headding_font');
    if($granted_heading_font_get['family'] == $granted_body_font_get['family']) {} else {
        wp_enqueue_style( 'granted-champtheme-google-heading-fonts', granted_champtheme_heading_gf_url(), array(), '1.0.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'granted_champtheme_options_gf' );    

if ( ! function_exists( 'granted_champtheme_color_theme' ) ) :

	function granted_champtheme_color_theme() {

		
		$granted_body_font = cs_get_option('granted_body_font');
		$granted_body_font_size = cs_get_option('granted_body_font_size');
		$granted_body_line_height = cs_get_option('granted_body_line_height');
		$granted_headding_font = cs_get_option('granted_headding_font');
		$granted_theme_color = cs_get_option('granted_theme_color');
		$footer_bg_color = cs_get_option('footer_bg_color');
		$footer_color = cs_get_option('footer_color');
		$secondary_btn_bg = cs_get_option('secondary_btn_bg');
		$secondary_btn_color = cs_get_option('secondary_btn_color');
        
        wp_enqueue_style(
			'granted-custom-style', get_template_directory_uri() . '/assets/css/custom-style.css'
		);
        
        $custom_css = "";
        
        if(!empty($granted_body_font)) {
            $granted_body_font = cs_get_option('granted_body_font');
        } else {
            $granted_body_font = array();
        }
        
        if(array_key_exists('family', $granted_body_font)) {
            $granted_body_font_family = $granted_body_font['family'];
        } else {
            $granted_body_font_family = 'Montserrat';
        }
        
        if(array_key_exists('variant', $granted_body_font)) {
            $granted_body_font_size = $granted_body_font['variant'];
        } else {
            $granted_body_font_size = '300';
        }
        
        if(!empty($granted_heading_font)) {
            $granted_heading_font = cs_get_option('granted_heading_font');
        } else {
            $granted_heading_font = array();
        }
        
        if(array_key_exists('family', $granted_heading_font)) {
            $granted_heading_font_family = $granted_heading_font['family'];
        } else {
            $granted_heading_font_family = 'Montserrat';
        }
        
        if(array_key_exists('variant', $granted_heading_font)) {
            $granted_heading_font_size = $granted_heading_font['variant'];
        } else {
            $granted_heading_font_size = '700';
        }
		
		$custom_css .= "
            body, .mainmenu-area {
                font-family: {$granted_body_font_family};
                font-weight: {$granted_body_font_size};
            }
        ";

		if (!empty($granted_body_font_size)) {
			$custom_css .= "
				body {
					font-size: {$granted_body_font_size};
				}
			";
		}

		if (!empty($granted_body_line_height)) {
			$custom_css .= "
				body {
					line-height: {$granted_body_line_height};
				}
			";
		}

		$custom_css .= "
            h1, h2, h3, h4, h5, h6 {
                font-family: {$granted_heading_font_family};
                font-weight: {$granted_heading_font_size};
            }
        ";
        
        if(cs_get_option('enable_boxed') == true) {
            $body_background_img = cs_get_option('body_background_img');
            $body_background_img_process = wp_get_attachment_image_src(cs_get_option('body_background_img'), 'full');
            $body_background_attachment = cs_get_option('body_background_attachment');
            
            if(!empty($body_background_img)) {
                $custom_css .="
                    body {
                        background-image:url($body_background_img_process[0]);
                    }
                ";
            }
            if(!empty($body_background_attachment)) {
                $custom_css .="
                    body {
                        background-attachment: {$body_background_attachment};
                    }
                ";
            }
        }
        
        

		if (!empty($secondary_btn_bg)) {
			$custom_css .= "
				.granted-slide-buttons a.granted-btn.filled-btn, .granted-btn.cta-btn  {
					background-color: {$secondary_btn_bg};
				}
				.granted-slide-buttons a.granted-btn.filled-btn, .granted-btn.cta-btn, .granted-video-thumbnail span i.fa  {
					border-color: {$secondary_btn_bg};
				}
				.granted-video-thumbnail span i.fa  {
					color: {$secondary_btn_bg};
				}
			";
		}

		if (!empty($secondary_btn_color)) {
			$custom_css .= "
				.granted-slide-buttons a.granted-btn.filled-btn, .granted-btn.cta-btn  {
					color: {$secondary_btn_color};
				}
			";
		}
		if (!empty($footer_bg_color)) {
			$custom_css .= "
				.site-footer  {
					background-color: {$footer_bg_color};
				}
			";
		}

		if (!empty($footer_color)) {
			$custom_css .= "
				.footer-top-widgets, .footer-top-widgets a {
					color: {$footer_color};
				}
			";
		}
        
        
        
        if (!empty($granted_theme_color)) {
			$custom_css .= "
                .granted-btn,.vc_row.colored-overlay::after,.widget-title::after, .widgettitle::after, .about-box h3::after,ul.granted-team-social-link li a:hover,.service-quote,.default-bg,.spinner > div,.quote_form,.search-form input[type=\"submit\"],.comment-form p > input[type=\"submit\"], .single-granted-slide-item::after, .granted-section-title.granted-section-title-3 h2::after, .granted-breadcroumb-area:after, .granted-breadcroumb-area, .navigation.posts-navigation .nav-links a, input[type=\"submit\"], .page-links a{
                    background-color: {$granted_theme_color};
                }
			";
			$custom_css .= "
                .vc_custom_1487495755685,
                .vc_custom_1486896043736{
                    background-color: {$granted_theme_color}!important;
                }
			";
			$custom_css .= "
                .granted-btn,ul.granted-team-social-link li a,.granted-btn:hover,.loadmore-project-btn, .granted-team-img::after, .search-form input[type=\"submit\"]{
                    border-color: {$granted_theme_color};
                }
			";
			$custom_css .= "
                .granted-slide-text h1 strong,a,.granted-section-title h2 span,.granted-single-post-block a.post-block-readmore,ul.granted-team-social-link li a,.button-3:hover,.vc_wp_custommenu #menu-service-menu li a:hover, .service-quote input[type=\"submit\"], .granted-btn:hover,.widget a:hover, .widget li:hover,.loadmore-project-btn,.comments-area .edit-link a,article.post a.granted-btn:hover, .mainmenu ul li:hover > a, .mainmenu li.current_page_item > a{
                    color: {$granted_theme_color};
                }
			";
			$custom_css .= "
                .woocommerce-message {
                    border-top-color: {$granted_theme_color};
                }
			";
		}
        
        

		wp_add_inline_style( 'granted-custom-style', $custom_css );
	}

	add_action( 'wp_enqueue_scripts', 'granted_champtheme_color_theme' );

endif;