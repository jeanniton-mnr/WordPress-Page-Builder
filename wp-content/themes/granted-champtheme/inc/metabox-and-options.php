<?php

function granted_champtheme_cs_shortcode_options( $options ) {
    $options = array();
    return $options;
}
add_filter( 'cs_shortcode_options', 'granted_champtheme_cs_shortcode_options' );

function granted_champtheme_cs_customize_options( $options ) {
    $options = array();
    return $options;
}
add_filter( 'cs_customize_options', 'granted_champtheme_cs_customize_options' );

function granted_champtheme_cs_framework_settings( $settings ) {
  
    $settings = array();    

    $settings           = array(
      'menu_title'      => esc_html__('Theme Options', 'granted-champtheme'),
      'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
      'menu_slug'       => 'granted-theme-options',
      'ajax_save'       => true,
      'show_reset_all'  => true,
      'framework_title' => esc_html__('granted theme options by champtheme', 'granted-champtheme'),
    );    


    return $settings;

}
add_filter( 'cs_framework_settings', 'granted_champtheme_cs_framework_settings' );

function granted_champtheme_cs_framework_options( $options ) {

    $options      = array(); // remove old options
    
    $options[]    = array(
        'name'      => 'header',
        'title'     => esc_html__('Header', 'granted-champtheme'),
        'icon'      => 'fa fa-header',
        'fields'    => array(
            array(
                'id'    => 'header_top',
                'type'  => 'switcher',
                'title' => esc_html__('Enable header top?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to enable header top, select on.', 'granted-champtheme'),
                'default' => true,
            ),
            array(
              'id'              => 'header_text',
              'type'            => 'group',
              'title'           => 'Header Information',
              'button_title'    => 'Add New',
              'dependency'   => array( 'header_top', '==', 'true' ),
              'accordion_title' => 'Header info',
              'fields'          => array(
                array(
                  'id'          => 'header_icon',
                  'type'        => 'text',
                  'title'       => 'Icon',
                  'desc'       => 'Type header fontawesome icon',
                ),
                array(
                  'id'          => 'header_txt',
                  'type'        => 'text',
                  'title'       => 'Header info text',
                ),
              )
            ),
            
            array(
              'id'              => 'social_icons',
              'type'            => 'group',
              'title'           => 'Social Links',
              'button_title'    => 'Add New Social',
              'accordion_title' => 'Add New',
              'fields'          => array(
                array(
                  'id'    => 'title',
                  'type'  => 'text',
                  'title' => 'Icon name',
                  'desc'  => 'ex: "facebook"'
                ),
                array(
                  'id'    => 'url',
                  'type'  => 'text',
                  'title' => 'Link',
                  'desc'  => esc_html__('Type social link', 'granted-champtheme'),
                ),
              ),
            ),

        )
    );
    
    $options[]    = array(
        'name'      => 'granted_logo_favicon',
        'title'     => esc_html__('Logos', 'granted-champtheme'),
        'icon'      => 'fa fa-camera',
        'fields'    => array(
            array(
                'id'    => 'granted_favicon',
                'type'  => 'image',
                'title' => esc_html__('Favicon', 'granted-champtheme'),
                'desc' => esc_html__('Upload favicon image. Favicon image should be square sized image.', 'granted-champtheme'),
            ),
            array(
                'id'    => 'text_logo',
                'type'  => 'switcher',
                'title' => esc_html__('Enable text logo?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to enable text logo, select on.', 'granted-champtheme'),
                'default' => true,
            ),
            array(
                'id'    => 'granted_logo',
                'type'  => 'image',
                'title' => esc_html__('Logo', 'granted-champtheme'),
                'desc' => esc_html__('Upload site logo.', 'granted-champtheme'),
                'dependency'   => array( 'text_logo', '!=', 'true' ),
            ),
            array(
                'id'    => 'granted_logo_text',
                'type'  => 'text',
                'default'  => esc_html__('granted', 'granted-champtheme'),
                'title' => esc_html__('Logo text', 'granted-champtheme'),
                'desc' => esc_html__('Type logo text here.', 'granted-champtheme'),
                'dependency'   => array( 'text_logo', '==', 'true' ),
            )


        )
    );
    
    $options[]    = array(
        'name'      => 'granted_typography',
        'title'     => esc_html__('Typography', 'granted-champtheme'),
        'icon'      => 'fa fa-font',
        'fields'    => array(
            array(
                'id'    => 'granted_body_font',
                'type'  => 'typography',
                'title' => esc_html__('Body font', 'granted-champtheme'),
                'desc' => esc_html__('Select body google font & font weight.', 'granted-champtheme'),
                'default'   => array(
                    'family'  => 'Montserrat',
                    'variant' => '300',
                    'font'    => 'google', // this is helper for output
                ),
            ),
            array(
                'id'    => 'granted_headding_font',
                'type'  => 'typography',
                'title' => esc_html__('Headding font', 'granted-champtheme'),
                'default'   => array(
                    'family'  => 'Montserrat',
                    'variant' => '600',
                    'font'    => 'google', // this is helper for output
                ),
                'desc' => esc_html__('Select headding google font & font weight.', 'granted-champtheme'),
            ),
        )
    );
    
    $options[]    = array(
        'name'      => 'granted_styling',
        'title'     => esc_html__('Styling', 'granted-champtheme'),
        'icon'      => 'fa fa-paint-brush',
        'fields'    => array(
            array(
                'id'    => 'enable_preloader',
                'type'  => 'switcher',
                'default'  => true,
                'title' => esc_html__('Proloader', 'granted-champtheme'),
                'desc' => esc_html__('If you want to enable preloader, select on.', 'granted-champtheme'),
            ),
            array(
                'id'    => 'enable_boxed',
                'type'  => 'switcher',
                'default'  => false,
                'title' => esc_html__('Enable boxedd layout', 'granted-champtheme'),
                'desc' => esc_html__('If you want to enable boxed layout, select on.', 'granted-champtheme'),
            ),
            array(
                'id'    => 'body_background_img',
                'type'  => 'image',
                'title' => esc_html__('Body background image', 'granted-champtheme'),
                'desc' => esc_html__('Upload body background image, If you upload a bigger image, do not forget to select background repeat as cover.', 'granted-champtheme'),
                'dependency'   => array( 'enable_boxed', '==', 'true' ),
            ),
            array(
                'id'    => 'body_background_attachment',
                'type'  => 'select',
                'title' => esc_html__('Body background attachment', 'granted-champtheme'),
                'desc' => esc_html__('Select background attachment.', 'granted-champtheme'),
                'options' => array(
                    'scroll' => esc_html__('Scroll', 'granted-champtheme'),
                    'fixed' => esc_html__('Fixed', 'granted-champtheme')
                ),
                'dependency'   => array( 'enable_boxed', '==', 'true' ),
            ),
            array(
                'id'    => 'granted_theme_color',
                'type'  => 'color_picker',
                'desc'  => esc_html__('Choose theme primary color.', 'granted-champtheme'),
                'title' => esc_html__('Theme color', 'granted-champtheme'),
                'default' => '#1c7af3',
            ),
            array(
                'id'    => 'secondary_btn_bg',
                'type'  => 'color_picker',
                'desc'  => esc_html__('Choose secondary button background color.', 'granted-champtheme'),
                'title' => esc_html__('Secondary button background color', 'granted-champtheme'),
                'default' => '#fedc32',
            ),
            array(
                'id'    => 'secondary_btn_color',
                'type'  => 'color_picker',
                'desc'  => esc_html__('Choose secondary button text color.', 'granted-champtheme'),
                'title' => esc_html__('Secondary button text color', 'granted-champtheme'),
                'default' => '#333',
            ),
        )
    );
    
    
    $options[]    = array(
        'name'      => 'granted_blog_settings',
        'title'     => esc_html__('Blog Settings', 'granted-champtheme'),
        'icon'      => 'fa fa-pencil',
        'fields'    => array(
            array(
                'id'    => 'blog_post_by',
                'type'  => 'switcher',
                'default'  => true,
                'title' => esc_html__('Display post by?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to show posted by name on blog index page and single blog, select on', 'granted-champtheme'),
            ),
            array(
                'id'    => 'blog_post_date',
                'type'  => 'switcher',
                'default'  => true,
                'title' => esc_html__('Display post date?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to show blog post date on blog index page and single blog, select on', 'granted-champtheme'),
            ),
            array(
                'id'    => 'blog_post_comment',
                'type'  => 'switcher',
                'default'  => true,
                'title' => esc_html__('Display comment count?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to show comment count on blog index page, select on', 'granted-champtheme'),
            ),
            array(
                'id'    => 'blog_post_category',
                'type'  => 'switcher',
                'default'  => true,
                'title' => esc_html__('Display posted in categories?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to show blog category on blog index page and single blog, select on', 'granted-champtheme'),
            ),
            array(
                'id'    => 'blog_post_tags',
                'type'  => 'switcher',
                'default'  => true,
                'title' => esc_html__('Display posted in tags?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to show blog tags on blog index page and single blog, select on', 'granted-champtheme'),
            ),
            array(
                'id'    => 'blog_post_nav',
                'type'  => 'switcher',
                'default'  => true,
                'title' => esc_html__('Enable next previous link on single post?', 'granted-champtheme'),
                'desc' => esc_html__('If you want to show next previous links on single blog, select on', 'granted-champtheme'),
            ),
        )
    );
    
    $options[]    = array(
        'name'      => 'granted_footer_settings',
        'title'     => esc_html__('Footer Settings', 'granted-champtheme'),
        'icon'      => 'fa fa-wordpress',
        'fields'    => array(
            array(
                'id'    => 'footer_bg_color',
                'type'  => 'color_picker',
                'title' => esc_html__('Footer bottom background color', 'granted-champtheme'),
                'default' => '#fff',
                'desc' => esc_html__('Select footer copyright area background color', 'granted-champtheme'),
            ),
            array(
                'id'    => 'footer_color',
                'type'  => 'color_picker',
                'title' => esc_html__('Footer copyright color', 'granted-champtheme'),
                'default' => '#7b7b7b',
                'desc' => esc_html__('Select footer copyright area text color', 'granted-champtheme'),
            ),
            array(
                'id'    => 'copyright_text',
                'type'  => 'text',
                'title' => esc_html__('Footer copyright text', 'granted-champtheme'),
                'desc' => esc_html__('Type copyright text here', 'granted-champtheme'),
            )
        )
    );
    
  return $options;

}
add_filter( 'cs_framework_options', 'granted_champtheme_cs_framework_options' );

