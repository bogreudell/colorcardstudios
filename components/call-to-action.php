<?php
	
	$cta_link = get_field('call_to_action_link');
	$cta_text = get_field('call_to_action_text');

	if ( $cta_link ) {

		echo '<a href="'.$cta_link.'" class="cta-button">'.$cta_text.'</a>';

	} ?>