<?php get_header(); ?>
<div class="content-area" id="primary">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <?php get_template_part('template-parts/content'); ?>
            <?php endwhile; else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
        <p>template: index.php</p>
    </main>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>