function granted_champtheme_cs_metabox_options( $options ) {

    $options      = array();

    $options[]    = array(
        'id'        => 'granted_page_meta',
        'title'     => esc_html__('Page Options', 'granted-champtheme'),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'granted_page_meta_1',
                'fields' => array(
                    array(
                        'id'    => 'titlebar',
                        'type'  => 'switcher',
                        'title' => esc_html__('Enable page title bar?', 'granted-champtheme'),
                        'desc' => esc_html__('If you want to display page title bar, select on.', 'granted-champtheme'),
                        'default' => true,
                    )
                )
            )
        )
    );

    $options[]    = array(
        'id'        => 'granted_project_meta',
        'title'     => esc_html__('Project Options', 'granted-champtheme'),
        'post_type' => 'project',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'granted_project_meta_1',
                'fields' => array(
                    array(
                        'id'              => 'info',
                        'type'            => 'group',
                        'title'           => 'Project infos',
                        'button_title'    => 'Add New',
                        'accordion_title' => 'Add New Info',
                        'fields'          => array(
                            array(
                                'id'    => 'title',
                                'type'  => 'text',
                                'title' => 'Title',
                            ),
                            array(
                                'id'    => 'info',
                                'type'  => 'text',
                                'title' => 'Info',
                            ),
                        ),
                    ),


                )
            )
        )
    );

    $options[]    = array(
        'id'        => 'granted_testimonial_meta',
        'title'     => esc_html__('Testimonial Options', 'granted-champtheme'),
        'post_type' => 'testimonial',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'granted_testimonial_meta_1',
                'fields' => array(
                    array(
                        'id'    => 'position',
                        'type'  => 'text',
                        'title' => esc_html__('Author position or address', 'granted-champtheme'),
                        'desc' => esc_html__('Type author position or address. It will display below the author name.', 'granted-champtheme'),
                    )
                )
            )
        )
    );
    
    $options[]    = array(
        'id'        => 'granted_slide_meta',
        'title'     => esc_html__('Slide Options', 'granted-champtheme'),
        'post_type' => 'slide',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'granted_slide_meta_1',
                'fields' => array(
                    array(
                        'id'    => 'buttons',
                        'type'  => 'group',
                        'title'           => esc_html__('Buttons', 'granted-champtheme'),
                        'desc'           => esc_html__('Add slide buttons here.', 'granted-champtheme'),
                        'button_title'    => esc_html__('Add New button', 'granted-champtheme'),
                        'accordion_title' => esc_html__('Add New button', 'granted-champtheme'),
                        'fields'          => array(
                            array(
                                'id'    => 'type',
                                'type'  => 'select',
                                'title' => esc_html__('Button type', 'granted-champtheme'),
                                'desc' => esc_html__('Select button type', 'granted-champtheme'),
                                'default' => '1',
                                'options'  => array(
                                    'filled'  => esc_html__('Filled button', 'granted-champtheme'),
                                    'bordered'   => esc_html__('Bordered button', 'granted-champtheme'),
                                ),
                            ),
                            array(
                                'id'    => 'btn_text',
                                'type'  => 'text',
                                'title' => esc_html__('Button text', 'granted-champtheme'),
                                'desc' => esc_html__('Type button text', 'granted-champtheme'),
                            ),
                            array(
                                'id'    => 'linkto',
                                'type'  => 'select',
                                'title' => esc_html__('Button link to', 'granted-champtheme'),
                                'desc' => esc_html__('Select button link source.', 'granted-champtheme'),
                                'default' => '1',
                                'options'  => array(
                                    '1'  => esc_html__('Page', 'granted-champtheme'),
                                    '2'   => esc_html__('External link', 'granted-champtheme'),
                                ),
                            ),
                            array(
                                'id'    => 'to_page',
                                'type'  => 'select',
                                'options'  => 'page',
                                'title' => esc_html__('Select page', 'granted-champtheme'),
                                'desc' => esc_html__('Select button link to page.', 'granted-champtheme'),
                                'dependency'   => array( 'linkto', '==', '1' ),
                            ),
                            array(
                                'id'    => 'to_external',
                                'type'  => 'text',
                                'title' => esc_html__('Link', 'granted-champtheme'),
                                'desc' => esc_html__('Type button external link', 'granted-champtheme'),
                                'dependency'   => array( 'linkto', '==', '2' ),
                            ),
                            array(
                                'id'    => 'tab',
                                'type'  => 'select',
                                'title' => esc_html__('Links open in', 'granted-champtheme'),
                                'desc' => esc_html__('Select button link behabour.', 'granted-champtheme'),
                                'default' => '_self',
                                'options'  => array(
                                    '_self'  => esc_html__('Same tab', 'granted-champtheme'),
                                    '_blank'   => esc_html__('New tab', 'granted-champtheme'),
                                ),
                            ),
                        )
                    ),
                    array(
                        'id'    => 'enable_video',
                        'type'  => 'switcher',
                        'default'  => true,
                        'title' => esc_html__('Enable video popup?', 'granted-champtheme'),
                        'desc' => esc_html__('Select on if you want to enable video popup in slide.', 'granted-champtheme'),
                    ),
                    array(
                        'id'    => 'video',
                        'type'  => 'text',
                        'title' => esc_html__('Video link', 'granted-champtheme'),
                        'desc' => esc_html__('Type youtube or vimeo video link', 'granted-champtheme'),
                        'dependency'   => array( 'enable_video', '==', 'true' ),
                    ),
                    array(
                        'id'    => 'video_text',
                        'type'  => 'text',
                        'title' => esc_html__('Video poup link text', 'granted-champtheme'),
                        'default' => esc_html__('Watch video', 'granted-champtheme'),
                        'desc' => esc_html__('Type video popup link text', 'granted-champtheme'),
                        'dependency'   => array( 'enable_video', '==', 'true' ),
                    )
                )
            )
        )
    );

    return $options;

}
add_filter( 'cs_metabox_options', 'granted_champtheme_cs_metabox_options' );