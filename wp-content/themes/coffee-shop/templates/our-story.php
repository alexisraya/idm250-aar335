<?php
/* Template Name: Our Story */
get_header(); ?>

<?php get_template_part('components/hero_text_bottom'); ?>
<h1><?php echo get_the_title(); ?></h1>
<?php get_template_part('components/content'); ?>
<?php get_template_part('components/some_coffees'); ?>
<?php get_footer(); ?>