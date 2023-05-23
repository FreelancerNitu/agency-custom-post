<?php

/*
 Plugin Name: Agency Custom Post Type
 Description: Common Custom Post For Agency Theme
 Plugin URI: https://www.nitu121.com/agency-cpt
 Author: Nitu Barmon
 Author URI:  https://www.nitu121.com
 Text Domain: agency
*/

// All Custom Post For Agency Theme

function agency_custom_post(){ 
//Slider Custom Post
register_post_type('sliders', array( 
  'labels'=> array(
    'name' => __('Sliders', 'agency'),
    'singular_name' => __('Slider', 'agency'),
    'add_new' => __('Add New Slider', 'agency'),
    'add_new_item' => __('Add New Slider', 'agency'),
    'view_item' => __('View Slider', 'agency'),
    'edit_item' => __('Edit Slider', 'agency'),
    'featured_image' =>__('Slider Image', 'agency'),
    'set_featured_image' =>__('Set Slider Image', 'agency'),
    'search_items' => __('Search Slider', 'agency'),
),
  'menu_icon' => 'dashicons-open-folder',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
 ));
 
//Counter Custom Post
register_post_type('counters', array( 
  'labels'=> array(
    'name' => __('Counters', 'agency'),
    'singular_name' => __('Counter', 'agency'),
    'add_new' => __('Add New Counter', 'agency'),
    'add_new_item' => __('Add New Counter', 'agency'),
    'view_item' => __('View Counter', 'agency'),
    'edit_item' => __('Edit Counter', 'agency'),
    'featured_image' =>__('Counter Image', 'agency'),
    'set_featured_image' =>__('Set Counter Image', 'agency'),
    'search_items' => __('Search Counter', 'agency'),
),
  'menu_icon' => 'dashicons-lock',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
 ));
 
//Service Custom Post
register_post_type('services', array( 
  'labels'=> array(
    'name' => __('Services', 'agency'),
    'singular_name' => __('Service', 'agency'),
    'add_new' => __('Add New Service', 'agency'),
    'add_new_item' => __('Add New Service', 'agency'),
    'view_item' => __('View Service', 'agency'),
    'edit_item' => __('Edit Service', 'agency'),
    'featured_image' =>__('Service Image', 'agency'),
    'set_featured_image' =>__('Set Service Image', 'agency'),
    'search_items' => __('Search Service', 'agency'),
),
  'menu_icon' => 'dashicons-money',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
 ));
 
//Project Custom Post
register_post_type('projects', array( 
  'labels'=> array(
    'name' => __('Projects', 'agency'),
    'singular_name' => __('Project', 'agency'),
    'add_new' => __('Add New Project', 'agency'),
    'add_new_item' => __('Add New Project', 'agency'),
    'view_item' => __('View Project', 'agency'),
    'edit_item' => __('Edit Project', 'agency'),
    'featured_image' =>__('Project Image', 'agency'),
    'set_featured_image' =>__('Set Project Image', 'agency'),
    'search_items' => __('Search Project', 'agency'),
),
  'menu_icon' => 'dashicons-portfolio',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail',),
 ));
 
//Our Team Custom Post
register_post_type('teams', array( 
  'labels'=> array(
    'name' => __('Teams', 'agency'),
    'singular_name' => __('Team', 'agency'),
    'add_new' => __('Add New Team', 'agency'),
    'add_new_item' => __('Add New Team', 'agency'),
    'view_item' => __('View Team', 'agency'),
    'edit_item' => __('Edit Team', 'agency'),
    'featured_image' =>__('Team Image', 'agency'),
    'set_featured_image' =>__('Set Team Image', 'agency'),
    'search_items' => __('Search Team', 'agency'),
),
  'menu_icon' => 'dashicons-buddicons-buddypress-logo',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
 ));
 
//Our Team Custom Post
register_post_type('testimonials', array( 
  'labels'=> array(
    'name' => __('Testimonials', 'agency'),
    'singular_name' => __('Testimonial', 'agency'),
    'add_new' => __('Add New Testimonial', 'agency'),
    'add_new_item' => __('Add New Testimonial', 'agency'),
    'view_item' => __('View Testimonial', 'agency'),
    'edit_item' => __('Edit Testimonial', 'agency'),
    'featured_image' =>__('Testimonial Image', 'agency'),
    'set_featured_image' =>__('Set Testimonial Image', 'agency'),
    'search_items' => __('Search Testimonial', 'agency'),
),
  'menu_icon' => 'dashicons-testimonial',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
 ));

}

add_action('init', 'agency_custom_post');