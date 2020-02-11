<?php 
function mz_enqueue(){
   // $uri = get_theme_file_uri();
   $ver = MZ_DEV_MODE ? time() : false;
   // wp_register_style('mz_main_stylesheet', get_template_directory_uri() . '/CSS/main.css');
    wp_register_style('main', get_template_directory_uri() . '/CSS/main.css',[],$ver );

    wp_enqueue_style('main');
    wp_register_style('mz-google-fonts','https://fonts.googleapis.com/css?family=Raleway|Raleway+Dots|Roboto+Slab&display=swap');
    wp_enqueue_style('mz-google-fonts');

     //wp_enqueue_script('mz_scroll', get_theme_file_uri() . '/js/scroll.js','', '', true );
    // wp_enqueue_script('mz_scroll');

    wp_enqueue_script('mz_nav', get_template_directory_uri() . '/js/nav.js','', '', true );
    wp_enqueue_script('mz_main', get_template_directory_uri() . '/js/main.js','', '', true );
    
   

}
?>