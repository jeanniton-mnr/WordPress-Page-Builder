<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package granted_champtheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php 
$granted_logo_text = cs_get_option('granted_logo_text');   
$granted_logo_regular = cs_get_option('granted_logo');   
$granted_logo_regular_array = wp_get_attachment_image_src($granted_logo_regular, 'medium'); 
$site_preloader = cs_get_option('enable_preloader');
$box_layout = cs_get_option('enable_boxed');
    
wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

<?php if($site_preloader != false) { ?>

<div class="preloader_wrap">
     <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
</div>

<?php } ?>

<div id="page" class="site <?php if($box_layout == true){ echo 'granted-boxed-layout'; } ?>">
   
    <?php
        $header_top = cs_get_option('header_top');
        $header_social = cs_get_option('social_icons');
        $header_text = cs_get_option('header_text');
    ?>
    <?php if($header_top != false) { ?>
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 top_info">
                        <?php 
                            if(!empty($header_text)){
                                foreach($header_text as $header_info){ 
                                    $title = $header_info['header_icon'];
                                    $info = $header_info['header_txt'];
                        ?>
                                    <span><i class="fa fa-<?php echo esc_attr($title); ?>"></i> <?php echo esc_html($info); ?></span>
                                <?php }
                            }
                        ?>
                    </div>
                    <div class="col-sm-6 text-right top_social">
                        <?php 
                            if(!empty($header_social)){
                                foreach($header_social as $social){ 
                                    $title = $social['title'];
                                    $url = $social['url'];
                        ?>
                                    <a href="<?php echo esc_url($url); ?>" class="fa fa-<?php echo esc_attr($title); ?>" target="_black"></a>
                                <?php }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>



    <div class="header-area">
        <div class="container">
            <div class="row">

                <div class="col-md-2 logo_col col-sm-3">
                    <div class="logo">
                        <h1 class="site-title">
                            <?php if(cs_get_option('text_logo') != true) :
                                ?><a class="image-logo" href="<?php echo esc_url( home_url('/') ); ?>"> <?php
                                    if(!empty($granted_logo_regular)) : ?>
                                        <img src="<?php echo esc_url($granted_logo_regular_array[0]); ?>" alt="<?php echo esc_html( bloginfo('title') ); ?>">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php echo esc_html( bloginfo('title') ); ?>">
                                    <?php endif;
                                ?></a><?php
                            else :
                                ?><a class="text-logo" href="<?php echo esc_url( home_url('/') ); ?>"> <?php
                                    if(!empty($granted_logo_text)) : ?>
                                        <?php echo esc_html( $granted_logo_text ); ?>
                                    <?php else : ?>
                                        <?php echo esc_html( bloginfo('title') ); ?>
                                    <?php endif;
                                ?></a><?php
                            endif; ?>
                        </h1>
                    </div>
                </div>

                
                <div class="col-md-10 menu_col col-sm-9">
                    <div class="mainmenu">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
                </div>
            </div>


        </div>
    </div>