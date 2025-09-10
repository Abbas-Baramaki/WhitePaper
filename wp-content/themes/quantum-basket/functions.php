<?php


/**
 * Quantum Basket functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Quantum Basket
 * @since Quantum Basket 1.0
 */
include_once "shortcodes.php";
function quantum_basket_theme_scripts() {
    // Enqueue theme stylesheet for the front-end.
    wp_enqueue_style( 'quantum-basket-style',  get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
	wp_enqueue_script('quantum-basket-main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery-sticky', get_stylesheet_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );    
}

add_action( 'wp_enqueue_scripts', 'quantum_basket_theme_scripts' );
add_editor_style( 'style.css' );



function custom_template_style()
{
	wp_enqueue_style("whp-login-style",get_stylesheet_directory_uri() . "/styles/custom-style.css");
	wp_enqueue_style("whp-grid-style",get_stylesheet_directory_uri() . "/styles/grid-style.css");
	wp_enqueue_style("whp-login-fonts",get_stylesheet_directory_uri() . "/styles/fonts.css");
	wp_enqueue_script("whp-login-script",get_stylesheet_directory_uri() . "/assets/js/script.js");
	wp_enqueue_script("whp-react",get_stylesheet_directory_uri() . "/assets/js/components/react.development.js");
	wp_enqueue_script("whp-react-dom",get_stylesheet_directory_uri() . "/assets/js/components/react-dom.development.js");
	wp_enqueue_script("whp-babble",get_stylesheet_directory_uri() . "/assets/js/components/babel.min.js");
	wp_enqueue_script("whp-custom-script",get_stylesheet_directory_uri() . "/assets/js/master.js");
}
// register own theme pattern

function quantum_basket_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'quantum-basket' => array( 'label' => __( 'Quantum Basket', 'quantum-basket' ) )
	);

	$block_pattern_categories = apply_filters( 'quantum_basket_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'quantum_basket_register_pattern_category');
add_action("wp_enqueue_scripts","custom_template_style");
