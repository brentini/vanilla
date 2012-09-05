<!DOCTYPE HTML>
<html>
<head>
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/menu.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	
	
	<?php wp_head(); ?>
	
</head>

<body>
	<div id="container">

			<!--Header - Name of Item Here-->
			<header class="group">
				<?php $logo= get_option('director_logo', IMAGES.'/logo.png'); ?>
				<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
				
				<?php  get_search_form(); ?>
								
				<?php wp_nav_menu( array('menu' => '', 'container' => 'nav' )); ?>
				
			</header>
			
			<!-- End Header -->
			<?php if(!is_front_page()) : ?>  <?php endif; ?>
			
			
			
			<!-- Main Area -->
			