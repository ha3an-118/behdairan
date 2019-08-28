<?php
    get_header();

    if(have_posts()):
        while(have_posts()):
            the_post();
            if(has_post_thumbnail(get_the_ID())):
                printf("<div class = ' container d-flex justify-content-center p-5'>");
                the_post_thumbnail("full",array( 
                    "class" => "img-fluid"
                ));
                printf("</div>");
            endif;
            printf("<div class='container text-right'><h3>%1s</h3><p>%2s</p></div>",get_the_title( ),get_the_content( ));
        endwhile;
    endif;
    wp_reset_postdata();

    get_footer();

?>