<?php
    get_header();
    if(have_posts()):
        printf("<ul>");
        while(have_posts()):
            the_post();
            printf("<li><a href='%1s'>%2s</a>",get_permalink(),get_the_title());
        endwhile;
        printf("</ul>");
        wp_reset_postdata( );
    endif;
    get_footer();
?>