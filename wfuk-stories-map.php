<?php
/**
 * Plugin Name:       WFTUK Stories Map
 * Description:       Illustrated map to show stories across the UK
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0
 * Author:            Jamie Glasspool
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wfuk-stories-map
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_wfuk_stories_map_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_wfuk_stories_map_block_init' );

function font_awesome_files() { 
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); 
} 

add_action('wp_enqueue_scripts', 'font_awesome_files');
