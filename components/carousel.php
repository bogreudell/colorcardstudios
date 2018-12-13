<?php if ( have_rows('slides') ): ?>
	
	<ul class="carousel">
		
		<?php 

			$i = 0; 
			
			while ( have_rows('slides') ): the_row(); 
			
			$image = get_sub_field('image');
			$caption = get_sub_field('caption'); $i ++; 

			?>
			<li class="slide <?php if ( $i == 1 ): ?>active<?php endif; ?>" style="background:url('<?php echo $image['url']; ?>') center center no-repeat; background-attachment:fixed;">
				<?php 

					if ( $caption ) {

						echo '<h1 class="caption">'.$caption.'</h1>';	

					} ?>
			</li>

		<?php endwhile; ?>
		
		<!-- carousel navigation: how do only add navigation if more than 1 slide?-->
		<!-- <li class="carousel-nav" id="previous"></li> -->
		<li class="carousel-nav" id="next"></li>

	</ul>

<?php endif; ?>