<?php $prefix= get_option('_prefix');
      $logo=$prefix["logo"];
?>
<div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="<?php echo $logo['logo_url']; ?>" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="<?php echo $logo['logo_icon']; ?>"></i><?php echo $logo['logo_text']; ?></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">


                            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>

                            </div>
                        </div>
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>