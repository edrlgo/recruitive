<?php /* Template Name: Standard Page */ ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/page-header', get_post_format() ); ?>

<?php
get_sidebar();
get_footer();