<?php
/*
  Template Name: Home Page
*/

get_header();

get_template_part('template-parts/content', 'carousel');

get_template_part('template-parts/content', 'tagline');

get_template_part('template-parts/content', 'home-blog');

get_footer(); ?>
