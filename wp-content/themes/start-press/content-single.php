<h2 class="post-title"><?php the_title(); ?></h2>
<p><?php the_tags(); ?></p>
<?php if ( has_post_thumbnail() ): ?>
  <div class="feature-image" >
    <?php the_post_thumbnail(); ?>
  </div>
<?php endif ?>
<div id="page-content">
  <?php the_content(); ?>
</div>
<?php wp_link_pages(); ?>
