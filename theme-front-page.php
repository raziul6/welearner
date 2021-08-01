<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package welearner
 */

get_header();
?> 
    <?php get_template_part( 'template-parts/section/slider', 'section' );?>
    <?php get_template_part( 'template-parts/section/trending', 'topic' );?>
    <?php get_template_part( 'template-parts/section/trending', 'course' );?>
    <?php get_template_part( 'template-parts/section/top', 'rated' );?>
    <?php get_template_part( 'template-parts/section/fun', 'factor' );?>
    <?php get_template_part( 'template-parts/section/testimonial', 'section' );?>
    <?php get_template_part( 'template-parts/section/clients-logo', 'logo' );?>
    <?php get_template_part( 'template-parts/section/populer', 'creator' );?>
    <?php get_template_part( 'template-parts/section/post', 'grid' );?>
    <?php get_template_part( 'template-parts/section/cta', 'section' );?>
<?php
get_footer();