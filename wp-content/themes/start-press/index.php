<?php get_header(); ?>
  <section id="mainContent">
    <?php get_template_part('partials/slides'); ?>

    <div class="content-body">
      <div class="col-lg-8 col-md-8">
        <?php
          $categories = get_categories();
          foreach($categories as $category) {
            set_query_var( 'category', $category );
            get_template_part('partials/home-body');
          }
        ?>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>

</div>
<?php get_footer(); ?>
