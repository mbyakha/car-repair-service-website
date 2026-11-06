<?php
/**
 * Theme Upsell Page
 * 
 * @package Car Repair Blocks
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Add theme upsell page to admin menu
 */
add_action( 'admin_menu', 'car_repair_blocks_add_theme_page' );
function car_repair_blocks_add_theme_page() {
    add_theme_page(
        __( 'Upgrade to PRO', 'car-repair-blocks' ),
        __( 'Upgrade to PRO', 'car-repair-blocks' ),
        'manage_options',
        'car-repair-blocks-pro',
        'car_repair_blocks_pro_page_callback'
    );
}
/**
 * Render theme upsell page
 */
function car_repair_blocks_pro_page_callback() {
    ?>
    <div class="wrap ot-pro-wrap">
        <h1><?php esc_html_e('Upgrade to Car Repair Blocks Pro 🚀', 'car-repair-blocks'); ?></h1>
        
        <div class="ot-pro-hero">
            <div class="hero-content">
                <div class="hero-left">
                    <h2><?php esc_html_e('Take Your Car Repair Business to the Next Level', 'car-repair-blocks'); ?></h2>
                    <p class="subtitle"><?php esc_html_e('Get access to premium features, advanced layouts, and priority support', 'car-repair-blocks'); ?></p>
                    <div class="button-group">
                        <?php
                        // Check if theme is FSE (block theme) or customizer based
                        if ( function_exists( 'wp_is_block_theme' ) && wp_is_block_theme() ) {
                            // Block theme - link to Site Editor
                            $editor_url = admin_url( 'site-editor.php' );
                            $editor_text = __('Site Editor', 'car-repair-blocks');
                            $editor_icon = 'dashicons-layout';
                        } else {
                            // Classic theme - link to Customizer
                            $editor_url = admin_url( 'customize.php' );
                            $editor_text = __('Customize', 'car-repair-blocks');
                            $editor_icon = 'dashicons-admin-customizer';
                        }
                        // Check if the Ovation Elements plugin is active
                        $is_plugin_active = is_plugin_active('ovation-elements/ovation-elements.php');
                        ?>
                        <a class="button button-hero button-primary theme-install" id="install-activate-button" href="#" style="display:<?php echo $is_plugin_active ? 'none' : 'inline-flex'; ?> !important;">
                            <span class="dashicons dashicons-download"></span>
                            <?php _e('Begin Installation', 'car-repair-blocks'); ?>
                        </a>
                        <a class="button button-hero button-success" id="view-site-button" href="<?php echo esc_url( home_url('/') ); ?>" target="_blank" style="display:<?php echo $is_plugin_active ? 'inline-flex' : 'none'; ?> !important;">
                            <span class="dashicons dashicons-admin-site"></span>
                            <?php _e('View Site', 'car-repair-blocks'); ?>
                        </a>
                        <a target="_blank" href="<?php echo esc_url( $editor_url ); ?>" class="button button-hero button-customize" style="display:<?php echo $is_plugin_active ? 'inline-flex' : 'none'; ?> !important;">
                            <span class="dashicons <?php echo esc_attr( $editor_icon ); ?>"></span>
                            <?php echo esc_html( $editor_text ); ?>
                        </a>
                        <a href="<?php echo esc_url( CAR_REPAIR_BLOCKS_LIVE_DEMO ); ?>" target="_blank" class="button button-hero button-demo">
                            <span class="dashicons dashicons-visibility"></span>
                            <?php esc_html_e('Live Demo', 'car-repair-blocks'); ?>
                        </a>
                        <a href="<?php echo esc_url( CAR_REPAIR_BLOCKS_BUY_PRO ); ?>" target="_blank" class="button button-primary button-hero button-pro">
                            <span class="dashicons dashicons-star-filled"></span>
                            <?php esc_html_e('Get Pro Theme', 'car-repair-blocks'); ?>
                        </a>
                        <a href="<?php echo esc_url( CAR_REPAIR_BLOCKS_FREE_DOC ); ?>" target="_blank" class="button button-hero button-docs">
                            <span class="dashicons dashicons-book"></span>
                            <?php esc_html_e('Documentation', 'car-repair-blocks'); ?>
                        </a>
                        <a href="<?php echo esc_url( CAR_REPAIR_BLOCKS_BUNDLE_LINK ); ?>" target="_blank" class="button button-hero button-bundle">
                            <span class="dashicons dashicons-cart"></span>
                            <?php esc_html_e('WordPress Theme Bundle', 'car-repair-blocks'); ?>
                        </a>
                    </div>
                </div>
                <div class="hero-right">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="<?php esc_attr_e('Car Repair Blocks Theme Screenshot', 'car-repair-blocks'); ?>" class="theme-screenshot">
                </div>
            </div>
        </div>

        <div class="ot-pro-features">
            <h2><?php esc_html_e('Why Upgrade to Pro?', 'car-repair-blocks'); ?></h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <span class="dashicons dashicons-layout"></span>
                    <h3><?php esc_html_e('Different styling Options', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('This content will change based on different styling options.', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-admin-customizer"></span>
                    <h3><?php esc_html_e('Section Reordering Option', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Sections can be reordered or rearranged as per your preference.', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-editor-table"></span>
                    <h3><?php esc_html_e('Footer Builder', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Create custom footers with advanced widgets', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-art"></span>
                    <h3><?php esc_html_e('Typography Controls', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Full control over fonts, sizes, and text styling', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-cart"></span>
                    <h3><?php esc_html_e('WooCommerce Styling', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Advanced WooCommerce integration with custom product layouts', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-admin-tools"></span>
                    <h3><?php esc_html_e('Advanced Options', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Advanced theme options available for themes', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-performance"></span>
                    <h3><?php esc_html_e('Performance Optimized', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('3X faster loading with optimized code and assets', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-sos"></span>
                    <h3><?php esc_html_e('Priority Support', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Get expert help within 24 hours through our priority support system', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-admin-appearance"></span>
                    <h3><?php esc_html_e('Unlimited Color Schemes', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Customize every color to match your brand identity with unlimited color options', 'car-repair-blocks'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-download"></span>
                    <h3><?php esc_html_e('One-Click Demo Import', 'car-repair-blocks'); ?></h3>
                    <p><?php esc_html_e('Import complete demo content with just one click and get started instantly', 'car-repair-blocks'); ?></p>
                </div>
            </div>
        </div>

        <div class="ot-pro-comparison">
            <h2><?php esc_html_e('Free vs Pro Comparison', 'car-repair-blocks'); ?></h2>
            
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e('Feature', 'car-repair-blocks'); ?></th>
                        <th><?php esc_html_e('Free', 'car-repair-blocks'); ?></th>
                        <th class="pro-col"><?php esc_html_e('Pro', 'car-repair-blocks'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e('Typography Controls', 'car-repair-blocks'); ?></td>
                        <td><?php esc_html_e('Limited', 'car-repair-blocks'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Full Control', 'car-repair-blocks'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('WooCommerce Styling', 'car-repair-blocks'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Widgets', 'car-repair-blocks'); ?></td>
                        <td><?php esc_html_e('Basic', 'car-repair-blocks'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Advanced', 'car-repair-blocks'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Color Schemes', 'car-repair-blocks'); ?></td>
                        <td><?php esc_html_e('Limited', 'car-repair-blocks'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Unlimited', 'car-repair-blocks'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Demo Import', 'car-repair-blocks'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Priority Support', 'car-repair-blocks'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Post Types', 'car-repair-blocks'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Page Builder Integration', 'car-repair-blocks'); ?></td>
                        <td><?php esc_html_e('Gutenberg', 'car-repair-blocks'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Gutenberg/Customizer', 'car-repair-blocks'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Speed Optimization', 'car-repair-blocks'); ?></td>
                        <td><?php esc_html_e('Standard', 'car-repair-blocks'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Advanced (3X Faster)', 'car-repair-blocks'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Sticky Header', 'car-repair-blocks'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Preloader Options', 'car-repair-blocks'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Blog Layouts', 'car-repair-blocks'); ?></td>
                        <td><?php esc_html_e('1', 'car-repair-blocks'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Advanced', 'car-repair-blocks'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ot-pro-testimonials">
            <h2><?php esc_html_e('What Our Users Say', 'car-repair-blocks'); ?></h2>
            
        <div class="testimonial-grid">
            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"I was looking for a clean and professional theme for my car repair website and this theme delivered exactly that. Setup was quick and the layout looks very modern."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- John D.', 'car-repair-blocks'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"The theme design is professional and easy to customize. The documentation helped me set up my accounting website without any issues."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- Sarah M.', 'car-repair-blocks'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Very flexible and beginner-friendly. I was able to adjust colors, sections, and layouts directly from the Customizer. Highly recommended."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- Michael R.', 'car-repair-blocks'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"The mobile responsive design works perfectly. Most of my clients visit from their phones, and the site looks clean and professional."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- Emily T.', 'car-repair-blocks'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Great theme for tax professionals. The service sections and homepage layout helped me present my services clearly to potential clients."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- David L.', 'car-repair-blocks'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Customer support is very helpful and responsive. They guided me during setup and solved my issue quickly."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- Jennifer K.', 'car-repair-blocks'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Fast loading and SEO friendly. After launching my website with this theme, I started receiving more inquiries from clients."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- Robert H.', 'car-repair-blocks'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"A very good theme with useful features for car repair businesses. Easy to install and configure."', 'car-repair-blocks'); ?></p>
                <span class="author"><?php esc_html_e('- Lisa P.', 'car-repair-blocks'); ?></span>
            </div>
        </div>
        </div>

        <div class="ot-pro-cta">
            <h2><?php esc_html_e('Ready to Upgrade?', 'car-repair-blocks'); ?></h2>
            <p><?php esc_html_e('Join hundreds of satisfied customers who upgraded to Pro', 'car-repair-blocks'); ?></p>
            <a href="<?php echo esc_url( CAR_REPAIR_BLOCKS_BUY_PRO ); ?>" target="_blank" class="button button-primary button-hero">
                <?php esc_html_e('Get Car Repair Blocks Pro Now', 'car-repair-blocks'); ?> →
            </a>
        </div>

        <div class="ot-pro-footer">
            <p><?php printf( __('Need help? Contact our <a href="%s" target="_blank">support</a> team anytime.', 'car-repair-blocks'), esc_url( CAR_REPAIR_BLOCKS_SUPPORT ) ); ?></p>
        </div>
    </div>
    <?php
}
