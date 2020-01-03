<?php
//variables

//includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
//hooks
add_action('wp_enqueue_scripts', 'mz_enqueue');
add_action('after_setup_theme','mz_setup_theme');
//short codes

?>

