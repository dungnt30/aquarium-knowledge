<?php
require_once('includes/start-press-recent-posts.php');
require_once('includes/init-theme-options.php');
require_once('includes/set-up-assets.php');
require_once('wp-bootstrap-navwalker.php');

if ( ! isset( $content_width ) ) {
  $content_width = 900;
}

function start_press_paginate() {
  global $wp_query;

  $total_pages = $wp_query->max_num_pages;

  if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
    return;
  }

  $current_page = max(1, get_query_var('paged'));
  $pages = paginate_links(array(
    'base' => str_replace($total_pages, '%#%', get_pagenum_link($total_pages)),
    'format' => '?page=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $total_pages,
    'type' => 'array',
    'prev_next' => true,
    'prev_text' => "&laquo;" . _e('Previous', 'start-press'),
    'next_text' => _e('Next', 'start-press') . "&raquo;",
  ));
  ?>
  <nav>
    <ul class="pagination">
      <?php foreach($pages as $i => $page): ?>
        <?php if($current_page == 1 && $i == 0): ?>
          <li class='active'><?php echo $page ?></li>
        <?php else: ?>
          <?php if($current_page != 1 && $current_page == $i): ?>
            <li class='active'><?php echo $page ?></li>
          <?php else: ?>
            <li><?php echo $page ?></li>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </nav>
  <?php
}

function start_press_breadcrumb() {
  ?>
    <ol class="breadcrumb">
      <li>
        <a href="<?php home_url(); ?>">
          <?php _e('Home', 'start-press') ?>
        </a>
      </li>
      <?php if(is_single()): ?>
        <li>
          <?php get_category_link(the_category(', ')) ?>
        </li>
        <li class="active"><?php the_title(); ?></li>
      <?php elseif(is_page()): ?>
        <li class="active"><?php the_title(); ?></li>
      <?php elseif(is_category()):?>
        <li class="active"><?php the_title(); ?></li>
      <?php elseif(is_search()): ?>
        <li class="active"><?php the_search_query(); ?></li>
      <?php endif ?>
    </ol>
  <?php
}

function start_press_widgets_init() {
  register_sidebar( array(
    'name'          => __('Primary sidebar', 'start-press'),
    'id'            => 'primary-sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'start_press_widgets_init' );

function start_press_header_banner() {
  $header_banner = get_theme_mod( 'start-press_ad_banner' );
  $header_banner_url = get_theme_mod('start-press_ad_banner_url');
  if ($header_banner) {
    ?>
      <a href="<?php echo esc_url( $header_banner_url ) ?>">
        <img src="<?php echo esc_url( $header_banner ) ?>" alt="" class='img-responsive'>
      </a>
    <?php
  }

}


add_action( 'after_setup_theme', 'start_press_theme_setup' );
function start_press_theme_setup() {
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    // Support Featured Images
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );

    load_theme_textdomain('start_press');
}

function start_press_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'start_press_add_editor_styles' );

