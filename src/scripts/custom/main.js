/* eslint-env browser */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
	  // همبرگر منو
	  let hamburger = document.querySelector('.js-hamburger');
	  if (hamburger) {
		  let hamburgerMenu = function () {
			  document.getElementsByTagName('html')[0].classList.toggle('is-fixed');
			  document.querySelector('.js-navs').classList.toggle('is-open');
		  };
		  hamburger.addEventListener('click', hamburgerMenu, false);
	  }
	  // hamburger menue
	  const slider = document.querySelector('.c-slider-main');
	  const flkty = new Flickity(slider, {
		  contain: true,
		  wrapAround: true,
		  autoPlay: 4500,
		  draggable: false,
		  fade: true
	  });

	  const sliderWrapper = document.querySelector('.c-hero__slider');

	  flkty.on('change', function(index) {
		  const currentCell = slider.querySelectorAll('.c-slider-cell')[index];
		  const bg = currentCell.getAttribute('data-bg');
		  sliderWrapper.style.backgroundImage = `url(${bg})`;
		  sliderWrapper.style.backgroundSize = "cover";
		  sliderWrapper.style.backgroundPosition = "center";
	  });

	  const firstBg = slider.querySelector('.c-slider-cell').getAttribute('data-bg');
	  sliderWrapper.style.backgroundImage = `url(${firstBg})`;
	  sliderWrapper.style.backgroundSize = "cover";
	  sliderWrapper.style.backgroundPosition = "center";
  });
})();
jQuery(document).ready(function ($) {
	// 	menu mobile
	function isMobile() {
		return window.innerWidth <= 768;
	}
	$('.c-hamburger__checkbox').on('click', function (e) {
		const $hamburger = $('.c-hamburger');
		$hamburger.toggleClass('js-hamburger-open');
	});

	$('.c-menu .parent-sub-menu').on('click', function (e) {
		if (isMobile()) {
			e.preventDefault();
			const $parentLi = $(this).closest('li');
			const $submenu = $parentLi.children('ul');
			$('.c-menu li.open').not($parentLi).removeClass('open').children('ul').stop().slideUp();
			console.log($hamburger);
			$submenu.stop().slideToggle();
			$parentLi.toggleClass('open');
		}
	});
	$('.faq-question').click(function(){
		var answer = $(this).next('.faq-answer');
		var toggle = $(this).find('.faq-toggle');

		if(answer.is(':visible')){
			// اگر باز است، ببند
			answer.slideUp();
			toggle.text('+');
		} else {
			// همه پاسخ‌ها را ببند
			$('.faq-answer').slideUp();
			$('.faq-toggle').text('+');

			// پاسخ فعلی را باز کن
			answer.slideDown();
			toggle.text('-');
		}
	});

	// more btn
	var $txt = $("#home-desc");
	var $btn = $("#c-customersBtn");

	// ارتفاع بسته = حدود ۳ خط (line-height پیش‌فرض × 3)
	var collapsedHeight = parseFloat($txt.css("line-height")) * 3;

	// اول تنظیم کن به حالت بسته
	var $txt = $("#home-desc");
	var $btn = $("#c-customersBtn");

	var collapsedHeight = parseFloat($txt.css("line-height")) * 3;
	$txt.css("max-height", collapsedHeight);

	$btn.on("click", function() {
		if ($txt.hasClass("expanded")) {
			$txt.animate({ "max-height": collapsedHeight }, 300, function() {
				$txt.removeClass("expanded");
			});
			$btn.removeClass("rotated").text("مشاهده بیشتـــر");
		} else {
			var fullHeight = $txt.prop("scrollHeight");
			$txt.animate({ "max-height": fullHeight }, 300, function() {
				$txt.addClass("expanded");
			});
			$btn.addClass("rotated").text("مشاهده کمتـــر");
		}
	});
});


