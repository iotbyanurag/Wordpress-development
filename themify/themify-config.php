<?php
/***************************************************************************
 *
 * 	----------------------------------------------------------------------
 * 							DO NOT EDIT THIS FILE
 *	----------------------------------------------------------------------
 *
 * 						Copyright (C) Themify
 *
 *	----------------------------------------------------------------------
 *
 ***************************************************************************/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 

/**
 * Theme and Themify Framework Path and URI
 * @since 1.2.2 
 */
defined( 'THEME_DIR' ) || define( 'THEME_DIR', get_template_directory() );
defined( 'THEME_URI' ) || define( 'THEME_URI', get_template_directory_uri() );
defined( 'THEMIFY_DIR' ) || define( 'THEMIFY_DIR', THEME_DIR . '/themify' );
defined( 'THEMIFY_URI' ) || define( 'THEMIFY_URI', THEME_URI . '/themify' );

function themify_config_init() {

	/* 	Global Vars
 	***************************************************************************/
	global $pagenow, $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 1165;
	}

	/*	Activate Theme
 	***************************************************************************/
	if ( isset( $_GET['activated'] ) && 'themes.php' === $pagenow ) {
		themify_maybe_clear_legacy();
		add_action( 'init', 'themify_theme_first_run', 20 );

		include_once( trailingslashit( THEMIFY_DIR ) . 'themify-builder/first-run.php' );
	}


	/* 	Themify Framework Version
 	****************************************************************************/
	define( 'THEMIFY_VERSION', '5.1.6' ); 

	/* 	Run after update
 	***************************************************************************/
	if ( is_admin() && 'update_ok' === get_option( 'themify_update_ok_flag' ) ) {
		/**
		 * Fires after the updater finished the updating process.
		 *
		 * @since 1.8.3
		 */
		do_action( 'themify_updater_post_install' );
	}
	/* 	Woocommerce
	 ***************************************************************************/
	if( themify_is_woocommerce_active() ) {
	    defined( 'WOOCOMMERCE_VERSION' ) || define( 'WOOCOMMERCE_VERSION', '' );
	    add_theme_support('woocommerce');
	    if(!themify_check( 'setting-disable_product_image_zoom',true)){
		    add_theme_support( 'wc-product-gallery-zoom' );
	    }
	    add_theme_support( 'wc-product-gallery-lightbox' );
	    add_theme_support( 'wc-product-gallery-slider' );
	}

	/**
	 * Editor Style
	 * @since 2.0.2
	 */
	add_editor_style();
	add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'themify_config_init' );

function themify_theme_first_run() {
	flush_rewrite_rules();
	wp_redirect( admin_url() . 'admin.php?page=themify&firsttime=true' );
	exit;
}

///////////////////////////////////////
// Load theme languages
///////////////////////////////////////

load_theme_textdomain( 'themify', THEME_DIR.'/languages' );


/**
 * Load Filesystem Class
 * @since 2.5.8
 */
require_once( THEMIFY_DIR . '/class-themify-filesystem.php' );


require_once( THEMIFY_DIR . '/themify-icon-picker/themify-icon-picker.php' );

if ( is_file( THEMIFY_DIR . '/class-themify-get-image-size.php' ) ) {
	require_once THEMIFY_DIR . '/class-themify-get-image-size.php';
}

require_once THEMIFY_DIR . '/img.php';


/**
 * Load Cache
 */
require_once(THEMIFY_DIR . '/cache/class-themify-cache.php');

/**
 * Load Page Builder
 * @since 1.1.3
 */
require_once( THEMIFY_DIR . '/themify-builder/themify-builder.php' );

/**
 * Load Themify Role Access Control
 * @since 2.6.2
 */
require_once( THEMIFY_DIR . '/class-themify-access-role.php' );
Themify_Access_Role::get_instance();

/**
 * Load Enqueue Class
 * @since 2.5.8
 */
require_once( THEMIFY_DIR . '/class-themify-enqueue.php' );
Themify_Enqueue_Assets::init();

