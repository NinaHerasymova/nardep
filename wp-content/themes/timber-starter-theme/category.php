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

global $paged;
if (!isset($paged) || !$paged) {
    $paged = 1;
}
//
//$context = Timber::context();
//$cat_news = [
//    'post_type' => 'post',
//    'posts_per_page' => 6,
//    'numberposts' => 6,
//    'category' => get_queried_object()->term_id,
//    'paged' => $paged,
//    'ignore_sticky_posts' => 1,
//];
//$context['cat_news'] = new Timber\PostQuery($cat_news);
//
//$context['cat_title'] = single_term_title('', false);
//
//Timber::render('category.twig', $context);
