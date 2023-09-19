<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <span class="dashicons dashicons-format-<?php echo get_post_format($post->ID); ?>">
        </span>
        <?php the_title('<h2 class="the_title_permalink"><a href="'.esc_url(get_permalink()).'">', '</a></h2>'); ?>
        <div class="byline"></div>
        <?php esc_html_e('Author:'); ?>
        <?php the_author_posts_link(); ?>
    </header>
    <div class="entry-content">
        <p>
            <?php the_excerpt(); ?>
        </p>
    </div>

</article>