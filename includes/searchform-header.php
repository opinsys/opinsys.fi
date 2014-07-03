<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Search Form Template
 *
 *
 * @file           searchform-header.php
 * @package        Responsive Opinsys 2.0
 * @author         Opinsys Oy
 * @copyright      2012 Opinsys Oy
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive-opinsys/searchform-header.php
 * @link           http://codex.wordpress.org/Function_Reference/get_search_form
 * @since          available since Release 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e('search here &hellip;', 'responsive'); ?>" />
	</form>