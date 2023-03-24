<?php
    get_header();
?>
<h1> hello </h1>
<h1><?php echo get_the_title(); ?></h1>
<div class="my-single-shoes-images-div">
  <img class="my-single-shoes-images" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?> Featured Image">
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part('components/content'); ?>
</article>

<?php
    get_footer();
?>