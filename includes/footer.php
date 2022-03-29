<?php


if ( ! defined( 'WPINC') ) {
    die;
}

function wpplugin_custom_admin_footer( $footer) {
    $new_footer = str_replace( '.</span>', __(' and <a href="http://rubico.ir/" Ali Jalizavi</a>. </span>',
     'wpplugin'), $footer);
     return $new_footer;

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );

?>