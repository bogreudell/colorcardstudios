<?php /* Template Name: Portfolio */ get_header(); ?>

<div class="wrapper" id="portfolio-galleries">
<?php 
	$portfolio_gallery = get_field('select_galleries');
	
	if ($portfolio_gallery): ?>
	<ul>
	<?php foreach( $portfolio_gallery as $post ): setup_postdata($post); ?>
		<li>
		<a href="<?php the_permalink(); ?>">
			<div class="portfolio-gallery-thumbnail" style="background:url(<?php the_post_thumbnail_url(); ?>) center center no-repeat; background-size:cover">
				<div class="inner-padding"></div>
			</div>
			<h2><?php the_title(); ?></h2>
		</a>
		</li>

	<?php endforeach; wp_reset_postdata(); ?>	
	</ul>
	<?php endif; ?>

 </div>

<?php get_footer(); ?>