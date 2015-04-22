<?php

	/**
	 * Single Post
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
					<div class="arrow-left">
						<a href="<?php the_field('previous'); ?>">
							<div class="lines">
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</a>
					</div>
					<div class="arrow-right">
						<a href="<?php the_field('next'); ?>">
							<div class="lines">
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</a>
					</div>
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
			<!-- images -->
			<div id="project-content">
			<?php if(get_field('intro_content')): ?>
			<?php while( have_rows('intro_content') ): the_row(); ?>	
				<div class="one column">
					<img src="<?php the_sub_field('image'); ?>" />
					<div id="video">
						<video width="100%" preload="metadata" <?php the_sub_field('autoplay'); ?> <?php the_sub_field('loop'); ?> <?php the_sub_field('controls'); ?> ><source type="video/mp4" src="<?php the_sub_field('video'); ?>"/><a href="<?php the_sub_field('video'); ?>"><?php the_sub_field('video'); ?></a></video>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
			<?php $images = get_field('project_content'); if( $images ): ?>
				<?php foreach( $images as $image ): ?>
				<div class="<?php echo get_field('columns', $image['id']); ?>">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
					<h5><?php echo $image['caption']; ?></h5>
				</div>
				<?php endforeach; ?>
			<?php endif; ?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>