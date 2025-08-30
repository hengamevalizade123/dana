<?php
/* Template Name: Home Page */
get_header();

//include get_template_directory() . '/template-parts/partials/home/svgs.php';
include get_template_directory() . '/template-parts/partials/home/hero.php';
include get_template_directory() . '/template-parts/partials/home/home-services.php';
include get_template_directory() . '/template-parts/partials/home/home-about.php';
include get_template_directory() . '/template-parts/partials/home/home-reserve.php';
include get_template_directory() . '/template-parts/partials/home/finance-services.php';
include get_template_directory() . '/template-parts/partials/home/home-courses.php';
include get_template_directory() . '/template-parts/partials/home/statistics.php';
include get_template_directory() . '/template-parts/partials/home/goals.php';
include get_template_directory() . '/template-parts/partials/home/satisfaction.php';
include get_template_directory() . '/template-parts/partials/home/home-podcast.php';
include get_template_directory() . '/template-parts/partials/home/faq.php';
include get_template_directory() . '/template-parts/partials/home/customers.php';

get_footer();
