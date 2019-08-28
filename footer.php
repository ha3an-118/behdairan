<footer class='container-fluid bg-flat-2 text-flat-7 '>
            <div class='d-flex flex-column flex-md-row flex-wrap justify-content-around  px-3 py-5'>
                <div class='col-12 col-sm-10 col-md-5 col-lg-3 text-right'>

                        <?php dynamic_sidebar( 'footer_1' ) ?>
                
                </div>
                <div class='col-12 col-sm-10 col-md-5 col-lg-3 text-right'>
                    <header class='pb-3'>
                        <h4> <?php _e('socila netword','behda'); ?>  </h4>
                    </header>
                    <?php if( has_nav_menu('social')): ?>

                        <?php wp_nav_menu(
                            array(
                                'theme_location'    => 'social',
                                'menu_class'        => 'pr-0',
                                'container_class'   => '',
                                'container_id'      => 'social_menu_footer',
                                'link_before'       => '<span class="text-flat-7 pr-0 py-1">',
                                'link_after'        => '<hr></span>',
                                'depth'             => 2,
                            )
                            );  ?>
                    <?php endif; ?>

                </div>
              <div class='col-12 col-sm-10 col-md-5 col-lg-3 text-right'>
                    <header class='pb-3'>
                        <h4> <?php _e('fast link','behda'); ?> </h4>
                    </header>

                    <?php if( has_nav_menu('speed_link')): ?>

                        <?php wp_nav_menu(
                            array(
                                'theme_location'    => 'speed_link',
                                'menu_class'        => 'pr-0',
                                'container_class'   => '',
                                'container_id'      => 'fast_link_footer',
                                'link_before'       => '<span class="text-flat-7 pr-0 py-1"><i class="fa fa-angle-double-left   fa-sm"></i><span class="pr-2">',
                                'link_after'        => '</span></span>',
                                'depth'             => 2,
                            )
                            );  ?>
                    <?php endif; ?>
                </div>
                <div class='col-12 col-sm-10 col-md-5 col-lg-3 text-center'>
                    <?php if(has_custom_logo()): ?>

                        <figure class='m-0 p-0'>
                            <?php  the_custom_logo(); ?>
                        </figure>

                    <?php endif; ?>
                    


                </div>


            </div>
                  </footer>
            <a href='#' class='moveup text-flat-12' id='moveup'><i class='fa fa-arrow-circle-up fa-3x'></i></a>


<?php wp_footer(); ?>
</body>
</html>