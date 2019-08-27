 <?php
    $aboutus_pageID = (int) get_theme_mod("ha_behda_homepage_aboutus_page");
    $aboutus_page = get_post($aboutus_pageID);
    if(!empty($aboutus_page)):
        ?>
        <section class='container-fluid aboutus' id='about-us'>
            <div class='container p-0 p-lg-5 pt-2 pt-md-5 text-flat-2 text-right'>
                <h2 class='p-2'><b> <?php echo  $aboutus_page->post_title; ?> </b></h2>
                <p class="h5 p-1  pb-5 p-lg-5"> <?php echo $aboutus_page->post_content; ?> </p>
            </div>
            
        </section>
        <?php
    endif;
 ?>