/**
 * Load Customizer
 * @since 1.8.2
 */
require_once THEMIFY_DIR . '/customizer/class-themify-customizer.php';

/**
 * Load Schema.org Microdata
 * @since 2.6.5
 */
if ( 'on' !== themify_get( 'setting-disable_microdata',false,true ) ) {
	require_once THEMIFY_DIR . '/themify-microdata.php';
	$GLOBALS['themify_microdata'] = new Themify_Microdata;
}

require_once THEMIFY_DIR . '/themify-wp-filters.php';
require_once THEMIFY_DIR . '/themify-plugin-compatibility.php';
require_once THEMIFY_DIR . '/themify-template-tags.php';
require_once THEMIFY_DIR . '/class-themify-menu-icons.php';
Themify_Menu_Icons::get_instance();

if( is_admin() ){
    require_once THEMIFY_DIR . '/themify-admin.php';
    include_once THEME_DIR.'/admin/admin.php';
}

/**
 * Add support for feeds on the site
 */
add_theme_support( 'automatic-feed-links' );


/**
 * Load Themify Hooks
 * @since 1.2.2
 */
require_once(THEMIFY_DIR . '/themify-hooks.php' );
require_once(THEMIFY_DIR . '/class-hook-contents.php' );
$GLOBALS['themify_hooks'] = new Themify_Hooks();

/**
 * Load Themify Theme Metabox
 * @since 2.6.2
 */
function themify_use_theme_metabox( $url ) {
	remove_action( 'site_url', 'themify_builder_plugin_metabox', 20 );

	return $url;
}
add_action( 'site_url', 'themify_use_theme_metabox', 10 );

defined( 'THEMIFY_METABOX_URI' ) || define( 'THEMIFY_METABOX_URI', THEMIFY_URI . '/themify-metabox/' );
defined( 'THEMIFY_METABOX_DIR' ) || define( 'THEMIFY_METABOX_DIR', THEMIFY_DIR . '/themify-metabox/' );
require_once( THEMIFY_DIR . '/themify-metabox/themify-metabox.php' );


require_once( THEMIFY_DIR . '/google-fonts/functions.php' );


/**
 * Clear legacy themify-ajax.php and strange files that might have been uploaded to or directories created in the uploads folder within the theme.
 * @since 1.6.3
 */
function themify_maybe_clear_legacy() {
	$flag = 'themify_clear_legacy';
	$clear = get_option( $flag );
	if ( empty( $clear )) {
	    
		if ( ! function_exists( 'WP_Filesystem' ) ) {
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
		}

		WP_Filesystem();
		global $wp_filesystem;

		$legacy = THEMIFY_DIR . '/themify-ajax.php';
		if ( $exists = $wp_filesystem->exists( $legacy ) ) {
			$wp_filesystem->delete( $legacy );
		}
		$list = $wp_filesystem->dirlist( THEME_DIR . '/uploads/', true, true );
		if ( is_array( $list ) ) {
			foreach ( $list as $item ) {
				if ( 'd' === $item['type'] ) {
					foreach ( $item['files'] as $subitem ) {
						if ( 'd' === $subitem['type'] ) {
							// There shouldn't be a directory here, let's delete it
							$del_dir = THEME_DIR . '/uploads/' . $item['name'] . '/' . $subitem['name'];
							$wp_filesystem->delete( $del_dir, true );
						} else {
							$extension = pathinfo( $subitem['name'], PATHINFO_EXTENSION );
							if ( ! in_array( $extension, array( 'jpg', 'gif', 'png', 'jpeg', 'bmp','webp','apng' ),true ) ) {
								$del_file = THEME_DIR . '/uploads/' . $item['name'] . '/' . $subitem['name'];
								$wp_filesystem->delete( $del_file );
							}
						}
					}
				} else {
					$extension = pathinfo( $item['name'], PATHINFO_EXTENSION );
					if ( ! in_array( $extension, array( 'jpg', 'gif', 'png', 'jpeg', 'bmp','webp','apng' ),true ) ) {
						$del_file = THEME_DIR . '/uploads/' . $item['name'];
						$wp_filesystem->delete( $del_file );
					}
				}
			}
		}
		update_option( $flag, true );
	}
}
add_action( 'init', 'themify_maybe_clear_legacy', 9 );

