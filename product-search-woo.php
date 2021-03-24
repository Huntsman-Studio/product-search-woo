<?php
    /*
        Plugin Name: Woocommerce AJAX product search
        Plugin URI: https://github.com/Huntsman-Studio/product-search-woo
        Description: Ajax product search for WooCommerce
        Author: Developers Huntsman Studio
        Version: 1.0.0
        Author URI: https://huntsmanstudio.gr/
    */

    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    include 'shortcodes/';

    // Add scripts and styles
    function search_plugin_scripts_styles(){
        if (class_exists("Woocommerce")) {

            wp_enqueue_style( 'search-style', plugins_url('/css/styles.css', __FILE__ ), array(), '1.0.0' );
            wp_register_script( 'search-main', plugins_url('/js/main.js', __FILE__ ), array('jquery'), '', true);
            wp_localize_script(
                'search-main',
                'opt',
                array(
                    'ajaxUrl'   => admin_url('admin-ajax.php'),
                    'noResults' => esc_html__( 'No products found', 'textdomain' ),
                )
            );
        }
    }
?>