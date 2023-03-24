<?php
    get_header();
?>
<h1>
    <?php echo get_the_title(); ?>
</h1>

<div>
  <img src="" alt="">
</div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part('components/content'); ?>
</article>
<br>

<?php
    get_footer();
?>