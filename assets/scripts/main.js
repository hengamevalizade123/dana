"use strict";

/* eslint-env browser */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var slider = document.querySelector('.c-slider-main');
    var flkty = new Flickity(slider, {
      contain: true,
      wrapAround: true,
      autoPlay: 4500,
      draggable: false,
      fade: true
    });
    var sliderWrapper = document.querySelector('.c-hero__slider');
    flkty.on('change', function (index) {
      var currentCell = slider.querySelectorAll('.c-slider-cell')[index];
      var bg = currentCell.getAttribute('data-bg');
      sliderWrapper.style.backgroundImage = "url(".concat(bg, ")");
      sliderWrapper.style.backgroundSize = "cover";
      sliderWrapper.style.backgroundPosition = "center";
    });
    var firstBg = slider.querySelector('.c-slider-cell').getAttribute('data-bg');
    sliderWrapper.style.backgroundImage = "url(".concat(firstBg, ")");
    sliderWrapper.style.backgroundSize = "cover";
    sliderWrapper.style.backgroundPosition = "center";
  });
})();