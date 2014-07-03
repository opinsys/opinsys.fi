<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Theme's Action Hooks
 *
 *
 * @file           hooks.php
 * @package        WordPress
 * @subpackage     responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/includes/hooks.php
 * @link           http://codex.wordpress.org/Plugin_API/Hooks
 * @since          available since Release 1.1
 */
?>
<?php

/**
 * Just after opening <body> tag
 *
 * @see header.php
 */
function responsive_container() {
    do_action('responsive_container');
}

/**
 * Just after closing </div><!-- end of #container -->
 *
 * @see footer.php
 */
function responsive_container_end() {
    do_action('responsive_container_end');
}

/**
 * Just after opening <div id="container">
 *
 * @see header.php
 */
function responsive_header() {
    do_action('responsive_header');
}

/**
 * Just after opening <div id="header">
 *
 * @see header.php
 */
function responsive_in_header() {
    do_action('responsive_in_header');
}

/**
 * Just after closing </div><!-- end of #header -->
 *
 * @see header.php
 */
function responsive_header_end() {
    do_action('responsive_header_end');
}

/**
 * Just before opening <div id="wrapper">
 *
 * @see header.php
 */
function responsive_wrapper() {
    do_action('responsive_wrapper');
}

/**
 * Just after opening <div id="wrapper">
 *
 * @see header.php
 */
function responsive_in_wrapper() {
    do_action('responsive_in_wrapper');
}

/**
 * Just after closing </div><!-- end of #wrapper -->
 *
 * @see header.php
 */
function responsive_wrapper_end() {
    do_action('responsive_wrapper_end');
}

/**
 * Just before opening <div id="widgets">
 *
 * @see sidebar.php
 */
function responsive_widgets() {
    do_action('responsive_widgets');
}

/**
 * Just after closing </div><!-- end of #widgets -->
 *
 * @see sidebar.php
 */
function responsive_widgets_end() {
    do_action('responsive_widgets_end');
}

/**
 * Theme Options
 *
 * @see theme-options.php
 */
function responsive_theme_options() {
    do_action('responsive_theme_options');
}

/*
* Custom hooks
*/

// Load css
add_action('wp_head', 'add_css', 4);

// Add css
function add_css(){
  wp_enqueue_style('opinsys-responsive-style', get_stylesheet_uri(), false, '1.0', 'all');
}
// Add Facebook script
add_action('add_like_button_script', 'add_like_button_script', 1);
function add_like_button_script(){
  echo '
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fi_FI/all.js#xfbml=1&appId=541746489212041";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, "script", "facebook-jssdk"));</script>';
}

// Add Twitter script
add_action('add_twitter_script', 'add_twitter_script', 1);
function add_twitter_script(){
    echo "<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
  }

// Add custom excerpt function
add_action('get_excerpt_by_content', 'get_excerpt_by_content', 1, 1);
function get_excerpt_by_content($post_content){
  $the_excerpt = $post_content; //Gets post_content to be used as a basis for the excerpt
  $excerpt_length = 35; //Sets excerpt length by word count
  $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
  $words = explode(' ', $the_excerpt, $excerpt_length + 1);

  if(count($words) > $excerpt_length) :
      array_pop($words);
      array_push($words, '…');
      $the_excerpt = implode(' ', $words);
  endif;

  $the_excerpt = '<p>' . $the_excerpt . '</p>';
  echo $the_excerpt;
}
?>