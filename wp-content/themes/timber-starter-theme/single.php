<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context         = Timber::context();
$timber_post     = Timber::query_post();
$context['post'] = $timber_post;

// $ct = get_queried_object()->cat;
//$cat = wp_get_post_categories( $post->ID );
$cat_slug = $timber_post->category();
$cat_id = get_category($cat_slug)->cat_ID;
$post_id = $timber_post->ID;
// $cat_id = get_category($cat_slug)->term_id;


$context['categories'] = Timber::get_posts( $categories);

$context['post_id'] = $timber_post->ID;

if ( post_password_required( $timber_post->ID ) ) {
    Timber::render( 'single-password.twig', $context );
} else {
    Timber::render( array( 'single-' . $timber_post->ID . '.twig', 'single-' . $timber_post->post_type . '.twig', 'single-' . $timber_post->slug . '.twig', 'single.twig' ), $context );
}

//$categories = get_categories( [
//    'taxonomy'     => 'category',
//    'type'         => 'post',
//    'child_of'     => 0,
//    'parent'       => '',
//    'orderby'      => 'name',
//    'order'        => 'ASC',
//    'hide_empty'   => 1,
//    'hierarchical' => 1,
//    'exclude'      => '',
//    'include'      => '',
//    'number'       => 0,
//    'pad_counts'   => false,
//] );
//
//
//foreach($categories as $cat){
//    print_r($cat->name);
//}
