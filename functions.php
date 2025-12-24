<?php
function mytheme_setup(){
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','mytheme_setup');


function mystyle(){
wp_enqueue_style(
  'theme-style',
  get_template_directory_uri() . '/custom.css'  
);
}
add_action('wp_enqueue_scripts','mystyle');

function myscript() {
    wp_enqueue_script(
        'my-js',
        get_template_directory_uri() . '/my.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'myscript');

?>
