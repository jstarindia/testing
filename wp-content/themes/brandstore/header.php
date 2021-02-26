<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">
				<div class="grid">
					<div class="col-4">
						<div class="header-titles">
							<?php
								// Site title or logo.
								twentytwenty_site_logo();

								// Site description.
								twentytwenty_site_description();
							?>
						</div><!-- .header-titles -->
					</div>
					<div class="col-8">
						<div class="header-navigation-wrapper">

							<?php
							if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
								?>
									<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>" role="navigation">

										<ul class="primary-menu reset-list-style">

										<?php
										if ( has_nav_menu( 'primary' ) ) {

											wp_nav_menu(
												array(
													'container'  => '',
													'items_wrap' => '%3$s',
													'theme_location' => 'primary',
												)
											);
										} 
										?>
										</ul>
									</nav><!-- .primary-menu-wrapper -->
								<?php
							}
							?>
						</div><!-- .header-navigation-wrapper -->
					</div>
				</div>
			</div><!-- .header-inner -->
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		//get_template_part( 'template-parts/modal-menu' );
   