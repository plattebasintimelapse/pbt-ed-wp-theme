<?php 

if ( ! function_exists( 'pbt_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 */
function pbt_setup() {
	/**
	 * Add default posts and comments RSS feed links to head
	 */
	// add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
			'secondary' => 'Secondary Menu'
		)
	); 

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'video', 'image', 'aside' ) );
}
endif; // remag_setup
add_action( 'after_setup_theme', 'pbt_setup' );

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Lessons';
    $submenu['edit.php'][5][0] = 'Lessons';
    $submenu['edit.php'][10][0] = 'Add Lesson';
    $submenu['edit.php'][16][0] = 'Lesson Tags';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Lessons';
    $labels->singular_name = 'Lesson';
    $labels->add_new = 'Add Lesson';
    $labels->add_new_item = 'Add Lesson';
    $labels->edit_item = 'Edit Lesson';
    $labels->new_item = 'Lesson';
    $labels->view_item = 'View Lesson';
    $labels->search_items = 'Search Lessons';
    $labels->not_found = 'No Lessons found';
    $labels->not_found_in_trash = 'No Lessons found in Trash';
    $labels->all_items = 'All Lessons';
    $labels->menu_name = 'Lessons';
    $labels->name_admin_bar = 'Lessons';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

?>

