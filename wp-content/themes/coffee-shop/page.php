<?php get_header();?>

<?php $site_title = get_the_title(); ?>

<div class='page_container'>

    <?php get_template_part('components/content');?>

    <?php
        if (is_page('menu')) {
            // Code to display content for pop-sneakers
            echo"
            <h1>
                {$site_title}
            </h1>
            ";
            get_template_part('components/all_coffees');
            // Code to display content for page1
        } elseif (is_page('our-story')) {
            get_template_part('components/about-us');
        } else {
            // Code to display content for all other pages
        }
    ?>
</div>

<?php get_footer();?>