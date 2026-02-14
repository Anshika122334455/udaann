<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Polpress - HTML 5 Template Preview</title>

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
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="U" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <?php include_once 'header.php'; ?>


        <!--Page Title-->
        <section class="page-title book-table" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <div class="shape">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="shape-3"></div>
                    </div>
                    <a href="index.html">Back To Home Page.</a>
                    <h1>Book Table</h1>
                </div>
            </div>
            <span class="schedule">Mon - Sat 8:00 - 6:30</span>
            <div class="place-box">
                <div class="text">
                    <i class="flaticon-location-1"></i>
                    <p>Visit Our Place</p>
                    <h6>NY 11209, United States</h6>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- appointment-section -->
        <section class="appointment-section centred">
            <div class="auto-container">
                <div class="inner-container">
                    <h3>Request an Appointment</h3>
                    <div class="form-inner">
                        <form action="book-table.html" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Fast Name</label>
                                        <input type="text" name="fname" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Gende</label>
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Gende">Gende</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" name="phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Appointment Type</label>
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Appointment Type">Appointment Type</option>
                                                <option value="1">Career Counseling</option>
                                                <option value="2">Relationship Issues</option>
                                                <option value="3">Women's Issues</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Have you previously attended our facility*</label>
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Yes">Yes</option>
                                                <option value="1">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group">
                                        <label>Write Text</label>
                                        <textarea name="message" placeholder="If Yes, state on which condition and when?"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Book A Table</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- appointment-section end -->


        <!-- service-style-three -->
        <section class="service-style-three pb-120">
            <div class="auto-container">
                <div class="sec-title centred">
                    <i class="flaticon-brain-1"></i>
                    <h2>A beautiful <br />collection of clean, modern <br />and flexible Services.</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <figure class="icon"><img src="assets/images/icons/icon-1.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details.html">Career Counseling</a></h3>
                                    <p>Fusce feugiat maximus arcu, sed malesuada feugiat sed.</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <figure class="icon"><img src="assets/images/icons/icon-4.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details.html">Relationship Issues</a></h3>
                                    <p>Fusce feugiat maximus arcu, sed malesuada feugiat sed.</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <figure class="icon"><img src="assets/images/icons/icon-3.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-details.html">Women's Issues</a></h3>
                                    <p>Fusce feugiat maximus arcu, sed malesuada feugiat sed.</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-three end -->


        <!-- clients-section -->
        <section class="clients-section centred">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index.html"><img src="assets/images/clients/clients-logo-6.png" alt=""></a>
                    </figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- main-footer -->
        <footer class="main-footer pt-40">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                                <div class="text">
                                    <p>It is a long established fact that a distracted by the readable.</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Link Us</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Our project</a></li>
                                        <li><a href="index.html">Return Result</a></li>
                                        <li><a href="index.html">About us</a></li>
                                        <li><a href="index.html">Eftective</a></li>
                                        <li><a href="index.html">New Camping</a></li>
                                        <li><a href="index.html">Online Enquiry</a></li>
                                        <li><a href="index.html">Voluntecry</a></li>
                                        <li><a href="index.html">Help & Orderin</a></li>
                                        <li><a href="index.html">Rceipes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <ul class="info-list clearfix">
                                    <li>
                                        <h6>Address :</h6>121 King Street, Melbourne Victoria 3000, Australia.
                                    </li>
                                    <li>
                                        <h6>Telephone :</h6><a href="tel:+99000111222500">(+99 000 111 222 55 00)</a>
                                    </li>
                                    <li>
                                        <h6>E-mail :</h6><a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p>Copyright by <a href="index.html">polpress</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
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