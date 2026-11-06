<?php
/**
 * Car Repair Blocks: Customizer
 *
 * @subpackage Car Repair Blocks
 * @since 1.0
 */

function car_repair_blocks_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	$wp_customize->add_section('car_repair_blocks_premium_features_section', array(
		'title'    => __('🔒 Unlock Premium Features', 'car-repair-blocks'),
		'priority' => 2,
	));
	
	$wp_customize->add_setting('car_repair_blocks_premium_features');
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'car_repair_blocks_premium_features',
			array(
				'section'     => 'car_repair_blocks_premium_features_section',
				'type'        => 'hidden',
				'description' => '<div style="background: linear-gradient(135deg, #2B136B 0%, #A47AE2 100%); padding: 20px; border-radius: 8px; text-align: center; color: #fff;">
									<h3 style="margin-top: 0; color: #fff;">' . __('Unlock Advanced Features', 'car-repair-blocks') . '</h3>
									<p style="margin: 15px 0;">' . __('Upgrade to Pro to get:', 'car-repair-blocks') . '</p>
									<ul style="list-style: none; padding: 0; text-align: left; max-width: 300px; margin: 20px auto;">
										<li style="margin-bottom: 10px;">✓ ' . __('Advanced Footer Builder', 'car-repair-blocks') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('Typography Controls', 'car-repair-blocks') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('WooCommerce Styling Options', 'car-repair-blocks') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('Priority Support', 'car-repair-blocks') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('One-Click Demo Import', 'car-repair-blocks') . '</li>
									</ul>
									<a href="' . esc_url(admin_url('themes.php?page=car-repair-blocks-pro')) . '" 
									   style="display: inline-block; background: #fff; color: #667eea; padding: 12px 30px; text-decoration: none; border-radius: 4px; font-weight: 600; margin: 10px 5px; transition: all 0.3s;">
									   ' . __('View All Features', 'car-repair-blocks') . '
									</a>
									<a href="' . esc_url(CAR_REPAIR_BLOCKS_BUY_PRO) . '" target="_blank" 
									   style="display: inline-block; background: #ffc107; color: #333; padding: 12px 30px; text-decoration: none; border-radius: 4px; font-weight: 600; margin: 10px 5px;">
									   ' . __('Upgrade Now 🚀', 'car-repair-blocks') . '
									</a>
									<a href="' . esc_url(CAR_REPAIR_BLOCKS_BUNDLE_LINK) . '" target="_blank" 
									   style="display: inline-block; background: #28a745; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 4px; font-weight: 600; margin: 10px 5px;">
									   ' . __('WordPress Bundle 🎁', 'car-repair-blocks') . '
									</a>
								  </div>',
			)
		)
	);
}
add_action( 'customize_register', 'car_repair_blocks_customize_register' );