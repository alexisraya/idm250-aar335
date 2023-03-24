<?php get_header();?>

<h1>
    <?php echo get_the_title(); ?>
</h1>
<?php get_template_part('components/content'); ?>

<?php
    if (is_page('menu')) {
        // Code to display content for pop-sneakers
        get_template_part('components/all_coffees');
        // Code to display content for page1
    } elseif (is_page('locations')) {
        // get_template_part('components/all-shoes');
    } elseif (is_page('our-story')) {
        get_template_part('components/about-us');
    } else {
        // Code to display content for all other pages
    }
?>

<?php get_footer();?>