<div class="hero_container">
    <?php 
        $image = get_field('hero_image');
        if( !empty( $image ) ): ?>
            <img class="hero_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    <div class="hero_text">
        <h3 class="hero_title"><?php the_field('hero_title'); ?></h3>
    </div>
</div>