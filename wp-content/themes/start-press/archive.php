<?php get_header(); ?>
  <section id="mainContent">
    <div class="content-body">
      <div class="col-lg-8 col-md-8">
        <div class="main-content-body">
          <div class="achive-list">
            <h2>
              <span class="bold-line"><span></span></span>
              <span class="solid-line"></span>
              <span class="title-text" href="<?php the_permalink(); ?>"><?php the_archive_title(); ?></span>
            </h2>
            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('achive-post wow fadeInUp'); ?>>
                  <div class="media wow fadeInUp">
                    <a class="media-left" href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail() ?>
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h4>
                      <div class="comments-box">
                        <span class="meta-date"><?php the_date(); ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif ?>
          </div>
          <div class="row">
            <div class="col-xs-12 pagination-area">
              <?php start_press_paginate() ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
