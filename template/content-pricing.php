<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Service </h5>
                <?php 
                //  echo get_post_meta(get_the_ID(),'s-title',true); 
                 ?>
                <h1 class="display-4">Awesome Medical Programs</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">



<?php
                    $args = array(
            'post_type' => 'medical_service_',
            //'posts_per_page' => 3,
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :  
                    while ( $the_query->have_posts() ) : 
                    $the_query->the_post(); 
                       if ( has_post_thumbnail() ) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID());
                        }
                      
                        $postid = $the_query->post->ID;

                        $price = get_post_meta($postid, 'price', true);

                    
                   
        ?>


                 <div class="bg-light rounded text-center">
                    <div class="position-relative">
                        <img class="img-fluid rounded-top" src="<?php   echo $image_url;?>" alt="">
                        <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                            <h3 class="text-white"><?php the_title(); ?></h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small> <?php echo $price; ?><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                            </h1>
                        </div>
                    </div>
                    <div class="text-center py-5">
                        <?php
                        // for feather
                        $postfeature=get_post_meta($postid,'feature',true);
                        if(!empty($postfeature)){
                            foreach((array)$postfeature as $feature){
                                ?>
                                    <p><?php echo $feature; ?></p>
                                <?php
                            }
                        }


                        ?>
                    
                        
                       
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                    </div>
                </div>

     <?php endwhile; ?>

     <?php else : ?>
       <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        <?php wp_reset_query(); ?>





        


 
            </div>
        </div>
    </div>