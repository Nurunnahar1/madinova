<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
                <h1 class="display-4">Patients Say About Our Services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
 
                    <?php
            // $patient_name= get_post_meta(get_the_ID(),'testimonial',true);
            // $patient_profession= get_post_meta(get_the_ID(),'patient_profession',true);

            $args = array(
            'post_type' => 'testimonial',
            //'orderby' => 'date',
            //'order' => 'DESC',
            //'posts_per_page' => 3,
            );
            
            $this_query = new WP_Query( $args );
 
  
            if ( $this_query->have_posts() ) :  
            while ( $this_query->have_posts() ) :
            $this_query->the_post(); 
            if ( has_post_thumbnail() ) {
                $image_url = get_the_post_thumbnail_url(get_the_ID());
            }
            
            ?>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="<?php  echo $image_url;?>" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal"><?php the_content(); ?></p>
                            <hr class="w-25 mx-auto">
                            <h3><?php echo get_post_meta(get_the_ID(),'patient_name',true); ?></h3>
                            <h6 class="fw-normal text-primary mb-3"><?php echo get_post_meta(get_the_ID(),'patient_profession',true) ; ?></h6>
                        </div>

                        <?php
            endwhile;
            else : ?>
                <p><?php esc_html_e( 'Sorry, no posts found.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>








                        <!-- <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="<?php  echo get_theme_file_uri( 'img/testimonial-2.jpg' );?>" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="<?php  echo get_theme_file_uri( 'img/testimonial-3.jpg' );?>" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="w-25 mx-auto">
                            <h3>Patient Name</h3>
                            <h6 class="fw-normal text-primary mb-3">Profession</h6>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>