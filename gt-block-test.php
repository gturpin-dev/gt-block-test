<?php
/**
 * Plugin Name:       Gt Block Test
 * Description:       Mes nouveaux super blocks
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gt-block-test
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function create_block_gt_block_test_block_init() {
	register_block_type_from_metadata( __DIR__ );

	if (is_admin() && defined('ENABLE_HOT_RELOADING_FOR_DEV') && ENABLE_HOT_RELOADING_FOR_DEV) {
		wp_register_script('livereload', 'http://localhost:35729/livereload.js');
		wp_enqueue_script('livereload');
	}
}
add_action( 'init', 'create_block_gt_block_test_block_init' );
