<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
      // Using the ACF plugin, we can get the favicon from the admin panel
      $image = get_field('logo', 'option');
      if(!empty($image)): ?>
      <link rel="icon"
        href="<?php echo $image['url']?>"
        type="image/x-icon" />
      <?php endif; ?>
    <title><?php echo get_the_title(); ?> | The Coffee House</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
    <?php
        $menu = get_theme_menu('primary-menu');
        if ($menu){?>
            <nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
                <div class="container-fluid navbar-style">
                    <a class="navbar-brand nav-title" href="<?php echo home_url(); ?>">
                    <?php 
                        $image = get_field('logo', 'option');
                        if( !empty( $image ) ): ?>
                            <img class="navbar-brand" alt="Logo" width="45" height="me-auto" class="d-inline-block align-text-center" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </a>
                    <button class="navbar-toggler mobile-nav navbar-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                                <?php
                                foreach ($menu as $menu_item) {
                                    echo "
                                    <li class='nav-item'>
                                        <a  class='nav-link nav-link-style' aria-current='page' href='{$menu_item->url}'>{$menu_item->title}</a>
                                    </li>
                                    ";
                                }?>
                        </ul>
                    </div>
                </div>
            </nav>
            
         <?php } ?>
    </header>
    <main>