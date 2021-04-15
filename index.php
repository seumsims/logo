<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title><?php bloginfo(); ?></title>
     <!-- Meta Data -->
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />
    <?php wp_head(); ?>
</head>

<body>
    <!-- header start  -->
    <header>
        <div class="header-wrapper ">
            <div class="container-fluid">
                <div class="row align-content-center align-items-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="logo">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/logo.png" ); ?>" alt="">
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
        <!-- bannar start  -->
        <section class="bannar-wrapper overflow-hidden" >
            <div class="bannar-active" >
                <div class="bannar-bg-img bannar-height " data-background="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/bannar/bannar-bg.jpg" ); ?>">
                    <div class="container">
                    
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="bannar-content">
                                    <span>Get Every Single Solutions.</span>
                                    <h1>I'm <span>a web designer</span></h1>
                                    <p>I'm a Freelance UI/UX Designer and Developer based in London, England. I strives to build immersive and beautiful web applications through carefully crafted code and user-centric design.</p>
                                    <div class="btn-group btn-two">
                                        <a href="#" class="btn"><i class="fas fa-user"></i>more about me</a>
                                        <a href="#" class="btn"><i class="fas fa-link"></i>prothfolio </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" bannar-person_image">
                        <div class="t-slider-img"> </div>
                        
                   <div class="bannar-person">
                    <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/bannar/man-sheap.png" ); ?>" alt="">
                </div>
                    </div>
                </div>
 
            </div>
        </section>
        <!-- bannar end  -->
        <!-- About me start  -->
        <section class="about-me-wrapper  mt-100 mb-60">
            <div class="container">
                <div class="row">
                    <div id="logoAbout" class="col-md-7">
                        <div class="about-me-left mb-40">
                            <h2>Hi, I’m James Watt
                                
                                </h2>
                            <h4>I’VE INSPIRED HUNDREDS OF BUSINESSMEN!I</h4>
                            <p>I specialize in building complex web applications, leading front-end teams, digital product design and developing visual design systems. I enjoy creating effortless user experience and designing delightful digital products. The entire process of going from a concept to release and gathering user’s feedback .</p>
                            <a href="" class="btn">LIVE PROJECT</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-me-img-wrapper mb-40">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "/assets/image/about/person.jpg"); ?>" alt="">
                        </div>
                       

                    </div>
                </div>
            </div>
        </section>
        <!-- About me end  -->
        <!-- works-start  -->
        <section class="works-arapper grey-bg  pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4  offset-xl-4">
                        <div class="section-title text-center">
                            <h2>MY  WORK</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- My-work-Image  -->
                        <div class="my-work-img mt-40">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/works/project_imgae.jpg" ); ?>" alt="">
                        </div>
                       
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <!-- my-work-content -->
                        <div class="my-work-content mt-40">
                            <h4>Project Title Here</h4>
                        <p>Donec sagittis cursus felis quis auctor. Donec eget sodales nisi. Aenean lorem tellus, pellentesque eget porttitor eget, tempus at elit. Nullam mi ipsum, pellent   amet pretium id, tincidunt ac tortor. Phasellus aliquet mi nec condimentum 
                        </p>
                        <a href="" class="btn">LIVE Demo</a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="my-work-content mt-40">
                            <h4>Project Title Here</h4>
                        <p>Donec sagittis cursus felis quis auctor. Donec eget sodales nisi. Aenean lorem tellus, pellentesque eget porttitor eget, tempus at elit. Nullam mi ipsum, pellent   amet pretium id, tincidunt ac tortor. Phasellus aliquet mi nec condimentum 
                        </p>
                        <a href="" class="btn">LIVE Demo</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-work-img mt-40">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/works/project_imgae.jpg" ); ?>" alt="">
                        </div>
                       
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <!-- my-works-btn  -->
                        <div class="my-works-btn mt-100"><a href="#" class="btn">LOAD MORE PROJECTS</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- works-end  -->

        <!-- upcomming start  -->
        <section class="upcomming mb-100 mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                 
                        <div class="section-title text-center mb-70 mt-100">
                            <h2>Cool Stuffs</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center justify-content-center ">
                        <div class="upcomming-isotop-manu mb-70 mt-100">
                            <div class="button-group filter-button-group">
                                <button class="active" data-filter="*"> All Works</button>
                                <button data-filter=".metal">UI/UX</button>
                                <button data-filter=".transition">Web Design</button>
                                <button data-filter=".alkali">Branding</button>
                                <button data-filter=".logo">Logo</button>
        
                              </div>
                                                             
                        </div>
                    </div>
                </div>
                <div class="row  grid ">
                    <div class="col-xl-4 col-lg-4 col-sm-6 grid-item alkali text-center">
                        <div class="portfolio-item mb-30">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/cool_stap/02.jpg" ); ?>" alt="">
                            <div class="portfolio-text">
                                <span>Branding</span>
                                <h3><a href="#">Hamble Triangle</a></h3>
                                <a href="http://">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 grid-item alkali text-center">
                        <div class="portfolio-item mb-30">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/cool_stap/02.jpg" ); ?>" alt="">
                            <div class="portfolio-text">
                                <span>Branding</span>
                                <h3><a href="#">Hamble Triangle</a></h3>
                                <a href="http://">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 grid-item alkali text-center">
                        <div class="portfolio-item mb-30">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/cool_stap/02.jpg" ); ?>" alt="">
                            <div class="portfolio-text">
                                <span>Branding</span>
                                <h3><a href="#">Hamble Triangle</a></h3>
                                <a href="http://">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 grid-item alkali text-center" text-center>
                        <div class="portfolio-item mb-30">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/cool_stap/02.jpg" ); ?>" alt="">
                            <div class="portfolio-text">
                                <span>Branding</span>
                                <h3><a href="#">Hamble Triangle</a></h3>
                                <a href="http://">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 grid-item alkali text-center">
                        <div class="portfolio-item mb-30">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/cool_stap/02.jpg" ); ?>" alt="">
                            <div class="portfolio-text">
                                <span>Branding</span>
                                <h3><a href="#">Hamble Triangle</a></h3>
                                <a href="http://">view more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 grid-item alkali text-center">
                        <div class="portfolio-item mb-30">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/cool_stap/02.jpg" ); ?>" alt="">
                            <div class="portfolio-text">
                                <span>Branding</span>
                                <h3><a href="#">Hamble Triangle</a></h3>
                                <a href="http://">view more</a>
                            </div>
                        </div>
                    </div>
             

                  
                </div>
            </div>
        </section>
        <!-- upcomming end  -->
        <!-- skill start  -->
        <section id="logoSkills" class="grey-bg pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="section-title mb-70">
                            <h2>I skill In Design</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="skill-progress-wrapper mb-40">
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Html 05</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>25%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Css</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"><span>35%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Javascript</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span>65%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Jqure</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span>75%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Html 05</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>100%</span></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="skill-progress-wrapper mb-40">
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Html 05</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>25%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Css</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"><span>35%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Javascript</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span>65%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Jqure</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span>75%</span></div>
                                  </div>
                            </div>
                            <div class="singel-skill-progress-bar mt-20">
                                <h6>Html 05</h6>
                                <div class="progress">

                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>100%</span></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- skill end  -->
        <!-- testimonial start  -->
        <section  class="mt-100 mb-100" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 section-title text-center mb-70">
                        <h2>Success Stories</h2>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="owl-carousel">
                        <div class="singel-testimonial d-flex align-items-center mt-30">
                            <div class="singel-testimonail-img"><img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/testiomnoal/01.png" ); ?>" alt=""></div>
                            <div class="singel-testimonail-content">
                            
                                <p><i class="fas fa-quote-left"></i> Even though I am a seasoned business owner myself ideas.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                    <h6>Jack Powell
                                       <span> CEO Deer Creative</span></h6>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial end  -->
        <!-- features start  -->
        <section class="pt-100 pb-100 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="section-title text-center">
                            <h2> features</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="d-inline-block">
                            <div class="singel-feature-item mb-30 mt-30 d-flex   justify-content-center  align-items-center text-center d-inline-block">
                     
                                <div class="d-inline-block">
                                    <img class="first_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_01.png" ); ?>" alt="">
                                    <img  class="last_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_01h.png" ); ?>" alt="">
                                    <h6>Blockchain Tech</h6>
                                </div>
                    

                         
                        </div>
                        </div>
             
         
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="d-inline-block">
                            <div class="singel-feature-item mb-30 mt-30 d-flex  align-content-center justify-content-center align-content-end align-items-center text-center">
                     
                                <div class="d-inline-block">
                                    <img class="first_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_03.png" ); ?>" alt="">
                                    <img  class="last_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_03h.png" ); ?>" alt="">
                                    <h6>Blockchain Tech</h6>
                                </div>
                    

                         
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="d-inline-block">
                            <div class="singel-feature-item mb-30 mt-30 d-flex  align-content-center justify-content-center align-content-end align-items-center text-center">
                     
                                <div class="d-inline-block">
                                    <img class="first_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_02.png" ); ?>" alt="">
                                    <img  class="last_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_02h.png" ); ?>" alt="">
                                    <h6>Blockchain Tech</h6>
                                </div>
                    

                         
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="d-inline-block">
                            <div class="singel-feature-item  mb-30 mt-30 d-flex  align-content-center justify-content-center align-content-end align-items-center text-center">
                     
                                <div class="d-inline-block">
                                    <img class="first_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_01.png" ); ?>" alt="">
                                    <img  class="last_img" src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/featured/01_01h.png" ); ?>" alt="">
                                    <h6>Blockchain Tech</h6>
                                </div>
                    

                            </div>
                        </div>
         
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="singel-fiture-text mt-30 mb-30">
                            <h3>
                                Benefit of Real Time Protection
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="singel-fiture-text mt-30 mb-30">
                            <h3>
                                Benefit of Real Time Protection
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="singel-fiture-text mt-30 mb-30">
                            <h3>
                                Benefit of Real Time Protection
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="singel-fiture-text mt-30 mb-30">
                            <h3>
                                Benefit of Real Time Protection
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features end  -->
        <!-- get-20-offer start  -->
        <section class="pt-100 pb-100" data-background="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/offer/offer_bg.png" ); ?>">

                <div class="container">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="got_offer-left mb-30">
                            <h2>Want to Get 20% Off? Save Time & Money</h2>
                        </div>
                      </div>

                    <div class="col-md-5 d-flex align-items-center">
                        <div class="offer-btn">
                                <div class="btn-two "><a href="" class="btn"><i class="fas fa-user"></i>Get A Quote</a><a href="" class="btn"><i class="far fa-envelope"></i> Give A Mail</a></div>
                        </div>
                    </div>
                    </div>
                </div>
 
        </section>
        <!-- get-20-offer end  -->
        <!-- team start  -->
        <section class="pt-100 pb-70 grey-bg">
            <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="section-title text-center mb-100">
                    <h2>Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6  col-sm-12 text-center" >
