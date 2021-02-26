<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<?php wp_footer(); ?>
	<footer class="footer">
		<div class="footer-container">
			    <div id="footer-widgets">
			    </div>
			<?php  ?>
		</div>
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
		    <div id="copyright-footer">
		    	<div class="footer-container">
		        	<?php dynamic_sidebar( 'sidebar-2' ); ?>
		        </div>
		    </div>
		<?php } ?>
	</footer>
</body>
</html>
