<?php

/**
 * Bosi Backend functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AnaClara
 * @since 1.0
 */
function init_theme()
{
  register_nav_menu('top-menu', __('Top Menu'));
  add_theme_support('post-thumbnails');
  add_theme_support('editor-styles');
  add_editor_style('assets/css/editor.css');
}
add_action('init', 'init_theme');

add_filter('excerpt_more', 'wpdocs_excerpt_more');

// Adding stylesheets

function cssGlobals()
{
  wp_register_style(
    'reset',
    get_template_directory_uri() . '/assets/css/reset.css',
    array(),
    '2.0',
  );

  wp_enqueue_style('reset');

  wp_register_style(
    'global',
    get_template_directory_uri() . '/assets/css/global.css',
    array(),
    '2.0',
  );

  wp_enqueue_style('global');

  wp_register_style(
    'header',
    get_template_directory_uri() . '/header.css',
    array(),
    '1.0',
  );

  wp_enqueue_style('header');

  wp_register_style(
    'fontawesome',
    get_template_directory_uri() . '/assets/css/all.min.css',
    array(),
    '2.0',
  );

  wp_enqueue_style('fontawesome');
}
add_action('get_header', 'cssGlobals', 99);

wp_register_style(
  'index',
  get_template_directory_uri() . '/index.css',
  array(),
  '1.0',
);
