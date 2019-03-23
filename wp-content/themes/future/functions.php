<?php 

function AddStyles()
{
	$path = get_template_directory_uri();
	wp_enqueue_style('bootstrap', $path . '/css/bootstrap.css');
	wp_enqueue_style('main', $path . '/css/modern-business.css');
	wp_enqueue_style('custom', $path. '/css/custom.css');
}

function AddScripts()
{
	$path = get_template_directory_uri();
	wp_enqueue_script('jquery', $path . '/js/jquery.js');
	wp_enqueue_script('bootstrap-js', $path . '/js/bootstrap.min.js');
}

function RegisterMenu()
{
	register_nav_menu('header-menu', 'Header menu');
	register_nav_menu('footer-menu', 'Footer menu');
}

function RegisterAdminMenu()
{
	add_menu_page('Theme Settings', 'Theme Settings', 
	'manage_options', 'theme-settings',
	'ShowThemeSettings','dashicons-star-filled', 50);
}

function ShowThemeSettings()
{
	include 'views/theme-settings.php';
}

function RegisterThemeSettings()
{
	register_setting('group-name', 'menu-color');
}

function RegisterSidebar()
{
	$options = ['id' => 'footer-a',
				'name' => 'FooterA',
				'before_widget' => '<div class="col-md-4">',
				'after_widget' => '</div>'
				];
	register_sidebar($options);
}

add_theme_support('post-thumbnails');
add_action('widgets_init', 'RegisterSidebar');
add_action('admin_init', 'RegisterThemeSettings');
add_action('admin_menu', 'RegisterAdminMenu');
add_action('init', 'RegisterMenu');
add_action('wp_enqueue_scripts', 'AddStyles');
add_action('wp_footer', 'AddScripts');