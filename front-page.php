<?php get_header(); ?>

<section class="css_front-page-content">
	
	<main class="wrapper">

		<h1><?php the_field('front_page_header'); ?></h1>
		
		<h2><?php the_field('front_page_copy'); ?></h2>

		<?php get_template_part('components/call-to-action'); ?>
		
	</main>

</section>

<?php get_footer(); ?>