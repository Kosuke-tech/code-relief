<?php

/*----------------------------------------------------------------------------
    cssファイルとjsファイルをfunctions.phpで管理。
-----------------------------------------------------------------------------*/

function theme_files()
{
    wp_enqueue_style('style.css', get_theme_file_uri('/css/style.css'), ['min.css'], '6.7.2');
    wp_enqueue_style('min.css', get_theme_file_uri('/css/style.min.css'),);
    wp_enqueue_script('jquery',);
    wp_enqueue_script('script.js', get_theme_file_uri('js/script.js'), ['jquery'], 'null', true);
}

add_action('wp_enqueue_scripts', 'theme_files');