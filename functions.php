<?php
/* functions.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<?php
/* Call jQuery in */
function my_scripts() {
    wp_enqueue_script('jquery');            
}    

add_action('wp_enqueue_scripts', 'my_scripts');
/* End jQuery call */
?>