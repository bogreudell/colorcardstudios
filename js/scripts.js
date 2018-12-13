(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		/* ================= *
		 * Carousel Function *
		 * ================= */
		
		function carousel() {

			function nextSlide() {
				var $currentSlide = $('.slide.active'),
					$nextSlide = $currentSlide.next('.slide');

				$currentSlide.removeClass('active');
				$nextSlide.addClass('active');

				if ($nextSlide.length === 0) {
					$nextSlide = $('.slide:first');
					$nextSlide.addClass('active');
				}
			}

			function previousSlide() {
				var $currentSlide = $('.slide.active'),
					$previousSlide = $currentSlide.prev('.slide');

				$currentSlide.removeClass('active');
				$previousSlide.addClass('active');

				if ($previousSlide.length === 0) {
					$previousSlide = $('.slide:last');
					$previousSlide.addClass('active');
				}
			}

			$('.carousel-nav#next').on('click', function(){
				nextSlide();
			});

			$('.carousel-nav#previous').on('click', function(){
				previousSlide();
			});

			$('body').keydown(function(e){
				if (e.keyCode == 39) {
					nextSlide();
				} else if (e.keyCode == 37) {
					previousSlide();
				}
			});

		}

		carousel();

		/* =================== *
		 * Contact Form Toggle *
		 * =================== */

		function formToggle() {
			var $button = $('.form-toggle button');
				

			$button.on('click', function(){
				var $targetForm = $(this).attr('data-target'),
					$activeButton = $('.form-toggle button.active');

				if(!$(this).hasClass('active')){
					$(this).addClass('active');
					$activeButton.removeClass('active');
				}
				
				$('.contact-form').each(function(){
					if ($(this).attr('id') === $targetForm) {
						$(this).addClass('active');
					} else {
						$(this).removeClass('active');
					}
				});
			});
		}

		// only run if on the contact page
		if($('body').hasClass('page-template-template-contact')){
			formToggle();
		}

		/* ================= *
		 * Lightbox Function *
		 * ================= */
		
		function lightbox() {

			var $triggerImage = $('.gallery-image'),
				$lightbox = $('#lightbox-gallery');

			function nextSlide() {
				var $currentSlide = $('.lightbox-image.active'),
					$nextSlide = $currentSlide.next('.lightbox-image');

				$currentSlide.removeClass('active');
				$nextSlide.addClass('active');

				if ($nextSlide.length === 0) {
					$nextSlide = $('.lightbox-image:first');
					$nextSlide.addClass('active');
				}
			}

			function previousSlide() {
				var $currentSlide = $('.lightbox-image.active'),
					$previousSlide = $currentSlide.prev('.lightbox-image');

				$currentSlide.removeClass('active');
				$previousSlide.addClass('active');

				if ($previousSlide.length === 0) {
					$previousSlide = $('.lightbox-image:last');
					$previousSlide.addClass('active');
				}
			}

			function closeLightbox() {
				$('#close').on('click', function(e){
					$lightbox.removeClass('visible');

					// remove current images from the DOM
					$('.lightbox-image').remove();
				});

				$('body').keydown(function(e){
					if(e.keyCode == 27) {
						$lightbox.removeClass('visible');

						// remove current images from the DOM
						$('.lightbox-image').remove();
					}
				});
			}

			function activateLightbox() {
				$triggerImage.on('click', function(){
					var $galleryImages = $(this).parent('.gallery-images').find('.gallery-image'),
						$activeImage = $(this).attr('data-image');

					// make lightbox element visibile
					$lightbox.addClass('visible');

					// add images to the DOM
					$galleryImages.each(function(){
						var $imageUrl = $(this).attr('data-image');

						// need to replace with new elements when lightbox is clicked again
						$lightbox.append('<li class="lightbox-image"><img src="' + $imageUrl + '"/></li>');
												
						// add active class to image that was clicked
						$('.lightbox-image').each(function(){
							if ($(this).find('img').attr('src') === $activeImage){
								$(this).addClass('active');
							} else {
								$(this).removeClass('active')
							}
						});
					});

				});

				closeLightbox();
			}

			activateLightbox();

			$('.lightbox-nav#next').on('click', function(){
				nextSlide();
			});

			$('.lightbox-nav#previous').on('click', function(){
				previousSlide();
			});

			$('body').keydown(function(e){
				if (e.keyCode == 39) {
					nextSlide();
				} else if (e.keyCode == 37) {
					previousSlide();
				}
			});

		}

		lightbox();


		
	});

		$(window).scroll(function(){
			var $scrollTop = $(window).scrollTop();

			if ( $scrollTop >= 100 ) {
				$('header').addClass('active');
			} else {
				$('header').removeClass('active');
			}
		});
	
})(jQuery, this);
