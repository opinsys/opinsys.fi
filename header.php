<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive Opinsys 2.0
 * @author         Opinsys Oy
 * @copyright      2012 Opinsys Oy
 * @license        license.txt
 * @version        2.0
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php add_theme_support( 'automatic-feed-links' ); ?>
  <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/ie8-and-down-fix.css" />
  <![endif]-->
  <!--[if lte IE 7]>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/ie7-and-down-fix.css" />
  <![endif]-->
  <?php wp_head(); ?>
  <?php
    $theme_options = get_option('responsive_theme_options');
    // Add Google Analytics if it's ID is set from admin panel
    if (!empty($theme_options['google_analytics_id'])){
      do_action('add_google_analytics', $theme_options['google_analytics_id']);
    }

  ?>

</head>

<body <?php body_class(); ?>>

<?php //responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

    <?php responsive_header(); // before header hook ?>
  <div id="header">
    <?php if (is_multisite()) : ?>
      <div id="language">
        <ul>
          <li><a href="<?php echo get_blog_option( 1 ,'siteurl');?>/">Suomi</a></li>
          <li><a href="<?php echo get_blog_option( 3 ,'siteurl');?>/">Svenska</a></li>
          <li><a href="<?php echo get_blog_option( 2 ,'siteurl');?>/">English</a></li>
        </ul>
      </div>
    <?php endif; ?>
        <?php if (has_nav_menu('top-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'top-menu',
					'theme_location'  => 'top-menu')
					);
				?>
        <?php } ?>

    <?php responsive_in_header(); // header hook ?>

  	<?php if ( get_header_image() != '' ) : ?>
      <div id="logo">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php header_image(); ?>" width="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> width;} else { echo HEADER_IMAGE_WIDTH;} ?>" height="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> height;} else { echo HEADER_IMAGE_HEIGHT;} ?>" alt="<?php bloginfo('name'); ?>" />
          </a>
      </div>

    <?php endif; ?>

    <?php if ( !get_header_image() ) : ?>
      <div id="logo">
          <span class="site-name">
            <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
          </span>
          <span class="site-description"><?php bloginfo('description'); ?></span>
      </div><!-- end of #logo -->

    <?php endif; ?>

    <?php get_sidebar('top'); ?>
    	<nav class="mainmenu clearfix">
  		<?php wp_nav_menu(array(
		      'container'       => '',
          'theme_location'  => 'header-menu')
  			);
  		?>
      <?php if (has_nav_menu('sub-header-menu', 'responsive')) : ?>
        <?php wp_nav_menu(array(
            'container'       => '',
            'menu_class'      => 'sub-header-menu',
            'theme_location'  => 'sub-header-menu')
  			 );
  		  ?>
        <?php endif; ?>
      <div class="search-form-header">
        <?php get_search_form(); ?>
     </div>
    </nav>
  </div><!-- end of #header -->
    <?php responsive_header_end(); // after header hook ?>

	<?php responsive_wrapper(); // before wrapper ?>
  <div id="wrapper" class="clearfix">
  <?php responsive_in_wrapper(); // wrapper hook ?>