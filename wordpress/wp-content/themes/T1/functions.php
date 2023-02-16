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

    }
    add_action('init', 'initTheme');

    //nhung file widget
    require_once get_parent_theme_file_path('/widgets/widgets_index.php');

    add_action('widgets_init', 'wplearning_widget_init');
    function wplearning_widget_init()
    {
        //xoa widget moi
        remove_theme_support('widgets-block-editor');

        if (function_exists('register_sidebar')){
           //slide home
            register_sidebar(array(
                'name'  => __('Home', 'text_domain'),
                'id' => 'slide-home', 
                'description' => __('Thêm các widget *[Slide Home] ở đây', 'text_domain'), 
                'before_widget' => '<section id="%1$s" class="widget %2$s">', 
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));

            //Services
            register_sidebar(array(
                'name'  => __('Services', 'text_domain'),
                'id' => 'services', 
                'description' => __('Thêm các widget *[Services] ở đây', 'text_domain'), 
                'before_widget' => '<section id="%1$s" class="widget %2$s">', 
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));


            //Progress Bar
            register_sidebar(array(
                'name'  => __('Progress Bar', 'text_domain'),
                'id' => 'progress_bar', 
                'description' => __('Thêm các widget *[Progress Bar] ở đây', 'text_domain'), 
                'before_widget' => '<section id="%1$s" class="widget %2$s">', 
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));

            //Benefits Area
            register_sidebar(array(
                'name'  => __('Benefits Area', 'text_domain'),
                'id' => 'benefits_area', 
                'description' => __('Thêm các widget *[Benefits Area] ở đây', 'text_domain'), 
                'before_widget' => '<div id="%1$s" class="col-12 col-sm-6">', 
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));

            //Portfolio Area
            register_sidebar(array(
                'name'  => __('Portfolio Area', 'text_domain'),
                'id' => 'portfolio_area', 
                'description' => __('Thêm các widget *[Portfolio Area] ở đây', 'text_domain'), 
                'before_widget' => '<div id="%1$s" >', 
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));

            //Single Testimonial
            register_sidebar(array(
                'name'  => __('Single Testimonial', 'text_domain'),
                'id' => 'single_testimonial', 
                'description' => __('Thêm các widget *[Single Testimonial] ở đây', 'text_domain'), 
                'before_widget' => '<div id="%1$s" >', 
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));

            //Blog Post
            register_sidebar(array(
                'name'  => __('Blog Post', 'text_domain'),
                'id' => 'wp_blog_post', 
                'description' => __('Thêm các widget *[Blog Post] ở đây', 'text_domain'), 
                'before_widget' => '<div id="%1$s" >', 
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));
        }


        
    }