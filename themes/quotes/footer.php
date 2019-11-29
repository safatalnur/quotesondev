<?php wp_footer();?>

<footer class="site-footer">
    
    <nav class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html('primary Menu');?>
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_id' => 'primary-menu'
        ));
        ?>
    </nav>
    <div class="info">
        <span>Brought to you by <a href="<?php echo esc_url('www.redacademy.com');?>" target="_blank">RED Academy</span>
    </div>
</footer>

</body>
</html>