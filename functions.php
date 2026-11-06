<?php
/**
 * Car Repair Blocks functions and definitions
 *
 * @package Car Repair Blocks
 */

if ( ! function_exists( 'car_repair_blocks_setup' ) ) :
function car_repair_blocks_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'car-repair-blocks', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

    add_theme_support('woocommerce');
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );

	if (! defined('CAR_REPAIR_BLOCKS_VERSION')) {
		// Replace the version number of the theme on each release.
		define('CAR_REPAIR_BLOCKS_VERSION', wp_get_theme()->get('Version'));
	}

    require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

	require get_parent_theme_file_path( '/inc/admin/theme-upsell.php' );

    require get_parent_theme_file_path( '/inc/customizer/customizer.php' );
	
}
endif; // car_repair_blocks_setup
add_action( 'after_setup_theme', 'car_repair_blocks_setup' );

function car_repair_blocks_scripts() {
	wp_enqueue_style( 'car-repair-blocks-basic-style', get_stylesheet_uri() );

	$car_repair_blocks_enable_animations = get_option( 'car_repair_blocks_enable_animations', true );

    if ( $car_repair_blocks_enable_animations ) {
        //animation
	wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

    wp_style_add_data( 'car-repair-blocks-basic-style', 'rtl', 'replace' );

    //homepage slider
	wp_enqueue_style('car-repair-blocks-swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), CAR_REPAIR_BLOCKS_VERSION);

	wp_enqueue_script('car-repair-blocks-swiper-bundle-js', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), CAR_REPAIR_BLOCKS_VERSION, true);

	// script.js
	wp_enqueue_script('car-repair-blocks-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), CAR_REPAIR_BLOCKS_VERSION, true);
	
}
add_action( 'wp_enqueue_scripts', 'car_repair_blocks_scripts' );

function car_repair_blocks_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('car-repair-blocks-welcome-notice', get_template_directory_uri() . '/inc/dashboard/car-repair-blocks-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('car-repair-blocks-welcome-notice', 'car_repair_blocks_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('car_repair_blocks_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('car_repair_blocks_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=car-repair-blocks-guide-page')
    ));
}
add_action('admin_enqueue_scripts', 'car_repair_blocks_enqueue_admin_script');

function car_repair_blocks_admin_theme_style() {
   wp_enqueue_style('car-repair-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
   wp_enqueue_style('car-repair-blocks-admin-upsell-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-style.css');
}
add_action('admin_enqueue_scripts', 'car_repair_blocks_admin_theme_style');

// Block Patterns.
require get_template_directory() . '/block-patterns.php';
require get_template_directory() . '/custom-setting.php';
require get_template_directory() .'/inc/TGM/tgm.php';
require_once get_template_directory() . '/inc/dashboard/welcome-notice.php';

/**
 * Redirect to Pro upsell page after theme activation
 */
add_action('after_switch_theme', 'car_repair_blocks_redirect_after_activation');
function car_repair_blocks_redirect_after_activation() {
    if ( ! get_option( 'car_repair_blocks_activation_redirect', false ) ) {
        update_option( 'car_repair_blocks_activation_redirect', true );
        wp_safe_redirect( admin_url( 'themes.php?page=car-repair-blocks-pro' ) );
        exit;
    }
}

add_action( 'admin_bar_menu', 'car_repair_blocks_add_upgrade_button', 100 );

function car_repair_blocks_add_upgrade_button( $car_repair_blocks_wp_admin_bar ) {

    $car_repair_blocks_theme_name = wp_get_theme()->get( 'Name' );

    $car_repair_blocks_args = array(
        'id'    => 'car_repair_blocks_upgrade',
        'title' => '<span style="color:#fff;font-weight:600;">
            🚀 Upgrade to ' . esc_html( $car_repair_blocks_theme_name ) . ' Pro - 20% OFF 
            <span style="background:#ff5722;color:#fff;padding:2px 8px;border-radius:3px;margin-left:6px;">
                Buy Now
            </span>
        </span>',
        'href'  => esc_url( CAR_REPAIR_BLOCKS_BUY_PRO ),
        'meta'  => array(
            'class'  => 'car-repair-blocks-upgrade-btn',
            'title'  => 'Upgrade to Pro',
            'target' => '_blank'
        )
    );

    $car_repair_blocks_wp_admin_bar->add_node( $car_repair_blocks_args );
}