(function ($) {

	$(window).load(function () {
		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});

	});
	jQuery(document).ready(function ($) {

		VanillaTilt.init(document.querySelector(".your-element"), {
			max: 25,
			speed: 800
		});

		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
		$('.example1').wmuSlider();
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
		// $('#myModal88').modal('show');

		/* ---- Countdown timer ---- */

		$('#counter').countdown({
			timestamp: (new Date()).getTime() + 11 * 24 * 60 * 60 * 1000
		});


		/* ---- Animations ---- */

		$('#links a').hover(
			function () {
				$(this).animate({left: 3}, 'fast');
			},
			function () {
				$(this).animate({left: 0}, 'fast');
			}
		);

		$('footer a').hover(
			function () {
				$(this).animate({top: 3}, 'fast');
			},
			function () {
				$(this).animate({top: 0}, 'fast');
			}
		);


		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
		});


		w3ls.render();

		w3ls.cart.on('w3sb_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {
				}
			}
		});
	});
	$(document).keyup(function (e) {
		if (e.key === "Escape") { // escape key maps to keycode `27`
			$('.search_box').removeAttr('checked');
		}
	});

	document.addEventListener('mousedown', function (e) {
		let searchBox = document.querySelector('.search_box');
		if (searchBox) {
			if (e.target.closest('.search') === null) {
				searchBox.checked = false;
				;
			}
		}
	});
	let showMiniCart = function () {
		$('.minicart-box').on('click', '.w3view-cart', function (e) {
			e.preventDefault();
			$('.minicart-box__content').fadeToggle();

		});
	};
	showMiniCart();

	let showScrollToUp = function () {
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 1400) {
				$('.footer-copy-pos').fadeIn(800);
			} else {
				$('.footer-copy-pos').fadeOut(800);
			}
		});
	};
	showScrollToUp();
})(jQuery);
