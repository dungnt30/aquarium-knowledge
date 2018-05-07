<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package Pet Animal Store
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','pet-animal-store'); ?></a></div>

  <?php 
    $slide_one = absint( get_theme_mod( 'pet_animal_store_slidersettings-page-1' ) );
    $slide_two = absint( get_theme_mod( 'pet_animal_store_slidersettings-page-1' ) );
    $slide_three = absint( get_theme_mod( 'pet_animal_store_slidersettings-page-1' ) );
    $slide_four = absint( get_theme_mod( 'pet_animal_store_slidersettings-page-1' ) );

    if($slide_one == '' && $slide_two == '' &&  $slide_three == '' &&  $slide_four == ''){
      $header_no_absolute = '';
    }
    else{
      $header_no_absolute = 'yes';
    }
  ?>

<div class="topbar">
  <div class="container">
  	<div class="site_header col-md-10 col-sm-12 col-md-offset-1">
	  	<div class="row">
		    <div class="col-md-3 col-sm-3">
		    	<div class="logo">
			      	<?php if( has_custom_logo() ){ pet_animal_store_the_custom_logo();
			         	}else{ ?>
			        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			        <?php $description = get_bloginfo( 'description', 'display' );
			        	if ( $description || is_customize_preview() ) : ?> 
			          <p class="site-description"><?php echo esc_html($description); ?></p>       
			      	<?php endif; }?>
			    </div>
		    </div>
		    <div class="col-md-9 col-sm-9">
			    <div class="baricon row">
			      <div class="col-md-4 col-sm-4">
			      <p class="email_title"><?php echo esc_html(get_theme_mod('pet_animal_store_mail_title',__('EMAIL','pet-animal-store'))); ?></p>
			      <?php if( get_theme_mod( 'pet_animal_store_mail','' ) != '') { ?>
			        <p class="email icon social fb"><?php echo esc_html( get_theme_mod('pet_animal_store_mail',__('support@example.com','pet-animal-store')) ); ?></p>
			      <?php } ?>
			      </div>
			      <div class="col-md-4 col-sm-4">
			      <p class="call_title"><?php echo esc_html(get_theme_mod('pet_animal_store_call_title',__('CALL NOW','pet-animal-store'))); ?></p>
			      <?php if( get_theme_mod( 'pet_animal_store_call','' ) != '') { ?>
			        <p class="call"><?php echo esc_html( get_theme_mod('pet_animal_store_call',__('(518) 356-5373','pet-animal-store') )); ?></p>
			      <?php } ?>
			      </div>
			      <div class="col-md-4 col-sm-4">
			      <?php if( get_theme_mod( 'pet_animal_store_youtube_url','' ) != '') { ?>
			        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
			      <?php } ?>
			      <?php if( get_theme_mod( 'pet_animal_store_facebook_url','' ) != '') { ?>
			        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
			      <?php } ?>
			      <?php if( get_theme_mod( 'pet_animal_store_twitter_url','' ) != '') { ?>
			        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
			      <?php } ?>
			      <?php if( get_theme_mod( 'pet_animal_store_rss_url','' ) != '') { ?>
			        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_rss_url','' ) ); ?>"><i class="fas fa-rss"></i></a>
			      <?php } ?>
			      </div>
			    </div>
		    </div>
	    </div>
		<div id="header" class="header-slider row">      
			<div class="col-md-9 col-sm-9 menubg">
				<div class="menubox nav">
				    <div class="mainmenu">
				      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
				    </div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-md-3 col-sm-3 searchbg">
				<div class="search_form">
				  <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
				   <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'pet-animal-store' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'pet-animal-store' ); ?>" /><button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				  </form>
				</div>
			</div>  
		</div>
	</div>
  </div>
</div>



