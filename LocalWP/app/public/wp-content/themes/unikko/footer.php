<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<div class="unikko-sideart left"></div>
				<div class="unikko-sideart right"></div>

				<hr />

				<footer class="site-footer" id="colophon">

					<div class="footer-nav">
						<p><a class="hover-text" href="<?php echo get_site_url(); ?>/index.php/privacy">Privacyverklaring</a></p>
						<p><a class="hover-text" href="<?php echo get_site_url(); ?>/index.php/disclaimer">Disclaimer</a></p>
						<p><a class="hover-text" href="<?php echo get_site_url(); ?>/index.php/algemene-voorwaarden">Algemene voorwaarden</a></p>
					</div>

					<div class="footer-contact">
						<p>Unikko</p>
						<p>Huskensweg 37, 6412 SB Heerlen</p>
						<p>E-mail: <a class="hover-text" href="mailto:mireille@unikko-info.nl">mireille@unikko-info.nl</a> of <a class="hover-text" href="mailto:kim@unikko-info.nl">kim@unikko-info.nl</a>
						<p>Telefoon: (Mireille) <a class="hover-text" href="tel:+31646740930">+31 6 46 740 930</a> of (Kim) <a class="hover-text" href="tel:+31611864672">+31 6 11 864 672</a>
					</div>

					<div>
						<img class="footer-art" src="<?php echo get_stylesheet_directory_uri(); ?>/img/art-flowers-1.png" />	
					</div>

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

