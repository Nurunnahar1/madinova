<?php
/*
*Template Name:Medical Service
 */
?>
<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Medical Services</h1>
            </div>
            <div class="row g-5">
 
<?php
$args = array(
    'post_type' => 'medical_service',
    'posts_per_page' => 6,
  );
  
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :  
     while ( $the_query->have_posts() ) : 
       $the_query->the_post(); 
    //    $postid = $the_query->post->ID;

    //    $price = get_post_meta($postid, 'icon', true);
       ?>

 

                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                      <i class="<?php echo get_post_meta(get_the_ID(),'icon',true); ?>"></i>
                        </div>
                        <h4 class="mb-3"><?php the_title();  ?></h4>
                        <p class="m-0"><?php  the_content();  ?></p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="<?php the_permalink(); ?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
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