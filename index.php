<?php

	/**
	 * Index
	 *
	 * AARON BUNGE DESIGN
	 *
	 * 
	 * @package aaronbunge
	 * @since Aaron Bunge Design 1.0
	 */
	 
get_header(); ?>

	<div class="container">
		<!--<div class="one column">
			<div class="start">
				<h1><a class="start-button" href="http://www.aaronbunge.com/berkeley-haas-play-conference/">start</a></h1>
			</div>
		</div>-->
		<!-- project grid -->
		<div id="project-grid">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="project-item thumb columns">
				<div class="project-title">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="project-tags">
					<h3><?php the_tags('', ', ', ''); ?></h3>
				</div>
				<div class="project-image red">
					<a href="<?php esc_url( the_permalink() ); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>