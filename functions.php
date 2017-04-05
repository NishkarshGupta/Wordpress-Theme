<?php

// Include Stylesheet
function learnwordpress()
{
wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','learnwordpress');

// Include Stylesheet

// Navigation Menu Starts
register_nav_menus(array(

'header' => ('Header menu'),
'footer' => ('Footer menu')
	));

// Navigation Menu Ends
?>