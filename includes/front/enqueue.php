<?php 
function mz_enqueue(){
   // $uri = get_theme_file_uri();
   // wp_register_style('mz_main_stylesheet', get_template_directory_uri() . '/CSS/main.css');
    wp_register_style('main', get_template_directory_uri() . '/CSS/main.css' );

    wp_enqueue_style('main');
    wp_register_style('mz-google-fonts','https://fonts.googleapis.com/css?family=Raleway|Raleway+Dots|Roboto+Slab&display=swap');
    wp_enqueue_style('mz-google-fonts');
    wp_register_script('mz_scroll', get_template_directory_uri() . '/js/scroll.js','', '', true );
    wp_enqueue_script('mz_scroll');

}
?>