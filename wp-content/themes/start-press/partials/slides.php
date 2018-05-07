<?php
  $args = array(
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
  );

  $posts = get_posts();

  if(empty($posts)){
    $first_post  = null;
    $other_posts = [];
  }else{
    $first_post  = $posts[0];
    $other_posts = array_values(array_slice($posts, 1));
  }

?>

<div class="slides">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="slides-left">
        <div>
          <?php if($first_post) : setup_postdata($first_post); ?>
            <div class="big-featured wow fadeIn">
              <?php the_post_thumbnail() ?>
              <div class="title-caption">
                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
              </div>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="slides-right">
        <ul class="featured-nav">
          <?php
            foreach($other_posts as $post) : setup_postdata($post);
          ?>
            <li class="wow fadeIn">
              <?php the_post_thumbnail() ?>
              <div class="title-caption">
                <a href="<?php the_permalink() ?>">
                  <?php the_title() ?>
                </a>
              </div>
            </li>
          <?php
            endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
