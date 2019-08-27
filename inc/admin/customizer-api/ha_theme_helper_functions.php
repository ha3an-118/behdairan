<?php
    function get_page_list(){
        $arg = array(
            'post_type' => 'page',
            'posts_per_page' => -1,
        );
        $out = array();
        $ha_query = new WP_Query($arg);
        if($ha_query->have_posts()){
            while($ha_query->have_posts()){
                $ha_query->the_post();
                $out[get_the_ID()] = get_the_title();
            }
        }
        wp_reset_postdata();
        return $out;
    }

?>