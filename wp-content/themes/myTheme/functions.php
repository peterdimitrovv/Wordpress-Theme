<?php
function AddStyles()
{
	//get template directory
	$p = get_template_directory_uri();
	wp_enqueue_style('animate', $p. '/css/animate.css');
	wp_enqueue_style('bootstrap.min', $p. '/css/bootstrap.min.css');
	wp_enqueue_style('flaticon', $p. '/css/flaticon.css');
	wp_enqueue_style('font-awesome.min', $p. '/css/font-awesome.min.css');
	wp_enqueue_style('owl.carousel', $p. '/css/owl.carousel.css');
	wp_enqueue_style('style', $p. '/css/style.css');
}

function AddScripts()
{
	$p = get_template_directory_uri();
	wp_enqueue_script('jquery-3.2.1.min', $p . '/js/jquery-3.2.1.min.js');
	wp_enqueue_script('owl.carousel.min', $p . '/js/owl.carousel.min.js');
	wp_enqueue_script('main', $p . '/js/main.js');
	wp_enqueue_script('circle-progress.min', $p . '/js/circle-progress.min.js');
	wp_enqueue_script('bootstrap.min', $p . '/js/bootstrap.min.js');
}

function RegisterMenu()
{
	register_nav_menu('header-menu', 'Header menu');
	register_nav_menu('footer-menu', 'Footer menu');
}

function RegisterSidebar()
{
	$optionsForA = ['id' => 'footer-a',
				'name' => 'FooterA',
				'before_widget' => '<div class="col-lg-4 col-md-6 ftw-warp">',
				'after_widget' => '</div>'
				];
	register_sidebar($optionsForA);

	$optionsForB = ['id' => 'footer-b',
				'name' => 'FooterB',
				'before_widget' => '<div class="col-lg-4 col-md-6 ftw-warp">',
				'after_widget' => '</div>'
				];
	register_sidebar($optionsForB);
}

function RegisterAdminMenu()
{
	add_menu_page('Theme Settings', 'Настройки на темата', 
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
	register_setting('group-name', 'menu-font-color');
}

add_action('wp_enqueue_scripts', 'AddStyles');
add_action('wp_footer', 'AddScripts');
add_action('init', 'RegisterMenu');
add_action('widgets_init', 'RegisterSidebar');
add_action('admin_menu', 'RegisterAdminMenu');
add_action('admin_init', 'RegisterThemeSettings');
add_theme_support('post-thumbnails');