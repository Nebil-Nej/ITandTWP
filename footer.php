</div> <!-- #Content CLOSER from header-->
<footer id="colophon" class="site-footer" role="contentinfo">
    <?php
    if (!is_active_sidebar('footer-sidebar')) {
        return;
    }
    ?>
    <?php dynamic_sidebar('footer-sidebar') ?>
    <a href="<?php echo esc_url(__('https://wordpress.org', 'itandt')); ?>">
        <?php printf(esc_html__('Proudly Powered by %s', 'itandts'), 'WordPress'); ?>
    </a>
</footer>
</div> <!-- #PAGE CLOSER from header-->


<?php wp_footer(); ?>


</body>

</html>