<?php get_header(); ?>

<?php if ( have_rows('sections') ): $i = 0; $j = 0; ?>

	<ul id="gallery-nav">

	<?php while ( have_rows('sections') ): the_row(); $i++; ?>
	
		<li<?php if ( $i === 1 ): ?> class="active"<?php endif; ?>>
			<a href="#gallery-<?php echo $i; ?>"><?php the_sub_field('section_title'); ?></a>
		</li>	

	<?php endwhile; ?>

	</ul>
	
	<div id="galleries">
	
	<?php while ( have_rows('sections') ): the_row(); $j++; ?>
	
		<section id="gallery-<?php echo $j; ?>" class="gallery <?php if ( $j === 1 ): ?>featured-gallery<?php endif; ?>">

		<h1><?php the_sub_field('section_title'); ?></h1>

		<?php if ( have_rows('section_media') ): $i = 0; ?>

			<div class="gallery-images">

			<?php while ( have_rows('section_media') ): the_row(); $i++; ?>
				
				<?php if ( get_row_layout() == 'image' ):
					
					// define image url	
					$image = get_sub_field('image'); ?>

					<li id="lightbox-item-<?php echo $i; ?>"
						class="gallery-slide-image" 
						data-image="<?php echo $image['url']; ?>" 
						style="background:url('<?php echo $image['url']; ?>') center center no-repeat; background-size:cover;" />
						<div class="gallery-image-height"></div>
					</li>

				<?php else: 

					// define video thumbnail and embed code
					$video_embed = get_sub_field('video_embed');
					$video_thumbnail = get_sub_field('video_thumbnail'); ?>

					<li 
						id="lightbox-item-<?php echo $i; ?>"
						class="gallery-slide-video" 
						data-video='<?php echo $video_embed; ?>' 
						style="background:url('<?php echo $video_thumbnail['url']; ?>') center center no-repeat; background-size:cover;" />
						<div class="gallery-image-height"></div>
					</li>

				<?php endif; ?>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>

		</section>

	<?php endwhile; ?>

	</div>

	<div class="clear"></div>

	<?php get_template_part('components/lightbox-gallery'); ?>

<?php endif; ?>

<div class="services-cta">
	<?php get_template_part('components/call-to-action'); ?>
	<a class="secondary-cta" href="<?php bloginfo('url'); ?>/services">Or see our services</a>
</div>

<?php get_footer(); ?>