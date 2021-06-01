<?php
/**
 * Plugin Name: My First Plugin
 * Plugin URI: https://moses.cursortechug.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Moses Cursor
 * Author URI: https://moses.cursortechug.com
 */
add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}
?>
