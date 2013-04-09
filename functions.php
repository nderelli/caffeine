<?

// Define own Jquery file and enqueue in footer
function klas_scripts_init() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js','','',true);
    wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'klas_scripts_init');

// Add custom navigation to theme and adds Primary Navigation menu
function klas_menus_init() {
	register_nav_menus(
		array(
				'primary-header-menu' => __( 'Primary Header Menu' )
			)
	);
	wp_create_nav_menu( 'Primary Navigation', array( 'slug' => 'primary-nav' ) );
}
add_action( 'init', 'klas_menus_init' );

// Registers Editor Styles
add_editor_style( 'css/editor-style.css' );

// Add custom logo to Wordpress Login page(s). Logo should be no bigger than 323 pixels wide by 67 pixels high
function klas_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background: url('<?php bloginfo( 'template_directory' ) ?>/img/wp-login-logo.png') no-repeat 0 0;
			margin: 0 0 0 23px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'klas_login_logo' );

// Register theme support for post thumbnails/featured images + example
add_theme_support( 'post-thumbnails' );
//add_image_size( $name, $width, $height, $hard_crop[boolean] );

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

?>