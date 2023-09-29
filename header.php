<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id=" page">
        <a href="#content" class="skip-link screen-reader-text">
            <?php echo esc_html_e('Skip to Content', 'itandt') ?>
        </a>

        <header id="masthead" class=" site-header" data-bs-theme="dark" role="banner">
            <div class="site-branding">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id, 'full', );
                ?>
                <a href="home.php"><img src="<?php echo $image[0]; ?>" alt=""></a>
                <p class="site-description">
                    <?php bloginfo('description'); ?>
                </p>
            </div>
            <nav id="site-navigation" class="main-navigation" data-bs-theme="dark" role="navigation">
                <?php
                $args = [
                    'theme_location' => 'main-menu'
                ];

                wp_nav_menu($args);
                ?>
            </nav>
        </header>
        <div id="content" class="site-content">