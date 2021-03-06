<?php
/**
 * The Header for our theme.
 *
 * @license For the full license information, please view the Licensing folder
 * that was distributed with this source code.
 *
 * @package Bimber_Theme 4.10
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}
?><!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9" id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10" id="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if !IE]><!-->
<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PT8WSW8');</script>
	<!-- End Google Tag Manager -->

</head>

<?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<?php do_action('after_body_open_tag'); ?>

<?php do_action( 'bimber_body_start' ); ?>

<div class="g1-body-inner">

	<div id="page">
		<?php get_template_part( 'template-parts/sharebar' ); ?>

		<?php
		if ( apply_filters( 'bimber_show_ad_before_header_theme_area', true ) ) :
			get_template_part( 'template-parts/ads/ad-before-header-theme-area' );
		endif;
		?>

		<?php
		if ( bimber_show_global_featured_entries() && bimber_get_theme_option( 'featured_entries', 'above_header' ) ) :
			get_template_part( 'template-parts/collection-featured' );
		endif;
		?>

		<?php get_template_part( 'template-parts/header/composition', bimber_get_theme_option('header', 'composition' ) ); ?>

		<?php
		if ( bimber_show_global_featured_entries() && ! bimber_get_theme_option( 'featured_entries', 'above_header' ) ) :
			get_template_part( 'template-parts/collection-featured' );
		endif;
		?>

		<?php do_action( 'bimber_before_content_theme_area' ); ?>

		<?php get_template_part( 'template-parts/ads/ad-before-content-theme-area' );
