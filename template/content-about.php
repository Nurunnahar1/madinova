<?php
 $prefix= get_option('_prefix');
 $about_us=$prefix["about_us_"];
 $aboutus=$about_us["aboutus"];

 ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="<?php  echo esc_attr($aboutus["about_image"]);?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                        <h1 class="display-4"><?php  echo esc_attr($aboutus["about_title"]);?></h1>
                    </div>
                    <p><?php  echo esc_attr($aboutus["about_description"]);?></p>
                    <div class="row g-3 pt-3">


<?php
 $about_service=$about_us["about_service"];
foreach((array)$about_service as $about_service_dtl){
    ?>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="<?php  echo esc_attr($about_service_dtl["add_about_icon"]);?>"></i>
                                <h6 class="mb-0"><?php  echo esc_attr($about_service_dtl["aboutdesignation"]);?><small class="d-block text-primary"><?php  echo esc_attr($about_service_dtl["about_designation"]);?></small></h6>
                            </div>
                        </div>
                            
 <?php
}

?>






                       
                    </div>
                </div>
            </div>
        </div>
    </div>





    