<?php
class start_press_Recent_Posts_Widget extends WP_Widget {

  public function __construct() {
    $widget_ops = array(
      'classname' => 'start-press-recent-posts-widget',
      'description' => __('Start Press Recent Posts.','start-press')
    );

    $control_ops = array(
      'id_base' => 'start-press-recent-posts'
    );

    parent::__construct('start-press-recent-posts', __('Startpress: Recent Posts','start-press'), $widget_ops, $control_ops);
  }



  public function widget( $args, $instance ) {
    $title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $qty = isset( $instance[ 'qty' ] ) ? (int) $instance[ 'qty' ] : 0;
    $excerpt_length = isset( $instance[ 'excerpt_length' ] ) ? (int) $instance[ 'excerpt_length' ] : 35;

    if ( ! empty( $title ) ) {
      echo "<h2>" . $title . "</h2>";
    }
    echo self::render( $qty, $excerpt_length );
  }

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['qty'] = intval( $new_instance['qty'] );
    $instance['excerpt_length'] = intval( $new_instance['excerpt_length'] );
    return $instance;
  }

  public function form( $instance ) {
    $defaults = array(
      'title' => 'Recent posts',
      'qty' => 1,
      'excerpt_length' => 10
    );

    $instance = wp_parse_args((array) $instance, $defaults);
    $title = $instance[ 'title' ];
    $qty = $instance[ 'qty' ];
    $excerpt_length = $instance[ 'excerpt_length' ];
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">
        Title
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'qty' ); ?>">
        Number of Posts to show
      </label>
      <input id="<?php echo $this->get_field_id( 'qty' ); ?>" name="<?php echo $this->get_field_name( 'qty' ); ?>" type="number" min="1" step="1" value="<?php echo $qty; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'excerpt_length' ); ?>">
        Excerpt words
      </label>
      <input id="<?php echo $this->get_field_id( 'excerpt_length' ); ?>" name="<?php echo $this->get_field_name( 'excerpt_length' ); ?>" type="number" min="0" step="1" value="<?php echo $excerpt_length; ?>" />
    </p>
    <?php
  }


  function start_press_excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
  }


  public function render( $qty, $excerpt_length ) {
    $posts = new WP_Query("orderby=date&order=DESC&posts_per_page=".$qty);
    ?>

    <ul class="small-catg popular-catg wow fadeInDown list-unstyled">
      <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <li id="recent-post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="media wow fadeInDown">
          <?php if(has_post_thumbnail()): ?>
          <a href="<?php the_permalink(); ?>" class="media-left">
            <?php the_post_thumbnail() ?>
          </a>
          <?php endif ?>
          <div class="media-body">
            <h4 class="media-heading">
              <a href="<?php the_permalink(); ?>">
                <?php the_title() ?>
              </a>
            </h4>
            <?php echo $this->start_press_excerpt($excerpt_length) ?>
          </div>
        </div>
      </li>
      <?php endwhile ?>
    </ul>
    <?php wp_reset_postdata(); ?>
    <?php

  }
}
add_action('widgets_init', 'start_press_recent_posts_load_widgets');

function start_press_recent_posts_load_widgets()
{
  register_widget('start_press_Recent_Posts_Widget');
}
