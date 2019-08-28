<?php
    if(!function_exists('ha_behda_setup')):
        function ha_behda_setup(){

            /*
            * Enable support for Post Thumbnails on posts and pages.
            *
            * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
            */
            add_theme_support( 'post-thumbnails' );

            add_theme_support( 'custom-header');

            /*
            *   register nav menu
            */
            register_nav_menus(
                array(
                    'top_header' => __('Top header','behda'),
                    'social' => __('Social Link Menu','behda'),
                    'speed_link' => __('Footer Speed  Link'),
                )
            );

            /*
            * Switch default core markup for search form, comment form, and comments
            * to output valid HTML5.
            */
            add_theme_support(
                'html5',
                array(
                    'search-form',
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                )
            );
            
            /*
            * custom logo 
            *
            * @link https://codex.wordpress.org/Theme_Logo
            */
            
            add_theme_support(
                'custom-logo',
                array(
                    'height'      => 70,
                    'width'       => 100,
                    'flex-width'  => false,
                    'flex-height' => false,
                )
            );

        }
    endif;
    add_action('after_setup_theme','ha_behda_setup');

    if(!function_exists('ha_behad_widgets_init'))
    {
        function ha_behad_widgets_init()
        {
            register_sidebar( 
                array(
                    'name'          => __( 'Footer', 'behda' ),
                    'id'            => 'footer_1',
                    'description'   => __( 'Add widgets here to appear in your footer.', 'behda' ),
                    'before_widget' => '<section id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</section>',
                    'before_title'  => '<h4 class="widget-title">',
                    'after_title'   => '</h4>',
                )
             );
        }
    }
    add_action('widgets_init','ha_behad_widgets_init');
?>