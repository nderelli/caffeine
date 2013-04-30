<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta content="World Peace">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no"/>
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	
	<?php wp_head(); ?>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/respond.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/ie-min.js"></script>
		<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
</head>

<body <?php body_class(); ?>>
	
	<div class="container">
		<div class="logo">
			<div>
				<img src="<?php bloginfo( 'template_directory' ) ?>/img/logo.png" alt="Dot Dash Slash">
			</div>
			<aside id="description">
				
			</aside>
		</div>
		<header role="header">
			<div>
				<h2><?php bloginfo( 'name' ) ?></h2>
				<p><?php bloginfo( 'description' ) ?></p>	
				<nav id="nav-main" role="navigation">
					<ul class="page-list">
						<?php $query = new WP_Query( 'post_type=page' );
						while ( $query->have_posts() ) : $query->the_post(); ?>
						<li><a class="scroll <?php the_slug(); ?>" href="#<?php the_slug(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile;	wp_reset_postdata(); ?>	
					</ul>
					<ul class="project-list">
						<?php $query = new WP_Query( 'post_type=post' );
							while ( $query->have_posts() ) : $query->the_post(); ?>
						<li><a class="scroll <?php the_slug(); ?>" href="#<?php the_slug(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile;	wp_reset_postdata(); ?>	
					</ul>
				</nav>
			</div>
		</header>
		
		<div class="bump"> </div>
		<section class="content" role="content">