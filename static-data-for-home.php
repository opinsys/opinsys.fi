<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Static Data for Home Page
 *
 *
 * @file           static-data-for-home.php
 * @package        Responsive Opinsys 2.0
 * @author         Opinsys Oy
 * @copyright      2012 Opinsys Oy
 * @license        license.txt
 * @version        2.0
 * @since          available since Release 1.0
 */
?>
<?php
// Figure out which pages we search by get_page_by_title()
  switch (get_locale()) {
    case 'fi':
      $title1 = 'Koulun tietotekniikka';
      $title2 = 'Koulun tiedotus';
      $title3 = 'Koulun mobiilius';
      break;
    case 'en_US':
      $title1 = 'ICT for schools';
      $title2 = 'InfoTv';
      $title3 = 'Mobililty';
      break;
    case 'en_GB':
      $title1 = 'ICT for schools';
      $title2 = 'InfoTv';
      $title3 = 'Mobililty';
      break;
    case 'sv':
      $title1 = 'Skolans IT';
      $title2 = 'Skolans informering';
      $title3 = 'Mobilt i skolan';
      break;
    case 'sv_SE':
      $title1 = 'Skolans IT';
      $title2 = 'Skolans informering';
      $title3 = 'Mobilt i skolan';
      break;
    default:
      $title1 = 'Koulun tietotekniikka';
      $title2 = 'Koulun tiedotus';
      $title3 = 'Koulun mobiilius';
      break;
  }

?>



<div class="padder-02 landing-page-services-wrap clearfix">
  <a href="<?php echo esc_url( get_permalink(get_page_by_title($title1)));?>" title="<?php _e('ICT for schools', 'responsive');?>">
    <div class="grid col-300 dblock clearfix">
      <h1><?php _e('ICT for schools', 'responsive');?></h1>
      <div class="item-wrapper">
        <img alt="<?php _e('ICT for schools', 'responsive');?>" class="landing-page-services-image" src="<?php echo get_template_directory_uri();?>/images/opinsys-tietotekniikka.png">
        <img alt="<?php _e('ICT for schools', 'responsive');?>" class="landing-page-services-image-wide" src="<?php echo get_template_directory_uri();?>/images/opinsys-tietotekniikka-wide.png">
        <p><span><?php _e('Technical solutions, support and training', 'responsive');?></span></p>
      </div>
    </div>
  </a>
  <a href="<?php echo esc_url( get_permalink(get_page_by_title($title2)));?>" title="<?php _e('Messaging for schools', 'responsive');?>">
    <div class="grid col-300 dblock clearfix">
      <h1><?php _e('Messaging for schools', 'responsive');?></h1>
      <div class="item-wrapper">
      <img alt="<?php _e('Messaging for schools', 'responsive');?>" class="landing-page-services-image" src="<?php echo get_template_directory_uri();?>/images/opinsys-tiedotus.png"><img alt="<?php _e('Messaging for schools', 'responsive');?>" class="landing-page-services-image-wide" src="<?php echo get_template_directory_uri();?>/images/opinsys-tiedotus-wide.png">
      <p><span><?php _e('InfoTv', 'responsive');?></span></p>
      </div>
    </div>
  </a>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title($title3))); ?>" title="<?php _e('Mobility', 'responsive');?>">
    <div class="grid col-300 fit dblock clearfix">
      <h1><?php _e('Mobility', 'responsive');?></h1>
      <div class="item-wrapper">
        <img alt="<?php _e('Mobility', 'responsive');?>" class="landing-page-services-image" src="<?php echo get_template_directory_uri();?>/images/opinsys-mobiilius.png">
        <img alt="<?php _e('Mobility', 'responsive');?>" class="landing-page-services-image-wide" src="<?php echo get_template_directory_uri();?>/images/opinsys-mobiilius-wide.png">
        <p><span><?php _e('Wireless and laptops', 'responsive');?></span></p>
      </div>
    </div>
  </a>
</div>