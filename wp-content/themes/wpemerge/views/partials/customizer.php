<?php

function daisy_bootstrap_customize_register( $wp_customize ) {

    $wp_customize->add_panel( 'homepage_hero_settings', array(
        'priority' => 100,
        'title' => esc_html__( 'Homepage Settings', 'daisyBootstrap' ),
        'description' => esc_html__('Change various Homepage settings', 'daisyBootstrap' ),
    ) );

    $wp_customize->add_section( 'hero_settings', array(
        'panel' => 'homepage_hero_settings',
        'title' => esc_html__( 'Homepage Hero Settings', 'daisyBootstrap' ),
        'description' => esc_html__( 'Change the settings for the hero element', 'daisyBootstrap' ),
    ));

    $wp_customize->add_setting( 'home_hero_bg_color', array(
        'default' => '#fff',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_bg_color', array(
        'section' => 'hero_settings',
        'label' => esc_html__( 'Hero background color', 'daisyBootstrap' ),
    )));
}

add_action( 'customize_register', 'daisy_bootstrap_customize_register' );

function daisy_bootstrap_customize_css() {

    ?>

    <style type="text/css">
        .homepage-hero { background-color: <?php echo get_theme_mod( 'home_hero_bg_color', '#08b2e3'); ?>; }
    </style>

    <?php
}