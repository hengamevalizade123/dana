<?php
/* Template Name: Home Page */
get_header();

//include get_template_directory() . '/template-parts/partials/home/svgs.php';
include get_template_directory() . '/template-parts/partials/home/hero.php';
include get_template_directory() . '/template-parts/partials/home/home-services.php';
include get_template_directory() . '/template-parts/partials/home/home-about.php';
include get_template_directory() . '/template-parts/partials/home/home-reserve.php';
include get_template_directory() . '/template-parts/partials/home/finance-services.php';
//include get_template_directory() . '/template-parts/partials/home/support.php';
//include get_template_directory() . '/template-parts/partials/home/feed.php';
//include get_template_directory() . '/template-parts/partials/home/customer-order.php';
//include get_template_directory() . '/template-parts/partials/home/price.php';
////include get_template_directory() . '/template-parts/partials/home/blog.php';
//include get_template_directory() . '/template-parts/partials/home/des.php';

get_footer();
