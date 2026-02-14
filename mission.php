<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>UDAAN - Mental Health Initiative | Our Mission & Vision</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">✕</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">

                        <!-- Simple logo with glow -->
                        <div class="logo-container">
                            <img src="assets/images/logo-2.png" alt="UDAAN Logo" class="animated-logo">
                        </div>

                        <!-- Clean circular spinner -->
                        <div class="spinner-circle"></div>

                        <!-- Simple text -->
                        <div class="txt-loading">
                            <span class="letters-loading">U</span>
                            <span class="letters-loading">D</span>
                            <span class="letters-loading">A</span>
                            <span class="letters-loading">A</span>
                            <span class="letters-loading">N</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style>
            /* ==================== SIMPLE & ATTRACTIVE PRELOADER ==================== */

            .loader-wrap {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
            }

            .preloader {
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #52547c 0%, #5e6090 100%);
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .handle-preloader {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .animation-preloader {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 40px;
            }

            /* ==================== LOGO ==================== */
            .logo-container {
                position: relative;
                animation: fadeInDown 1s ease-out;
            }

            .animated-logo {
                width: 140px;
                height: auto;
                animation: logoGlow 3s ease-in-out infinite;
                filter: drop-shadow(0 0 30px rgba(239, 162, 134, 0.6)) drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
            }

            @keyframes fadeInDown {
                0% {
                    opacity: 0;
                    transform: translateY(-50px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes logoGlow {

                0%,
                100% {
                    filter: drop-shadow(0 0 20px rgba(239, 162, 134, 0.6)) drop-shadow(0 10px 20px rgba(0, 0, 0, 0.3));
                    transform: translateY(0);
                }

                50% {
                    filter: drop-shadow(0 0 40px rgba(239, 162, 134, 0.9)) drop-shadow(0 15px 30px rgba(0, 0, 0, 0.4));
                    transform: translateY(-10px);
                }
            }

            /* ==================== SPINNER ==================== */
            .spinner-circle {
                width: 80px;
                height: 80px;
                border: 4px solid rgba(255, 255, 255, 0.1);
                border-top: 4px solid #efa286;
                border-radius: 50%;
                animation: spin 1s linear infinite;
                box-shadow: 0 0 30px rgba(239, 162, 134, 0.5);
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            /* ==================== TEXT ==================== */
            .txt-loading {
                display: flex;
                gap: 12px;
                font-family: 'Arial', sans-serif;
                letter-spacing: 10px;
            }

            .letters-loading {
                color: #ffffff;
                font-size: 48px;
                font-weight: 300;
                animation: letterFloat 1.5s ease-in-out infinite;
                text-shadow: 0 0 20px rgba(239, 162, 134, 0.6),
                    0 5px 10px rgba(0, 0, 0, 0.3);
            }

            .letters-loading:nth-child(1) {
                animation-delay: 0s;
            }

            .letters-loading:nth-child(2) {
                animation-delay: 0.1s;
            }

            .letters-loading:nth-child(3) {
                animation-delay: 0.2s;
            }

            .letters-loading:nth-child(4) {
                animation-delay: 0.3s;
            }

            .letters-loading:nth-child(5) {
                animation-delay: 0.4s;
            }

            @keyframes letterFloat {

                0%,
                100% {
                    transform: translateY(0);
                    color: #ffffff;
                }

                50% {
                    transform: translateY(-15px);
                    color: #efa286;
                }
            }

            /* ==================== CLOSE BUTTON ==================== */
            .preloader-close {
                position: absolute;
                top: 30px;
                right: 30px;
                width: 45px;
                height: 45px;
                cursor: pointer;
                color: #ffffff;
                font-size: 22px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(239, 162, 134, 0.15);
                backdrop-filter: blur(10px);
                border: 2px solid rgba(239, 162, 134, 0.4);
                border-radius: 50%;
                transition: all 0.3s ease;
                z-index: 10000;
            }

            .preloader-close:hover {
                background: #efa286;
                border-color: #efa286;
                transform: rotate(90deg) scale(1.1);
                box-shadow: 0 5px 20px rgba(239, 162, 134, 0.6);
            }

            /* ==================== RESPONSIVE ==================== */
            @media (max-width: 768px) {
                .animated-logo {
                    width: 110px;
                }

                .spinner-circle {
                    width: 70px;
                    height: 70px;
                }

                .letters-loading {
                    font-size: 38px;
                    letter-spacing: 8px;
                }

                .animation-preloader {
                    gap: 35px;
                }
            }

            @media (max-width: 480px) {
                .animated-logo {
                    width: 90px;
                }

                .spinner-circle {
                    width: 60px;
                    height: 60px;
                    border-width: 3px;
                }

                .letters-loading {
                    font-size: 32px;
                    letter-spacing: 6px;
                }

                .animation-preloader {
                    gap: 30px;
                }

                .preloader-close {
                    width: 40px;
                    height: 40px;
                    font-size: 20px;
                    top: 20px;
                    right: 20px;
                }
            }
        </style>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header style-two">
            <!-- header-top -->

            <!-- header-lower -->
            <?php include_once 'header.php'; ?>
            <!-- main-header end -->



            <!--Page Title-->
            <section class="page-title" style="background-image: url(images/A3-Intellectual-Disability2-HR.jpg);">
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <div class="shape">
                            <div class="shape-1"></div>
                            <div class="shape-2"></div>
                            <div class="shape-3"></div>
                        </div>
                        <a href="index.php">Back To Home Page.</a>
                        <h1>Our Mission & Vision</h1>
                    </div>
                </div>
                <span class="schedule">Mental Health Support - Available Daily</span>
                <div class="place-box">
                    <div class="text">
                        <i class="flaticon-location-1"></i>
                        <p>Visit Our Place</p>
                        <h6>Nagpur, Maharashtra, India</h6>
                    </div>
                </div>
            </section>
            <!--End Page Title-->


            <!-- about-section -->
            <section class="about-section pb-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_1">
                                <div class="image-box">
                                    <figure class="image image-1 wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/A3-Parenting4-HR.jpg" alt="UDAAN Mental Health Initiative"></figure>
                                    <!-- <figure class="image image-2 wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="images/A3-Parenting5-HR.jpg" alt="Community Mental Health Care"></figure> -->
                                    <!-- <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div> -->
                                    <span class="text">Since 2016 - Transforming Lives</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_1">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <i class="flaticon-brain-1"></i>
                                        <h6>Our Mission</h6>
                                        <h2>We are Ready to Help Improve Your <span>Mental Health & Well-being.</span></h2>
                                    </div>
                                    <div class="text">
                                        <p>UDAAN is a pioneering mental health initiative by Tata Trusts, dedicated to strengthening and expanding mental health care services in India. Implemented in collaboration with the Government of Maharashtra, our initiative is transforming how mental health care is delivered in communities across Nagpur district.</p>
                                        <p>Our mission is to create an integrated, accessible, and inclusive mental health care system that extends beyond hospital walls into the heart of communities—ensuring that no one is left behind in accessing quality mental health services.</p>
                                    </div>

                                    <div class="btn-box mt-30">
                                        <a href="our-approach.php" class="theme-btn btn-two">Learn Our Approach</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-section end -->


            <!-- service-style-three -->
            <section class="service-style-three pb-120">
                <div class="auto-container">
                    <div class="sec-title centred">
                        <i class="flaticon-brain-1"></i>
                        <h6>Foundation Pillars</h6>
                        <h2>Our Mission Built on <br />Two Foundational <br />Pillars of Excellence.</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="assets/images/icons/icon-1.png" alt="RMHN Reform"></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="our-approach.php">Reforming Regional Mental Hospital</a></h3>
                                        <p>Improving quality of care, infrastructure, patient dignity, and treatment protocols at RMHN through comprehensive systemic reforms.</p>
                                        <div class="link"><a href="our-approach.php"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="assets/images/icons/icon-4.png" alt="DMHP Strengthening"></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="programs-initiatives.php">Strengthening Community Services</a></h3>
                                        <p>Building responsive, accessible mental health system through District Mental Health Programme with community integration.</p>
                                        <div class="link"><a href="programs-initiatives.php"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="assets/images/icons/icon-3.png" alt="Community Integration"></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="our-work.php">Holistic Community Care</a></h3>
                                        <p>Extending mental health care beyond hospitals into communities for comprehensive, family-centered support and recovery.</p>
                                        <div class="link"><a href="our-work.php"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service-style-three end -->


            <!-- video-section -->
            <section class="video-section centred" style="background-image: url(images/A3-Intellectual-Disability7-HR.jpg);">
                <div class="auto-container">
                    <div class="sec-title light centred">
                        <i class="flaticon-brain-1"></i>
                        <h6>Our Vision</h6>
                    </div>
                    <div class="inner-box wow zoomIn animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2>Building an integrated, inclusive, and <br />people-centered mental health care system<br>that reaches every community.</h2>
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="flaticon-play-button-1"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video-section end -->


            <!-- skills-section -->
            <section class="skills-section pt-120">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-xl-6 col-lg-12 col-md-12 image-column">
                            <div class="image_block_2">
                                <div class="image-box wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <figure class="image"><img src="images/A3-Parenting7-HR.jpg" alt="UDAAN Mental Health Impact"></figure>
                                    <div class="text">
                                        <h6>Our Impact</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                            <div class="content_block_4">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <i class="flaticon-brain-1"></i>
                                        <h6>Service Delivery</h6>
                                        <h2>Comprehensive Mental Health Services <span>By Expert Team.</span></h2>
                                    </div>
                                    <div class="text">
                                        <p>UDAAN provides holistic mental health care through a continuum of services including screening, treatment, awareness, rehabilitation, and system capacity building. Our monthly OPD services cater to approximately 1,700 to 1,800 regular service users across Nagpur district.</p>
                                        <p>Through dedicated psychiatrists, clinical psychologists, psychiatric social workers, and community health workers, we bring hope and healing to communities in need of mental health support—making quality care accessible to all.</p>
                                    </div>
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                    <div class="box">
                                                        <div class="piechart" data-fg-color="#efa286" data-value=".90">
                                                            <span>.90</span>
                                                        </div>
                                                    </div>
                                                    <h5>Community Screening Coverage</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                    <div class="box">
                                                        <div class="piechart" data-fg-color="#efa286" data-value=".85">
                                                            <span>.85</span>
                                                        </div>
                                                    </div>
                                                    <h5>Treatment Success Rate</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                                    <div class="box">
                                                        <div class="piechart" data-fg-color="#efa286" data-value=".88">
                                                            <span>.88</span>
                                                        </div>
                                                    </div>
                                                    <h5>Family Support & Engagement</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-box mt-30">
                                        <a href="impact-outcomes.php" class="theme-btn btn-two">View Our Impact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- skills-section end -->


            <!-- funfact-section -->
            <section class="funfact-section centred" style="background-image: url(images/A3-Depression5-HR.jpg);">
                <div class="auto-container">
                    <div class="sec-title light centred">
                        <i class="flaticon-brain-1"></i>
                        <h6>Impact Metrics</h6>
                        <h2>Measurable Outcomes in Mental Health Care</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="500000">0</span><span>+</span>
                                    </div>
                                    <p>People Screened for Mental Health</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="1800">0</span><span>+</span>
                                    </div>
                                    <p>Monthly Regular Service Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="2000">0</span><span>+</span>
                                    </div>
                                    <p>Healthcare Workers Trained</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
                                    </div>
                                    <p>District Coverage in Nagpur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- funfact-section end -->


            <!-- testimonial-section -->
            <section class="testimonial-section">
                <div class="auto-container">
                    <div class="sec-title centred">
                        <i class="flaticon-brain-1"></i>
                        <h6>Success Stories</h6>
                        <h2>Voices of Recovery & Hope</h2>
                    </div>
                    <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="review-box">
                                    <ul class="rating clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span>(Schizophrenia Treatment)</span>
                                </div>
                                <div class="text">
                                    <h3>My son Sunil had been <span>struggling with mental illness</span> for years. Thanks to UDAAN's accessible <span>mental health care</span> and the dedicated block coordinator, his aggressive behavior has significantly diminished. The psychoeducation helped our family understand his condition better.</h3>
                                </div>
                                <div class="author-box">
                                    <!-- <figure class="author-thumb"><img src="images/A3-Depression6-H-R.jpg" alt="Sunil's Mother"></figure> -->
                                    <h3>Sunil's Mother</h3>
                                    <span class="designation">Khadki Village, Narkhed</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="review-box">
                                    <ul class="rating clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span>(Depression Recovery)</span>
                                </div>
                                <div class="text">
                                    <h3>UDAAN gave me a second chance at life. After two <span>suicide attempts</span> during the pandemic, the <span>mental health support</span> I received helped me recover. Today, I've reopened my shop and regained my confidence. The free treatment was a blessing for our family.</h3>
                                </div>
                                <div class="author-box">
                                    <!-- <figure class="author-thumb"><img src="images/A3-Depression7-H-R.jpg" alt="Gaurav"></figure> -->
                                    <h3>Gaurav</h3>
                                    <span class="designation">Datewadi Village, Narkhed</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-quote"></i></div>
                                <div class="review-box">
                                    <ul class="rating clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span>(Alcohol Use Disorder)</span>
                                </div>
                                <div class="text">
                                    <h3>The <span>de-addiction services</span> at UDAAN changed my life completely. I've overcome my <span>alcohol addiction</span>, found new employment, and recently got married. My family is filled with hope and happiness again. We now spread awareness about mental health in our village.</h3>
                                </div>
                                <div class="author-box">
                                    <!-- <figure class="author-thumb"><img src="images/A3-Depression8-H-R.jpg" alt="Vinay"></figure> -->
                                    <h3>Vinay</h3>
                                    <span class="designation">Nagpur Rural</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-section end -->


            <!-- cta-section -->
            <section class="cta-section bg-color-2">
                <span class="title-one">U</span>
                <span class="title-two">UDAAN</span>
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="text pull-left">
                            <h2><i class="flaticon-brain"></i>Join Our <span>Mission</span><br />Transform Lives Through Mental Health</h2>
                        </div>
                        <div class="btn-box pull-right">
                            <a href="get-involved.php" class="theme-btn btn-one">Get Involved</a>
                            <a href="contact.php" class="theme-btn btn-three">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta-section end -->


            <!-- main-footer -->
            <?php include_once 'footer.php'; ?>
            <!-- main-footer end -->



            <!--Scroll to top-->
            <button class="scroll-top scroll-to-target" data-target="html">
                <span class="fal fa-angle-up"></span>
            </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/circle-progress.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>