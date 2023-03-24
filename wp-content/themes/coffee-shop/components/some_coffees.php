<?php 
$coffees =[
    'post_type' => 'coffees',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC'
];
$all_coffees = new WP_Query($coffees);
?>

<h4 class="side_text_body"><?php the_field('coffee_gallery_title'); ?></h4>

<div>
    <div class="featured-coffees">
        <div class="text-center">
            <h2 class="featured-main-title"></h2>
        </div>
        <div class="menu_container">
            <?php
                // The Loop
                if ($all_coffees->have_posts()) {
                    while ($all_coffees->have_posts()) {
                        // This is where the post's data is set up
                        $all_coffees->the_post();
                        get_template_part('components/coffee_card');
                    }
                    // Restore original Post Data
                    wp_reset_postdata();
                } else {
                    echo '<p>Sorry, no posts matched your criteria.</p>';
                }?>
        </div>            
    </div>
</div>