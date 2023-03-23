<div class="home_hero">
    <?php 
        $image = get_field('hero_home_image');
        if( !empty( $image ) ): ?>
            <img class="home_hero_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    <div class="home_hero_text text-centered">
        <div class="home_hero_logo">
            <?php 
                $image = get_field('logo', 'option');
                if( !empty( $image ) ): ?>
                    <img class="navbar-brand d-inline-block align-text-center logo-large" alt="Logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
        <h2 class="hero_subtitle"><?php the_field('hero_subtitle'); ?></h2>
    </div>
</div>