<div class="singel-team mb-100">
    <div class="team-img">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/tram/persone.jpg" ); ?>" alt="">
    </div>
    <div class="team-text text-center">
        <h5>Rosalina D. William</h5>
        <span>Founder</span>
        <div class="social-midea">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fas fa-laptop-code"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>
    </div>
</div>
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 text-center">
<div class="singel-team mb-100">
    <div class="team-img">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/tram/persone.jpg" ); ?>" alt="">
    </div>
    <div class="team-text text-center">
        <h5>Rosalina D. William</h5>
        <span>Founder</span>
        <div class="social-midea">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fas fa-laptop-code"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>
    </div>
</div>
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 text-center">
<div class="singel-team mb-100">
    <div class="team-img">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/tram/persone.jpg" ); ?>" alt="">
    </div>
    <div class="team-text text-center">
        <h5>Rosalina D. William</h5>
        <span>Founder</span>
        <div class="social-midea">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fas fa-laptop-code"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>
    </div>
</div>
            </div>
        
        </div>
            </div>
        </section>
        <!-- team end -->
        <!-- Why choiac us start  -->
        <section class="mt-100 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="section-title text-center">
                            <h2>Why choiac us?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="choce_img"><img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/why_choce_us/why.png" ); ?>" alt=""></div>

                    </div>
                    <div class="col-md-5">
                        <div class="choce_feature">
                            <div class="singel-choce d-flex">
                                <div class="choce-icon"><i class="far fa-file-code"></i></div>
                                <div class="choce-content">
                                    

                                    <h6>Accountability</h6>
                                    <p>Most people find that things start to happen very quickly after hiring a life coach.</p>
                                </div>
                            </div>
                            <div class="singel-choce d-flex">
                                <div class="choce-icon"><i class="far fa-file-code"></i></div>
                                <div class="choce-content">
                                    

                                    <h6>Accountability</h6>
                                    <p>Most people find that things start to happen very quickly after hiring a life coach.</p>
                                </div>
                            </div>
                            <div class="singel-choce d-flex">
                                <div class="choce-icon"><i class="far fa-file-code"></i></div>
                                <div class="choce-content">
                                    

                                    <h6>Accountability</h6>
                                    <p>Most people find that things start to happen very quickly after hiring a life coach.</p>
                                </div>
                            </div>
                            <div class="singel-choce d-flex">
                                <div class="choce-icon"><i class="far fa-file-code"></i></div>
                                <div class="choce-content">
                                    

                                    <h6>Accountability</h6>
                                    <p>Most people find that things start to happen very quickly after hiring a life coach.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why choiac us end  -->
        <!-- CONTACT start  -->
        <section class="pt-70 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="section-title text-center">
                            <h2>CONTACT</h2>
                        </div>
                    </div>

                </div>
                <div class="row">                   
                    <div class="col-md-8 offset-md-2">
