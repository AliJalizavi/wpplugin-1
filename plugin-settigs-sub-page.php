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

*/
if ( ! defined('WPINC') ){
    die("no way!");
}

function wpplugin_settings_pages(){
    add_menu_page( 
        __( 'Plugin Name', 'wpplugin'),
        __( 'Plugin Menu', 'wpplugin'),
        'manage_options',
        'wpplugin',
        'wpplugin_settings_page_markup',
        'dashicons-wordpress-alt';
        3
    );

    add_submenu_page(
        'wpplugin',
        __( 'Plugin Feature 1', 'wpplugin ') ,
        __( 'Feature 1', 'wpplugin' ),
        'manage_options',
        'wpplugin-feature-1',
        'wpplugin_settings_page_markup',
    );

    add_submenu_page(
        'wpplugin',
        __( 'Plugin Feature 2', 'wpplugin ') ,
        __( 'Feature 2', 'wpplugin' ),
        'manage_options',
        'wpplugin-feature-2',
        'wpplugin_settings_page_markup',
    );

    add_submenu_page(
        'wpplugin',
        __( 'Plugin Feature 3', 'wpplugin ') ,
        __( 'Feature 3', 'wpplugin' ),
        'manage_options',
        'wpplugin-feature-3',
        'wpplugin_settings_page_markup',
    );
}