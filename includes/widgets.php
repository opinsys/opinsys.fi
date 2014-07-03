<?php

/**
*
* @package        Responsive Opinsys 2.0
* @author         Janne Saarela <janne.saarela@opinsys.fi>
* @license        license.txt
* @version        2.0.0
* @copyright      2014 Opinsys Oy
*/

if ( ! class_exists( 'ThemeFacebookWidget' ) ) {
  class ThemeFacebookWidget extends WP_Widget {
    function __construct() {
      parent::__construct(
        'themefacebookwidget',
        __( 'Facebook Widget' , 'responsive'),
        array( 'description' => __( 'Displays Facebook like box' , 'responsive') )
      );
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
      if ( $instance ) {
        $title = $instance['title'];
        isset($instance['facebookUrl']) ? $facebookUrl = $instance['facebookUrl'] : $facebookUrl = "";
      }
      else {
        $title = __( 'Facebook' , 'responsive');
        $facebookUrl = "";
      }
  ?>

      <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:' , 'responsive'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>
      <p>
      <label for="<?php echo $this->get_field_id( 'facebookUrl' ); ?>"><?php esc_html_e( 'Facebook page URL:' , 'responsive'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'facebookUrl' ); ?>" name="<?php echo $this->get_field_name( 'facebookUrl' ); ?>" type="text" value="<?php echo $facebookUrl; ?>" />
      </p>

  <?php
    }
    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
      $instance['title'] = strip_tags( $new_instance['title'] );
      $instance['facebookUrl'] = strip_tags( $new_instance['facebookUrl'] );
      return $instance;
    }
    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
      echo $args['before_widget'];
      if (! empty( $instance['facebookUrl'] ) ) : ?>
        <div class="themefacebookwidget">
          <h3><a href="<? echo esc_html( $instance['facebookUrl'] );?>">
            <?php echo esc_html($instance['title'] );?></a>
          </h3>
          <div class="fb-like-box" data-href="<? echo esc_html( $instance['facebookUrl'] );?>" data-width="420" data-height="350" data-show-faces="true" data-border-color="#dddddd" data-stream="true" data-header="true"></div>
        </div>
  <?php endif; ?>
  <?php
      echo $args['after_widget'];
    }
  }
}

if ( ! class_exists( 'ThemeRssWidget' ) ) {
  class ThemeRssWidget extends WP_Widget {
    function __construct() {
      parent::__construct(
        'themersswidget',
        __( 'RSS Widget for Opinsys Labs' , 'responsive'),
        array( 'description' => __( 'Displays Opinsys Labs RSS-feed' , 'responsive') )
      );
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
      if ( $instance ) {
        $title = $instance['title'];
        isset($instance['rssUrl']) ? $rssUrl = $instance['rssUrl'] : $rssUrl = "";
        isset($instance['rssItemQuantity']) ? $rssItemQuantity = $instance['rssItemQuantity'] : $rssItemQuantity = 1;
      }
      else {
        $title = __( 'RSS-feed' , 'responsive');
      }
    ?>
      <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:' , 'responsive'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>
      <p>
      <label for="<?php echo $this->get_field_id( 'rssItemQuantity' ); ?>"><?php esc_html_e( 'RSS item quantity:' , 'responsive'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'rssItemQuantity' ); ?>" name="<?php echo $this->get_field_name( 'rssItemQuantity' ); ?>" type="number" value="<?php echo $rssItemQuantity; ?>" />
      </p>
      <p>
      <label for="<?php echo $this->get_field_id( 'rssUrl' ); ?>"><?php esc_html_e( 'RSS URL:' , 'responsive'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'rssUrl' ); ?>" name="<?php echo $this->get_field_name( 'rssUrl' ); ?>" type="text" value="<?php echo $rssUrl; ?>" />
      </p>

  <?php
    }
    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
      $instance['title'] = strip_tags( $new_instance['title'] );
      $instance['rssUrl'] = strip_tags( $new_instance['rssUrl'] );
      $instance['rssItemQuantity'] = (int)$new_instance['rssItemQuantity'];
      return $instance;
    }
    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
      echo $args['before_widget'];
      if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'];
        echo esc_html( $instance['title'] );
        echo $args['after_title'];
      }
      if (! empty( $instance['rssUrl'] ) ) : ?>
        <div class="home-widget-wrap">
          <div class="themersswidget">
          <a class="margin002 home-widget-image" title="http://labs.opinsys.com/" href="http://labs.opinsys.com/"><img class="size-medium wp-image-1937" title="Opinsys Labs" src="http://www.opinsys.fi/wp-content/themes/responsive-opinsys/images/opinsys_labs_hand.png" alt="Opinsys Labs" width="300" height="65" /></a>
          <?php // Get RSS Feed(s)
            include_once(ABSPATH . WPINC . '/feed.php');

            // Get a SimplePie feed object from the specified feed source.
            // $rss = fetch_feed('https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=Opinsys');
            $rss = fetch_feed(esc_html($instance['rssUrl']));
            if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly
              $maxitems = $rss->get_item_quantity($instance['rssItemQuantity']); // Figure out how many total items there are, but limit it to 5.
              // Build an array of all the items, starting with element 0 (first element).
              $rss_items = $rss->get_items(0, $maxitems);
            endif;
            ?>
            <strong>
              <p class="margin002"><?php _e('News and updates about our work in the realm of Linux and the Web.' , 'responsive');?></p>
              </strong>
            <ul>
            <?php
              if ($maxitems == 0) echo '<li>'._e( 'RSS-feed can not be loaded at the moment...' , 'responsive') . '</li>';
              else
              // Loop through each feed item and display each item as a hyperlink.
              foreach ( $rss_items as $item ) : ?>
              <li>
                  <a href='<?php echo esc_url( $item->get_permalink() ); ?>'
                  title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
                  <?php echo esc_html( $item->get_title() ); ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>

  <?php
      echo $args['after_widget'];
    }
  }
}

