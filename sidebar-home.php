<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive Opinsys 2.0
 * @author         Opinsys
 * @copyright      2014 Opinsys Oy
 * @license        license.txt
 * @version        2.0
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>

<div id="widgets" class="home-widgets">
  <div class="grid col-460">
    <?php responsive_widgets(); // above widgets hook ?>
    <div class="widget-wrapper widget_page_in_widget_custom">
      <div class="textwidget">
        <div class="home-widget-wrap">
        <?php
        // Get posts with tag: highlight and add them to homepage
          $highlightPosts = get_posts(['tag' => 'highlight', 'post_status' => 'publish'] );
          if (count($highlightPosts) > 0) : ?>
            <?php
              foreach ($highlightPosts as $key => $value) { ?>
                <a href="<?php echo $value->guid; ?>"><h1><?php echo $value->post_title; ?></h1></a>
                <p><?php do_action('get_excerpt_by_content', $value->post_content);?></p>
                <div class="read-more">
                  <a href="<?php echo $value->guid; ?>"><?php _e('Read more &#8594;', 'responsive');?> </a>
                </div>
              <?php }
             ?>
          <?php
          endif;
          ?>
       </div>
     </div>
    </div>
    <?php if (!dynamic_sidebar('home-widget-1')) : ?>
	 <?php endif; //end of home-widget-1 ?>

    <?php responsive_widgets_end(); // responsive after widgets hook ?>
  </div><!-- end of .col-460 -->

    <div class="grid col-460 fit">
    <?php responsive_widgets(); // responsive above widgets hook ?>

    <div class="widget_page_in_widget_custom">
      <?php
      if (dynamic_sidebar('home-widget-2')) : ?>
      <?php endif; //end of home-widget-2 ?>
    </div> <!-- widget_page_in_widget_custom -->

    <?php responsive_widgets_end(); // after widgets hook ?>
    </div><!-- end of .col-460 -->

</div><!-- end of #widgets -->