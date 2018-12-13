<?php /* Template Name: Inquire */ get_header(); ?>

<section id="contact-forms" style="background:url('<?php the_field('header_background'); ?>') center center no-repeat; background-size:cover;">
	<div id="forms-wrapper">
		<div class="form-toggle">
			<button data-target="form-1" class="active">Inquire</button>
			<button data-target="form-2">Book a Tour</button>
			<div class="clear"></div>
		</div>
		<div id="form-1" class="contact-form active">
			<?php echo do_shortcode('[contact-form-7 id="59" title="Contact Us"]'); ?>
		</div>
		<div id="form-2" class="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="60" title="Book A Tour"]'); ?>
		</div>
	</div>
</section>

<section id="contact-information" class="wrapper">
	<aside>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.711493469592!2d-74.00891028428344!3d40.658289679337614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25abf8b6439f7%3A0x58967eab8f2ab2e7!2sColor+Card+Studios!5e0!3m2!1sen!2sus!4v1521064630174" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</aside>
	<aside class="text">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ut est doloremque repellat a aliquam voluptatibus, omnis delectus id, accusantium, minima eos culpa quod dolorem commodi assumenda quis totam voluptatum.
	</aside>
	<div class="clear"></div>
</section>

<?php get_footer(); ?>