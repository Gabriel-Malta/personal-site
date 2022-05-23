<?php

function particles_enqueue(){
    $dir = get_template_directory_uri();
    wp_enqueue_style('vars-css', $dir.'/css/vars.css');
    wp_enqueue_style('js-states-css', $dir.'/css/js-states.css');
    wp_enqueue_style('common-css', $dir.'/css/common.css');
    wp_enqueue_style('header-css', $dir.'/css/header.css');

    wp_enqueue_script('header-func-js', $dir.'/js/header.js', false, true);
}

add_action('wp_enqueue_scripts','particles_enqueue');

function particles_register_menus(){
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu'
        )
    );
}

add_action( 'init', 'particles_register_menus' );