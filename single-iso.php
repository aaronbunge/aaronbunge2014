<?php

	/**
	 * Template Name Posts: Isotope
	 *
	 * AARON BUNGE DESIGN
	 *
	 * 
	 * @package aaronbunge
	 * @since Aaron Bunge Design 1.0
	 */
	 
get_header(); ?>

	<div id="project-nav">
		<div class="container">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="one column">	
				<div id="next-prev">
					<a id="prev" href="<?php the_field('previous'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.svg"/></a>  <a id="next" href="<?php the_field('next'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/next.svg"/></a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="container">
		<!-- project post -->
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div id="project-post">
			<div class="one column">
				<div id="project-tag">
					<h4><?php the_time( 'Y' ); ?> / <?php the_tags('', ', ', ''); ?></h4>
				</div>
				<div id="project-title">
					<h1><?php the_title(); ?></h1>
				</div>
				<div id="project-copy">
					<h4><?php the_content(); ?></a>
					</h4>
				</div>
			</div>
		</div>
		<!-- iso images -->
		<div id="iso-content">
		<?php $images = get_field('isotope_content'); if( $images ): ?>
			<?php foreach( $images as $image ): ?>
			<div class="item">
				<a class="fancybox" rel="group2" href="<?php echo $image['url']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo $image['url']; ?>&w=800"/></a>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>	
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>