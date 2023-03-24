<div class="img_side_text_container blog_intro_container">
    <div class="blog_side_container">
        <?php 
            $image = get_field('blog_image');
            if( !empty( $image ) ): ?>
                <img class="side_image left blog_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="blog_text_container">
        <h1 class='blog_title'><?php echo get_the_title(); ?></h1>
        <p class="side_text_body"><?php the_field('blog_description'); ?></p>
        <h2 class="side_text_title"><?php the_field('origin_name'); ?></h2>
        <p class="side_text_body"><?php the_field('origin_description'); ?></p>
    </div>
</div>