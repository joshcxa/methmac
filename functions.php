<?php //


/* ***********************************************************************************

    ENQUEUE SCRIPTS (NOT WORKING!)

*********************************************************************************** */
// Add scripts and stylesheets
function methmac_scripts() {
	wp_enqueue_style( 'methmac-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script( 'methmac-js', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '20160204', true );
}

add_action( 'wp_enqueue_scripts', 'methmac_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
	wp_register_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,600,700');
	wp_enqueue_style( 'Raleway');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

/* ***********************************************************************************

    MENUS

*********************************************************************************** */

// Regisiter main menu position
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'methmac'),
) );

/* ***********************************************************************************

    CUSTOM SETTINGS

*********************************************************************************** */

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Methmac Settings', 'Methmac Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Methmac Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }

// LinkedIn
function setting_linkedin() { ?>
  <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
<?php }

// Phone
function setting_phone() { ?>
  <input type="text" name="phone" id="phone" value="<?php echo get_option('phone'); ?>" />
<?php }

// Email
function setting_email() { ?>
  <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section');

  add_settings_field('phone', 'Phone Number', 'setting_phone', 'theme-options', 'section');
  add_settings_field('email', 'Email Address', 'setting_email', 'theme-options', 'section');

  register_setting('section', 'facebook');
  register_setting('section', 'twitter');
  register_setting('section', 'linkedin');

  register_setting('section', 'phone');
  register_setting('section', 'email');
}
add_action( 'admin_init', 'custom_settings_page_setup' );


/* ***********************************************************************************

    TESTIMONIALS CUSTOM POST

*********************************************************************************** */

// Custom Post Type
function create_testimonials_post() {
	register_post_type('testimonials',
			array(
			'labels' => array(
					'name' => __('Testimonials'),
					'singular_name' => __('Testimonials'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action('init', 'create_testimonials_post');


/* ***********************************************************************************

    EVENTS CUSTOM POST

*********************************************************************************** */

// Custom Post Type
function create_events_post() {
	register_post_type('events',
			array(
			'labels' => array(
					'name' => __('Events'),
					'singular_name' => __('Events'),
			),
			'public' => true,
			'has_archive' => true,
            'rewrite' => array('slug' => 'events'),
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action('init', 'create_events_post');

/* ***********************************************************************************

    MISC

    - Featured Images
    - Replace [...] with ... for newsroom posts
    - Modify excerpt length

*********************************************************************************** */

// Support Featured Images
add_theme_support( 'post-thumbnails' );
add_image_size( 'testimonial', 80, 80, true);
add_image_size( 'home-testimonial', 585, 300, true);
add_image_size( 'newsroom', 680, 300, true);

// Replace [...] with ... for newsroom posts
function plain_ellipsis($more) {
    return '…';
}

add_filter('excerpt_more', 'plain_ellipsis');

// Modify excerpt length
function methmac_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'methmac_excerpt_length', 999 );


add_theme_support( 'title-tag' );
