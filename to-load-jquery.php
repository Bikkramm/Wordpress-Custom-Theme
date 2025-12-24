/* note the added jquery should not be in $ format it should be with jQuery format
for example:- my.js
jQuery(document).ready(function() {
    alert('working');
});
*/

<?php
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
