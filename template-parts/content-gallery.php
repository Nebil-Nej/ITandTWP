<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <span class="dashicons dashicons-format-<?php echo get_post_format($post->ID); ?>">
        </span>
        <p c><?php esc_html_e('GALLERY GALLERY GALLERY!!!' ,'itandt') ; ?></p>
        <?php the_title('<h1>', '</h1>'); ?>
        <div class="byline"></div>
        <?php esc_html_e('Author:'); ?>
        <?php the_author(); ?>
    </header>
    <div class="entry-content">
        <p>
            <?php the_content(); ?>
        </p>
    </div>
    <?php if (comments_open()): ?>
        <?php comments_template() ?>
    <?php endif; ?>

</article>