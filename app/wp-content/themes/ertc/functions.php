<?php

add_action('wp_enqueue_scripts', 'style_and_script');
add_action('wp_footer', 'script_them');
add_action('after_setup_theme', 'register_settings');

function register_settings() {
  add_theme_support('post-thumbnails', array('post'));
  add_filter('excerpt_more', function ($more) {
    return '';
  });
}

function style_and_script() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('maincss', get_template_directory_uri() . '/css/main.css');
  wp_deregister_script('jquery-core');
  wp_register_script('jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
  wp_enqueue_script('jquery');
}

function script_them() {
  wp_enqueue_script('init', get_template_directory_uri() . '/buildjs/index.js');
  add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
  function codeless_remove_type_attr($tag, $handle) {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
  }
}