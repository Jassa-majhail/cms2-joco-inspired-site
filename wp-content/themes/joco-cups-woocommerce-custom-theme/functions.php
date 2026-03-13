<?php

add_action( 'init', function () {
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	$register_from_file = function ( $slug, $title, $file, $categories = array( 'featured' ), $keywords = array() ) {
		$path = get_theme_file_path( $file );
		if ( ! file_exists( $path ) ) {
			return;
		}

		ob_start();
		include $path;
		$content = ob_get_clean();

		if ( ! is_string( $content ) || $content === '' ) {
			return;
		}

		if ( class_exists( 'WP_Block_Patterns_Registry' ) && WP_Block_Patterns_Registry::get_instance()->is_registered( $slug ) ) {
			return;
		}

		register_block_pattern(
			$slug,
			array(
				'title'      => $title,
				'categories' => $categories,
				'keywords'   => $keywords,
				'content'    => $content,
			)
		);
	};

	$register_from_file( 'joco/hero', 'Hero', 'patterns/hero.php', array( 'featured' ), array( 'hero' ) );
	$register_from_file( 'joco/feature-cards', 'Feature Cards', 'patterns/feature-cards.php', array( 'featured' ), array( 'feature', 'cards' ) );
	$register_from_file( 'joco/featured-collection', 'Featured Collection', 'patterns/featured-collection.php', array( 'featured' ), array( 'featured', 'collection' ) );
	$register_from_file( 'joco/about', 'About Page', 'patterns/about.php', array( 'featured', 'pages' ), array( 'about', 'story' ) );
	$register_from_file( 'joco/contact', 'Contact Page', 'patterns/contact.php', array( 'featured', 'pages' ), array( 'contact', 'form', 'support' ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	$path = get_theme_file_path( 'style.css' );
	$ver  = file_exists( $path ) ? filemtime( $path ) : null;
	wp_enqueue_style( 'joco-theme-style', get_stylesheet_uri(), array(), $ver );
} );

add_filter( 'woocommerce_email_background_color', function () {
	return '#0b0d10';
} );

add_filter( 'woocommerce_email_body_background_color', function () {
	return '#0f1217';
} );

add_filter( 'woocommerce_email_base_color', function () {
	return '#ff4d24';
} );

add_filter( 'woocommerce_email_text_color', function () {
	return '#e9edf3';
} );

add_filter( 'woocommerce_email_styles', function ( $css ) {
	$css .= "\n";
	$css .= 'body, #body, #wrapper { background: #0b0d10 !important; }' . "\n";
	$css .= '#template_container { background: #0f1217 !important; border: 1px solid rgba(255,255,255,0.10) !important; border-radius: 18px !important; overflow: hidden !important; }' . "\n";
	$css .= '#template_header { background: #0f1217 !important; border-bottom: 1px solid rgba(255,255,255,0.08) !important; }' . "\n";
	$css .= '#template_header h1 { color: #ffffff !important; font-weight: 900 !important; letter-spacing: 0.01em !important; }' . "\n";
	$css .= '#body_content, #body_content_inner { color: #e9edf3 !important; }' . "\n";
	$css .= 'a { color: #ff4d24 !important; text-decoration: none !important; } a:hover { text-decoration: underline !important; }' . "\n";
	$css .= 'h2, h3 { color: #ffffff !important; font-weight: 900 !important; }' . "\n";
	$css .= '.button, a.button, a.button.alt, .button.alt { background: #ff4d24 !important; color: #000000 !important; border-radius: 999px !important; border: 0 !important; font-weight: 900 !important; letter-spacing: 0.01em !important; box-shadow: none !important; }' . "\n";
	$css .= 'table, td, th { border-color: rgba(255,255,255,0.10) !important; }' . "\n";
	$css .= 'table.order_details, table.order_details td, table.order_details th { background: transparent !important; }' . "\n";
	$css .= '#addresses td { color: #e9edf3 !important; }' . "\n";
	$css .= '#template_footer { color: rgba(255,255,255,0.65) !important; }' . "\n";
	return $css;
}, 20 );
