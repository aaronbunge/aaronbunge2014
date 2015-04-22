<?php

	/**
	 * Header
	 *
	 * AARON BUNGE DESIGN
	 *
	 * 
	 * @package aaronbunge
	 * @since Aaron Bunge Design 1.0
	 */
	  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="description" content="A New York City based art director and designer. I believe design should be clear and concise, appropriate, timeless and above all—artful. I specialize in branding, web design, data visualization, packaging, and collateral design." />
	<title><?php wp_title('–',true,'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<script src="../../assets/js/html5shiv.js"></script>
	<script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
	<body>
		<!-- header -->
		<div id="header-bg">
			<div class="container">
				<div id="header" class="one column">
					<div class="logotype">
						<h1><a href="/">aaron bunge</a></h1>
					</div>
					<div class="menu">
						<a id="mobile-icon" href="#">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</div>
					<nav>
						<h3>
							<a href="/info"><span class="m-dropdown">about/contact</span></a>
							<a href="http://www.aestheticperspectives.com"><span class="m-dropdown">blog</span></a>
						<?php query_posts('cat=normal'); ?>
						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<a href="<?php esc_url( the_permalink() ); ?>"><span class="m-dropdown"><?php the_title(); ?></span></a>
						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
						</h3>
					</nav>
				</div>
			</div>
		</div>