<?php 
function mz_enqueue(){
   // $uri = get_theme_file_uri();
   // wp_register_style('mz_main_stylesheet', get_template_directory_uri() . '/CSS/main.css');
    wp_register_style('main', get_template_directory_uri() . '/CSS/main.css' );

    wp_enqueue_style('main');
}
?>