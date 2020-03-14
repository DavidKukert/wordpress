<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <nav id="site-navbar" class="navbar">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <a id="navbar-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                    <button onclick="navbarMenuShow()" id="navbar-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'navbar-menu',
                        'container'       => 'div',
                        'container_class' => 'navbar-nav',
                        'container_id'    => 'navbar-menu',
                        'menu_class'      => 'navbar-menu menu',
                        'fallback_cb'     => '',
                        'item_spacing'    => 'discard',
                        'depth'           => 1,
                        'walker'          => ''
                    )
                ); ?>
            </div>
        </nav>

        <div id="site-content" class="content">
