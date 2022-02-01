<?php
  // Theme functions go here

function enqueue_my_styles_and_scripts(){

  // enqueue bootstrap
  // wp_enqueue_style('bootstrap-styles', get_stylesheet_directory_uri) . '/myassets/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all'
  // wp_enqueue_script ('bootstrap-script', get_theme_file_url() . 'myassets/bootstrap/js/bootstrap.bundle.js', )





  // enqueue personal code
  wp_enqueue_style('master-styles', get_stylesheet_directory_uri() . '/my_assets/css/master.css', array(), '1.0.0', 'all');
  wp_enqueue_style('about-styles', get_stylesheet_directory_uri() . '/my_assets/css/about.css', array(), '1.0.0', 'all');
  wp_enqueue_style('contact-styles', get_stylesheet_directory_uri() . '/my_assets/css/contact.css', array(), '1.0.0', 'all');
  wp_enqueue_style('home-styles', get_stylesheet_directory_uri() . '/my_assets/css/home.css', array(), '1.0.0', 'all');
  wp_enqueue_style('portfolio-styles', get_stylesheet_directory_uri() . '/my_assets/css/portfolio.css', array(), '1.0.0', 'all');
  wp_enqueue_script ('my-script', get_theme_file_uri() . 'my_assets/js/java.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts','enqueue_my_styles_and_scripts');

function myTheme_setup(){

  // Registering our nav menus
  register_nav_menus(
    array(
      'primary' => __('Primary Menu')
    )
  );

}

add_action('after_setup_theme','myTheme_setup');


 ?>
