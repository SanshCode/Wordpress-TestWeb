<?php
add_action('wp_enqueue_Script', 'enqueue_parent_styles');
function enqueue_parent_styles(){
    wp_enqueue_style('parent_styles',get_templatte_directory_uri().'/style.css');
}
register_nav_menus(
    array( ' primary-menu ' => 'Top Menu')
)

    
?>