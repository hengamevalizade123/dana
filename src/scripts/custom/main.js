/* eslint-env browser */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
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
