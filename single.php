<?php
    get_header();

    if(have_posts()):
        while(have_posts()):
            the_post();
            printf("<div><h3>%1s</h3><p>%2s</p></div>",get_the_title( ),get_the_content( ));
        endwhile;
    endif;
    wp_reset_postdata();

    get_footer();

?>