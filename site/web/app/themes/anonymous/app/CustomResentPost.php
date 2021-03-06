<?php

use Roots\Sage;

Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

  function widget($args, $instance) {

    extract( $args );

    $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);

    if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
      $number = 10;

    $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
    if( $r->have_posts() ) :

      echo $before_widget;
      if( $title ) echo $before_title . $title . $after_title; ?>
      <ul class="recentPost">
        <?php while( $r->have_posts() ) : $r->the_post(); ?>
          <li class="recentPost__list">
            <a class="recentPost__link" href="<?php echo get_the_permalink(); ?>" title="<?php the_title(); ?>">
              <figure class="recentPost__thumbnail">
                <?php the_post_thumbnail('square'); ?>
              </figure>
              <div class="recentPost__container">
                <p class="recentPost__title">
                <?php the_title(); ?>
              </p>
              <time class="recentPost__date"><?php the_time('d.m.Y'); ?></time>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>

      <?php
      echo $after_widget;

      wp_reset_postdata();

    endif;
  }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}