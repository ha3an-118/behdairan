<?php
/*
*   Enqueue style 
*/
    function ha_behda_register_style()
    {
        wp_register_style("bootstrap-css","https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", null,null);
        wp_register_style("fontawesome",get_template_directory_uri()."/assets/lib/fontawesome-free-5.2.0-web/css/all.css");
        wp_register_style("ha-fonts",get_template_directory_uri()."/assets/css/fonts.css");
        wp_register_style("ha-flat-color",get_template_directory_uri()."/assets/css/flat-color.css");
        wp_register_style("ha-style",get_stylesheet_uri());
    }
    add_action("init","ha_behda_register_style");

    function ha_behda_register_script(){
        wp_register_script("bootstrapt-js","https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",array("jquery"),null,true);
        wp_register_script("ha-functions-js",get_template_directory_uri()."/assets/js/function.js",array("jquery"),null,true);
        
    }
    add_action("init","ha_behda_register_script");

    function ha_behda_enqueue_style()
    {
        wp_enqueue_style("bootstrap-css");
        wp_enqueue_style("fontawesome");
        wp_enqueue_style("ha-fonts");
        wp_enqueue_style("ha-style");
        wp_enqueue_style("ha-flat-color");
    }
    add_action("wp_enqueue_scripts","ha_behda_enqueue_style");

    function ha_behda_enqueue_script(){
        wp_enqueue_script("bootstrapt-js");
        wp_enqueue_script("ha-functions-js");
    }
    add_action("wp_enqueue_scripts","ha_behda_enqueue_script");
?>