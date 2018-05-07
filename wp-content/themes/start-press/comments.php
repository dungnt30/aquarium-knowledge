<?php if ( post_password_required() ) {
  return;
} ?>
  <div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
      <h3 class="comments-title">
        <?php
        printf( _n( '%d comment', '%d comments', get_comments_number(), 'start-press'), get_comments_number());
        ?>
      </h3>
      <ul class="comment-list">
        <?php
        wp_list_comments( array(
          'short_ping'  => true,
          'avatar_size' => 50,
        ) );
        ?>
      </ul>
      <?php the_comments_navigation() ?>
    <?php endif; ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
      <p class="no-comments">
        <?php _e( 'Comments are closed.', 'start-press' ); ?>
      </p>
    <?php endif; ?>
    <?php comment_form(); ?>
  </div>
