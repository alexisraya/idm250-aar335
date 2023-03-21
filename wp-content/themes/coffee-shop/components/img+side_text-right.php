<div class="img_side_text_container">
    <div class="img_side_container left">
        <?php 
            $image = get_field('side_image');
            if( !empty( $image ) ): ?>
                <img class="side_image left" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="side_text_container">
        <h1 class="side_text_title"><?php the_field('side_text_title'); ?></h1>
        <p class="side_text_body"><?php the_field('side_text_body'); ?></p>
    </div>
</div>