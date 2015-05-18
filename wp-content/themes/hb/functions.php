<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


add_action( 'the_content', 'hb_test_function',1 );

function hb_test_function($content) {
   $content='<p>insert contenu avant</p>'. $content .'<p>insert contenu après</p>';
   return $content;
}

add_action( 'the_title', 'hb_test_function_title',1 );

function hb_test_function_title($title) {
   $title=$title."_HB";
   return $title;
}