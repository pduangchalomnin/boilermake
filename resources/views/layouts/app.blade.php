<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Restaurant | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/blocks.css">
    <link rel="stylesheet" href="assets/css/one.style.css">

    <!-- CSS Footer -->
    <!-- <link rel="stylesheet" href="assets/css/footers/footer-v7.css"> -->

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel2/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    <link rel="stylesheet" href="assets/plugins/hover-effects/css/custom-hover-effects.css">
    <link rel="stylesheet" href="assets/plugins/shhos/shhos.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/pace/pace-flash.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick.css">

    <link rel="stylesheet" href="assets/plugins/master-slider/masterslider/style/masterslider.css">
    <link rel="stylesheet" href="assets/plugins/master-slider/u-styles/testimonials-1.css">
    <link rel="stylesheet" href="assets/plugins/master-slider/u-styles/promo-1.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/restaurant.style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/global.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery font-main promo-padding-top">
<main class="wrapper">
    <!-- Header -->
    <nav class="header one-page-header navbar navbar-default navbar-fixed-top restaurant-header one-page-nav-scrolling " data-role="navigation">
        <div class="container"> <!-- Maybe should be changed to container-fluid-->
            <div class="menu-container page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand main-font" href="#body">
                    <img src="assets/images/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <li class="page-scroll home active">
                            <a href="#body">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">About</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#menu">Menu</a>
                        </li>
                        <li class="page-scroll hidden-md">
                            <a href="#special">Special</a>
                        </li>
                        <li class="page-scroll hidden-md">
                            <a href="#contact">Contact</a>
                        </li>
                        <li class="page-scroll hidden-md">
                            <a href="#">User<img class="dish__user_img rounded-x" src="assets/images/promo/user_image.jpeg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Section for Search start-->
            <div class="row search-bar">
                <!--Basic Example-->
                <div class="col-md-6 pdR-0">
                    <div class="">
                        <input type="text" class="form-control" placeholder="Search for Food's">
                    </div>


                </div>
                <!--End Basic Example-->

                <!--Checkboxes and Radio Addons-->
                <div class="col-md-6">


                    <div class="input-group">

                        <form action="#" id="" class="sky-form">
                            <label class="select state-success mr-0">
                                <select id="selectUniversity" name="gender" class="valid">
                                    <option value="0" selected="" disabled="">University</option>
                                    <option value="1">Illinois Technology</option>
                                    <option value="2">UIC</option>
                                    <option value="3">Purdue University</option>
                                    <option value="3">Other</option>
                                </select>
                                <i></i>
                            </label>

                        </form>
                        <span class="input-group-btn">
											<button class="btn btn-danger" type="button" title="Search Food"><span class="glyphicon glyphicon-search"></span></button>
										</span>
                    </div>
                </div>
                <!--End Checkboxes and Radio Addons-->
            </div>
            <!-- Section for Search end-->
        </div>
        <!-- /.container -->

    </nav>
    <!-- End Header -->