if ( ! class_exists( 'ThemeSidebarWidget' ) ) {
  class ThemeSidebarWidget extends WP_Widget {
    function __construct() {
      parent::__construct(
        'themesidebarwidget',
        __( 'Sidebar article Widget' , 'responsive'),
        array( 'description' => __( 'Displays different article types in sidebar' , 'responsive') )
      );
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
      if ( $instance) {
        $latestArticles = $instance['latestArticles'];
        $mostReadArticles = $instance['mostReadArticles'];
        $randomArticles = $instance['randomArticles'];
      }
      else {
        $latestArticles = false;
        $mostReadArticles = false;
        $randomArticles = false;
      }
    ?>
      <p>
        <label for="<?php echo $this->get_field_id( 'latestArticles' ); ?>"><?php esc_html_e( 'Enable latest articles?' , 'responsive'); ?></label>
        <input name="<?php echo $this->get_field_name( 'latestArticles' ); ?>" id="<?php echo $this->get_field_id( 'latestArticles' ); ?>" type="checkbox" value="<?php echo $latestArticles; ?>" <?php if($latestArticles) echo "checked=checked";?> />
      </p>
      <p>
        <label for="<?php echo $this->get_field_id( 'mostReadArticles' ); ?>"><?php esc_html_e( 'Enable the most read articles?' , 'responsive'); ?></label>
        <input name="<?php echo $this->get_field_name( 'mostReadArticles' ); ?>" id="<?php echo $this->get_field_id( 'mostReadArticles' ); ?>" type="checkbox" value="<?php echo $mostReadArticles; ?>" <?php if($mostReadArticles) echo "checked=checked";?>/>
      </p>
      <p>
        <label for="<?php echo $this->get_field_id( 'randomArticles' ); ?>"><?php esc_html_e( 'Enable random articles?' , 'responsive'); ?></label>
        <input name="<?php echo $this->get_field_name( 'randomArticles' ); ?>"  id="<?php echo $this->get_field_id( 'randomArticles' ); ?>" type="checkbox" value="<?php echo $randomArticles;?>" <?php if($randomArticles) echo "checked=checked";?>/>
      </p>


  <?php
    }
    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
      isset($new_instance['latestArticles'] ) ? $instance['latestArticles'] = true : $instance['latestArticles'] = false;
      isset($new_instance['mostReadArticles'] ) ? $instance['mostReadArticles'] = true : $instance['mostReadArticles'] = false;
      isset($new_instance['randomArticles'] ) ? $instance['randomArticles'] = true : $instance['randomArticles'] = false;
      return $instance;
    }
    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
      if($instance['latestArticles']) :
      echo $args['before_widget'];
      ?>
        <div class="widget-title"><?php _e( 'Latest articles' , 'responsive');?></div>
          <ul>
          <?php
            $popular = new WP_Query();
            $popular->query('showposts=5');
          ?>
          <?php while ($popular->have_posts()) : $popular->the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          </ul>
      <?php
        echo $args['after_widget'];
      endif;

      if($instance['mostReadArticles']) :
        echo $args['before_widget'];
      ?>
        <div class="widget-title"><?php _e( 'Popular posts' , 'responsive');?></div>
          <ul>
          <?php
            $popular = new WP_Query();
            $popular->query('showposts=5&orderby=comment_count');
          ?>
          <?php while ($popular->have_posts()) : $popular->the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          </ul>
      <?php
        echo $args['after_widget'];
      endif;

      if($instance['randomArticles']) :
        echo $args['before_widget'];
        ?>
        <div class="widget-title"><?php _e( 'Random articles' , 'responsive');?></div>
        <ul>
          <?php
            $popular = new WP_Query();
            $popular->query('showposts=5&orderby=rand');
          ?>
          <?php while ($popular->have_posts()) : $popular->the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          </ul>
      <?php
        echo $args['after_widget'];
      endif;
    }

  }
}

function register_widgets() {
  register_widget( 'ThemeFacebookWidget' );
  register_widget( 'ThemeRssWidget' );
  register_widget( 'ThemeSidebarWidget' );
}

add_action( 'widgets_init', 'register_widgets' );