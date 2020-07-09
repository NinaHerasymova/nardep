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

$context = Timber::context();
$timber_post = Timber::query_post();
$context['post'] = $timber_post;

$cat_slug = $timber_post->category();
$cat_id = get_category($cat_slug)->cat_ID;
$post_id = $timber_post->ID;
// $cat_id = get_category($cat_slug)->term_id;

$last_news = [
    'post_type' => 'post',
    'posts_per_page' => 10,
    'ignore_sticky_posts' => 1,
];
$context['last_news'] = Timber::get_posts($last_news);

$similar_news = [
    'post_type' => 'post',
    'numberposts' => 6,
    'ignore_sticky_posts' => 1,
    'category' => $cat_id,
    'post__not_in' => [get_the_ID()],
];

$context['post_id'] = $timber_post->ID;

$context['similar_news'] = Timber::get_posts($similar_news);

if (post_password_required($timber_post->ID)) {
    Timber::render('single-password.twig', $context);
} else {
    Timber::render(
        [
            'single-' . $timber_post->ID . '.twig',
            'single-' . $timber_post->post_type . '.twig',
            'single-' . $timber_post->slug . '.twig',
            'single.twig',
        ],
        $context
    );
}
