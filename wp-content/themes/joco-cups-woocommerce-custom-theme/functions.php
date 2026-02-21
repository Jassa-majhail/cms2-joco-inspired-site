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
