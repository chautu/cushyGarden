<?php     
//support theme woocommerce
    function my_custom_wc_theme_support() {
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
    add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );

    function initTheme(){
        // add short code plugin YITH WooCommerce Wishlist at teamplate 'START'
        add_shortcode( 'yith_wcwl_wishlist', array( 'YITH_WCWL_Shortcode', 'wishlist' ) ); 
        add_shortcode( 'yith_wcwl_add_to_wishlist', array( 'YITH_WCWL_Shortcode', 'add_to_wishlist' ) ); 
        // add short code plugin YITH WooCommerce Wishlist at teamplate 'END'
        //chuyen trinh soan thao wordpress phien ban cu
        add_filter('use_block_editor_for_post', '__return_false');

        //dky menu
        register_nav_menu('header-menu', __('Menu main'));
        register_nav_menu('footer-menu', __('Menu footer'));

        //xoa widget moi
        remove_theme_support('widgets-block-editor');

        if (function_exists('register_sidebar')){
            register_sidebar(array(
                'name'=> 'Cột bên',
                'id' => 'sidebar',
                'before_widget' => '<div class="widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3> <i class="fa fa-bars"></i>',
                'after_title'   => '</h3>',
            ));
        }

        
    }
    add_action('init', 'initTheme');