<div class="contant-content text-center">
    <h5>Want To Know More About Me?</h5>
    <p>Sed in erat fermentum, sodales lectus ac, accumsan libero. Mauris olestie hendrerit justo eget tempor. Donec facilisis euism
        od eros, eu tincidunt </p>
</div>
<div class="contact-from">
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <a type="submit" class="btn">Submit</a>
      </form>
</div>
                  </div>
             </div>
            </div>
        </section>
        <!-- CONTACT end  -->

        <!-- EVENT & BLOG start  -->
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="section-title text-center">
                            <h2>EVENT & BLOG</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="singel-blog d-flex align-items-center mb-40">
                            <div class="blog-img">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/blog/img-with-index.jpg" ); ?>" alt="">
                            </div>
                         
                                <div class="blog-text">

                              

                                <h6>Masterminding</h6>
                                <p>
                                    Posted 08.17.2017 |  <span>by Jame Watt</span>
                                </p>
                                <p>Don't be distracted by criticism. Remember the only taste of success some people.
                                    View Details</p>
                                <a href="">View Details</a>
                            </div>

                        </div>
                        <div class="singel-blog d-flex align-items-center mb-40">
                            <div class="blog-img">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/blog/img-with-index.jpg" ); ?>" alt="">
                            </div>
                         
                                <div class="blog-text">

                              

                                <h6>Masterminding</h6>
                                <p>
                                    Posted 08.17.2017 |  <span>by Jame Watt</span>
                                </p>
                                <p>Don't be distracted by criticism. Remember the only taste of success some people.
                                    View Details</p>
                                <a href="">View Details</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">

                                <div class="blog-event-wrapper d-flex justify-content-center  align-items-center mb-30">
                                    <div class="blog-event-time">
                                        <h3>04<br>
                                           <span>DEC</span></h3>
                                    </div>
                        <div class="blog-event-location">     
                                               <h6>Speaking & Workshops</h6>
                                        <p><span><i class="fas fa-map-marked-alt"></i>  Newyork, us </span><span> <i class="far fa-clock"></i> 10:00 pm – 06:00 am</span></p>
                                        <a href="#">View Details</a></div>
                                  </div>
                            </div>
                            <div class="col-md-6 col-lg-12">

                                <div class="blog-event-wrapper d-flex justify-content-center  align-items-center mb-30">
                                    <div class="blog-event-time">
                                        <h3>04<br>
                                           <span>DEC</span></h3>
                                    </div>
                        <div class="blog-event-location">     
                                               <h6>Speaking & Workshops</h6>
                                        <p><span><i class="fas fa-map-marked-alt"></i>  Newyork, us </span><span> <i class="far fa-clock"></i> 10:00 pm – 06:00 am</span></p>
                                        <a href="#">View Details</a></div>
                                  </div>
                            </div>
                        </div>
   
 
                    </div>
                </div>
            </div>
        </section>
        <!-- EVENT & BLOG end  -->
    </main>
    <footer class="black-bg pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-left-content mb-40 text-center">
                        <div class="f-logo">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/" . "assets/image/b_logo.png" ); ?>" alt="">
                        </div>
                        <span>Minimal & Crative Portfolio/CV/Biodata Solution in One Platform.</span>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fas fa-laptop-code"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer-right-content">
                        <h3 class="text-center">I’m a digital designer living in United States.
                            Apart from eating burger</h3>
                            <div class="row">
                                <div class="col-4">
                                    <div class="footer-right-cta">
                                        <span>Sent Mail</span>
                                        <p>info@webmail.com <br>
                                            career.webmail.com</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="footer-right-cta">
                                        <span>Make a call</span>
                                        <p>+880170000000 <br>
                                            +880170000000</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="footer-right-cta">
                                        <span>Sent Mail</span>
                                        <p>info@webmail.com <br>
                                            career.webmail.com</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>