<section class='wellcome-page ' style="background-image:url('<?php echo( get_header_image() ); ?>')">
            <div class='wellcome-cover d-flex justify-content-center align-items-center align-self-center'>
                <div class='container text-flat-7   text-center '>
                    <h1 class='h2 '><b><?php echo bloginfo( 'name' ) ?> </b></h1>
                    <h4><b><?php echo bloginfo("description", 'display'); ?> </b></h4>
                </div>
            </div>
</section>
<div id="test" ><h1>test loading js function.js not load</h1></div>
<nav class='flex-column flex-md-row navbar navbar-expand-md  text-flat-7 bg-flat-3 text-right direction-ltr justify-content-between' id='hafs'>
        <div class='d-flex flex-row justify-content-between col-12  col-md-3 direction-ltr'>
            <?php if(has_custom_logo()): ?>

                <?php  the_custom_logo(); ?>

            <?php endif; ?>
            <div  id='navbtn' class='d-md-none p-2 text-flat-2 d-inline-block '><i class='fa fa-arrow-alt-circle-left fa-3x '></i></div>
        </div>
        <div class='d-md-none p-2 text-flat-2 text-left' id='navbtn-onlist'><i class='fa fa-arrow-alt-circle-right fa-3x '></i></div>
            
            <?php if( has_nav_menu('top_header')): ?>

                <?php wp_nav_menu(
                    array(
                        'theme_location'    => 'top_header',
                        'menu_class'        => 'navbar-nav',
                        'container_class'   => 'sidnav sideclose bg-flat-3  d-md-block direction-rtl',
                        'container_id'      => 'sidenave',
                        'link_before'       => '<span class="nav-link">',
                        'link_after'        => '</span>',
                        'depth'             => 2,
                    )
                    );  ?>
            <?php endif; ?>
</nav> 