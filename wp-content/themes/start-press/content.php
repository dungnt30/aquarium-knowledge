<div class="blog-post">
  <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p class="blog-post-meta">
    <?php the_date(); ?>
    <?php _e('by', 'start-press')?>
      <a href="#">
        <?php the_author(); ?>
      </a> &bull;
      <a href="<?php comments_link(); ?>">
        <?php
    printf( _nx( '%d comment', '%1$s comments', get_comments_number(), 'comments title', 'start-press' ), number_format_i18n( get_comments_number() ) ); ?>
    </a>
  </p>

<?php if ( has_post_thumbnail() ) {?>
  <div class="row">
    <div class="col-md-4">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="col-md-6">
      <?php the_excerpt(); ?>
    </div>
  </div>
  <?php } else { ?>
  <?php the_excerpt(); ?>
  <?php } ?>

</div>
<!-- /.blog-post -->
