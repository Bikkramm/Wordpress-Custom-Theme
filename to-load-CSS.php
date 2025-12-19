my-theme/
├── assets/
│   └── css/
│       └── style.css


add_action('wp_enqueue_scripts', function() {

    wp_enqueue_style(
        'theme-style',                               // unique handle
        get_template_directory_uri() . '/assets/css/style.css', // file URL
        [],                                          // dependencies (agar koi CSS pe depend nahi)
        null                                         // version (null = default)
    );

});
