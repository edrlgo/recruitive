<?php /* Template Name: Tjänster */ ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/page-header', get_post_format() ); ?>

<?php get_template_part( 'template-parts/tjanster-boxes', get_post_format() ); ?>

<?php
get_sidebar();
get_footer();