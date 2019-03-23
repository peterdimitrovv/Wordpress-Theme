<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://html5-templates.com/" />
    <title><?php bloginfo('title') ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">
	<?php 
		wp_head();
	?>
</head>

<body <?php body_class() ?> >
    <!-- Navigation -->
	
	<nav 
	style="background-color: <?=get_option('menu-color')?> !important"	
	class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url')?>">My Bootstrap Theme</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php wp_nav_menu([
					'theme_location' => 'header-menu',
					'container' => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'bs-example-navbar-collapse-1',
					'menu_class' => 'nav navbar-nav navbar-right'
			]);
			?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
