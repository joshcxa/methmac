<?php //

// Add scripts and stylesheets
function methmac_scripts() {
    echo "Does this output to the actual page?";
	wp_enqueue_style( 'methmac-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script( 'methmac-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '20160204', true );
}

add_action( 'wp_enqueue_scripts', 'methmac_scripts' );


// Regisiter main menu position
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'methmac'),
) );


// Replace [...] with ... for newsroom posts
function plain_ellipsis($more) {
    return '…';
}

add_filter('excerpt_more', 'plain_ellipsis');
