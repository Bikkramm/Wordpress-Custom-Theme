add_action('wp_enqueue_scripts', function() {

    // Global CSS
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', [], null);

    // About page specific CSS/JS
    if (is_page('about')) {  // slug ya ID
        wp_enqueue_style('about-css', get_template_directory_uri() . '/assets/css/about.css', [], null);
        wp_enqueue_script('about-js', get_template_directory_uri() . '/assets/js/about.js', [], null, true);
    }

    // Our Work page specific CSS/JS
    if (is_page('ourwork')) {  // slug ya ID
        wp_enqueue_style('ourwork-css', get_template_directory_uri() . '/assets/css/ourwork.css', [], null);
        wp_enqueue_script('ourwork-js', get_template_directory_uri() . '/assets/js/ourwork.js', [], null, true);
    }

   if ( is_page(['about', 'ourwork']) ) {
    // #Shorthand Ye code "About" aur "Our Work" pages pe chalega
}


});


//Short code same result
add_action('wp_enqueue_scripts', function() {

    // Global CSS/JS
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', [], null);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/main.js', [], null, true);

    // Page-specific CSS/JS for About & Our Work
    if ( is_page(['about', 'ourwork']) ) {
        wp_enqueue_style('page-css', get_template_directory_uri() . '/assets/css/page.css', [], null);
        wp_enqueue_script('page-js', get_template_directory_uri() . '/assets/js/page.js', [], null, true);
    }

});