@yield('content')


    <!-- Booking Form -->
        <!--
                <section id="booking">
                    <div class="container-fluid no-padding bg-color-main">
                        <div class="booking content-lg">
                            <div class="container">
                                <div class="heading-v20 heading-v20--diff text-center g-mb-50">
                                    <span class="heading-v20__pre-title g-dp-block g-mb-20">Booking form</span>
                                    <h2 class="heading-v20__title g-mb-30">Reservation with open table</h2>
                                    <i class="heading-v20__icon fa fa-circle g-mb-30" aria-hidden="true"></i>
                                    <p class="heading-v20__text">Etiam ultrices lacus ut ligula vestibulum, sit amet mattis nunc elementum. Nam arcu enim, euismod nec purus non, aliquam congue ante. Nulla faucibus enim mauris, fringilla mollis ligula sollicitudin mollis.</p>
                                </div>

                                <form id="sky-form3" class="sky-form contact-style sky-form__booking">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-0 g-sm-mb-30">
                                                <div>
                                                    <input type="text" name="date" id="date" class="form-control booking__form-control" placeholder="Reservation date">
                                                    <i class="fa booking__fa fa-calendar"></i>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-md-offset-0 g-sm-mb-30">
                                                <div>
                                                    <input type="text" name="time" id="time" class="form-control booking__form-control" placeholder="Reservation time">
                                                    <i class="fa booking__fa fa-clock-o"></i>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-md-offset-0 g-sm-mb-30">
                                                <div>
                                                    <input type="text" name="number" id="number" class="form-control booking__form-control" placeholder="Persons">
                                                    <i class="fa booking__fa fa-users"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-mb-40"></div>

                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn-u global__btn-u">Book Now</button>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="message">
                                        <i class="rounded-x fa fa-check"></i>
                                        <p>Your message was successfully sent!</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
        -->
        <!-- End Booking Form -->

        <!-- Contact -->
        <footer>
            <section id="contact">
                <div class="contact">
                    <div class="container-fluid">
                    <!--
						<div class="row">
							<div class="col-sm-12 no-padding">
								<div class="map-wrapper">
									<div class="contact__floating-block">
										<div class="row no-column-space equal-height-columns">
											<div class="col-sm-6 no-padding equal-height-column">
												<img class="img-responsive hidden-xs" src="assets/images/contact/contact.jpg" alt="">
											</div>
											<div class="col-sm-6 col-xs-12 contact__right--list text-center no-side-padding equal-height-column">
												<div class="valign__middle">
													<ul class="list-unstyled g-mb-20">
														<li class="first-item">Address</li>
														<li class="second-item">In sed lectus tincidunt</li>
													</ul>

													<ul class="list-unstyled g-mb-20">
														<li class="first-item">Phone number</li>
														<li class="second-item">+4586 585 4580</li>
													</ul>

													<ul class="list-unstyled g-mb-20">
														<li class="first-item">Email</li>
														<li class="second-item">info@unify.com</li>
													</ul>

													<ul class="list-unstyled">
														<li class="first-item">Toll Free</li>
														<li class="second-item">+4516 581 2340</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div id="map" class="contact__map"></div>
								</div>
							</div>
						</div>
-->

                        <div class="subfooter text-center">
                            <div class="row no-column-space equal-height-columns valign__middle">
                                <div class="col-sm-12 text-center page-scroll">
                                    <a class="subfooter__logo" href="#body">
                                        <img class="subfooter__logo__img g-mb-20" src="assets/images/logo.png" alt="Logo"><br>
                                    </a>
                                    <p class="subfooter__copyright">© 2016 All right reserved.<span class="subfooter__copyright--pink"><a href="#">Unify</a></span>. Development by <span class="subfooter__copyright--pink"><a href="#"> Htmlstream</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <!-- End Contact -->
        </main>

        <!-- JS Global Compulsory -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="assets/plugins/smoothScroll.js"></script>
        <script src="assets/plugins/jquery.easing.min.js"></script>
        <script src="assets/plugins/pace/pace.min.js"></script>
        <script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
        <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
        <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
        <script src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="assets/plugins/modernizr.js"></script>
        <script src="assets/plugins/slick/slick.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script>

        <script src="assets/plugins/master-slider/masterslider/masterslider.min.js"></script>

        <!-- JS Page Level-->
        <script src="assets/js/one.app.js"></script>
        <script src="assets/js/plugins/owl2-carousel-v1.js"></script>
        <script src="assets/js/plugins/owl2-carousel-v3.js"></script>
        <script src="assets/js/plugins/owl2-carousel-v4.js"></script>
        <script src="assets/js/plugins/cube-portfolio.js"></script>
        <script src="assets/js/plugins/datepicker.js"></script>
        <script src="assets/js/plugins/gmaps-ini.js"></script>
        <script src="assets/js/plugins/promo.js"></script>
        <script src="assets/js/plugins/special-dishes.js"></script>
        <script>
            $(function() {
                App.init();
                Owl2Carouselv1.initOwl2Carouselv1();
                Owl2Carouselv3.initOwl2Carouselv3();
                Owl2Carouselv4.initOwl2Carouselv4();
                Datepicker.initDatepicker();
            });
        </script>
        <!--[if lt IE 10]>
        <script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
        <![endif]-->
</body>
</html>