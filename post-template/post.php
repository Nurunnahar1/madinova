<?php 
/*
* Template Name:blog post page
*/
?>
<?php get_header(); ?>
    <!-- Topbar Start -->
    <?php get_template_part( 'template/content','topbar' );    ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php get_template_part( 'template/content','navbar' );    ?>
    <!-- Navbar End -->
 
    <?php $post_id = get_the_ID();  echo $post_id;  ?>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Our Latest Medical Blog Posts</h1>
            </div>
            <div class="row g-5">

 
 
            <?php
 

$args = array(
  'post_type' => 'post',
 
  'posts_per_page' => 1,
);

$this_query = new WP_Query( $args ); if ( $this_query->have_posts() ) :   ?>

 
 





        <div class="col-xl-4 col-lg-6">
        <div class="bg-light rounded overflow-hidden">
           
           <div class="img cal-md-12"><?php the_post_thumbnail();?></div>
            
            <div class="p-4">
            <div class="h3 d-block mb-3"><?php the_title(); ?></div>
                <p class="m-0"><?php the_content(); ?></p>
            </div>
            <div class="d-flex justify-content-between border-top p-4">
                <div class="d-flex align-items-center">
                <?php
                    $user = wp_get_current_user();

                    if ( $user ) :
                     ?>
                    <img class="rounded-circle me-2" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" width="25" height="25" alt="">
                     <?php endif; ?>
                    
                    <small><?php  echo the_author();?></small>
                </div>
                <div class="d-flex align-items-center">
                    <small class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</small>
                    <small class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</small>
                </div>
            </div>
        </div>
    </div>

    <?php
 
     else : ?>
        <p><?php esc_html_e( 'Sorry, no posts found.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

 








            </div>
        </div>
    </div>
                                <!-- servicr -->
                                
 
 <?php	get_footer(); ?>
       