<?php get_header(); ?>
	<section id="mainContent">
    <div class="content-body">
      <div class="col-lg-8 col-md-8">
        <div class="main-content-body">
          <?php start_press_breadcrumb(); ?>
          <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'content-single', get_post_format() );
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            endwhile; endif;
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>


