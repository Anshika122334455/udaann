<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>UDAAN Mental Health Initiative - Transforming Community Mental Health Care in Nagpur</title>

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

                        <!-- Animated background particles -->


                        <!-- Logo with premium effects -->


                        <!-- Multi-layer spinner -->
                        <div class="spinner-wrapper">
                            <div class="spinner-orbit orbit-1"></div>
                            <div class="spinner-orbit orbit-2"></div>
                            <div class="spinner-orbit orbit-3"></div>
                            <div class="spinner-center"></div>
                        </div>

                        <!-- Premium text with gradient -->
                        <div class="txt-loading">
                            <span data-text-preloader="U" class="letters-loading">U</span>
                            <span data-text-preloader="D" class="letters-loading">D</span>
                            <span data-text-preloader="A" class="letters-loading">A</span>
                            <span data-text-preloader="A" class="letters-loading">A</span>
                            <span data-text-preloader="N" class="letters-loading">N</span>
                        </div>

                        <!-- Loading progress bar -->
                        <div class="loading-bar">
                            <div class="loading-progress"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style>
            /* ==================== MAIN CONTAINER ==================== */
            .loader-wrap {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                overflow: hidden;
            }

            .preloader {
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e22ce 100%);
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            /* Animated gradient background */
            .preloader::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
                background-size: 50px 50px;
                animation: backgroundMove 20s linear infinite;
            }

            @keyframes backgroundMove {
                0% {
                    transform: translate(0, 0);
                }

                100% {
                    transform: translate(50px, 50px);
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
                gap: 50px;
                position: relative;
            }

            /* ==================== FLOATING PARTICLES ==================== */
            .particles {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                pointer-events: none;
            }

            .particles span {
                position: absolute;
                width: 4px;
                height: 4px;
                background: rgba(255, 255, 255, 0.6);
                border-radius: 50%;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
                animation: particleFloat 8s infinite ease-in-out;
            }

            .particles span:nth-child(1) {
                left: 10%;
                animation-delay: 0s;
                animation-duration: 6s;
            }

            .particles span:nth-child(2) {
                left: 20%;
                animation-delay: 1s;
                animation-duration: 8s;
            }

            .particles span:nth-child(3) {
                left: 30%;
                animation-delay: 2s;
                animation-duration: 7s;
            }

            .particles span:nth-child(4) {
                left: 50%;
                animation-delay: 1.5s;
                animation-duration: 9s;
            }

            .particles span:nth-child(5) {
                left: 60%;
                animation-delay: 0.5s;
                animation-duration: 6.5s;
            }

            .particles span:nth-child(6) {
                left: 70%;
                animation-delay: 2.5s;
                animation-duration: 7.5s;
            }

            .particles span:nth-child(7) {
                left: 80%;
                animation-delay: 1.8s;
                animation-duration: 8.5s;
            }

            .particles span:nth-child(8) {
                left: 90%;
                animation-delay: 0.8s;
                animation-duration: 7s;
            }

            @keyframes particleFloat {
                0% {
                    transform: translateY(100vh) scale(0);
                    opacity: 0;
                }

                10% {
                    opacity: 1;
                }

                90% {
                    opacity: 1;
                }

                100% {
                    transform: translateY(-100vh) scale(1);
                    opacity: 0;
                }
            }

            /* ==================== PREMIUM LOGO ==================== */
            .logo-wrapper {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .logo-glow {
                position: absolute;
                width: 200px;
                height: 200px;
                background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
                border-radius: 50%;
                animation: glowPulse 3s ease-in-out infinite;
                filter: blur(20px);
            }

            @keyframes glowPulse {

                0%,
                100% {
                    transform: scale(0.8);
                    opacity: 0.5;
                }

                50% {
                    transform: scale(1.2);
                    opacity: 1;
                }
            }

            .logo-container {
                position: relative;
                z-index: 2;
                animation: logoEntrance 1.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            }

            .animated-logo {
                width: 160px;
                height: auto;
                filter: drop-shadow(0 15px 35px rgba(0, 0, 0, 0.3)) drop-shadow(0 0 30px rgba(255, 255, 255, 0.4));
                animation: logoFloat 4s ease-in-out infinite, logoRotate 8s linear infinite;
            }

            @keyframes logoEntrance {
                0% {
                    opacity: 0;
                    transform: scale(0) rotate(-180deg);
                }

                100% {
                    opacity: 1;
                    transform: scale(1) rotate(0deg);
                }
            }

            @keyframes logoFloat {

                0%,
                100% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            @keyframes logoRotate {
                0% {
                    filter: drop-shadow(0 15px 35px rgba(0, 0, 0, 0.3)) drop-shadow(0 0 30px rgba(255, 255, 255, 0.4)) hue-rotate(0deg);
                }

                100% {
                    filter: drop-shadow(0 15px 35px rgba(0, 0, 0, 0.3)) drop-shadow(0 0 30px rgba(255, 255, 255, 0.4)) hue-rotate(360deg);
                }
            }

            /* ==================== MULTI-ORBIT SPINNER ==================== */
            .spinner-wrapper {
                position: relative;
                width: 120px;
                height: 120px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .spinner-orbit {
                position: absolute;
                border-radius: 50%;
                border: 2px solid transparent;
                animation: orbitSpin 3s linear infinite;
            }

            .orbit-1 {
                width: 120px;
                height: 120px;
                border-top: 3px solid #ffffff;
                border-right: 3px solid rgba(255, 255, 255, 0.3);
                animation-duration: 2s;
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            }

            .orbit-2 {
                width: 90px;
                height: 90px;
                border-bottom: 3px solid #fbbf24;
                border-left: 3px solid rgba(251, 191, 36, 0.3);
                animation-duration: 2.5s;
                animation-direction: reverse;
                box-shadow: 0 0 20px rgba(251, 191, 36, 0.5);
            }

            .orbit-3 {
                width: 60px;
                height: 60px;
                border-top: 3px solid #ec4899;
                border-right: 3px solid rgba(236, 72, 153, 0.3);
                animation-duration: 1.8s;
                box-shadow: 0 0 20px rgba(236, 72, 153, 0.5);
            }

            @keyframes orbitSpin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            .spinner-center {
                width: 20px;
                height: 20px;
                background: linear-gradient(135deg, #ffffff, #fbbf24);
                border-radius: 50%;
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
                animation: centerPulse 1.5s ease-in-out infinite;
                z-index: 3;
            }

            @keyframes centerPulse {

                0%,
                100% {
                    transform: scale(1);
                    box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
                }

                50% {
                    transform: scale(1.5);
                    box-shadow: 0 0 40px rgba(255, 255, 255, 1);
                }
            }

            /* ==================== GRADIENT TEXT ==================== */
            .txt-loading {
                display: flex;
                gap: 10px;
                font-family: 'Segoe UI', 'Arial', sans-serif;
                letter-spacing: 15px;
                position: relative;
            }

            .letters-loading {
                font-size: 56px;
                font-weight: 700;
                background: linear-gradient(135deg, #ffffff 0%, #fbbf24 50%, #ec4899 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                position: relative;
                animation: letterBounce 1.4s ease-in-out infinite;
                filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5));
            }

            .letters-loading::before {
                content: attr(data-text-preloader);
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                background: linear-gradient(135deg, #ffffff 0%, #fbbf24 50%, #ec4899 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                filter: blur(10px);
                opacity: 0.7;
            }

            .letters-loading:nth-child(1) {
                animation-delay: 0s;
            }

            .letters-loading:nth-child(2) {
                animation-delay: 0.12s;
            }

            .letters-loading:nth-child(3) {
                animation-delay: 0.24s;
            }

            .letters-loading:nth-child(4) {
                animation-delay: 0.36s;
            }

            .letters-loading:nth-child(5) {
                animation-delay: 0.48s;
            }

            @keyframes letterBounce {

                0%,
                100% {
                    transform: translateY(0) scale(1);
                }

                25% {
                    transform: translateY(-25px) scale(1.1);
                }

                50% {
                    transform: translateY(-15px) scale(0.95);
                }
            }

            /* ==================== PROGRESS BAR ==================== */
            .loading-bar {
                width: 300px;
                height: 4px;
                background: rgba(255, 255, 255, 0.2);
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
                position: relative;
            }

            .loading-progress {
                height: 100%;
                background: linear-gradient(90deg, #ffffff 0%, #fbbf24 50%, #ec4899 100%);
                background-size: 200% 100%;
                border-radius: 10px;
                animation: progressMove 2s ease-in-out infinite, progressGlow 1.5s ease-in-out infinite;
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
            }

            @keyframes progressMove {
                0% {
                    width: 0%;
                    background-position: 0% 0%;
                }

                50% {
                    width: 70%;
                    background-position: 100% 0%;
                }

                100% {
                    width: 100%;
                    background-position: 200% 0%;
                }
            }

            @keyframes progressGlow {

                0%,
                100% {
                    box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
                }

                50% {
                    box-shadow: 0 0 40px rgba(255, 255, 255, 1);
                }
            }

            /* ==================== CLOSE BUTTON ==================== */
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
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border: 2px solid rgba(255, 255, 255, 0.2);
                border-radius: 50%;
                transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
                z-index: 10000;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }

            .preloader-close:hover {
                background: rgba(255, 255, 255, 0.3);
                transform: rotate(180deg) scale(1.1);
                box-shadow: 0 8px 25px rgba(255, 255, 255, 0.4);
            }

            /* ==================== RESPONSIVE ==================== */
            @media (max-width: 768px) {
                .animated-logo {
                    width: 120px;
                }

                .spinner-wrapper {
                    width: 90px;
                    height: 90px;
                }

                .orbit-1 {
                    width: 90px;
                    height: 90px;
                }

                .orbit-2 {
                    width: 70px;
                    height: 70px;
                }

                .orbit-3 {
                    width: 50px;
                    height: 50px;
                }

                .letters-loading {
                    font-size: 40px;
                    letter-spacing: 10px;
                }

                .loading-bar {
                    width: 250px;
                }

                .animation-preloader {
                    gap: 35px;
                }
            }

            @media (max-width: 480px) {
                .animated-logo {
                    width: 100px;
                }

                .letters-loading {
                    font-size: 32px;
                    letter-spacing: 8px;
                }

                .loading-bar {
                    width: 200px;
                }
            }
        </style>
        <!-- preloader end -->


        <!-- main header -->
        <?php include_once 'header.php'; ?>
        <!-- main-header end -->



        <!-- banner-section -->
        <section class="banner-section">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(images/white-bg.png)"></div>
                    <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>

                    <!-- Decorative Circles -->
                    <div class="banner-decoration">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                    </div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>UDAAN Initiative</h3>
                            <h1>Strengthening Community-Based<br>Mental Health Care</h1>
                            <div class="btn-box">
                                <a href="contact.php" class="theme-btn btn-one">Contact Us</a>
                            </div>
                        </div>

                        <!-- Right Side Impact Stats -->
                        <div class="banner-right-content">
                            <div class="impact-stat-box">
                                <i class="flaticon-brain stat-icon"></i>
                                <div class="stat-number">500K+</div>
                                <p class="stat-label">People Screened</p>
                            </div>
                            <div class="impact-stat-box">
                                <i class="flaticon-heart stat-icon"></i>
                                <div class="stat-number">1,800+</div>
                                <p class="stat-label">Monthly Service Users</p>
                            </div>
                            <div class="impact-stat-box">
                                <i class="flaticon-users stat-icon"></i>
                                <div class="stat-number">10+</div>
                                <p class="stat-label">Years of Impact</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(images/white-bg.png)"></div>
                    <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>

                    <!-- Decorative Circles -->
                    <div class="banner-decoration">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                    </div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>Hope Rising</h3>
                            <h1>Accessible, Affordable<br>Mental Health Services For All</h1>
                            <div class="btn-box">
                                <a href="programs-initiatives.php" class="theme-btn btn-one">Our Programs</a>
                            </div>
                        </div>

                        <!-- Right Side Impact Stats -->
                        <div class="banner-right-content">
                            <div class="impact-stat-box">
                                <i class="flaticon-hospital stat-icon"></i>
                                <div class="stat-number">15K+</div>
                                <p class="stat-label">Patients Under Care</p>
                            </div>
                            <div class="impact-stat-box">
                                <i class="flaticon-doctor stat-icon"></i>
                                <div class="stat-number">2,000+</div>
                                <p class="stat-label">Healthcare Workers Trained</p>
                            </div>
                            <div class="impact-stat-box">
                                <i class="flaticon-location-1 stat-icon"></i>
                                <div class="stat-number">100%</div>
                                <p class="stat-label">Nagpur District Coverage</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(images/white-bg.png)"></div>
                    <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>

                    <!-- Decorative Circles -->
                    <div class="banner-decoration">
                        <div class="circle circle-1"></div>
                        <div class="circle circle-2"></div>
                        <div class="circle circle-3"></div>
                    </div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>Transforming Lives</h3>
                            <h1>Evidence-Based Mental Health<br>Care Since 2016</h1>
                            <div class="btn-box">
                                <a href="stories.php" class="theme-btn btn-one">Success Stories</a>
                            </div>
                        </div>

                        <!-- Right Side Impact Stats -->
                        <div class="banner-right-content">
                            <div class="impact-stat-box">
                                <i class="flaticon-brain-1 stat-icon"></i>
                                <div class="stat-number">95%</div>
                                <p class="stat-label">Treatment Adherence Rate</p>
                            </div>
                            <div class="impact-stat-box">
                                <i class="flaticon-group stat-icon"></i>
                                <div class="stat-number">90%</div>
                                <p class="stat-label">Family Engagement</p>
                            </div>
                            <div class="impact-stat-box">
                                <i class="flaticon-check stat-icon"></i>
                                <div class="stat-number">85%</div>
                                <p class="stat-label">Clinical Recovery Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image image-1"><img src="images/16.jpg" alt="UDAAN Community Mental Health"></figure>
                                <span class="text">Since 2016</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="sec-title">
                                    <i class="flaticon-brain-1"></i>
                                    <h6>About UDAAN</h6>
                                    <h2>Strengthening Mental Health Care <span>Through Community-Based Services</span></h2>
                                </div>
                                <div class="text">
                                    <p>UDAAN is a pioneering mental health initiative working to transform the landscape of mental health care in Nagpur District, Maharashtra. Since 2016, we have been implementing evidence-based, community-focused interventions that make mental health services accessible, affordable, and destigmatized.</p>
                                    <!-- <p>Through our partnership with the Government of Maharashtra and support from Tata Trusts, we deliver comprehensive mental health services integrated with the existing public health system—reaching thousands of individuals and families who would otherwise lack access to care.</p> -->
                                </div>

                                <div class="btn-box mt-30">
                                    <a href="our-story.php" class="theme-btn btn-two">Read Our Story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!-- Custom Banner Height Fix with Right Side Design -->
        <style>
            /* Banner Section Height Fix */
            .banner-section {
                position: relative;
                min-height: 650px;
                height: 650px;
                overflow: hidden;
            }

            .banner-section .slide-item {
                position: relative;
                min-height: 650px;
                height: 650px;
                display: flex;
                align-items: center;
            }

            .banner-section .slide-item .image-layer {
                position: absolute;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            .banner-section .auto-container {
                width: 100%;
                max-width: 1200px;
                padding: 0 15px;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .banner-section .content-box {
                position: relative;
                z-index: 9;
                padding: 80px 0 60px;
                width: 50%;
                max-width: 600px;
            }

            .banner-section .content-box h3 {
                font-size: 20px;
                margin-bottom: 15px;
                animation: fadeInUp 0.8s ease-out;
            }

            .banner-section .content-box h1 {
                font-size: 50px;
                line-height: 1.2;
                margin-bottom: 25px;
                animation: fadeInUp 1s ease-out 0.2s;
                animation-fill-mode: both;
            }

            .banner-section .btn-box {
                margin-top: 35px;
                animation: fadeInUp 1.2s ease-out 0.4s;
                animation-fill-mode: both;
            }

            /* Right Side Impact Stats */
            .banner-right-content {
                position: relative;
                width: 45%;
                z-index: 9;
                display: flex;
                flex-direction: column;
                gap: 30px;
            }

            .impact-stat-box {
                background: rgba(255, 255, 255, 0.95);
                padding: 30px 35px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                transform: translateX(100px);
                opacity: 0;
                animation: slideInRight 1s ease-out forwards;
                transition: all 0.3s ease;
            }

            .impact-stat-box:nth-child(1) {
                animation-delay: 0.3s;
            }

            .impact-stat-box:nth-child(2) {
                animation-delay: 0.5s;
            }

            .impact-stat-box:nth-child(3) {
                animation-delay: 0.7s;
            }

            .impact-stat-box:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            }

            .impact-stat-box .stat-number {
                font-size: 48px;
                font-weight: 700;
                color: #82bbd2;
                line-height: 1;
                margin-bottom: 10px;
                font-family: 'Playfair Display', serif;
            }

            .impact-stat-box .stat-label {
                font-size: 16px;
                color: #333;
                font-weight: 600;
                margin: 0;
            }

            .impact-stat-box .stat-icon {
                position: absolute;
                right: 20px;
                top: 20px;
                font-size: 40px;
                color: #82bbd2;
                opacity: 0.2;
            }

            /* Decorative Circle Animation */
            .banner-decoration {
                position: absolute;
                right: -100px;
                top: 50%;
                transform: translateY(-50%);
                width: 400px;
                height: 400px;
                z-index: 1;
            }

            .banner-decoration .circle {
                position: absolute;
                border-radius: 50%;
                border: 2px solid rgba(130, 187, 210, 0.3);
            }

            .banner-decoration .circle-1 {
                width: 300px;
                height: 300px;
                top: 50px;
                right: 50px;
                animation: float 6s ease-in-out infinite;
            }

            .banner-decoration .circle-2 {
                width: 200px;
                height: 200px;
                top: 100px;
                right: 100px;
                animation: float 8s ease-in-out infinite;
                animation-delay: 1s;
            }

            .banner-decoration .circle-3 {
                width: 100px;
                height: 100px;
                top: 150px;
                right: 150px;
                animation: float 10s ease-in-out infinite;
                animation-delay: 2s;
            }

            /* Animations */
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

            @keyframes slideInRight {
                from {
                    opacity: 0;
                    transform: translateX(100px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes float {

                0%,
                100% {
                    transform: translateY(0px) scale(1);
                }

                50% {
                    transform: translateY(-20px) scale(1.05);
                }
            }

            /* Responsive adjustments */
            @media only screen and (max-width: 1199px) {
                .banner-right-content {
                    width: 40%;
                }

                .impact-stat-box {
                    padding: 25px 30px;
                }

                .impact-stat-box .stat-number {
                    font-size: 40px;
                }
            }

            @media only screen and (max-width: 991px) {

                .banner-section,
                .banner-section .slide-item {
                    min-height: 550px;
                    height: 550px;
                }

                .banner-section .auto-container {
                    flex-direction: column;
                    justify-content: center;
                    gap: 40px;
                }

                .banner-section .content-box,
                .banner-right-content {
                    width: 100%;
                    max-width: 600px;
                }

                .banner-section .content-box h1 {
                    font-size: 40px;
                }

                .banner-right-content {
                    flex-direction: row;
                    gap: 20px;
                }

                .impact-stat-box {
                    flex: 1;
                    padding: 20px;
                }

                .impact-stat-box .stat-number {
                    font-size: 32px;
                }

                .impact-stat-box .stat-label {
                    font-size: 14px;
                }

                .banner-decoration {
                    display: none;
                }
            }

            @media only screen and (max-width: 767px) {

                .banner-section,
                .banner-section .slide-item {
                    min-height: 700px;
                    height: auto;
                }

                .banner-section .content-box {
                    padding: 60px 0 40px;
                }

                .banner-section .content-box h1 {
                    font-size: 32px;
                }

                .banner-right-content {
                    flex-direction: column;
                    gap: 15px;
                }

                .impact-stat-box {
                    padding: 20px 25px;
                }

                .impact-stat-box .stat-icon {
                    font-size: 30px;
                }
            }

            @media only screen and (max-width: 575px) {
                .banner-section .content-box h1 {
                    font-size: 28px;
                }

                .impact-stat-box .stat-number {
                    font-size: 28px;
                }

                .impact-stat-box .stat-label {
                    font-size: 13px;
                }
            }

            .news-block-one .image-box {
                width: 100%;
                height: 250px;
                /* Adjust this value as needed */
                overflow: hidden;
                position: relative;
            }

            .news-block-one .image-box img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                /* Crops image to fill container while maintaining aspect ratio */
                object-position: center;
                /* Centers the image */
            }
        </style>
        <!-- service-section -->
        <section class="service-section bg-color-1 centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <i class="flaticon-brain-1"></i>
                    <h6>Our Core Services</h6>
                    <h2>Comprehensive Mental Health Care<br>Delivered Close to Communities</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="assets/images/icons/icon-1.png" alt="Clinical Services"></figure>
                                <h3><a href="programs-initiatives.php">Clinical Mental Health Services</a></h3>
                                <p>Psychiatric consultations, medications, and follow-ups through district hospitals and PHCs.</p>
                                <div class="link">
                                    <a href="programs-initiatives.php"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="assets/images/icons/icon-2.png" alt="Community Outreach"></figure>
                                <h3><a href="programs-initiatives.php">Community Outreach & Screening</a></h3>
                                <p>Door-to-door surveys, awareness camps, and early identification of mental health conditions.</p>
                                <div class="link">
                                    <a href="programs-initiatives.php"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="assets/images/icons/icon-3.png" alt="Psychosocial Support"></figure>
                                <h3><a href="programs-initiatives.php">Psychosocial Support & Counseling</a></h3>
                                <p>Individual and family counseling, psychoeducation, and rehabilitation services.</p>
                                <div class="link">
                                    <a href="programs-initiatives.php"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="icon-box"><img src="assets/images/icons/icon-4.png" alt="Capacity Building"></figure>
                                <h3><a href="programs-initiatives.php">Capacity Building & Training</a></h3>
                                <p>Training healthcare workers, ASHAs, and ANMs to identify and manage mental health conditions.</p>
                                <div class="link">
                                    <a href="programs-initiatives.php"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- chooseus-section -->
        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="tabs-box">
                <div class="title-inner">
                    <div class="auto-container">
                        <div class="sec-title light centred">
                            <i class="flaticon-brain-1"></i>
                            <h6>WHY CHOOSE UDAAN</h6>
                            <h2>Evidence-Based, Community-Focused Mental Health Care</h2>
                        </div>
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons centred clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Community-First Approach</li>
                                <li class="tab-btn" data-tab="#tab-2">Public-Private Partnership</li>
                                <li class="tab-btn" data-tab="#tab-3">Holistic Mental Health Care</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content-inner">
                    <div class="auto-container">
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="row align-items-center clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image-box"><img src="images/22.jpg" alt="UDAAN community-first approach group sitting and talking accessible mental health services rural Nagpur"></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_2">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <h5>Community-First Approach</h5>
                                                    <h2>Accessible Services Delivered Where People Live</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_3">
                                            <div class="content-box">
                                                <div class="text">
                                                    <p>Mental health support is delivered close to where people live—through district hospitals, Primary Health Centers (PHCs), and community outreach programs. This ensures that geographical barriers never prevent access to care.</p>
                                                    <h3><i class="flaticon-quote"></i>Breaking Down Barriers to Care</h3>
                                                    <p>We reach individuals and families across rural and underserved areas—ensuring that mental health services are available to those who need them most, without requiring long-distance travel or expensive private care.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="our-approach.php" class="theme-btn btn-two">Our Approach</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image-box"><img src="images/17.jpg" alt="UDAAN community outreach family inside home household-based mental health screening rural village"></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="row align-items-center clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image-box"><img src="images/10.jpg" alt="UDAAN public-private partnership two people talking in office government collaboration mental health system"></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_2">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <h5>Public-Private Partnership</h5>
                                                    <h2>Strengthening Government Mental Health Systems</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_3">
                                            <div class="content-box">
                                                <div class="text">
                                                    <p>UDAAN operates through a formal MoU with the Government of Maharashtra, working to strengthen the District Mental Health Programme (DMHP) and improve the quality of care at Regional Mental Hospital Nagpur (RMHN).</p>
                                                    <h3><i class="flaticon-quote"></i>Systemic, Sustainable Change</h3>
                                                    <p>By integrating with the public health system, we ensure that improvements are sustainable—building capacity, infrastructure, and service delivery mechanisms that will continue to benefit communities long after our direct intervention.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="our-partners.php" class="theme-btn btn-two">Our Partners</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image-box"><img src="images/28.jpg" alt="UDAAN system strengthening three people at table government partnership capacity building training"></figure>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="tab-3">
                                <div class="row align-items-center clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image-box"><img src="images/35.jpg" alt="UDAAN holistic mental health care family sitting together comprehensive recovery support care"></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_2">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <h5>Holistic Mental Health Care</h5>
                                                    <h2>Beyond Medication—Comprehensive Recovery Support</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_3">
                                            <div class="content-box">
                                                <div class="text">
                                                    <p>Mental health care at UDAAN goes beyond medications—we provide counseling, psychoeducation, regular follow-ups, family involvement, and rehabilitation support to ensure holistic, long-term recovery.</p>
                                                    <h3><i class="flaticon-quote"></i>Family-Centered, Community-Supported Recovery</h3>
                                                    <p>Families and communities are actively engaged in the recovery process—ensuring that individuals receive the social support, understanding, and acceptance they need to thrive.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="programs-initiatives.php" class="theme-btn btn-two">Our Programs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                        <figure class="image-box"><img src="images/41.jpg" alt="UDAAN family-centered recovery family standing together community-supported holistic mental health"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->
        <!-- chooseus-section end -->


        <!-- case-section -->
        <!-- case-section -->
        <style>
            /* Uniform Case Section Image Sizing */
            .case-section .case-block-one .inner-box {
                overflow: hidden;
                border-radius: 8px;
            }

            .case-section .case-block-one .image-box {
                overflow: hidden;
                position: relative;
            }

            .case-section .case-block-one .image-box img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
                display: block;
            }

            /* Large left card - full height */
            .case-section .col-lg-6>.case-block-one .image-box {
                height: 520px;
            }

            .case-section .col-lg-6>.case-block-one .image-box img {
                height: 520px;
            }

            /* Top-right and bottom-right stacked cards */
            .case-section .col-lg-3 .case-block-one .image-box {
                height: 250px;
            }

            .case-section .col-lg-3 .case-block-one .image-box img {
                height: 250px;
            }

            /* Right single tall card (Vinay) */
            .case-section .col-lg-3:last-child>.case-block-one .image-box {
                height: 520px;
            }

            .case-section .col-lg-3:last-child>.case-block-one .image-box img {
                height: 520px;
            }

            /* Ensure content overlay sits properly */
            .case-section .case-block-one .content-box {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                z-index: 2;
                background: linear-gradient(transparent, rgba(0, 0, 0, 0.75));
                padding: 20px;
            }

            .case-section .case-block-one .content-box .inner h2 a {
                color: #fff;
                font-size: 18px;
                line-height: 1.4;
            }

            .case-section .case-block-one .content-box .icon-box {
                margin-bottom: 8px;
            }

            .case-section .case-block-one .content-box .icon-box i {
                color: #82bbd2;
                font-size: 28px;
            }

            /* Remove any brush/mask effects causing messy edges */
            .case-section .case-block-one .inner-box:before,
            .case-section .case-block-one .inner-box:after,
            .case-section .case-block-one .image-box:before,
            .case-section .case-block-one .image-box:after {
                display: none !important;
            }

            /* Spacing between stacked cards */
            .case-section .col-lg-3 .case-block-one {
                margin-bottom: 20px;
            }

            .case-section .col-lg-3 .case-block-one:last-child {
                margin-bottom: 0;
            }

            /* Responsive adjustments */
            @media only screen and (max-width: 991px) {

                .case-section .col-lg-6>.case-block-one .image-box,
                .case-section .col-lg-6>.case-block-one .image-box img,
                .case-section .col-lg-3:last-child>.case-block-one .image-box,
                .case-section .col-lg-3:last-child>.case-block-one .image-box img {
                    height: 350px;
                }

                .case-section .col-lg-3 .case-block-one .image-box,
                .case-section .col-lg-3 .case-block-one .image-box img {
                    height: 250px;
                }
            }

            @media only screen and (max-width: 767px) {

                .case-section .col-lg-6>.case-block-one .image-box,
                .case-section .col-lg-6>.case-block-one .image-box img,
                .case-section .col-lg-3:last-child>.case-block-one .image-box,
                .case-section .col-lg-3:last-child>.case-block-one .image-box img,
                .case-section .col-lg-3 .case-block-one .image-box,
                .case-section .col-lg-3 .case-block-one .image-box img {
                    height: 280px;
                }
            }
        </style>

        <section class="case-section">
            <div class="fluid-container">
                <div class="sec-title centred">
                    <i class="flaticon-brain-1"></i>
                    <h6>Our Impact</h6>
                    <h2>Real Stories of Recovery & Transformation</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 case-block">
                        <div class="case-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="images/26.jpg" alt="Sunil sitting outside overcoming schizophrenia recovery UDAAN community support Narkhed block Nagpur"></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-brain"></i></div>
                                        <h2><a href="stories.php">Sunil's Journey:<br>Overcoming Schizophrenia</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="images/30.jpg" alt="Vandana woman sitting on floor depression recovery isolation to independence UDAAN Bhiwapur block"></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-brain"></i></div>
                                        <h2><a href="stories.php">Vandana's Transformation</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="case-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="images/15.jpg" alt="Gaurav man sitting alone COVID-19 depression despair to renewal UDAAN mental health Narkhed block"></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-brain"></i></div>
                                        <h2><a href="stories.php">Gaurav's Renewal</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 case-block">
                        <div class="case-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="images/19.jpg" alt="Vinay man sitting on bed alcohol use disorder addiction to employment UDAAN recovery Nagpur rural"></figure>
                                <div class="content-box">
                                    <div class="inner">
                                        <div class="icon-box"><i class="flaticon-brain"></i></div>
                                        <h2><a href="stories.php">Vinay's New Beginning</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn centred mt-50">
                    <a href="stories.php" class="theme-btn btn-one">View All Success Stories</a>
                </div>
            </div>
        </section>
        <!-- case-section end -->
        <!-- case-section end -->


        <!-- skills-section -->
        <section class="skills-section">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image"><img src="images/A3-Parenting6-HR.jpg" alt="UDAAN Impact"></figure>
                                <div class="text">
                                    <h6>Our Impact Since 2016</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                        <div class="content_block_4">
                            <div class="content-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="sec-title">
                                    <i class="flaticon-brain-1"></i>
                                    <h6>Measurable Impact</h6>
                                    <h2>Making Mental Health Care <span>Accessible to All</span></h2>
                                </div>
                                <div class="text">
                                    <p>UDAAN works to strengthen mental health care systems by bringing services closer to communities, supporting families, and improving access through public health partnerships. Our approach focuses on long-term recovery, dignity, and inclusive care.</p>
                                    <p>Since 2016, we have screened over 500,000 individuals, identified thousands with mental health conditions, and provided comprehensive treatment and psychosocial support—transforming lives across Nagpur District.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                            <div class="single-progress-box">
                                                <div class="box">
                                                    <div class="piechart" data-fg-color="#82bbd2" data-value=".95">
                                                        <span>.95</span>
                                                    </div>
                                                </div>
                                                <h5>Treatment Adherence</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                            <div class="single-progress-box">
                                                <div class="box">
                                                    <div class="piechart" data-fg-color="#82bbd2" data-value=".90">
                                                        <span>.90</span>
                                                    </div>
                                                </div>
                                                <h5>Family Engagement</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 progress-block">
                                            <div class="single-progress-box">
                                                <div class="box">
                                                    <div class="piechart" data-fg-color="#82bbd2" data-value=".85">
                                                        <span>.85</span>
                                                    </div>
                                                </div>
                                                <h5>Clinical Recovery</h5>
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
        <section class="funfact-section centred" style="position: relative; padding: 100px 0; overflow: hidden; background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #333333 100%); min-height: 600px; display: flex; align-items: center;">

            <!-- Background Image Overlay -->
            <div style="content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(images/A3-Intellectual-Disability1-HR.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; opacity: 0.1; z-index: 0;"></div>

            <!-- Background Overlay -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0, 0, 0, 0.85) 0%, rgba(26, 26, 26, 0.9) 50%, rgba(51, 51, 51, 0.85) 100%); z-index: 1;"></div>

            <!-- Animated Shapes -->
            <div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 2; overflow: hidden; pointer-events: none;">
                <div style="position: absolute; background: #82bbd2; opacity: 0.08; border-radius: 50%; width: 300px; height: 300px; top: -100px; left: -100px; animation: float1 20s infinite ease-in-out;"></div>
                <div style="position: absolute; background: #82bbd2; opacity: 0.08; border-radius: 50%; width: 400px; height: 400px; bottom: -150px; right: -150px; animation: float2 20s infinite ease-in-out;"></div>
                <div style="position: absolute; background: #82bbd2; opacity: 0.08; border-radius: 50%; width: 200px; height: 200px; top: 50%; left: 50%; transform: translate(-50%, -50%); animation: float3 20s infinite ease-in-out;"></div>
            </div>

            <div style="position: relative; z-index: 3; max-width: 1200px; margin: 0 auto; padding: 0 15px; width: 100%;">
                <!-- Section Title -->
                <div style="margin-bottom: 60px; text-align: center;">
                    <i class="flaticon-brain-1" style="font-size: 60px; color: #82bbd2; margin-bottom: 20px; display: inline-block; filter: drop-shadow(0 0 20px rgba(130, 187, 210, 0.4)); animation: pulse 2s infinite ease-in-out;"></i>
                    <h6 style="font-size: 16px; font-weight: 600; color: #82bbd2; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 15px; text-shadow: 0 0 10px rgba(130, 187, 210, 0.3); animation: fadeInUp 0.8s ease forwards 0.2s; opacity: 0;">Our Achievements</h6>
                    <h2 style="font-size: 42px; font-weight: 700; color: #ffffff; margin: 0; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); animation: fadeInUp 0.8s ease forwards 0.4s; opacity: 0;">Impact Numbers That Matter</h2>
                </div>

                <!-- Counter Cards Row -->
                <div class="row clearfix" style="display: flex; flex-wrap: wrap; margin: 0 -15px; align-items: stretch;">

                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: stretch; padding: 0 15px;">
                        <div style="opacity: 0; transform: translateY(50px); animation: slideInUp 0.8s ease forwards 0.6s; width: 100%; max-width: 280px; margin: 0 auto;">
                            <div style="background: #ffffff; border-radius: 20px; padding: 35px 20px; text-align: center; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 3px solid transparent; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); height: 380px; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer;"
                                onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #82bbd2'; this.style.borderColor='#82bbd2'; this.querySelector('.count-text-1').style.color='#82bbd2';"
                                onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-1').style.color='#000000';">

                                <!-- Shine Effect -->
                                <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(130, 187, 210, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>

                                <!-- Bottom Line -->
                                <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #82bbd2, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                <!-- Icon Circle -->
                                <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                    <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(130, 187, 210, 0.3));" viewBox="0 0 100 100">
                                        <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                        <circle style="fill: none; stroke: #82bbd2; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 0.8s; filter: drop-shadow(0 0 8px rgba(130, 187, 210, 0.4));" cx="50" cy="50" r="45"></circle>
                                    </svg>
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 0.6s backwards;">👥</div>
                                </div>

                                <!-- Counter -->
                                <div style="margin-bottom: 12px; flex-shrink: 0;">
                                    <span class="count-text count-text-1" data-speed="2000" data-stop="500000" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                    <span style="font-size: 38px; font-weight: 700; color: #82bbd2; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
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
                                onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #82bbd2'; this.style.borderColor='#82bbd2'; this.querySelector('.count-text-2').style.color='#82bbd2';"
                                onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-2').style.color='#000000';">

                                <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(130, 187, 210, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>
                                <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #82bbd2, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                    <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(130, 187, 210, 0.3));" viewBox="0 0 100 100">
                                        <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                        <circle style="fill: none; stroke: #82bbd2; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 1s; filter: drop-shadow(0 0 8px rgba(130, 187, 210, 0.4));" cx="50" cy="50" r="45"></circle>
                                    </svg>
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 0.8s backwards;">🏥</div>
                                </div>

                                <div style="margin-bottom: 12px; flex-shrink: 0;">
                                    <span class="count-text count-text-2" data-speed="2000" data-stop="15000" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                    <span style="font-size: 38px; font-weight: 700; color: #82bbd2; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
                                </div>

                                <p style="font-size: 15px; color: #333333; margin: 0; font-weight: 600; letter-spacing: 0.5px; position: relative; z-index: 1; line-height: 1.4; padding: 0 10px; min-height: 42px; display: flex; align-items: center; justify-content: center; transition: color 0.3s ease;">Patients Under Care</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: stretch; padding: 0 15px;">
                        <div style="opacity: 0; transform: translateY(50px); animation: slideInUp 0.8s ease forwards 1s; width: 100%; max-width: 280px; margin: 0 auto;">
                            <div style="background: #ffffff; border-radius: 20px; padding: 35px 20px; text-align: center; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 3px solid transparent; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); height: 380px; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer;"
                                onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #82bbd2'; this.style.borderColor='#82bbd2'; this.querySelector('.count-text-3').style.color='#82bbd2';"
                                onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-3').style.color='#000000';">

                                <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(130, 187, 210, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>
                                <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #82bbd2, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                    <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(130, 187, 210, 0.3));" viewBox="0 0 100 100">
                                        <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                        <circle style="fill: none; stroke: #82bbd2; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 1.2s; filter: drop-shadow(0 0 8px rgba(130, 187, 210, 0.4));" cx="50" cy="50" r="45"></circle>
                                    </svg>
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 1s backwards;">🎓</div>
                                </div>

                                <div style="margin-bottom: 12px; flex-shrink: 0;">
                                    <span class="count-text count-text-3" data-speed="2000" data-stop="2000" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                    <span style="font-size: 38px; font-weight: 700; color: #82bbd2; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
                                </div>

                                <p style="font-size: 15px; color: #333333; margin: 0; font-weight: 600; letter-spacing: 0.5px; position: relative; z-index: 1; line-height: 1.4; padding: 0 10px; min-height: 42px; display: flex; align-items: center; justify-content: center; transition: color 0.3s ease;">Healthcare Workers Trained</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px; display: flex; justify-content: center; align-items: stretch; padding: 0 15px;">
                        <div style="opacity: 0; transform: translateY(50px); animation: slideInUp 0.8s ease forwards 1.2s; width: 100%; max-width: 280px; margin: 0 auto;">
                            <div style="background: #ffffff; border-radius: 20px; padding: 35px 20px; text-align: center; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border: 3px solid transparent; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); height: 380px; width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; cursor: pointer;"
                                onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 20px 60px rgba(0, 0, 0, 0.4), 0 0 0 3px #82bbd2'; this.style.borderColor='#82bbd2'; this.querySelector('.count-text-4').style.color='#82bbd2';"
                                onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.3)'; this.style.borderColor='transparent'; this.querySelector('.count-text-4').style.color='#000000';">

                                <div style="content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(130, 187, 210, 0.1), transparent); transition: left 0.6s ease; pointer-events: none;"></div>
                                <div style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, transparent, #82bbd2, transparent); transform: scaleX(0); transition: transform 0.4s ease;"></div>

                                <div style="position: relative; width: 110px; height: 110px; margin: 0 auto 25px; flex-shrink: 0;">
                                    <svg style="width: 100%; height: 100%; transform: rotate(-90deg); filter: drop-shadow(0 4px 10px rgba(130, 187, 210, 0.3));" viewBox="0 0 100 100">
                                        <circle style="fill: none; stroke: #f0f0f0; stroke-width: 4;" cx="50" cy="50" r="45"></circle>
                                        <circle style="fill: none; stroke: #82bbd2; stroke-width: 4; stroke-dasharray: 283; stroke-dashoffset: 283; stroke-linecap: round; animation: progressAnim 2s ease-in-out forwards 1.4s; filter: drop-shadow(0 0 8px rgba(130, 187, 210, 0.4));" cx="50" cy="50" r="45"></circle>
                                    </svg>
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 46px; filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1)); animation: bounceIn 0.6s ease 1.2s backwards;">⭐</div>
                                </div>

                                <div style="margin-bottom: 12px; flex-shrink: 0;">
                                    <span class="count-text count-text-4" data-speed="2000" data-stop="10" style="font-size: 44px; font-weight: 700; color: #000000; line-height: 1; display: inline-block; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05); transition: color 0.3s ease;">0</span>
                                    <span style="font-size: 38px; font-weight: 700; color: #82bbd2; margin-left: 5px; display: inline-block; animation: bounceSign 1.5s infinite ease-in-out;">+</span>
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


        <section class="team-section team-page pt-120">
            <div class="auto-container">
                <div class="sec-title centred">
                    <i class="flaticon-brain-1"></i>
                    <h6>Our Team</h6>
                    <h2>Dedicated Mental Health Professionals</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="contact.php"><img src="images/DR_ABHISHEK_MAMARDE.png" alt="Dr. Abhishek Mamarde - UDAAN Program Anchor Consultant Psychiatrist"></a></figure>
                                <div class="designation">
                                    <h6>Program Anchor</h6>
                                </div>
                                <div class="text">
                                    <h4><a href="contact.php">Dr. Abhishek Mamarde</a></h4>
                                    <ul class="social-links clearfix">
                                        <li><a href="contact.php">Consultant Psychiatrist</a></li>
                                        <li><a href="contact.php">UDAAN Anchor</a></li>
                                        <li><a href="contact.php">Clinical Leadership</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="contact.php"><img src="images/DR_SYED_SAQUIB.png" alt="Dr. Syed Saquib - DMHP Program Officer Consultant Psychiatrist"></a></figure>
                                <div class="designation">
                                    <h6>DMHP Program Officer</h6>
                                </div>
                                <div class="text">
                                    <h4><a href="contact.php">Dr. Syed Saquib</a></h4>
                                    <ul class="social-links clearfix">
                                        <li><a href="contact.php">Consultant Psychiatrist</a></li>
                                        <li><a href="contact.php">Government Partnership</a></li>
                                        <li><a href="contact.php">Dr. Nivruti Rathod's Team</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="contact.php"><img src="images/PRAVIN_M_KAKDE.png" alt="Pravin Kakde - UDAAN Program Officer Nagpur"></a></figure>
                                <div class="designation">
                                    <h6>UDAAN Program Officer</h6>
                                </div>
                                <div class="text">
                                    <h4><a href="contact.php">Pravin M. Kakde</a></h4>
                                    <ul class="social-links clearfix">
                                        <li><a href="contact.php">Program Management</a></li>
                                        <li><a href="contact.php">Community Engagement</a></li>
                                        <li><a href="contact.php">Field Operations</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section -->
        <section class="cta-section bg-color-2">
            <span class="title-one">U</span>
            <span class="title-two">UDAAN</span>
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text pull-left">
                        <h2><i class="flaticon-brain"></i>Need Mental Health <span>Support?</span><br />We're Here to Help</h2>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="contact.php" class="theme-btn btn-one">Contact Us</a>
                        <a href="programs-initiatives.php" class="theme-btn btn-three">Our Services</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- news-section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <i class="flaticon-brain-1"></i>
                    <h6>Latest Updates</h6>
                    <h2>News, Events & Success Stories</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box" style="width: 100%; height: 250px; overflow: hidden;">
                                    <a href="news-updates.php">
                                        <img src="images/A3-Intellectual-Disability2-HR.jpg" alt="Mental Health Awareness" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                    </a>
                                </figure>
                                <div class="lower-content">
                                    <ul class="info clearfix">
                                        <li>Mental Health</li>
                                        <li>/</li>
                                        <li><span>January 2026</span></li>
                                    </ul>
                                    <h5><a href="news-updates.php">UDAAN Completes 10 Years of Transforming Mental Health Care in Nagpur District</a></h5>
                                    <div class="btn-box">
                                        <a href="news-updates.php" class="theme-btn btn-two">Read More +</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box" style="width: 100%; height: 250px; overflow: hidden;">
                                    <a href="events.php">
                                        <img src="images/A3-Intellectual-Disability7-HR.jpg" alt="Community Awareness" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                    </a>
                                </figure>
                                <div class="lower-content">
                                    <ul class="info clearfix">
                                        <li>Events</li>
                                        <li>/</li>
                                        <li><span>December 2025</span></li>
                                    </ul>
                                    <h5><a href="events.php">Mental Health Awareness Campaign Reaches 50,000 Community Members Across Rural Nagpur</a></h5>
                                    <div class="btn-box">
                                        <a href="events.php" class="theme-btn btn-two">Read More +</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box" style="width: 100%; height: 250px; overflow: hidden;">
                                    <a href="stories.php">
                                        <img src="images/A3-Depression1-HR.jpg" alt="Success Stories" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                    </a>
                                </figure>
                                <div class="lower-content">
                                    <ul class="info clearfix">
                                        <li>Success Stories</li>
                                        <li>/</li>
                                        <li><span>November 2025</span></li>
                                    </ul>
                                    <h5><a href="stories.php">Sunil's Journey: From Isolation to Independence—A Schizophrenia Recovery Story</a></h5>
                                    <div class="btn-box">
                                        <a href="stories.php" class="theme-btn btn-two">Read More +</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn centred mt-40">
                    <a href="news-updates.php" class="theme-btn btn-one">View All News & Updates</a>
                </div>
            </div>
        </section>
        <!-- news-section end -->


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