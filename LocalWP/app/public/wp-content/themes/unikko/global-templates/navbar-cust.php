<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="<?php echo esc_attr ($container ); ?> header-container">

        <!-- Top row: only branding -->
        <div class="nav-logo">

            <img class="nav-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-shadow.png" />

        </div>
		
        <!-- Bottom row: menu -->
        <div>

            <ul class="nav-ul responsive-hidewhenmobile">
                <li><a href="<?php echo get_site_url(); ?>/home"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-home.png" /></a></li>
                <li><a href="<?php echo get_site_url(); ?>/over-ons"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-overons.png" /></a></li>
                <li><a href="<?php echo get_site_url(); ?>/verwijzers"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-verwijzers.png" /></a></li>
                <li><a href="<?php echo get_site_url(); ?>/praktisch"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-praktisch.png" /></a></li>
                <li><a href="<?php echo get_site_url(); ?>/agenda"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-agenda.png" /></a></li>
                <li><a href="<?php echo get_site_url(); ?>/contact"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-contact.png" /></a></li>
            </ul>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav ms-auto responsive-hidewhendesktop',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
            ?>

        </div>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->