<?php
/**
 * Third party plugins that hijack the theme will call wp_head() to get the header template.
 * We use this to start our output buffer and render into the view/page-plugin.twig template in footer.php
 *
 * If you're not using a plugin that requries this behavior (ones that do include Events Calendar Pro and
 * WooCommerce) you can delete this file and footer.php
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$timberContext = $GLOBALS['timberContext']; // @codingStandardsIgnoreFile
if ( ! isset( $timberContext ) ) {
    throw new \Exception( 'Timber context not set in header.' );
}
$context['post_id'] = $timber_post->ID;
$context['main_menu'] = new Timber\Menu('main-menu');
$context['categories'] = new Timber\Menu('categories');
