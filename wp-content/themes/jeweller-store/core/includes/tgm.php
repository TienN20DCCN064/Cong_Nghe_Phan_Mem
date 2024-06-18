<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function jeweller_store_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'jeweller-store' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	jeweller_store_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'jeweller_store_register_recommended_plugins' );