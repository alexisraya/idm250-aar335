</main>
<footer>
<?php 
                        $image = get_field('logo', 'option');
                        if( !empty( $image ) ): ?>
                            <img class="navbar-brand" alt="Logo" width="45" height="me-auto" class="d-inline-block align-text-center" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
  <p class="footer_text">The Coffee House &copy; <?php echo date('Y'); ?></p>
  <!-- <?php wp_nav_menu(['theme_location' => 'footer-menu']); ?> -->
</footer>
<?php wp_footer(); ?>
</body>

</html>