<?php
/**
 * Theme Name: AnimeTFK
 * Theme URI: http://Anime.tfkTech.com
 * Author: RandomKing
 * Author URI: http://Anime.tfkTech.com
 * Description: AnimeTFK Theme for Anime.tfkTech.com
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'animetfk_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://Anime.tfkTech.com/', 'animetfk' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'animetfk' ); ?>"><?php printf( __( 'Anime Sharing Site: %s', 'animetfk' ), 'Anime.tfkTech.com' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>