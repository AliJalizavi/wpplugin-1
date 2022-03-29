<?php
/**
 * @package test
 * @version 1
 */
/*
Plugin Name: Hi man!
Description: just a simple text....
Author: Davidix
Version: 1000.1
Author URI: http://ma.tt/
*/



if ( ! defined('WPINC') ){
    die("no way!!!");
}

function wpplugin_settings_page()
{

    add_menu_page( 
        'this is a test plugin',
        'test', 
        'manage_options', 
        'wpplugin', 
        'wpplugin_settings_page_markup', 
        'dashicons-wordpress-alt', 
        3    
    );
}

add_action( 'admin_menu', 'wpplugin_settings_page' );




function wpplugin_settings_page_markup()
{
    // Double check user capabilities.
    if ( !current_user_can('manage_options') ) {
        return;
    }
    ?>
    <div class="warp">
        <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
        <p><?php esc_html_e( 'some content.'); ?></p>
    </div>
    <?php 

}
?>