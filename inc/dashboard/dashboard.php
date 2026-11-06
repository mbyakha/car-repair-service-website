<?php

add_action( 'admin_menu', 'car_repair_blocks_gettingstarted' );
function car_repair_blocks_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'car-repair-blocks'), esc_html__('Begin Installation', 'car-repair-blocks'), 'edit_theme_options', 'car-repair-blocks-guide-page', 'car_repair_blocks_guide');
}

if ( ! defined( 'CAR_REPAIR_BLOCKS_SUPPORT' ) ) {
define('CAR_REPAIR_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/car-repair-blocks/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_REVIEW' ) ) {
define('CAR_REPAIR_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/car-repair-blocks/reviews/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_LIVE_DEMO' ) ) {
define('CAR_REPAIR_BLOCKS_LIVE_DEMO',__('https://trial.ovationthemes.com/automobile-repair-blocks-pro/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_BUY_PRO' ) ) {
define('CAR_REPAIR_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/products/car-repair-wordpress-theme','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_PRO_DOC' ) ) {
define('CAR_REPAIR_BLOCKS_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-automobile-repair-blocks-pro-doc/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_FREE_DOC' ) ) {
define('CAR_REPAIR_BLOCKS_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-car-repair-blocks-free-doc/','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_THEME_NAME' ) ) {
define('CAR_REPAIR_BLOCKS_THEME_NAME',__('Premium Car Repair Blocks Theme','car-repair-blocks'));
}
if ( ! defined( 'CAR_REPAIR_BLOCKS_BUNDLE_LINK' ) ) {
define('CAR_REPAIR_BLOCKS_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','car-repair-blocks'));
}