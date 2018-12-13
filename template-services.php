<?php /* Template Name: Services */ get_header(); ?>

<?php if ( have_rows('service') ): ?>

	<div class="services">

	<?php 
		$i = 0;

		while ( have_rows('service') ): the_row();

			/* content vars*/
			$service_title = get_sub_field('service_title');
			$service_image = get_sub_field('service_image');
			$service_copy = get_sub_field('service_copy');
			
			/* counter provides unique number for individual section ID */
			$i++;

		?>

		<section class="service" id="service-<?php echo $i; ?>" style="background:url('<?php echo $service_image['url']; ?>') center center no-repeat; background-size:cover;">
			
			<div class="section-content">
				<h1><?php echo $service_title; ?></h1>
				<p><?php echo $service_copy; ?></p>
			</div>
			
		</section>

	<?php endwhile; ?>

	</div>
	
<?php endif; ?>

<div class="services-cta">
	<?php get_template_part('components/call-to-action'); ?>
	<a class="secondary-cta" href="<?php bloginfo('url'); ?>/portfolio">Or view portfolio</a>
</div>

<?php get_footer(); ?>