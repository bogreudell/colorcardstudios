<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<!-- Adobe Typekit -->
        <link rel="stylesheet" href="https://use.typekit.net/fyq8hlx.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>

	<?php 
		// color classes
		$color_classes = array( 'purple', 'orange', 'magenta', 'green', 'red' ); 

		$randomIndex = array_rand($color_classes); 
		$colorValue = $color_classes[$randomIndex]; ?>
		
	<body id="<?php echo $colorValue; ?>" <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear" role="banner">

			<div class="header-wrap">

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo_transparent.png" alt="Logo" class="logo-img">
				</a>
			</div>
			<!-- /logo -->

			<!-- nav -->
			<nav class="nav" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
			<!-- /nav -->

			<div class="clear"></div>

			</div>

		</header>
		<!-- /header -->

		<?php get_template_part('components/carousel'); ?>
