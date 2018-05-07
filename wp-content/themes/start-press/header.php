<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>

  <a id="scroll-to-top" href="#"><i class="fa fa-angle-up"></i></a>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <?php get_template_part('partials/head'); ?>
      </div>
    </div>
    <?php get_template_part('partials/navbar'); ?>
