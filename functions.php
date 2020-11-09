<?php
//Setup
define('MZ_DEV_MODE', true);

//includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
//hooks
add_action('wp_enqueue_scripts', 'mz_enqueue');
add_action('after_setup_theme','mz_setup_theme');
//short codes


//custom post type

function create_posttype() {
 
    register_post_type( 'protectedSites',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'protectedSites' ),
                'singular_name' => __( 'protectedSite' )
            ),
            'public' => true,
            'has_archive' => true,
			'menu_icon' => 'dashicons-book-alt',
            'rewrite' => array('slug' => 'protectedSites'),
			'taxonomies'  => array( 'category' ),
            'show_in_rest' => true,
			 'supports' => array(
            'title',
            'editor',
            'comments',
            'revisions',
            'author',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ),
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'protectedSites');
    $query->set('post_type',$post_type);
    return $query;
    }
}
?>

