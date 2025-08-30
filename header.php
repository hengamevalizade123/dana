<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'starter-theme'); ?></a>

	<header id="masthead" class="site-header">
		<div class="c-top-header">
			<div class="o-section__wrapper">
				<div class="c-top-header__content d-flex items-center space-between">
					<p class="c-top-header__time m-0 d-flex items-center content-center">
						شنبه تا چهارشنبه ۸:۳۰ الی ۱۷:۰۰
					</p>
					<a href="#" class="c-top-header__email d-flex items-center content-center">
						n.gholikhani@danamohaseb.com
					</a>
					<a href="#" class="c-top-header__call d-flex items-center content-center">
						۰۲۱-۴۴۰۰۲۶۷۰-۳
					</a>
					<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
						<label>
							<input type="search" class="search-field w-100"
								   placeholder=""
								   value="<?php echo get_search_query(); ?>"
								   name="s"/>
						</label>
						<button type="submit" class="search-submit"></button>
					</form>
				</div>
			</div>
		</div>
		<div class="c-main-header">
			<div class="o-section__wrapper">
				<div class="c-main-header__content d-flex items-center space-between">
					<a class="header-logo" href="#">
						<img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/dana-logo.svg"
							 alt="">
					</a>
					<nav id="site-navigation" class="main-navigation d-flex items-center">
						<div class="c-header__wrap js-navs">
							<ul class="c-menu u-flex gap-md font-sm p-0">
								<li>
									<a class="<?php if (is_front_page()) echo 'active'; ?> d-flex flex-column" href="/">
										صفحه اصلی
									</a>
								</li>
								<li>
									<a href="/about" class="parent-sub-menu items-center u-flex gap-sm d-flex flex-column <?php if (is_page('about')) echo 'active'; ?>">
										درباره ما
										<span class="has-sub-menu"></span>
									</a>
									<ul class="u-flex u-flex--column">
										<li><a class="sub-menu" href="#">درباره ما</a>
										</li>
										<li><a class="sub-menu" href="#">مالیــات</a></li>
										<li><a class="sub-menu" href="#">حسابرســی</a></li>
										<li><a class="sub-menu" href="#">اظهــارنامــه</a></li>
									</ul>

								</li>
								<li>
									<a class="d-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
										دوره‌های آموزشی
									</a>
								</li>
								<li>
									<a class="d-flex flex-column <?php if (is_page('about')) echo 'active'; ?>" href="#">
										مطالب خواندنی
									</a>
								</li>
								<li>
									<a href="/about" class="parent-sub-menu items-center u-flex gap-sm d-flex flex-column <?php if (is_page('about')) echo 'active'; ?>">
										حسابداری
										<span class="has-sub-menu"></span>
									</a>
									<ul class="u-flex u-flex--column">
										<li><a class="sub-menu" href="#">درباره ما</a>
										</li>
										<li><a class="sub-menu" href="#">مالیــات</a></li>
										<li><a class="sub-menu" href="#">حسابرســی</a></li>
										<li><a class="sub-menu" href="#">اظهــارنامــه</a></li>
									</ul>

								</li>
								<li>
									<a href="/about" class="parent-sub-menu items-center u-flex gap-sm d-flex flex-column <?php if (is_page('about')) echo 'active'; ?>">
										تماس با ما
										<span class="has-sub-menu"></span>
									</a>
									<ul class="u-flex u-flex--column">
										<li><a class="sub-menu" href="#">درباره ما</a>
										</li>
										<li><a class="sub-menu" href="#">مالیــات</a></li>
										<li><a class="sub-menu" href="#">حسابرســی</a></li>
										<li><a class="sub-menu" href="#">اظهــارنامــه</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="c-hamburger">
							<input class="c-hamburger__checkbox js-hamburger" type="checkbox" aria-label="Menu">
							<span class="c-hamburger__icon"></span>
							<span class="c-hamburger__icon"></span>
							<span class="c-hamburger__icon"></span>
						</div>
					</nav>
					<div class="c-main-header__cta d-flex items-center">
						<a class="c-main-header__panel d-flex items-center" href="#">
							سـامانه واســط
						</a>
						<a class="c-main-header__login d-flex items-center" href="#">
							<span>
							ورود ثبت‌نام
						</span></a>
						<a class="c-main-header__cart" href="#">
						</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
