<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="c-footer">
		<div class="o-section__wrapper">
			<div class="c-footer__logo">
				<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/dana-logo.svg" alt="">
			</div>
			<div class="c-footer__content d-flex">
				<div class="c-footer__column">
					<h3>لینک‌های با دسترســی ســریع</h3>
					<ul class="p-0 m-0">
						<li class="d-flex items-center"><a href="#">درباره ما</a></li>
						<li class="d-flex items-center"><a href="#">دوره‌های آموزشی</a></li>
						<li class="d-flex items-center"><a href="#">پادکست‌ها</a></li>
						<li class="d-flex items-center"><a href="#">حسابداری</a></li>
						<li class="d-flex items-center"><a href="#">فرصت‌های شغلی</a></li>
						<li class="d-flex items-center"><a href="#">ویدئوهای آموزشی</a></li>
						<li class="d-flex items-center"><a href="#">آشنایی با اهــداف مؤسســـه</a></li>
					</ul>
				</div>
				<div class="c-footer__column d-flex flex-column space-between">
					<div class="c-footer__column-content">
						<h3>
							شــرکت دانـــا محـاسب فکــور
						</h3>
						<p>
							وب‌سایت نسا قلیخانی مرجع فروش دوره‌های
							مالیاتی و حسابداری می‌باشد. شما می‌توانیــد
							خدمات مالیاتـــی خود را به ما بسپارید بـدون
							هیــچ نگرانی بابت صــدور هزینــه کارکردها و…
						</p>
					</div>

					<div class="c-footer-social d-flex content-center">
						<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/x.svg" alt="">
						<img class="w-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/social-apaarat.svg" alt="">
						<img class="w-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-social.svg"
							 alt="">
						<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg"
							 alt="">
						<img class="w-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-social.svg" alt="">
					</div>
				</div>
				<div class="c-footer__column d-flex flex-column space-between">
					<h3>
						با مــا در ارتبــاط باشیـــد
					</h3>
					<p class="m-0">
					<span>
						آدرس دفتـــر مرکـــزی:
					</span>
						تهــران، خیابــان اشـــرفــی اصفهـــانــی، بـــرج
						نگیـــــن رضـــــا، واحـــدهای ۱۱۵ و ۱۰۶ و ۱۰۵
					</p>
					<div class="c-footer__column-content">
						<div class="phone-number d-flex content-end">
							<div class="phone-number-call d-flex flex-column">
							<a href="#">۰۲۱-۴۴۰۰۲۶۷۰-۳</a>
							<a href="#">۰۲۱-۴۴۰۰۳۷۸۰-۳</a>
							</div>
						</div>
						<a href="#" class="email d-flex items-center content-end">
							n.gholikhani@danamohaseb.com
						</a>
					</div>
				</div>
			</div>
			<div class="c-footer__certificated">
				<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/enamad.png" alt="">
				<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/zarinpal.png" alt="">
			</div>
		</div>
		<div class="copyright">
			<div class="o-section__wrapper">
				<p class="m-0">
					کلیه‌ی حقوق وب‌سایت برای دانا محاسب محفوظ است.
				</p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
