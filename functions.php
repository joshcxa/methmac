<?php

// Regisiter main menu position
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'methmac'),
) );




// Replace [...] with ... for newsroom posts
function plain_ellipsis($more) {
    return '…';
}

add_filter('excerpt_more', 'plain_ellipsis');
