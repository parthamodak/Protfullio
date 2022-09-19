<?php
require_once('backend/includes/data_base.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/frontend/css/animate.min.css">
        <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="assets/frontend/css/flaticon.css">
        <link rel="stylesheet" href="assets/frontend/css/slick.css">
        <link rel="stylesheet" href="assets/frontend/css/aos.css">
        <link rel="stylesheet" href="assets/frontend/css/default.css">
        <link rel="stylesheet" href="assets/frontend/css/style.css">
        <link rel="stylesheet" href="assets/frontend/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none "><img src="assets/frontend/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="assets/frontend/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="fa fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="assets/frontend/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <?php
                            $owner_address_query="SELECT settings_value FROM settings WHERE settings_name='owner_address'";
                            $owner_address=mysqli_fetch_assoc(mysqli_query($db_connect, $owner_address_query))['settings_value'];                                 
                        ?>
                        <h4>Office Address</h4>
                        <p><?=$owner_address?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <?php
                            $owner_phone_number_query="SELECT settings_value FROM settings WHERE settings_name='owner_phone_number'";
                            $owner_phone_number=mysqli_fetch_assoc(mysqli_query($db_connect, $owner_phone_number_query))['settings_value'];                                 
                        ?>
                        <h4>Phone Number</h4>
                        <p><?=$owner_phone_number?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <?php
                            $owner_email_address_query="SELECT settings_value FROM settings WHERE settings_name='owner_email_address'";
                            $owner_email_address=mysqli_fetch_assoc(mysqli_query($db_connect, $owner_email_address_query))['settings_value'];                                 
                        ?>
                        <h4>Email Address</h4>
                        <p><?=$owner_email_address?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <?php
                        $facebook_query="SELECT settings_value FROM settings WHERE settings_name='facebook'";
                        $facebook=mysqli_fetch_assoc(mysqli_query($db_connect, $facebook_query))['settings_value'];                                                                      
                    ?>
                    <?php
                        $twitter_query="SELECT settings_value FROM settings WHERE settings_name='twitter'";
                        $twitter=mysqli_fetch_assoc(mysqli_query($db_connect, $twitter_query))['settings_value'];                                                                      
                    ?>
                    <?php
                        $instagram_query="SELECT settings_value FROM settings WHERE settings_name='instagram'";
                        $instagram=mysqli_fetch_assoc(mysqli_query($db_connect, $instagram_query))['settings_value'];                                                                      
                    ?>
                    <a href="<?=$facebook?>"><i class="fa fa-facebook-f"></i></a>
                    <a href="<?=$twitter?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?=$instagram?>"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <?php
                                    $owner_name_query="SELECT settings_value FROM settings WHERE settings_name='owner_name'";
                                    $owner_name=mysqli_fetch_assoc(mysqli_query($db_connect, $owner_name_query))['settings_value'];                                 
                                ?>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$owner_name?></h2>
                                <?php
                                    $owner_bio_query="SELECT settings_value FROM settings WHERE settings_name='owner_bio'";
                                    $owner_bio=mysqli_fetch_assoc(mysqli_query($db_connect, $owner_bio_query))['settings_value'];                                 
                                ?>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$owner_bio?>.</p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>                                     
                                        <li><a href="<?=$facebook?>"><i class="fa fa-facebook-f"></i></a></li>                                       
                                        <li><a href="<?=$twitter?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?=$instagram?>"><i class="fa fa-instagram"></i></a></li>                                     
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="assets/frontend/img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="assets/frontend/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="assets/frontend/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <?php
                                    $owner_about_query="SELECT settings_value FROM settings WHERE settings_name='owner_about'";
                                    $owner_about=mysqli_fetch_assoc(mysqli_query($db_connect, $owner_about_query))['settings_value'];                                 
                                ?>
                                <p><?=$owner_about?></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <?php 
                                $skill_query="SELECT * FROM skills ";
                                $skill_query_from_db=mysqli_query($db_connect,$skill_query);                                                  
                            ?>
                            <?php foreach($skill_query_from_db as $skill): ?>
                            <div class="education">
                                <div class="year"><?=$skill['skill_title']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$skill['skill_description']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$skill['skill_progress']?>%;"  aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php 
                            $active_services_query="SELECT * FROM servies where status='active'";
                            $active_services_query_from_db=mysqli_query($db_connect, $active_services_query);                                                  
                        ?>
                        <?php foreach($active_services_query_from_db as $active_servcie): ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$active_servcie['service_icon']?>"></i>
								<h3><?=$active_servcie['service_title']?></h3>
								<p>
									<?=$active_servcie['service_description']?>
								</p>
							</div>
						</div>
                        <?php endforeach; ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $portfolios_query="SELECT * FROM portfolios";
                        $portfolios_query_from_db=mysqli_query($db_connect, $portfolios_query);                                                  
                    ?>
                    <div class="row">
                        <?php foreach($portfolios_query_from_db as $portfolio): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="backend/uploads/portfolios/<?=$portfolio['portfolio_photo']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$portfolio['portfolio_category']?></span>
									<h4><a href="portfolio-single.php?id=<?=$portfolio['id'];?>"><?=$portfolio['portfolio_title']?></a></h4>
									<a href="portfolio-single.php?id=<?=$portfolio['id'];?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                        <?php 
                            $all_portfolio_count_query="SELECT * FROM portfolio_counts where status='active'";
                            $all_portfolio_count_query_from_db=mysqli_query($db_connect, $all_portfolio_count_query);                                                  
                        ?>
                        <?php foreach($all_portfolio_count_query_from_db as $portfolio_count): ?>
                            <div class="col-lg-3 col-md-3">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$portfolio_count['portfolio_icon'];?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$portfolio_count['portfolio_number'];?></span></h2>
                                        <span><?=$portfolio_count['portfolio_description'];?></span>
                                    </div>
                                </div>
                            </div>
                         <?php endforeach;?>   
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <?php 
                                $testimonial_count_query="SELECT * FROM testimonials";
                                $testimonial_count_query_from_db=mysqli_query($db_connect, $testimonial_count_query);                                                  
                            ?>
                            <div class="testimonial-active">
                                <?php foreach($testimonial_count_query_from_db as $testimonial): ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="backend/uploads/testimonials/<?=$testimonial['client_photo']?>" alt="img" class="img-fluid" width="100px">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$testimonial['feedback'];?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$testimonial['client_name'];?></h5>
                                            <span><?=$testimonial['client_title'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php 
                            $brand_count_query="SELECT * FROM brands";
                            $brand_count_query_from_db=mysqli_query($db_connect, $brand_count_query);                                                  
                        ?>
                        <?php foreach($brand_count_query_from_db as $brand_count): ?>
                        <div class="col-md-2 m-5">
                            <div class="single-brand">
                                <img src="backend/uploads/brands/<?=$brand_count['brand_photo']?>" alt="img">
                            </div>
                        </div>
                        <?php endforeach;?>                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$owner_bio?></p>
                                <h5>OFFICE IN <span><?=$owner_address?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i><span>Address :</span><?=$owner_address?></li>
                                        <li><i class="fa fa-headphones"></i><span>Phone :</span><?=$owner_phone_number?></li>
                                        <li><i class="fa fa-envelope"></i><span>e-mail :</span><?=$owner_email_address?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact_post.php" method="POST">
                                    <input type="text" placeholder="your name *" name="name">
                                    <input type="email" placeholder="your email *" name="email_address">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn" name="send">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/frontend/js/popper.min.js"></script>
        <script src="assets/frontend/js/bootstrap.min.js"></script>
        <script src="assets/frontend/js/isotope.pkgd.min.js"></script>
        <script src="assets/frontend/js/one-page-nav-min.js"></script>
        <script src="assets/frontend/js/slick.min.js"></script>
        <script src="assets/frontend/js/ajax-form.js"></script>
        <script src="assets/frontend/js/wow.min.js"></script>
        <script src="assets/frontend/js/aos.js"></script>
        <script src="assets/frontend/js/jquery.waypoints.min.js"></script>
        <script src="assets/frontend/js/jquery.counterup.min.js"></script>
        <script src="assets/frontend/js/jquery.scrollUp.min.js"></script>
        <script src="assets/frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/frontend/js/plugins.js"></script>
        <script src="assets/frontend/js/main.js"></script>
    </body>

</html>
