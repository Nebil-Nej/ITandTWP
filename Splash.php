<?php 
    // Template Name: Splash Page
?>

<?php get_header(); ?>
<div class="content-area extended" id="primary">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <?php get_template_part('template-parts/content' , get_post_format()); ?>
            <?php endwhile; else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
        <p>template: Custome webPart (Splash.php)</p>
    </main>
</div>


<?php get_footer(); ?>