<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function car_repair_blocks_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'car-repair-blocks' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	car_repair_blocks_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'car_repair_blocks_register_recommended_plugins' );