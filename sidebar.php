<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Main Widget Template
 *
 *
 * @file           sidebar.php
 * @package        Responsive Opinsys 2.0
 * @author         Opinsys Oy
 * @copyright      2014 Opinsys Oy
 * @license        license.txt
 * @version        2.0
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<div id="widgets" class="grid col-300 fit">
  <?php responsive_widgets(); // above widgets hook ?>
  <?php if (!dynamic_sidebar('main-sidebar')) : ?>
  <?php endif; ?>

  <?php responsive_widgets_end(); // after widgets hook ?>
</div><!-- end of #widgets -->
