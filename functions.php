<?php
add_action('wp_enqueue_scripts','remove_WPPollsCSS');
function remove_WPPollsCSS() {
	wp_dequeue_style('wp-polls', get_stylesheet_directory_uri().'/polls-css.css');
}