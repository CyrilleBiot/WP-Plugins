<?php
/**
* Plugin Name: Custom mime types
* Plugin URI: https://crust.ovh
* Description: Bloquer upload en fonction de type mimes
* Version: 1.0
* Author: crust
* Author URI: https://crust.ovh
**/
function custom_mime_types( $mimes ){
  // Forbiden ALL
     unset( $mimes );
  // OK 4 jpg, gif, png and mp3 only
     $mimes['jpg|jpeg|jpe'] = 'image/jpeg';
     $mimes['gif'] = 'image/gif';
     $mimes['png'] = 'image/png'; 
     $mimes['mp3|m4a|m4b'] = 'audio/mpeg';
// List mime types available here
// https://codex.wordpress.org/Function_Reference/get_allowed_mime_types
return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types', 1, 1);
?>
