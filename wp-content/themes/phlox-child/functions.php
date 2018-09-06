<?php 

require( 'auxin/auxin-include/auxin.php' );
/*-----------------------------------------------------------------------------------*/

//calling the css stylesheet
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '../style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '../style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

//this is a custom font functions. The first font is a sans-serif font for the website's text. Font awesome is a font which has emoji options. 
add_action('wp_enqueue_scripts', 'google_fonts');
function google_fonts(){
    wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css?family=Poppins');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
}

//this is a widget function
add_action('widgets_init', 'add_widgets');
function add_widgets(){
    register_sidebar(
    array (
    'name' => 'welcome image', 
    'id' => 'welcome_image',
    'description' => 'Here you can upload an image.',
    'before_widget' => '<div class="image-widget">',
    'after_widget' => '</div>'
    )
    );
    
}

?>