<?php
  $args = array( 'posts_per_page' => 5, 'category' => $category->term_id, 'post_status'=> 'publish');
  $posts = get_posts($args);
  $first_post  = $posts[0];
  $small_posts = array_values(array_slice($posts, 1));
?>
<div class="main-content-body">
  <div class="single-category wow fadeInUp">
    <h2>
      <span class="bold-line"><span></span></span>
      <span class="solid-line"></span>
      <a class="title-text" href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a>
    </h2>
    <div class="single-category-left wow fadeInUp">

      <?php if($first_post) : setup_postdata($first_post); ?>
        <ul class="fashion-catgnav list-unstyled">
          <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="catgimg2-container">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail() ?>
              </a>
            </div>
            <h2 class="catg-titile">
              <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
            </h2>
            <div class="comments-box">
              <span class="meta-date"><?php the_date()?></span>
              <span class="meta-more">
                <a  href="<?php the_permalink() ?>">
                  <?php _e('Read More...', 'start-press')?>
                </a>
              </span>
            </div>
            <?php the_excerpt() ?>
          </li>
        </ul>
      <?php endif ?>
    </div>
    <div class="single-category-right wow fadeInUp">
      <ul class="small-catg list-unstyled">
        <?php
          foreach($small_posts as $post) : setup_postdata($post);
        ?>

        <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="media wow fadeInUp">
            <a class="media-left" href="<?php the_permalink() ?>" >
              <?php the_post_thumbnail() ?>
            </a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </h4>
              <div class="comments-box">
                <span class="meta-date">14/12/2045</span>
              </div>
            </div>
          </div>
        </li>
        <?php
          endforeach;
        ?>
      </ul>
    </div>
  </div>
</div>
