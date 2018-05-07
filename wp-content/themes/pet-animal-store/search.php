<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Pet Animal Store
 */

get_header(); ?>

<section id="theme-main-box">
    <div class="container">
        <?php
            $left_right = get_theme_mod( 'pet_animal_store_theme_options','One Column');
            if($left_right == 'Left Sidebar'){ ?>
            <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
            <section id="blog_hospital" class="hospi-blog col-md-8 col-sm-8">
                <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() ); 
                  
                    endwhile;
                    wp_reset_postdata();
                    else :

                        get_template_part( 'no-results' ); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'pet-animal-store' ),
                            'next_text'          => __( 'Next page', 'pet-animal-store' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'pet-animal-store' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </section>
            <div class="clearfix"></div>
        <?php }else if($left_right == 'Right Sidebar'){ ?>
            <section id="blog_hospital" class="hospi-blog col-md-8 col-sm-8">
                <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() ); 
                      
                    endwhile;
                    wp_reset_postdata();
                    else :

                        get_template_part( 'no-results' ); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'pet-animal-store' ),
                            'next_text'          => __( 'Next page', 'pet-animal-store' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'pet-animal-store' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </section>
            <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
        <?php }else if($left_right == 'One Column'){ ?>
            <section id="blog_hospital" class="hospi-blog col-md-12">
                <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() ); 
                      
                    endwhile;
                    wp_reset_postdata();
                    else :

                        get_template_part( 'no-results' ); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'pet-animal-store' ),
                            'next_text'          => __( 'Next page', 'pet-animal-store' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'pet-animal-store' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </section>
        <?php }else if($left_right == 'Three Columns'){ ?>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
            <section id="blog_hospital" class="hospi-blog col-md-6 col-sm-6">
                <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() ); 
                      
                    endwhile;
                    wp_reset_postdata();
                    else :

                        get_template_part( 'no-results' ); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'pet-animal-store' ),
                            'next_text'          => __( 'Next page', 'pet-animal-store' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'pet-animal-store' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </section>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
        <?php }else if($left_right == 'Four Columns'){ ?>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
            <section id="blog_hospital" class="hospi-blog col-md-3">
                <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() ); 
                      
                    endwhile;
                    wp_reset_postdata();
                    else :

                        get_template_part( 'no-results' ); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'pet-animal-store' ),
                            'next_text'          => __( 'Next page', 'pet-animal-store' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'pet-animal-store' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </section>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
        <?php }else if($left_right == 'Grid Layout'){ ?>
            <section id="blog_hospital" class="hospi-blog col-md-9 col-sm-9">
                <h1 class="entry-title"><?php printf( 'Results For: %s', '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/grid-layout' ); 
                      
                    endwhile;
                    wp_reset_postdata();
                    else :

                        get_template_part( 'no-results' ); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'pet-animal-store' ),
                            'next_text'          => __( 'Next page', 'pet-animal-store' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'pet-animal-store' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>
            </section>
            <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
        <?php } ?>
    </div>
</section>

<?php get_footer(); ?>