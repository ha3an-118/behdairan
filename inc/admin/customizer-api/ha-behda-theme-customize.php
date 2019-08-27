<?php
    add_action( 'customize_register', 'ha_behda_theme_customize' );

    function ha_behda_theme_customize( $wp_customize )
    {
        /*
        *   Name: ha_behda_theme_customize 
        *   Type: panel
        *   Description: panel for theme customizing option  
        */
        $panel_arg = array(
            "title"         => __("theme customize  ","behda"),
            "description"   => __("panel for theme customize","behda"), 
        );
        $wp_customize->add_panel("ha_behda_theme_customize",$panel_arg);

        /*
        * Type: section
        * Name: ha_behda_homepage_ourservice
        * Description: section for manage our service part of homepage 
        */
        $wp_customize->add_section("ha_behda_homepage_ourservice",array(
            'title'         => __("Homepage > Our Service","behda"),
            'description'   => __( 'add/edit our service part of home page','behda'),
            'panel'         => "ha_behda_theme_customize",
        ));
        $wp_customize->add_setting('ha_behda_homepage_number_ourservice',array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'service_number',array(
            'label' => __( 'number of service', 'behda' ),
            'section' => 'ha_behda_homepage_ourservice',
            'settings' => 'ha_behda_homepage_number_ourservice',
            'type' => 'number',
            ''
        )));

        $number_service = (int) get_theme_mod('ha_behda_homepage_number_ourservice');

        for($index=0 ; $index<$number_service; $index++){
                
                $setting_id = 'ha_behda_homepage_ourservice'.$index;
                $control_id = "ha_behda_homepage_service_control".$index;
                /*
                * Type: setting 
                * Name: ha_behda_homepage_ourservice
                * Description: for our service in theme customize option
                */
                $wp_customize->add_setting($setting_id,array(
                    'type'          => 'theme_mod',
                    'capability'    => 'edit_theme_options',
                    'transport'     => 'refresh'
                ));
                /*
                *   Type: control
                *   Name:
                *   Description:
                */

                $select = get_page_list();
                $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $control_id , array(
                    'label' => __( 'test', 'behda' ).($index+1),
                    'section' => 'ha_behda_homepage_ourservice',
                    'settings' => $setting_id,
                    'choices'  =>  $select,
                    'type' => 'select',
                ) ) );



        }
       
        $wp_customize->add_section("ha_behda_homepage_aboutus",array(
            'title'         => __("Homepage > About us","behda"),
            'description'   => __( 'add/edit about us part  of home page','behda'),
            'panel'         => "ha_behda_theme_customize",
        )); 
        $wp_customize->add_setting('ha_behda_homepage_aboutus_page',array(
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh',
        )); 
        $select = get_page_list();
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $control_id , array(
            'label' => __( 'test', 'behda' ).($index+1),
            'section' => 'ha_behda_homepage_aboutus',
            'settings' => 'ha_behda_homepage_aboutus_page',
            'choices'  =>  $select,
            'type' => 'select',
        ) ) );

    }

?>