<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive Opinsys
 * @author         Opinsys Oy
 * @copyright      2012 Opinsys Oy
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    </div><!-- end of #wrapper -->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>
<?php
  do_action('add_like_button_script');
  do_action('add_twitter_script');
?>
<div id="footer" class="clearfix">

    <div id="footer-wrapper">

        <div class="grid col-940">

        <div class="grid col-540">
		<?php if (has_nav_menu('footer-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'footer-menu',
					'theme_location'  => 'footer-menu')
					);
				?>
         <?php } ?>
         </div><!-- end of col-540 -->

         <div class="grid col-380 fit">
         <?php $options = get_option('responsive_theme_options');

            // First let's check if any of this was set

                echo '<ul class="social-icons">';

                if (!empty($options['twitter_uid'])) echo '<li class="twitter-icon"><a href="' . $options['twitter_uid'] . '">'
                    .'<img title="Twitter" src="' . get_stylesheet_directory_uri() . '/icons/twitter-icon.png" width="32" height="32" alt="Twitter">'
                    .'</a></li>';

                if (!empty($options['facebook_uid'])) echo '<li class="facebook-icon"><a href="' . $options['facebook_uid'] . '">'
                    .'<img title="Facebook" src="' . get_stylesheet_directory_uri() . '/icons/facebook-icon.png" width="32" height="32" alt="Facebook">'
                    .'</a></li>';

                if (!empty($options['linkedin_uid'])) echo '<li class="linkedin-icon"><a href="' . $options['linkedin_uid'] . '">'
                    .'<img title="LinkedIn" src="' . get_stylesheet_directory_uri() . '/icons/linkedin-icon.png" width="32" height="32" alt="LinkedIn">'
                    .'</a></li>';

                if (!empty($options['youtube_uid'])) echo '<li class="youtube-icon"><a href="' . $options['youtube_uid'] . '">'
                    .'<img title="YouTube" src="' . get_stylesheet_directory_uri() . '/icons/youtube-icon.png" width="32" height="32" alt="YouTube">'
                    .'</a></li>';

                if (!empty($options['stumble_uid'])) echo '<li class="stumble-upon-icon"><a href="' . $options['stumble_uid'] . '">'
                    .'<img title="StumbleUpon" src="' . get_stylesheet_directory_uri() . '/icons/stumble-upon-icon.png" width="32" height="32" alt="StumbleUpon">'
                    .'</a></li>';

                if (!empty($options['rss_uid'])) echo '<li class="rss-feed-icon"><a href="' . $options['rss_uid'] . '">'
                    .'<img title="RSS Feed" src="' . get_stylesheet_directory_uri() . '/icons/rss-feed-icon.png" width="32" height="32" alt="RSS Feed">'
                    .'</a></li>';

                if (!empty($options['google_plus_uid'])) echo '<li class="google-plus-icon"><a href="' . $options['google_plus_uid'] . '">'
                    .'<img title="Google Plus" src="' . get_stylesheet_directory_uri() . '/icons/googleplus-icon.png" width="32" height="32" alt="Google Plus">'
                    .'</a></li>';

                if (!empty($options['instagram_uid'])) echo '<li class="instagram-icon"><a href="' . $options['instagram_uid'] . '">'
                    .'<img title="Instagram" src="' . get_stylesheet_directory_uri() . '/icons/instagram-icon.png" width="32" height="32" alt="Instagram">'
                    .'</a></li>';

                if (!empty($options['pinterest_uid'])) echo '<li class="pinterest-icon"><a href="' . $options['pinterest_uid'] . '">'
                    .'<img title="Pinteret" src="' . get_stylesheet_directory_uri() . '/icons/pinterest-icon.png" width="32" height="32" alt="Pinterest">'
                    .'</a></li>';

                if (!empty($options['yelp_uid'])) echo '<li class="yelp-icon"><a href="' . $options['yelp_uid'] . '">'
                    .'<img title="Yelp" src="' . get_stylesheet_directory_uri() . '/icons/yelp-icon.png" width="32" height="32" alt="Yelp!">'
                    .'</a></li>';

                if (!empty($options['vimeo_uid'])) echo '<li class="vimeo-icon"><a href="' . $options['vimeo_uid'] . '">'
                    .'<img title="Vimeo" src="' . get_stylesheet_directory_uri() . '/icons/vimeo-icon.png" width="32" height="32" alt="Vimeo">'
                    .'</a></li>';

                if (!empty($options['foursquare_uid'])) echo '<li class="foursquare-icon"><a href="' . $options['foursquare_uid'] . '">'
                    .'<img title="Foursquare" src="' . get_stylesheet_directory_uri() . '/icons/foursquare-icon.png" width="32" height="32" alt="foursquare">'
                    .'</a></li>';

                echo '</ul><!-- end of .social-icons -->';
         ?>
         </div><!-- end of col-380 fit -->

         </div><!-- end of col-940 -->
         <?php get_sidebar('colophon'); ?>

        <div class="grid col-300 copyright">
            <?php esc_attr_e('&copy;', 'responsive'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div><!-- end of .copyright -->

        <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>

    </div><!-- end #footer-wrapper -->
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>
