<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		<?php
  			bloginfo('name');
  		?>
	</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

		<meta name="description" content="<?php bloginfo('description')?>">
  <?php
	wp_head();
  ?>
  <style>
  	.menu-item a {
		color: <?=get_option('menu-font-color')?> !important;
	}
  </style>


</head>
<body <?php body_class()?> >
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section" style="background-color: <?=get_option('menu-color')?> !important;"	
	class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="header-top">
			<div class="container">
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<?php wp_nav_menu([
					'theme_location' => 'header-menu',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'main-menu'
				]);
				?>
			</div>
		</div>
	</header>
	<!-- Header section end -->