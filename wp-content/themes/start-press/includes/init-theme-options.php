<?php
// Create default menu
function start_press_default_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' , 'start-press')
    )
  );
}
add_action( 'init', 'start_press_default_menus' );

function register_ad_banner_setting($wp_customize)
{
  $wp_customize->add_section("start-press_ad_banner_section", array(
    "title" => __( 'Ad Banner', 'start-press' ),
    "priority" => 60,
  ));
  $wp_customize->add_setting( 'start-press_ad_banner', array('sanitize_callback' => 'esc_url_raw'));
  $wp_customize->add_setting( 'start-press_ad_banner_url', array('sanitize_callback' => 'esc_url_raw'));

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'start-press_ad_banner', array(
    'label'    => __( 'Header Ad Banner', 'start-press'),
    'description' => __('720x90', 'start-press'),
    'section'  => 'start-press_ad_banner_section',
    'settings' => 'start-press_ad_banner',
  )));

  $wp_customize->add_control('start-press_ad_banner_url', array(
        'label' => __( 'Header Ad Url', 'start-press'),
        'section' => 'start-press_ad_banner_section',
        'type'    => 'text',
        'settings' => 'start-press_ad_banner_url'
  ));
}

add_action("customize_register","register_ad_banner_setting");