/**
 * Change setting name where theme settings are stored.
 * Runs after updater succeeded.
 * @since 1.7.6
 */
function themify_migrate_settings_name() {
	$flag = 'themify_migrate_settings_name';
	$change = get_option( $flag );
	if ( empty( $change )) {
		if ( $themify_data = get_option( wp_get_theme()->display('Name') . '_themify_data' ) ) {
			themify_set_data( $themify_data );
		}
		update_option( $flag, true,false );
	}
}
add_action( 'after_setup_theme', 'themify_migrate_settings_name', 1 );

/**
 * Function called after a successful update through WP Admin.
 * Code to run ONLY ONCE after update must be added here.
 *
 * @since 1.8.3
 */
function themify_theme_updater_post_install() {
	// Delete option to reset styling behaviour
	delete_option( 'themify_has_styling_data' );

	// Once all tasks have been executed, delete the flag.
	delete_option( 'themify_update_ok_flag' );
}
add_action( 'themify_updater_post_install', 'themify_theme_updater_post_install' );

/**
 * Refresh permalinks to avoid 404 on custom post type fetching.
 * @since 1.9.3
 */
function themify_flush_rewrite_rules_after_manual_update() {
	$flag = 'themify_flush_rewrite_rules_after_manual_update';
	$change = get_option( $flag );
	if (  empty( $change ) ) {
		flush_rewrite_rules();
		update_option( $flag, true,false );
	}
}
add_action( 'init', 'themify_flush_rewrite_rules_after_manual_update', 99 );

/**
 * After a Builder layout is loaded, adjust some page settings for better page display.
 *
 * @since 2.8.9
 */
function themify_adjust_page_settings_for_layouts( $args ) {
	if( 'custom' === $args['layout_group'] )
		return;
	$post_id = $args['current_builder_id'];
	$post = get_post( $post_id );
	update_post_meta( $post_id, 'content_width', 'full_width' );
	if( $post->post_type === 'page' ) {
		update_post_meta( $post_id, 'page_layout', 'sidebar-none' );
		update_post_meta( $post_id, 'hide_page_title', 'yes' );
	} else {
		update_post_meta( $post_id, 'layout', 'sidebar-none' );
		update_post_meta( $post_id, 'hide_post_title', 'yes' );
	}
}
add_action( 'themify_builder_layout_loaded', 'themify_adjust_page_settings_for_layouts' );
add_action( 'themify_builder_layout_appended', 'themify_adjust_page_settings_for_layouts' );

/**
 * Load themeforest-functions.php file if available
 * Additional functions for the theme from ThemeForest store.
 */
if( is_file( trailingslashit( get_template_directory() ) . 'themeforest-functions.php' ) ) {
	include( trailingslashit( get_template_directory() ) . 'themeforest-functions.php' );
}

/**
 * Setup procedure to load theme features packed in Themify framework
 *
 * @since 3.2.0
 */
function themify_load_theme_features() {
	/* load megamenu feature */
	if ( current_theme_supports( 'themify-mega-menu' ) ) {
		include( THEMIFY_DIR . '/megamenu/class-mega-menu.php' );
	}

	if ( current_theme_supports( 'themify-toggle-dropdown' ) ) {
		include( THEMIFY_DIR . '/class-themify-menu-toggle-dropdown.php' );
		Themify_Menu_Toggle_Dropdown::get_instance();
	}

	/* check if Google fonts are disabled */
	if ( ! defined( 'THEMIFY_GOOGLE_FONTS' ) && themify_get( 'setting-webfonts_list',false,true ) === 'disabled' ) {
		define( 'THEMIFY_GOOGLE_FONTS', false );
	}

}
add_action( 'after_setup_theme', 'themify_load_theme_features', 11 );