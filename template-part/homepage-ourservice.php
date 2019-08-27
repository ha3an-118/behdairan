 <?php
    $number_service = (int) get_theme_mod("ha_behda_homepage_number_ourservice");
    if($number_service <= 0){
        return;
    }
 ?>
 
 <section class='container-fluid my-5 py-5 ' id="our-service">
                <div class='container py-5 mx-auto'>
                    <div class=' d-flex flex-column flex-md-row  flex-wrap justify-content-center'>
                    <?php
                    for($index=0 ; $index<$number_service; $index++):
                
                        $setting_id = 'ha_behda_homepage_ourservice'.$index;
                        $post_id = (int) get_theme_mod($setting_id);
                        $ha_post =  get_post($post_id);
                        $ha_element_class = get_post_meta($ha_post->ID,'homepagecalss')[0];
                        $ha_element_link  = get_permalink( $ha_post->ID );
                    
                    ?>
                        <a href="<?php echo $ha_element_link; ?>" class="col-10 col-md-5 col-lg-3">
                        <div class=' py-4 text-center item rounded mx-auto' >
                            
                                <i class='<?php echo $ha_element_class; ?>  fa-4x '></i>
                                <h4 class='py-3'><?php echo $ha_post->post_title; ?> </h4>
                                <p class='px-2' ><?php echo $ha_post->post_excerpt; ?></p>
                            
                        </div>
                        </a>
                       <?php 

                        endfor;
                       ?> 
                    </div>
                </div>
</section>



