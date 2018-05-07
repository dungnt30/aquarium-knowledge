<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Pet Animal Store
 */

get_header(); ?>

<?php /** slider section **/ ?>
<?php
	// Get pages set in the customizer (if any)
	$pages = array();
	for ( $count = 1; $count <= 5; $count++ ) {
		$mod = absint( get_theme_mod( 'pet_animal_store_slidersettings-page-' . $count ) );
		if ( 'page-none-selected' != $mod ) {
			$pages[] = $mod;
		}
	}
	if( !empty($pages) ) :
		$args = array(
			'posts_per_page' => 5,
			'post_type' => 'page',
			'post__in' => $pages,
			'orderby' => 'post__in'
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) :
			$count = 1;
			?>
			<div class="slider-main">
				<div id="slider" class="nivoSlider">
					<?php
						$pet_animal_store_n = 0;
					while ( $query->have_posts() ) : $query->the_post();
							
							$pet_animal_store_n++;
							$pet_animal_store_slideno[] = $pet_animal_store_n;
							$pet_animal_store_slidetitle[] = get_the_title();
							$pet_animal_store_slidelink[] = esc_url(get_permalink());
							?>
								<img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $pet_animal_store_n ); ?>" />
							<?php
						$count++;
					endwhile;
						wp_reset_postdata();
					?>
				</div>

				<?php
				$pet_animal_store_k = 0;
			    foreach( $pet_animal_store_slideno as $pet_animal_store_sln ){ ?>
					<div id="slidecaption<?php echo esc_attr( $pet_animal_store_sln ); ?>" class="nivo-html-caption">
						<div class="slide-cap  ">
							<div class="container">
								<h2><?php echo esc_html( $pet_animal_store_slidetitle[$pet_animal_store_k] ); ?></h2>
								<a class="read-more" href="<?php echo esc_url( $pet_animal_store_slidelink[$pet_animal_store_k] ); ?>"><?php  esc_html_e( 'Learn More','pet-animal-store' ); ?></a>
							</div>
						</div>
					</div>
		    	<?php $pet_animal_store_k++;
				} ?>
			</div>
		<?php else : ?>
				<div class="header-no-slider"></div>
			<?php
		endif;
	else : ?>
			<div class="header-no-slider"></div>
		<?php
	endif;
?>

<section id="our-products">
	<div class="container">
        <?php if( get_theme_mod('pet_animal_store_sec1_title') != ''){ ?>     
            <h3><?php echo esc_html(get_theme_mod('pet_animal_store_sec1_title',__('PET SUPPLIES','pet-animal-store'))); ?></h3>
            <div class="border-image">
    			<img  src="<?php echo esc_url(get_theme_mod('pet_animal_store_border_image',get_template_directory_uri().'/images/line.png')); ?>" alt="">
    		</div>
        <?php }?>
		<div class="col-md-12">
			<?php $pages = array();
			for ( $count = 0; $count <= 0; $count++ ) {
				$mod = intval( get_theme_mod( 'pet_animal_store_product_page' . $count ));
				if ( 'page-none-selected' != $mod ) {
				  $pages[] = $mod;
				}
			}
			if( !empty($pages) ) :
			  $args = array(
			    'post_type' => 'page',
			    'post__in' => $pages,
			    'orderby' => 'post__in'
			  );
			  $query = new WP_Query( $args );
			  if ( $query->have_posts() ) :
			    $count = 0;
					while ( $query->have_posts() ) : $query->the_post(); ?>
					    <div class="box-image">
					        <p><?php the_content(); ?></p>
					        <div class="clearfix"></div>
					    </div>
					<?php $count++; endwhile; ?>
			  <?php else : ?>
			      <div class="no-postfound"></div>
			  <?php endif;
			endif;
			wp_reset_postdata(); ?>
		    <div class="clearfix"></div>
		</div>
	</div>
</section>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>