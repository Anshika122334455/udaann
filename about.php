<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>About UDAAN - Mental Health Initiative by Tata Trusts | Our Story</title>

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

                        <!-- Liquid wave background -->
                        <div class="wave-container">
                            <svg class="wave" viewBox="0 0 1200 300" preserveAspectRatio="none">
                                <path class="wave-path wave-1" d="M0,100 Q300,150 600,100 T1200,100 V300 H0 Z"></path>
                                <path class="wave-path wave-2" d="M0,120 Q300,80 600,120 T1200,120 V300 H0 Z"></path>
                                <path class="wave-path wave-3" d="M0,140 Q300,110 600,140 T1200,140 V300 H0 Z"></path>
                            </svg>
                        </div>

                        <!-- Logo with liquid effect -->
                        <div class="liquid-logo-container">
                            <div class="liquid-circle"></div>
                            <div class="liquid-circle"></div>
                            <div class="liquid-circle"></div>
                            <img src="assets/images/logo-2.png" alt="UDAAN Logo" class="animated-logo">
                        </div>

                        <!-- Ripple spinner -->
                        <div class="ripple-spinner">
                            <div class="ripple"></div>
                            <div class="ripple"></div>
                            <div class="ripple"></div>
                        </div>

                        <!-- Flowing text -->
                        <div class="txt-loading">
                            <span class="letters-loading">U</span>
                            <span class="letters-loading">D</span>
                            <span class="letters-loading">A</span>
                            <span class="letters-loading">A</span>
                            <span class="letters-loading">N</span>
                        </div>

                        <!-- Wave progress -->
                        <div class="wave-progress">
                            <div class="progress-wave"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style>
            /* ==================== DESIGN 3: LIQUID WAVE ==================== */

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
                background: radial-gradient(circle at 30% 40%, #6b6d94, #52547c);
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            /* Liquid wave background */
            .wave-container {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 300px;
                opacity: 0.3;
            }

            .wave {
                width: 100%;
                height: 100%;
            }

            .wave-path {
                animation: waveMove 8s ease-in-out infinite;
            }

            .wave-1 {
                fill: rgba(239, 162, 134, 0.4);
                animation-delay: 0s;
            }

            .wave-2 {
                fill: rgba(239, 162, 134, 0.3);
                animation-delay: -2s;
            }

            .wave-3 {
                fill: rgba(239, 162, 134, 0.2);
                animation-delay: -4s;
            }

            @keyframes waveMove {

                0%,
                100% {
                    d: path("M0,100 Q300,150 600,100 T1200,100 V300 H0 Z");
                }

                50% {
                    d: path("M0,150 Q300,100 600,150 T1200,150 V300 H0 Z");
                }
            }

            .handle-preloader {
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 2;
            }

            .animation-preloader {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 55px;
            }

            /* Liquid logo effect */
            .liquid-logo-container {
                position: relative;
                width: 200px;
                height: 200px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .liquid-circle {
                position: absolute;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(239, 162, 134, 0.6), transparent);
                animation: liquidMorph 4s ease-in-out infinite;
            }

            .liquid-circle:nth-child(1) {
                width: 180px;
                height: 180px;
                animation-delay: 0s;
            }

            .liquid-circle:nth-child(2) {
                width: 150px;
                height: 150px;
                animation-delay: 1.3s;
            }

            .liquid-circle:nth-child(3) {
                width: 120px;
                height: 120px;
                animation-delay: 2.6s;
            }

            @keyframes liquidMorph {

                0%,
                100% {
                    transform: scale(1) translateY(0);
                    opacity: 0.6;
                    border-radius: 50%;
                }

                25% {
                    transform: scale(1.1) translateY(-10px);
                    opacity: 0.8;
                    border-radius: 45% 55% 50% 50%;
                }

                50% {
                    transform: scale(0.9) translateY(0);
                    opacity: 0.4;
                    border-radius: 50% 50% 45% 55%;
                }

                75% {
                    transform: scale(1.05) translateY(10px);
                    opacity: 0.7;
                    border-radius: 55% 45% 55% 45%;
                }
            }

            .animated-logo {
                width: 140px;
                height: auto;
                z-index: 2;
                animation: logoLiquid 5s ease-in-out infinite;
                filter: drop-shadow(0 10px 40px rgba(239, 162, 134, 0.6));
            }

            @keyframes logoLiquid {

                0%,
                100% {
                    transform: translateY(0) rotate(0deg);
                }

                25% {
                    transform: translateY(-15px) rotate(2deg);
                }

                50% {
                    transform: translateY(-5px) rotate(-2deg);
                }

                75% {
                    transform: translateY(-20px) rotate(1deg);
                }
            }

            /* Ripple spinner */
            .ripple-spinner {
                position: relative;
                width: 120px;
                height: 120px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .ripple {
                position: absolute;
                width: 100%;
                height: 100%;
                border: 4px solid #efa286;
                border-radius: 50%;
                opacity: 0;
                animation: rippleEffect 3s cubic-bezier(0, 0.2, 0.8, 1) infinite;
            }

            .ripple:nth-child(1) {
                animation-delay: 0s;
            }

            .ripple:nth-child(2) {
                animation-delay: 1s;
            }

            .ripple:nth-child(3) {
                animation-delay: 2s;
            }

            @keyframes rippleEffect {
                0% {
                    transform: scale(0.3);
                    opacity: 1;
                }

                100% {
                    transform: scale(1.5);
                    opacity: 0;
                }
            }

            /* Flowing text */
            .txt-loading {
                display: flex;
                gap: 10px;
                font-family: 'Verdana', sans-serif;
            }

            .letters-loading {
                color: #ffffff;
                font-size: 56px;
                font-weight: 700;
                animation: letterFlow 2s ease-in-out infinite;
                text-shadow:
                    0 0 20px rgba(239, 162, 134, 0.8),
                    0 0 40px rgba(239, 162, 134, 0.5),
                    0 5px 15px rgba(0, 0, 0, 0.3);
                position: relative;
            }

            .letters-loading::after {
                content: attr(data-text);
                position: absolute;
                left: 0;
                top: 0;
                color: #efa286;
                filter: blur(8px);
                z-index: -1;
                animation: glowFlow 2s ease-in-out infinite;
            }

            .letters-loading:nth-child(1) {
                animation-delay: 0s;
            }

            .letters-loading:nth-child(2) {
                animation-delay: 0.2s;
            }

            .letters-loading:nth-child(3) {
                animation-delay: 0.4s;
            }

            .letters-loading:nth-child(4) {
                animation-delay: 0.6s;
            }

            .letters-loading:nth-child(5) {
                animation-delay: 0.8s;
            }

            @keyframes letterFlow {

                0%,
                100% {
                    transform: translateY(0) scale(1);
                    opacity: 1;
                }

                50% {
                    transform: translateY(-25px) scale(1.15);
                    opacity: 0.85;
                }
            }

            @keyframes glowFlow {

                0%,
                100% {
                    opacity: 0.5;
                }

                50% {
                    opacity: 1;
                }
            }

            /* Wave progress */
            .wave-progress {
                width: 320px;
                height: 50px;
                position: relative;
                overflow: hidden;
                border: 2px solid rgba(239, 162, 134, 0.3);
                border-radius: 25px;
                background: rgba(82, 84, 124, 0.3);
            }

            .progress-wave {
                width: 400px;
                height: 100px;
                background: linear-gradient(90deg, #efa286, #ffffff, #efa286);
                position: absolute;
                top: -25px;
                left: -100px;
                border-radius: 40%;
                animation: waveProgress 3s ease-in-out infinite;
                box-shadow: 0 0 30px rgba(239, 162, 134, 0.6);
            }

            @keyframes waveProgress {
                0% {
                    transform: translateX(-100px) rotate(0deg);
                }

                100% {
                    transform: translateX(320px) rotate(360deg);
                }
            }

            /* Close button */
            .preloader-close {
                position: absolute;
                top: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                cursor: pointer;
                color: #ffffff;
                font-size: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(239, 162, 134, 0.2);
                backdrop-filter: blur(10px);
                border: 2px solid #efa286;
                border-radius: 50%;
                transition: all 0.4s ease;
                z-index: 10000;
            }

            .preloader-close:hover {
                background: #efa286;
                transform: rotate(90deg) scale(1.2);
                box-shadow: 0 8px 30px rgba(239, 162, 134, 0.8);
            }

            /* Responsive */
            @media (max-width: 768px) {
                .animated-logo {
                    width: 110px;
                }

                .liquid-logo-container {
                    width: 160px;
                    height: 160px;
                }

                .liquid-circle:nth-child(1) {
                    width: 150px;
                    height: 150px;
                }

                .liquid-circle:nth-child(2) {
                    width: 120px;
                    height: 120px;
                }

                .liquid-circle:nth-child(3) {
                    width: 90px;
                    height: 90px;
                }

                .ripple-spinner {
                    width: 100px;
                    height: 100px;
                }

                .letters-loading {
                    font-size: 42px;
                }

                .wave-progress {
                    width: 260px;
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
            <section class="page-title" style="background-image: url(images/A3-Intellectual-Disability3-HR.jpg);">
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <div class="shape">
                            <div class="shape-1"></div>
                            <div class="shape-2"></div>
                            <div class="shape-3"></div>
                        </div>
                        <a href="index.php">Back To Home Page.</a>
                        <h1>About UDAAN</h1>
                    </div>
                </div>
                <span class="schedule">Serving Communities Since 2016</span>
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
                                    <figure class="image image-1 wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/A3-Parenting1.3-HR.jpg" alt="UDAAN Mental Health Initiative"></figure>
                                    <!-- <figure class="image image-2 wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="images/A3-Intellectual-Disability5-HR.jpg" alt="Community Mental Health"></figure> -->

                                    <span class="text">Since 2016 - Pioneering Change</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_1">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <i class="flaticon-brain-1"></i>
                                        <h6>About UDAAN</h6>
                                        <h2>We are Dedicated to Strengthening <span>Mental Health Care in India.</span></h2>
                                    </div>
                                    <div class="text">
                                        <p>UDAAN is a pioneering mental health initiative by Tata Trusts, dedicated to strengthening and expanding mental health care services in India. Implemented in collaboration with the Government of Maharashtra, the initiative is built on two foundational pillars: reforming the Regional Mental Hospital, Nagpur (RMHN) and strengthening the District Mental Health Programme (DMHP) in Nagpur district.</p>
                                        <p>Since 2016, we have been working tirelessly to transform the mental health landscape through evidence-based interventions, community engagement, and system strengthening—making quality mental health care accessible to thousands who would otherwise be left behind.</p>
                                    </div>

                                    <div class="btn-box mt-30">
                                        <a href="our-story.php" class="theme-btn btn-two">Read Our Full Story</a>
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
                        <h6>Our Timeline</h6>
                        <h2>Our Journey <br />A Commitment to Mental Health <br />Excellence Since 2016.</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="assets/images/icons/icon-1.png" alt="Partnership"></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="our-story.php">2016 - The Beginning</a></h3>
                                        <p>Partnership formalized through MoU with Government of Maharashtra, marking Tata Trusts' first major commitment to mental health sector reform.</p>
                                        <div class="link"><a href="our-story.php"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="assets/images/icons/icon-4.png" alt="Expansion"></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="our-approach.php">2018 - Expansion Phase</a></h3>
                                        <p>New MoU to enhance DMHP through collaborative, decentralized, and holistic community-based mental health approach across Nagpur district.</p>
                                        <div class="link"><a href="our-approach.php"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <figure class="icon"><img src="assets/images/icons/icon-3.png" alt="Continuation"></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="our-partners.php">2023 - Sustained Impact</a></h3>
                                        <p>Extended implementation through 2026, with additional support from Indira Foundation and RG Mundhe Foundation for continued expansion.</p>
                                        <div class="link"><a href="our-partners.php"><i class="flaticon-right-arrow"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service-style-three end -->


            <!-- video-section -->
            <section class="video-section centred" style="background-image: url(images/A3-Intellectual-Disability4-HR.jpg);">
                <div class="auto-container">
                    <div class="sec-title light centred">
                        <i class="flaticon-brain-1"></i>
                        <h6>Our Philosophy</h6>
                    </div>
                    <div class="inner-box wow zoomIn animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2>Mental health care must extend <br />beyond hospital settings into communities<br>where people live, work, and thrive.</h2>

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
                                    <figure class="image"><img src="images/3.jpg" alt="UDAAN Impact"></figure>
                                    <div class="text">
                                        <h6>Our Expertise</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                            <div class="content_block_4">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <i class="flaticon-brain-1"></i>
                                        <h6>Our Capabilities</h6>
                                        <h2>Comprehensive Mental Health Services <span>By Expert Team.</span></h2>
                                    </div>
                                    <div class="text">
                                        <p>UDAAN provides holistic mental health care through screening, treatment, awareness, rehabilitation, and capacity building. With approximately 1,700-1,800 regular service users monthly, our multidisciplinary team brings expertise and compassion to every intervention.</p>
                                        <p>Our team consists of psychiatrists, clinical psychologists, psychiatric social workers, block coordinators, and community health workers—all working together to deliver evidence-based, person-centered mental health care that addresses both clinical and social determinants of mental health.</p>
                                    </div>
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                    <div class="box">
                                                        <div class="piechart" data-fg-color="#efa286" data-value=".85">
                                                            <span>.85</span>
                                                        </div>
                                                    </div>
                                                    <h5>Clinical Services Excellence</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                    <div class="box">
                                                        <div class="piechart" data-fg-color="#efa286" data-value=".90">
                                                            <span>.90</span>
                                                        </div>
                                                    </div>
                                                    <h5>Community Outreach</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                                    <div class="box">
                                                        <div class="piechart" data-fg-color="#efa286" data-value=".88">
                                                            <span>.88</span>
                                                        </div>
                                                    </div>
                                                    <h5>Rehabilitation Support</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-box mt-30">
                                        <a href="our-team.php" class="theme-btn btn-two">Meet Our Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- skills-section end -->


            <!-- funfact-section -->
            <!-- funfact-section -->
            <section class="funfact-section centred" style="position: relative; padding: 100px 0; overflow: hidden; background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #333333 100%); min-height: 600px; display: flex; align-items: center;">

                <!-- Background Image Overlay -->
                <div style="content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(images/A3-Intellectual-Disability1-HR.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; opacity: 0.1; z-index: 0;"></div>

                <!-- Background Overlay -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0, 0, 0, 0.85) 0%, rgba(26, 26, 26, 0.9) 50%, rgba(51, 51, 51, 0.85) 100%); z-index: 1;"></div>

                <!-- Animated Shapes -->
                <div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 2; overflow: hidden; pointer-events: none;">
                    <div style="position: absolute; background: #efa286; opacity: 0.08; border-radius: 50%; width: 300px; height: 300px; top: -100px; left: -100px; animation: float1 20s infinite ease-in-out;"></div>
                    <div style="position: absolute; background: #efa286; opacity: 0.08; border-radius: 50%; width: 400px; height: 400px; bottom: -150px; right: -150px; animation: float2 20s infinite ease-in-out;"></div>
                    <div style="position: absolute; background: #efa286; opacity: 0.08; border-radius: 50%; width: 200px; height: 200px; top: 50%; left: 50%; transform: translate(-50%, -50%); animation: float3 20s infinite ease-in-out;"></div>
                </div>

                <div style="position: relative; z-index: 3; max-width: 1200px; margin: 0 auto; padding: 0 15px; width: 100%;">
                    <!-- Section Title -->
                    <div style="margin-bottom: 60px; text-align: center;">
                        <i class="flaticon-brain-1" style="font-size: 60px; color: #efa286; margin-bottom: 20px; display: inline-block; filter: drop-shadow(0 0 20px rgba(239, 162, 134, 0.4)); animation: pulse 2s infinite ease-in-out;"></i>
                        <h6 style="font-size: 16px; font-weight: 600; color: #efa286; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 15px; text-shadow: 0 0 10px rgba(239, 162, 134, 0.3); animation: fadeInUp 0.8s ease forwards 0.2s; opacity: 0;">Our Achievements</h6>
                        <h2 style="font-size: 42px; font-weight: 700; color: #ffffff; margin: 0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); animation: fadeInUp 0.8s ease forwards 0.4s; opacity: 0;">Impact Numbers That Matter</h2>
                    </div>

                    <!-- Counter Cards Row -->
                    <div class="row clearfix" style="display: flex; flex-wrap: wrap; margin: 0 -15px; align-items: stretch;">

                        <!-- Card 1 -->
                        <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: stretch; padding: 0 15px;">
                            <div style="opacity: 0; transform: translateY(50px); animation: slideInUp 0.8s ease forwards 0.6s; width: 100%; max-width: 280px; margin: 0 auto;">
                                <div style="background: #ffffff; border-radius: 20px; padding: 35px 20px; text-align: center; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 3px solid transparent; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); height: 380px; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer;"
                                    onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #efa286'; this.style.borderColor='#efa286'; this.querySelector('.count-text-1').style.color='#efa286';"
                                    onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-1').style.color='#000000';">

                                    <!-- Shine Effect -->
                                    <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(239, 162, 134, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>

                                    <!-- Bottom Line -->
                                    <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #efa286, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                    <!-- Icon Circle -->
                                    <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                        <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(239, 162, 134, 0.3));" viewBox="0 0 100 100">
                                            <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                            <circle style="fill: none; stroke: #efa286; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 0.8s; filter: drop-shadow(0 0 8px rgba(239, 162, 134, 0.4));" cx="50" cy="50" r="45"></circle>
                                        </svg>
                                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 0.6s backwards;">👥</div>
                                    </div>

                                    <!-- Counter -->
                                    <div style="margin-bottom: 12px; flex-shrink: 0;">
                                        <span class="count-text count-text-1" data-speed="2000" data-stop="500000" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                        <span style="font-size: 38px; font-weight: 700; color: #efa286; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
                                    </div>

                                    <!-- Label -->
                                    <p style="font-size: 15px; color: #333333; margin: 0; font-weight: 600; letter-spacing: 0.5px; position: relative; z-index: 1; line-height: 1.4; padding: 0 10px; min-height: 42px; display: flex; align-items: center; justify-content: center; transition: color 0.3s ease;">Individuals Screened</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: stretch; padding: 0 15px;">
                            <div style="opacity: 0; transform: translateY(50px); animation: slideInUp 0.8s ease forwards 0.8s; width: 100%; max-width: 280px; margin: 0 auto;">
                                <div style="background: #ffffff; border-radius: 20px; padding: 35px 20px; text-align: center; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 3px solid transparent; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); height: 380px; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer;"
                                    onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #efa286'; this.style.borderColor='#efa286'; this.querySelector('.count-text-2').style.color='#efa286';"
                                    onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-2').style.color='#000000';">

                                    <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(239, 162, 134, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>
                                    <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #efa286, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                    <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                        <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(239, 162, 134, 0.3));" viewBox="0 0 100 100">
                                            <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                            <circle style="fill: none; stroke: #efa286; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 1s; filter: drop-shadow(0 0 8px rgba(239, 162, 134, 0.4));" cx="50" cy="50" r="45"></circle>
                                        </svg>
                                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 0.8s backwards;">🏥</div>
                                    </div>

                                    <div style="margin-bottom: 12px; flex-shrink: 0;">
                                        <span class="count-text count-text-2" data-speed="2000" data-stop="15000" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                        <span style="font-size: 38px; font-weight: 700; color: #efa286; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
                                    </div>

                                    <p style="font-size: 15px; color: #333333; margin: 0; font-weight: 600; letter-spacing: 0.5px; position: relative; z-index: 1; line-height: 1.4; padding: 0 10px; min-height: 42px; display: flex; align-items: center; justify-content: center; transition: color 0.3s ease;">Patients Under Care</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: stretch; padding: 0 15px;">
                            <div style="opacity: 0; transform: translateY(50px); animation: slideInUp 0.8s ease forwards 1s; width: 100%; max-width: 280px; margin: 0 auto;">
                                <div style="background: #ffffff; border-radius: 20px; padding: 35px 20px; text-align: center; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 3px solid transparent; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); height: 380px; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer;"
                                    onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #efa286'; this.style.borderColor='#efa286'; this.querySelector('.count-text-3').style.color='#efa286';"
                                    onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-3').style.color='#000000';">

                                    <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(239, 162, 134, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>
                                    <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #efa286, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                    <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                        <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(239, 162, 134, 0.3));" viewBox="0 0 100 100">
                                            <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                            <circle style="fill: none; stroke: #efa286; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 1.2s; filter: drop-shadow(0 0 8px rgba(239, 162, 134, 0.4));" cx="50" cy="50" r="45"></circle>
                                        </svg>
                                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 1s backwards;">🎓</div>
                                    </div>

                                    <div style="margin-bottom: 12px; flex-shrink: 0;">
                                        <span class="count-text count-text-3" data-speed="2000" data-stop="2000" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                        <span style="font-size: 38px; font-weight: 700; color: #efa286; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
                                    </div>

                                    <p style="font-size: 15px; color: #333333; margin: 0; font-weight: 600; letter-spacing: 0.5px; position: relative; z-index: 1; line-height: 1.4; padding: 0 10px; min-height: 42px; display: flex; align-items: center; justify-content: center; transition: color 0.3s ease;">Healthcare Workers Trained</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: stretch; padding: 0 15px;">
                            <div style="opacity: 0; transform: translateY(50px); animation: slideInUp 0.8s ease forwards 1.2s; width: 100%; max-width: 280px; margin: 0 auto;">
                                <div style="background: #ffffff; border-radius: 20px; padding: 35px 20px; text-align: center; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 3px solid transparent; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); height: 380px; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer;"
                                    onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #efa286'; this.style.borderColor='#efa286'; this.querySelector('.count-text-4').style.color='#efa286';"
                                    onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-4').style.color='#000000';">

                                    <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(239, 162, 134, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>
                                    <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #efa286, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                    <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                        <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(239, 162, 134, 0.3));" viewBox="0 0 100 100">
                                            <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                            <circle style="fill: none; stroke: #efa286; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 1.4s; filter: drop-shadow(0 0 8px rgba(239, 162, 134, 0.4));" cx="50" cy="50" r="45"></circle>
                                        </svg>
                                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 1.2s backwards;">⭐</div>
                                    </div>

                                    <div style="margin-bottom: 12px; flex-shrink: 0;">
                                        <span class="count-text count-text-4" data-speed="2000" data-stop="10" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                        <span style="font-size: 38px; font-weight: 700; color: #efa286; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
                                    </div>

                                    <p style="font-size: 15px; color: #333333; margin: 0; font-weight: 600; letter-spacing: 0.5px; position: relative; z-index: 1; line-height: 1.4; padding: 0 10px; min-height: 42px; display: flex; align-items: center; justify-content: center; transition: color 0.3s ease;">Years of Impact</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Inline CSS Animations -->
            <style>
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(30px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                @keyframes slideInUp {
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                @keyframes pulse {

                    0%,
                    100% {
                        transform: scale(1);
                        opacity: 1;
                    }

                    50% {
                        transform: scale(1.1);
                        opacity: 0.8;
                    }
                }

                @keyframes progressAnim {
                    to {
                        stroke-dashoffset: 0;
                    }
                }

                @keyframes bounceIn {
                    0% {
                        opacity: 0;
                        transform: translate(-50%, -50%) scale(0);
                    }

                    50% {
                        transform: translate(-50%, -50%) scale(1.2);
                    }

                    100% {
                        opacity: 1;
                        transform: translate(-50%, -50%) scale(1);
                    }
                }

                @keyframes bounceSign {

                    0%,
                    100% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-5px);
                    }
                }

                @keyframes float1 {

                    0%,
                    100% {
                        transform: translate(0, 0) scale(1);
                    }

                    33% {
                        transform: translate(30px, -30px) scale(1.1);
                    }

                    66% {
                        transform: translate(-20px, 20px) scale(0.9);
                    }
                }

                @keyframes float2 {

                    0%,
                    100% {
                        transform: translate(0, 0) scale(1);
                    }

                    33% {
                        transform: translate(-25px, 25px) scale(1.1);
                    }

                    66% {
                        transform: translate(25px, -25px) scale(0.9);
                    }
                }

                @keyframes float3 {

                    0%,
                    100% {
                        transform: translate(-50%, -50%) scale(1);
                    }

                    33% {
                        transform: translate(calc(-50% + 20px), calc(-50% - 20px)) scale(1.1);
                    }

                    66% {
                        transform: translate(calc(-50% - 15px), calc(-50% + 15px)) scale(0.9);
                    }
                }

                /* Responsive Styles */
                @media (max-width: 991px) {
                    .funfact-section.centred {
                        padding: 80px 0 !important;
                    }
                }

                @media (max-width: 767px) {
                    .funfact-section.centred {
                        padding: 60px 0 !important;
                    }

                    .funfact-section.centred h2 {
                        font-size: 28px !important;
                    }
                }

                @media (max-width: 575px) {
                    .funfact-section.centred h2 {
                        font-size: 24px !important;
                    }

                    .funfact-section.centred h6 {
                        font-size: 14px !important;
                    }
                }
            </style>

            <script>
                // Counter Animation Script (Inline)
                document.addEventListener('DOMContentLoaded', function() {

                    function animateCounter(element, start, end, duration) {
                        let startTimestamp = null;
                        const step = (timestamp) => {
                            if (!startTimestamp) startTimestamp = timestamp;
                            const progress = Math.min((timestamp - startTimestamp) / duration, 1);

                            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                            const current = Math.floor(easeOutQuart * (end - start) + start);

                            element.textContent = current.toLocaleString();

                            if (progress < 1) {
                                window.requestAnimationFrame(step);
                            } else {
                                element.textContent = end.toLocaleString();
                            }
                        };
                        window.requestAnimationFrame(step);
                    }

                    const observerOptions = {
                        threshold: 0.3,
                        rootMargin: '0px 0px -50px 0px'
                    };

                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting && !entry.target.classList.contains('animated-counter')) {
                                entry.target.classList.add('animated-counter');

                                const counterText = entry.target.querySelector('.count-text');
                                if (counterText) {
                                    const targetValue = parseInt(counterText.getAttribute('data-stop'));
                                    const duration = parseInt(counterText.getAttribute('data-speed'));
                                    animateCounter(counterText, 0, targetValue, duration);
                                }
                            }
                        });
                    }, observerOptions);

                    const counterElements = document.querySelectorAll('.count-text');
                    counterElements.forEach(el => {
                        const card = el.closest('[style*="height: 380px"]');
                        if (card) {
                            observer.observe(card);
                        }
                    });
                });
            </script>
            <!-- funfact-section end -->
            <!-- funfact-section end -->


            <!-- testimonial-section -->
            <section class="testimonial-section">
                <div class="auto-container">
                    <div class="sec-title centred">
                        <i class="flaticon-brain-1"></i>
                        <h6>Leadership Perspectives</h6>
                        <h2>Voices from Our Expert Team</h2>
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
                                    <span>(Program Anchor)</span>
                                </div>
                                <div class="text">
                                    <h3>In my experience, addressing the challenges within a <span>district mental health program</span> is essential to enhance the project's effectiveness. Rural areas, in particular, often lack specialized <span>mental health services</span>. The UDAAN program was designed to overcome these critical barriers.</h3>
                                </div>
                                <div class="author-box">
                                    <h3>Dr. Abhishek Mamarde</h3>
                                    <span class="designation">Consultant Psychiatrist & Program Anchor</span>
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
                                    <span>(DMHP Program Officer)</span>
                                </div>
                                <div class="text">
                                    <h3>Each story in this journey reflects the courage of individuals who have fought their battles, the <span>compassion of professionals</span> who have guided them, and the power of <span>community support</span> in fostering recovery. Together, we can build a society where mental health is prioritized.</h3>
                                </div>
                                <div class="author-box">
                                    <h3>Dr. Syed Saquib</h3>
                                    <span class="designation">Consultant Psychiatrist & Program Officer, DMHP</span>
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
                                    <span>(UDAAN Program Officer)</span>
                                </div>
                                <div class="text">
                                    <h3>Our monthly <span>OPD services</span> cater to approximately 1,700 to 1,800 regular service users. Beyond clinical services, our <span>community-level interventions</span> include support groups, caregiver groups, skill-based training programs, and employment linkages for holistic well-being.</h3>
                                </div>
                                <div class="author-box">
                                    <h3>Pravin M. Kakde</h3>
                                    <span class="designation">Program Officer, UDAAN Nagpur</span>
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
                            <h2><i class="flaticon-brain"></i>Join Us in Our <span>Mission</span><br />Transform Lives Through Mental Health Care</h2>
                        </div>
                        <div class="btn-box pull-right">
                            <a href="get-involved.php" class="theme-btn btn-one">Get Involved</a>
                            <a href="our-partners.php" class="theme-btn btn-three">Our Partners</a>
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