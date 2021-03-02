<?php
/**
 * 
 * @package japan
 */
?>

<?php

define( 'JAPAN_THEME_DIR', get_theme_directory() );
define( 'JAPAN_THEME_URI', get_theme_directory_uri() );


if ( !function_exists( 'japan_setup' ) ) :
function japan_setup() {
    load_theme_textdomain( 'japan', JAPAN_THEME_DIR . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );

}
endif;
add_action( 'after_setup_theme', 'japan_setup' );