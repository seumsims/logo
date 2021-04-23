
    <!-- header start  -->
    <header>
        <div class="header-wrapper ">
            <div class="container-fluid">
                <div class="row align-content-center align-items-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="logo">
                            <a href="<?php esc_url( site_url() ); ?>">
                            
                            <?php the_custom_logo(  ); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 d-none d-lg-inline-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                            <?php wp_nav_menu(array(
                                
                                'menu' => 'Main Menu',
                                'theme_location' => 'primary'
                            )); ?>
                            </nav>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 d-none d-xl-inline-block">
                        <div class="header-btn d-flex align-content-center"><a href="#" class="btn">Download CV</a></div>
                    </div>
                    <div class="col-12">
                        <div class="hibo-mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>

    </header>
       <!-- header end  -->
    <main>