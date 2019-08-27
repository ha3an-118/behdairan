<?php
    $arg = array(
        "post_type" => "post",
        "posts_per_page" => 3,
    );
    $ha_weblog = new WP_Query($arg);
    if($ha_weblog->have_posts()):
        printf('<section class="lastpost p-4 " id="blog"> <div class="d-flex flex-wrap justify-content-around">');
        while($ha_weblog->have_posts()):
            $ha_weblog->the_post();
            ?>
            <div class='postitem col-12 col-sm-10  col-md-5  col-lg-3  m-2 text-right p-0'>
                <figure class='mb-0'>
                    <img class='img-fluid' alt='' src='img/bg/1.jpg'>
                </figure>
                <div class='bg-flat-8 p-2'>
                    <h4 class='p-2 '><b><?php the_title(); ?></b></h4>
                    <p class=' '> <?php the_excerpt(); ?> </p>
                    <a href="<?php the_permalink(); ?>" class='d-block text-left'><?php _e("reading more","behda") ?></a>
                    <hr>
                    <div class='px-2 pt-0 d-flex flex-row  flex-wrap justify-content-between'>
                            <div><i class='fa fa-eye fa-xs'></i><small class='px-2'></small></div>
                            <div><i class='fa fa-calendar-alt  fa-xs'></i><small class='px-2'><?php echo get_post_time("yy/m/d"); ?></small></div>
                            <div><i class='fa fa-pen-nib  fa-xs'></i><small class='px-2'><a href="" class=''><?php the_author(); ?>    </a></small></div>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        printf("</div></section>");
    endif;