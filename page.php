<?php

	/**
	 * Page
	 *
	 * AARON BUNGE DESIGN
	 *
	 * 
	 * @package aaronbunge
	 * @since Aaron Bunge Design 1.0
	 */
	 
get_header(); ?>

	<div id="angry">
		<div class="container">	
			<div class="one column">
				<div id="angry-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/face.svg"/></div>
			</div>
		</div>
	</div>
	<div class="container">
		<!-- page -->
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div id="info-post">
			<div class="one column">
				<div id="headshot">
					<img src="<?php the_field('headshot'); ?>"/>
				</div>
				<div id="info-copy-main">
					<h1><?php the_field('copy_secondary'); ?></h1>
				</div>
				<div id="info-copy-secondary">
					<h4><?php the_content(); ?></h4>
				</div>
				<div id="info-email">
					<h1><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></h1>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>