   <!-- Topbar Start -->
   <?php $prefix= get_option('_prefix'); 
        $phone=$prefix["header_left_"];
        $phone_icon=$phone["phone"];

        $message_icon=$phone["message"];

   ?>
   <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                    <a class="text-decoration-none text-body pe-3" href="tel:+<?php echo $phone_icon["phone_icon"]; ?>"><i class="<?php echo $phone_icon["phone_icon"]; ?>"></i><?php echo $phone_icon["cell-url"]; ?></a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="<?php echo $message_icon["message_icon"]; ?>"></i><?php echo $message_icon["message-email"]; ?></a>     
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
 
<?php
 
$top_header=$prefix['header_right'];
foreach((array)$top_header as $icon_and_url){
    ?>
    <a class="text-body px-2" href="<?php echo $icon_and_url['add_url']; ?>"><i class="<?php echo $icon_and_url['add_cell_icon']; ?>"></i></a>
                            
 <?php
}

?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->