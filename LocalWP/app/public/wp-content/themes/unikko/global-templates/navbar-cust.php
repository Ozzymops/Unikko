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

            <img class="nav-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" />

        </div>

        <div class="nav-subtitle">
            <p class="nav-subtitle">Praktijk voor individuele begeleiding & verdiepende gesprekken</p>
        </div>
		
        <!-- Bottom row: menu -->
        <div class="nav-container">
            <button class="nav-toggle">☰ Menu</button>

            <ul class="nav-menu">
                <li><a href="<?php echo home_url('/index.php/home'); ?>"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-home.png" /></a></li>
                <li><a href="<?php echo home_url('/index.php/over-ons'); ?>"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-overons.png" /></a></li>
                <li><a href="<?php echo home_url('/index.php/verwijzers'); ?>"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-verwijzers.png" /></a></li>
                <li><a href="<?php echo home_url('/index.php/praktisch'); ?>"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-praktisch.png" /></a></li>
                <li><a href="<?php echo home_url('/index.php/agenda'); ?>"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-agenda.png" /></a></li>
                <li><a href="<?php echo home_url('/index.php/contact'); ?>"><img class="nav-menu-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-contact.png" /></a></li>
            </ul>
        </div>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->