<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::context();
$context['posts'] = new Timber\PostQuery();
$context['foo'] = 'bar';
$templates = ['index.twig'];

$sticky_news = array(
    'posts_per_page' => 1,
    'post_type' => 'post',
    //'ignore_sticky_posts' => 1,
    'post__in' => get_option('sticky_posts'),
    'order' => 'DESC'
);
$context['sticky_news'] = Timber::get_posts( $sticky_news );

$last_news = array(
    'post_type' => 'post',
    'posts_per_page' => 8,
   'post__not_in' => get_option( 'sticky_posts'),
);

$context['last_news'] = Timber::get_posts( $last_news );


$main_news = array(
    'post__not_in' => get_option( 'sticky_posts'),
            'meta_key' => 'main_new',
            'meta_value' => '1',
);

$context['main_news'] = Timber::get_posts( $main_news);


//$posts = get_posts( array(
//    'post_type' => 'post',
//    'meta_query' => array(
//        array(
//            'key'   => 'main_new',
//            'value' => '1',
//        )
//    )
//) );
//
//
//
//if( $posts ) {
//    foreach( $posts as $post ) {
//        var_dump($post);
//    }
//}


if (is_home()) {
    array_unshift($templates, 'front-page.twig', 'home.twig');
}
Timber::render($templates, $context);




