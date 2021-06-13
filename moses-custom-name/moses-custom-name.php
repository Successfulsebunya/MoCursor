<?php
/**
 * Plugin Name: Custom Name
 * Plugin URI: https://moses.cursortechug.com/my-2nd-plugin
 * Description: this is a plugin that changes the Post name to a custom name forexample Sermon as used in this Website.
 * Version: 1.0
 * Author: Moses Cursor
 * Author URI: https://moses.cursortechug.com
 */
add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to Sermons
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Sermon';
        $labels->singular_name = 'Sermon';
        $labels->add_new = 'Add Sermon';
        $labels->add_new_item = 'Add Sermon';
        $labels->edit_item = 'Edit Sermon';
        $labels->new_item = 'Sermons';
        $labels->view_item = 'View Sermon';
        $labels->search_items = 'Search Sermons';
        $labels->not_found = 'No Sermon found';
        $labels->not_found_in_trash = 'No Sermon found in Trash';
        $labels->all_items = 'All Sermons';
        $labels->menu_name = 'Sermons';
        $labels->name_admin_bar = 'Sermons';
}
?>
