<?php $prefix= get_option('_prefix');
      $logo=$prefix["logo"];
      $button=$prefix["button"];
      $buttons1=$button["button_1"];
      $buttons2=$button["button_2"];

      //header hero 

?>
<div class="container-fluid bg-primary py-5 mb-5 hero-header"<?php $prefix["hero_background"]; ?> >
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To <?php echo $logo['logo_text']; ?></h5>
                    <h1 class="display-1 text-white mb-md-4"><?php echo $prefix["hero_title"]; ?></h1>
                    <div class="pt-2">
                        <a href="<?php echo $buttons1["btn_1_url"]; ?>" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2"><?php echo $buttons1["btn_1"]; ?></a>
                        <a href="<?php echo $buttons2["btn_2_url"]; ?>" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2"><?php echo $buttons2["btn_2"]; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    