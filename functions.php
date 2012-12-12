<?php
ob_start();

/* functions.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<?php
function my_init_method() {
wp_deregister_script( 'jquery' );
wp_register_script(   'jquery'
    , 'http://code.jquery.com/jquery-latest.min.js');
}    
 
add_action('init', 'my_init_method');
?>