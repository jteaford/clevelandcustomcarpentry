<?php

$version = wp_get_theme()->get( 'Version' );
function jessicateaford_register_styles(){
    wp_enqueue_style('jessicateaford-style', get_template_directory_uri() . "/style.css", array('jessicateaford-bootstrap'), $version, 'all');
    wp_enqueue_style('jessicateaford-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), $version, 'all');
    wp_enqueue_style('jessicateaford-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'jessicateaford_register_styles');

function jessicateaford_register_scripts(){
   
    wp_enqueue_script('jessicateaford-bootstrap', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1');

}

add_action('wp_enqueue_scripts', 'jessicateaford_register_scripts');
?>