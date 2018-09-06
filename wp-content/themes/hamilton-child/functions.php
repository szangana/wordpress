<?php 

function add_styles(){
    $parent_style = 'hamilton-style'; 
    $child_style = 'child-style';
    
    #Specifying and linking to the mother theme's style.css file
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css');

    #Specifying amd linking to the child theme's style.css file + getting the version number of the mother theme.
    wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version')
    );
}

#within the single quotations are parameters
add_action('wp_enqueue_scripts','add_styles');




?>
