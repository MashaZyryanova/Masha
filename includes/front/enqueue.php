<?php 
function mz_enqueue(){
   // $uri = get_theme_file_uri();
   $ver = MZ_DEV_MODE ? time() : false;
   // wp_register_style('mz_main_stylesheet', get_template_directory_uri() . '/CSS/main.css');
    wp_register_style('main', get_template_directory_uri() . '/CSS/main.css',[],$ver );
    wp_enqueue_style('main');
    wp_register_style('mz-google-fonts','https://fonts.googleapis.com/css?family=Raleway|Raleway+Dots|Roboto+Slab&display=swap');
    wp_enqueue_style('mz-google-fonts');

    wp_register_script('swup','https://cdnjs.cloudflare.com/ajax/libs/swup/2.0.11/swup.min.js','','',true);
    wp_enqueue_script('swup');
    wp_enqueue_script('mz_nav', get_template_directory_uri() . '/js/nav.js','', '', true );
    wp_enqueue_script('mz_main', get_template_directory_uri() . '/js/main.js','', '', true );
    wp_enqueue_script('mz_swup', get_template_directory_uri() . '/js/transitions.js','', '', true );
    
}
?>