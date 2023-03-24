<?php get_header();?>

<div class="container_404">
    <h1 class='title_404'><?php the_field('404_title', 'option'); ?></h1>
    <h2 class='text_404'><?php the_field('404_text', 'option'); ?></h2>

    <?php 
    $link = get_field('redirect_link', 'option');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="button button_404" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
</div>

<?php get_footer();?>