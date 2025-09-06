"use strict";

/* eslint-env browser */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // video palyer
    var video = document.getElementById('myVideo');
    var playBtn = document.querySelector('.btn-center');
    var fullscreenBtn = document.querySelector('.btn-fullscreen');
    var iconPlay = playBtn.querySelector('.icon-play');
    var iconPause = playBtn.querySelector('.icon-pause');
    var container = document.querySelector('.video-container');
    video.controls = false; // مخفی کردن کنترل مرورگر
    // Toggle Play / Pause

    playBtn.addEventListener('click', function () {
      if (video.paused) {
        video.play()["catch"](function (err) {
          return console.log('Play interrupted:', err);
        });
        iconPlay.style.display = 'none';
        iconPause.style.display = 'block';
      } else {
        video.pause();
        iconPlay.style.display = 'block';
        iconPause.style.display = 'none';
      }
    }); // Fullscreen toggle

    fullscreenBtn.addEventListener('click', function () {
      if (!document.fullscreenElement) {
        container.requestFullscreen();
      } else {
        document.exitFullscreen();
      }
    }); // وقتی ویدیو تمام شد → دکمه Play نشان داده شود

    video.addEventListener('ended', function () {
      iconPlay.style.display = 'block';
      iconPause.style.display = 'none';
    }); // همبرگر منو

    var hamburger = document.querySelector('.js-hamburger');

    if (hamburger) {
      var hamburgerMenu = function hamburgerMenu() {
        document.getElementsByTagName('html')[0].classList.toggle('is-fixed');
        document.querySelector('.js-navs').classList.toggle('is-open');
      };

      hamburger.addEventListener('click', hamburgerMenu, false);
    } // hamburger menue


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

jQuery(document).ready(function ($) {
  $('.c-home-services__item').each(function () {
    var $card = $(this);
    var timeoutId = null;
    $card.on('mouseenter', function () {
      // لغو timeout قبلی
      if (timeoutId) clearTimeout(timeoutId); // ایجاد timeout جدید برای اضافه کردن کلاس

      timeoutId = setTimeout(function () {
        if (!$card.hasClass('flip')) {
          // فقط اگر کلاس هنوز اضافه نشده
          $card.addClass('flip');
        }
      }, 300);
    });
    $card.on('mouseleave', function () {
      // لغو timeout و حذف کلاس
      if (timeoutId) clearTimeout(timeoutId);
      timeoutId = null;
      $card.removeClass('flip');
    });
  }); // 	menu mobile

  function isMobile() {
    return window.innerWidth <= 768;
  }

  $('.c-hamburger__checkbox').on('click', function (e) {
    var $hamburger = $('.c-hamburger');
    $hamburger.toggleClass('js-hamburger-open');
  });
  $('.c-menu .parent-sub-menu').on('click', function (e) {
    if (isMobile()) {
      e.preventDefault();
      var $parentLi = $(this).closest('li');
      var $submenu = $parentLi.children('ul');
      $('.c-menu li.open').not($parentLi).removeClass('open').children('ul').stop().slideUp();
      console.log($hamburger);
      $submenu.stop().slideToggle();
      $parentLi.toggleClass('open');
    }
  });
  $('.faq-question').click(function () {
    var answer = $(this).next('.faq-answer');
    var toggle = $(this).find('.faq-toggle');

    if (answer.is(':visible')) {
      // اگر باز است، ببند
      answer.slideUp();
      toggle.text('+');
    } else {
      // همه پاسخ‌ها را ببند
      $('.faq-answer').slideUp();
      $('.faq-toggle').text('+'); // پاسخ فعلی را باز کن

      answer.slideDown();
      toggle.text('-');
    }
  }); // more btn

  var $txt = $("#home-desc");
  var $btn = $("#c-customersBtn"); // ارتفاع بسته = حدود ۳ خط (line-height پیش‌فرض × 3)

  var collapsedHeight = parseFloat($txt.css("line-height")) * 3; // اول تنظیم کن به حالت بسته

  var $txt = $("#home-desc");
  var $btn = $("#c-customersBtn");
  var collapsedHeight = parseFloat($txt.css("line-height")) * 3;
  $txt.css("max-height", collapsedHeight);
  $btn.on("click", function () {
    if ($txt.hasClass("expanded")) {
      $txt.animate({
        "max-height": collapsedHeight
      }, 300, function () {
        $txt.removeClass("expanded");
      });
      $btn.removeClass("rotated").text("مشاهده بیشتـــر");
    } else {
      var fullHeight = $txt.prop("scrollHeight");
      $txt.animate({
        "max-height": fullHeight
      }, 300, function () {
        $txt.addClass("expanded");
      });
      $btn.addClass("rotated").text("مشاهده کمتـــر");
    }
  });
});