<?php
/**
 * San WP Bootstrap Theme Customizer
 *
 * @package San_WP_Bootstrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themeslug_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function san_wp_bootstrap_customize_register( $wp_customize ) {

    //Style Preset
    $wp_customize->add_section(
        'typography',
        array(
            'title' => __( 'Preset Styles', 'san-wp-bootstrap' ),
            //'description' => __( 'This is a section for the typography', 'san-wp-bootstrap' ),
            'priority' => 20,
        )
    );

    //Theme Option
    $wp_customize->add_setting( 'theme_option_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'theme_option_setting', array(
        'label' => __( 'Theme Option', 'san-wp-bootstrap' ),
        'section'    => 'typography',
        'settings'   => 'theme_option_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'card-light' => 'Card Light',
            'card-dim' => 'Card Dim',
            'card-flex' => 'Card Flex',
            'card-flex-dim' => 'Card Flex Dim',
            'list-dim' => 'List Dim',
            'list-light' => 'List Light'
        )
    ) ) );

    $wp_customize->add_setting( 'preset_style_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_style_setting', array(
        'label' => __( 'Typography', 'san-wp-bootstrap' ),
        'section'    => 'typography',
        'settings'   => 'preset_style_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'roboto-roboto' => 'Roboto / Roboto',
            'quicksand' => 'Quicksand',
            'rubik' => 'Rubik',
            'nunito' => 'Nunito'
        )
    ) ) );


    /*$wp_customize->add_setting( 'preset_color_scheme_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_color_scheme_setting', array(
        'label' => __( 'Color Scheme', 'san-wp-bootstrap' ),
        'section'    => 'typography',
        'settings'   => 'preset_color_scheme_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'red' => 'Red',
            'green' => 'Green',
            'orange' => 'Orange',
            'pink' => 'Pink',
        )
    ) ) );*/


    /*Banner*/
    // $wp_customize->add_section(
    //     'header_image',
    //     array(
    //         'title' => __( 'Header Banner', 'san-wp-bootstrap' ),
    //         'priority' => 30,
    //     )
    // );


    // $wp_customize->add_control(
    //     'header_img',
    //     array(
    //         'label' => __( 'Header Image', 'san-wp-bootstrap' ),
    //         'section' => 'header_images',
    //         'type' => 'text',
    //     )
    // );

    // $wp_customize->add_setting(
    //     'header_bg_color_setting',
    //     array(
    //         'default'     => '#fff',
    //         'sanitize_callback' => 'sanitize_hex_color',
    //     )
    // );
    // $wp_customize->add_control(
    //     new WP_Customize_Color_Control(
    //         $wp_customize,
    //         'header_bg_color',
    //         array(
    //             'label'      => __( 'Header Banner Background Color', 'san-wp-bootstrap' ),
    //             'section'    => 'header_image',
    //             'settings'   => 'header_bg_color_setting',
    //         ) )
    // );

    // $wp_customize->add_setting( 'header_banner_title_setting', array(
    //     'default' => __( 'San WP Bootstrap', 'san-wp-bootstrap' ),
    //     'sanitize_callback' => 'wp_filter_nohtml_kses',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_title_setting', array(
    //     'label' => __( 'Banner Title', 'san-wp-bootstrap' ),
    //     'section'    => 'header_image',
    //     'settings'   => 'header_banner_title_setting',
    //     'type' => 'text'
    // ) ) );

    // $wp_customize->add_setting( 'header_banner_tagline_setting', array(
    //     'default' => __( 'To customize the contents of this header banner and other elements of your site go to Dashboard - Appearance - Customize','san-wp-bootstrap' ),
    //     'sanitize_callback' => 'wp_filter_nohtml_kses',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_tagline_setting', array(
    //     'label' => __( 'Banner Tagline', 'san-wp-bootstrap' ),
    //     'section'    => 'header_image',
    //     'settings'   => 'header_banner_tagline_setting',
    //     'type' => 'text'
    // ) ) );
    // $wp_customize->add_setting( 'header_banner_visibility', array(
    //     'capability' => 'edit_theme_options',
    //     'sanitize_callback' => 'themeslug_sanitize_checkbox',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_visibility', array(
    //     'settings' => 'header_banner_visibility',
    //     'label'    => __('Remove Header Banner', 'san-wp-bootstrap'),
    //     'section'    => 'header_image',
    //     'type'     => 'checkbox',
    // ) ) );


    //Site Name Text Color
   $wp_customize->add_section(
        'site_name_text_color',
        array(
            'title' => __( 'Other Customizations', 'san-wp-bootstrap' ),
            //'description' => __( 'This is a section for the header banner Image.', 'san-wp-bootstrap' ),
            'priority' => 40,
        )
    );
    $wp_customize->add_section(
        'colors',
        array(
            'title' => __( 'Background Color', 'san-wp-bootstrap' ),
            //'description' => __( 'This is a section for the header banner Image.', 'san-wp-bootstrap' ),
            'priority' => 50,
            'panel' => 'styling_option_panel',
        )
    );
    $wp_customize->add_section(
        'background_image',
        array(
            'title' => __( 'Background Image', 'san-wp-bootstrap' ),
            //'description' => __( 'This is a section for the header banner Image.', 'san-wp-bootstrap' ),
            'priority' => 60,
            'panel' => 'styling_option_panel',
        )
    );

    // Bootstrap and Fontawesome Option
    $wp_customize->add_setting( 'cdn_assets_setting', array(
        'default' => __( 'no','san-wp-bootstrap' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( 
        'cdn_assets',
        array(
            'label' => __( 'Use CDN for Assets', 'san-wp-bootstrap' ),
            'description' => __( 'All Bootstrap Assets and FontAwesome will be loaded in CDN.', 'san-wp-bootstrap' ),
            'section' => 'site_name_text_color',
            'settings' => 'cdn_assets_setting',
	        'type'    => 'select',
	        'choices' => array(
	            'yes' => __( 'Yes' ),
	            'no' => __( 'No' ),
        	)
        )
    );


    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
    $wp_customize->get_control( 'header_textcolor'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_image'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_color'  )->section = 'site_name_text_color';

    // Add control for logo uploader
    $wp_customize->add_setting( 'san_wp_bootstrap_logo', array(
        //'default' => __( '', 'san-wp-bootstrap' ),
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'san_wp_bootstrap_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'san-wp-bootstrap' ),
        'section'  => 'title_tagline',
        'settings' => 'san_wp_bootstrap_logo',
    ) ) );

}
add_action( 'customize_register', 'san_wp_bootstrap_customize_register' );

add_action( 'wp_head', 'san_wp_bootstrap_customizer_css');
function san_wp_bootstrap_customizer_css()
{
    ?>
    <style type="text/css">
        #page-sub-header { background: <?php echo get_theme_mod('header_bg_color_setting', '#fff'); ?>; }
    </style>
    <?php
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function san_wp_bootstrap_customize_preview_js() {
    wp_enqueue_script( 'san_wp_bootstrap_customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'san_wp_bootstrap_customize_preview_js' );
