<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        Responsive Opinsys 2.0
 * @author         Opinsys Oy
 * @copyright      2012 Opinsys Oy
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
<?php $options = get_option('responsive_theme_options'); ?>

<div id="featured" class="grid col-940">
  <div class="grid col-940">
    <?php

  		// First let's check if headline was set
      if ($options['home_headline']) {
        echo '<h1 class="featured-title">';
  	      echo $options['home_headline'];
  	    echo '</h1>';
        } else {
          ?>
          <h1 class="featured-title"><?php _e('Opinsys services', 'responsive');?></h1>
          <?php
        }
  	?>

      <?php
  	   // First let's check if headline was set
  	    if ($options['home_subheadline']) {
          echo '<h2 class="featured-subtitle">';
  		      echo $options['home_subheadline'];
  		    echo '</h2>';
	      }
  	   ?>
      <?php
        // Get content from static-data-for-home.php -page
        include_once('static-data-for-home.php');
	     ?>

      </div><!-- end of .col-460 -->

        <div id="featured-image" class="grid" style="background-image: url(images/main_image.jpg)">
          <p>Ainoa täysin kouluille räätälöity tietotekninen kokonaisuus, joka kattaa sekä peruskoulun että lukion tieto- ja viestintätekniikan.</p>
          <p>Palvelu yhdistää laitteet, oppimisympäristöt ja oppimateriaalit. Lisäksi se tuo digivälineet osaksi koulun arkea.</p>
          <p>Opinsys-palvelu antaa oppilaille mahdollisuuden opiskella digimaailman parhailla välineillä.</p>

          <?php
  	// First let's check if image was set
  	    if (!empty($options['featured_content'])) {
  			echo do_shortcode($options['featured_content']);
      // If not display default slogan
  	      } else{
            // Get right image depending on site locale
            switch (get_locale()) {
              case 'fi':
                $betterLearningImg = 'main_image.jpg';
                break;
              case 'en_US':
                $betterLearningImg = 'opinsys-better-learning.png';
                break;
              case 'en_GB':
                $betterLearningImg = 'opinsys-better-learning.png';
                break;
              case 'sv':
                $betterLearningImg = 'opinsys-battre-larande.png';
                break;
              case 'sv_SE':
                $betterLearningImg = 'opinsys-battre-larande.png';
                break;
              default:
                $betterLearningImg = 'opinsys-parempaa-oppimista.png';
                break;
            }
            ?>
            <h1><img src="<?php echo get_template_directory_uri();?>/images/<?php echo $betterLearningImg;?>" title="<?php _e('Opinsys service – Better learning', 'responsive');?>" alt="<?php _e('Opinsys service – Better learning', 'responsive');?>">
            <span class="image-header-text"><?php _e('Better learning', 'responsive');?></span></h1>
          <?php }
  	?>

  </div><!-- end of #featured-image -->
</div><!-- end of #featured -->

<?php get_sidebar('home'); ?>
<?php get_footer(); ?>