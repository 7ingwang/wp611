<?php //Pro Details
function CLOUDPRESS_pro_feature_customizer( $wp_customize ) {
    class CLOUDPRESS_WP_Pro_Feature_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>
        <div class="CLOUDPRESS-pro-features-customizer">
            <ul class="CLOUDPRESS-pro-features">
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Advanced Hook Settings','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Multiple Page Templates','CLOUDPRESS' ); ?>
                </li>   
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Portfolio Management','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Slide Variations','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Pricing Table','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Create Unlimited Services','CLOUDPRESS' ); ?>
                </li>
                 <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Typography Settings','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Manage Contact Details','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Testimonial Section','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Client Section','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'New Subscription Section','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Team Section','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Custom Color Schemes','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Section Reordering','CLOUDPRESS' ); ?>
                </li>
                <li>
                    <span class="CLOUDPRESS-pro-label"><?php esc_html_e( 'PRO','CLOUDPRESS' ); ?></span>
                    <?php esc_html_e( 'Quality Support','CLOUDPRESS' ); ?>
                </li>
            </ul>
            <a target="_blank" href="<?php echo esc_url('https://spicethemes.com/CLOUDPRESS-pro');?>" class="CLOUDPRESS-pro-button button-primary"><?php esc_html_e( 'UPGRADE TO PRO','CLOUDPRESS' ); ?></a>
            <hr>
        </div>
        <?php
        }
    }
    $wp_customize->add_section( 'CLOUDPRESS_pro_feature_section' , array(
    		'title'      => esc_html__('View PRO Details', 'CLOUDPRESS'),
    		'priority'   => 1,
       	) );
    $wp_customize->add_setting(
        'upgrade_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new CLOUDPRESS_WP_Pro_Feature_Customize_Control( $wp_customize, 'upgrade_pro_feature', array(
    		'section' => 'CLOUDPRESS_pro_feature_section',
    		'setting' => 'upgrade_pro_feature',
        ))
    );
    class CLOUDPRESS_WP_Feature_document_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>       
         <div class="CLOUDPRESS-pro-content">
            <ul class="CLOUDPRESS-pro-des">
                    <li> <?php esc_html_e('With individual hook settings, you can insert html or php code according to your needs.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('Theme comes with multiple page settings like multiple blog, portfolio 2/3/4 column, about us etc.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('Create a professional-looking portfolio.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('PRO version comes with slide variation options, so you can adjust your content through text alignment.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('Add as many services as you like. You can even display each service on a separate page.','CLOUDPRESS');?></li>   
                     <li> <?php esc_html_e('Typography Settings allow you to choose content font size, font family, etc','CLOUDPRESS');?></li>    
                    <li> <?php esc_html_e('Theme comes with a beautifully designed section where you can manage your contact details.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('Show all your team members, clients, testimonials on front page.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('You can select amongst predefined color skins, or you can create your own without writing any CSS code.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('The layout manager will help you rearrange all sections.','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('Translation-ready, the theme supports popular plugins WPML and Polylang','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('24/7 professional support for Google Maps','CLOUDPRESS');?></li>
                    <li> <?php esc_html_e('Dedicated support, widget and sidebar management.','CLOUDPRESS');?></li>
                </ul>
         </div>
        <?php
        }
    }

    $wp_customize->add_setting(
        'CLOUDPRESS_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new CLOUDPRESS_WP_Feature_document_Customize_Control( $wp_customize, 'CLOUDPRESS_pro_feature', array(	
    		'section' => 'CLOUDPRESS_pro_feature_section',
    		'setting' => 'CLOUDPRESS_pro_feature',
        ))
    );

}
add_action( 'customize_register', 'CLOUDPRESS_pro_feature_customizer' );
?>