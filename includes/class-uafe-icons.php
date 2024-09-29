<?php

class Uafe_Icons {


    public function __construct() {
        
        add_filter( 'elementor/icons_manager/additional_tabs', array( $this, 'uafe_register_icons' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'icons_scripts' ) );
    }

    function icons_scripts() {

        wp_enqueue_style( 'uafe-elementor-icons', plugin_dir_url( __FILE__ ) . '../icons/elementor/elementor.css', array(), UAFE_VERSION );
        wp_enqueue_style( 'uafe-fontello-icons', plugin_dir_url( __FILE__ ) . '../icons/fontello/css/uafe.css', array(), UAFE_VERSION );
        wp_enqueue_style( 'uafe-remix-icons', 'https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css', array(), UAFE_VERSION );
    
    }

    public function uafe_register_icons( $icons = array() ) {

        $icons['useful-icon'] = array(
            'name'          => 'useful-icon',
            'label'         => esc_html__( 'UAFE Elementor', 'uafe' ),
            'labelIcon'     => 'eicon-elementor-circle',
            'prefix'        => 'eicon-',
            'displayPrefix' => 'eicon',
            'url'           => plugin_dir_url( __FILE__ ) . '../icons/elementor/elementor.css',
            'fetchJson'     => plugin_dir_url( __FILE__ ) . '../icons/elementor/fonts/elementor.json',
            'ver'           => UAFE_VERSION,
        );

        $icons['useful-remix-icon'] = array(
            'name'          => 'useful-remix-icon',
            'label'         => esc_html__( 'UAFE Remix Icon', 'uafe' ),
            'labelIcon'     => 'ri-remixicon-line',
            'prefix'        => 'ri-',
            'displayPrefix' => 'ri-icon',
            'url'           => 'https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css',
            'fetchJson'     => plugin_dir_url( __FILE__ ) . 'remix/icon.json',
            'ver'           => UAFE_VERSION,
        );

        $icons['useful-fontello'] = array(
          'name'          => 'useful-fontello',
          'label'         => esc_html__( 'UAFE Fontello', 'uafe' ),
          'labelIcon'     => 'icon-ok-circle',
          'prefix'        => 'icon-',
          'displayPrefix' => 'icon',
          'url'           => plugin_dir_url( __FILE__ ) . '../icons/fontello/css/uafe.css',
          'fetchJson'     => plugin_dir_url( __FILE__ ) . '../icons/fontello/icon.json',
          'ver'           => UAFE_VERSION,
        );
        
        return $icons;
    }

}



new Uafe_Icons;


?>
