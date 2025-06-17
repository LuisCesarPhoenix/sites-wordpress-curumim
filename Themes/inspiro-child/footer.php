<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>

		</div><!-- #content -->

		<?php get_template_part( 'template-parts/footer/footer', 'instagram-widget' ); ?>

		<footer id="colophon" <?php inspiro_footer_class(); ?> role="contentinfo">
			<div class="inner-wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .inner-wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->

<div class="icones-sociais-fixos">
  <a href="https://www.instagram.com/associacaoespacocurumim/" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" />
  </a>
  <a href="https://www.facebook.com/associacaoespacocurumim" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" />
  </a>
  <a href="https://www.youtube.com/channel/UCF0hd1jqqzv7VBmcnhH_UZg" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" />
  </a>
</div>

<?php wp_footer(); ?>

</body>
</html>
