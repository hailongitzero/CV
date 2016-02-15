<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MaterialX - Material Design Personal Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon-->
    <link rel="shortcut icon" href="resources/images/favicon.png" >

    <!-- Stylesheets -->
    <link rel="stylesheet" href="resources/assets/css/normalize.css">
    <link rel="stylesheet" href="resources/assets/font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="resources/assets/css/bootstrap.css" media="screen,projection" />

    <link rel="stylesheet" href="resources/assets/css/animate.min.css" media="screen,projection" />
    <link rel="stylesheet" href="resources/assets/libs/sweetalert/sweet-alert.css" media="screen,projection" />

    <link rel="stylesheet" href="resources/assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
    <link rel="stylesheet" href="resources/assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
    <link rel="stylesheet" href="resources/assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />

    <link rel="stylesheet" href="resources/assets/css/main.css">
    <link rel="stylesheet" href="resources/assets/css/responsive.css">

    <!-- Choose your default colors -->
    <link rel="stylesheet" href="resources/assets/css/colors/color1.css">
    <!-- <link rel="stylesheet" href="resources/assets/css/colors/color2.css"> -->
    <!-- <link rel="stylesheet" href="resources/assets/css/colors/color3.css"> -->
    <!-- <link rel="stylesheet" href="resources/assets/css/colors/color4.css"> -->
    <!-- <link rel="stylesheet" href="resources/assets/css/colors/color5.css"> -->
    <!-- <link rel="stylesheet" href="resources/assets/css/colors/color6.css"> -->
    <!-- <link rel="stylesheet" href="resources/assets/css/colors/color7.css"> -->
    <!-- <link rel="stylesheet" href="resources/assets/css/colors/color8.css"> -->

    <!--[if lt IE 9]>
    <script src="resources/assets/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<!-- start option panel -->
<div id="switch">
    <div class="content-switcher">
        <p class="brand-text">Color Options:</p>
        <ul class="header">
            <li><a href="index.html#" onclick="setActiveStyleSheet('color1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
            <li><a href="index.html#" onclick="setActiveStyleSheet('color2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
            <li><a href="index.html#" onclick="setActiveStyleSheet('color3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
            <li><a href="index.html#" onclick="setActiveStyleSheet('color4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
            <li><a href="index.html#" onclick="setActiveStyleSheet('color5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
            <li><a href="index.html#" onclick="setActiveStyleSheet('color6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
            <li><a href="index.html#" onclick="setActiveStyleSheet('color7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
            <li><a href="index.html#" onclick="setActiveStyleSheet('color8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
        </ul>
        <p class="brand-text">Menu Options:</p>
        <div class="menu-select" title="The menu will display in all devices">
            <input type="radio" id="menu1" name="intelligent-menu">
            <label for="menu1">Fixed</label>
        </div>
        <div class="menu-select" title="The menu will display or hide in all devices depending on scroll">
            <input type="radio" id="menu2" name="intelligent-menu" checked="checked">
            <label for="menu2">Intelligent ( Auto Hide )</label>
        </div>
        <div class="menu-select" title="Fixed menu will apply in non-mobile devices and Intelligent menu will apply in mobile devices">
            <input type="radio" id="menu3" name="intelligent-menu">
            <label for="menu3">Mobile Intelligent</label>
        </div>
        <div id="hide">
            <i class="fa fa-times"></i>
        </div>
    </div>
</div>
<div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
    <i class="fa fa-cog"></i>
</div>
<!-- end option panel -->

<!-- Preloader -->
<div id="preloader">
    <div class="loader">
        <svg class="circle-loader" height="50" width="50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
        </svg>
    </div>
</div><!--preloader end-->

<!-- Main Container -->
<main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nav-inner">
                        <nav class="primary-nav">
                            <div class="clearfix nav-wrapper">
                                <a href="index.html#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="resources/images/logo.png" alt="">
                                </a>
                                <a href="index.html#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                <ul class="right static-menu">
                                    <li class="search-form-li">
                                        <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                        <div class="search-form-wrap hide">
                                            <form action="index.html#" class="">
                                                <input type="search" class="search">
                                                <button type="submit"><i class="mdi-action-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-button blog-submenu-init" href="index.html#!" data-activates="dropdown1">
                                            <i class="mdi-navigation-more-vert right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="inline-menu side-nav" id="mobile-demo">

                                    <!-- Mini Profile // only visible in Tab and Mobile -->
                                    <li class="mobile-profile">
                                        <div class="profile-inner">
                                            <div class="pp-container">
                                                <img src="resources/images/person.jpg" alt="">
                                            </div>
                                            <h3>John Doe</h3>
                                            <h5>Creative UI/UX Expert</h5>
                                        </div>
                                    </li><!-- mini profile end-->


                                    <li><a href="index.html#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                                    </li>
                                    <li><a href="index.html#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                                    </li>
                                    <li><a href="index.html#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                                    </li>
                                    <li><a href="index.html#team" data-section="#team" class="menu-smooth-scroll"><i class="fa fa-users fa-fw"></i>Team</a>
                                    </li>
                                    <li><a href="index.html#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonial</a>
                                    </li>
                                    <li><a href="index.html#blog" data-section="#blog" class="menu-smooth-scroll"><i class="fa fa-pencil fa-fw"></i>Blog</a>
                                    </li>
                                    <li><a href="index.html#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                                    </li>
                                </ul>
                                <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                                    <li>Home</li>
                                    <li><a href="blog.html">All Blog</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html">Blog with Sidebar</a>
                                    </li>
                                    <li><a href="single.html">Single Blog</a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
        <div class="sec-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-inner">
                            <div class="center-align home-content">
                                <h1 class="home-title">HI! I'm <span>John Doe</span></h1>
                                <h2 class="home-subtitle">UX/UI Designer from Dhaka, Bangladesh</h2>
                                <a href="index.html#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container end -->
            <div class="section-call-to-area">
                <div class="container">
                    <div class="row">
                        <a href="index.html#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                            <i class="mdi-navigation-expand-more"></i>
                        </a>
                    </div>
                </div>
                <!-- .container end -->
            </div>
        </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix about-inner">

                    <div class="col-sm-12 col-md-4">
                        <div class="person-about">
                            <h3 class="about-subtitle">My Story</h3>
                            <p>Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. <br />
                                And scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a>
                        </div>
                    </div>
                    <!-- about me description -->

                    <div class="col-sm-6 col-md-4">
                        <div class="person-img wow fadeIn">
                            <img class="z-depth-1" src="resources/images/person.jpg" alt="">
                        </div>
                    </div>
                    <!-- about me image -->

                    <div class="col-sm-6 col-md-4">
                        <div class="person-info">
                            <h3 class="about-subtitle">Personal Information</h3>
                            <h5><span>Name :</span> John Doe</h5>
                            <h5><span>Age :</span> 25 Years</h5>
                            <h5><span>Phone :</span> +0123456789</h5>
                            <h5><span>Email :</span> email@domain.com</h5>
                            <h5><span>Address :</span> Dhaka, Bangladesh</h5>
                        </div>

                        <div class="about-social">
                            <ul>
                                <li>
                                    <a href="index.html#" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="index.html#" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html#" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="index.html#" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="index.html#" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- about me info -->

                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
        <section id="skill" class="root-sec white skill-wrap">
            <div class="sec-overlay">
                <div class="container">
                    <div class="row">
                        <div class="clearfix skill-inner">
                            <div class="col-sm-12 col-md-3">
                                <div class="skill-left">
                                    <h2 class="title">Skills</h2>
                                    <p class="regular-text">Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.</p>
                                </div>
                            </div>

                            <!-- skills container -->
                            <div class="col-sm-12 col-md-6 col-md-offset-1">
                                <div class="skill-right">
                                    <div id="skillSlider" class="clearfix skill-graph">

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="100%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Photoshop</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">100%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="60%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">JavaScript</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">60%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="85%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Illustrator</span>
                                                            <div class="hr-wrap">

                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">85%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="65%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">HTML</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">65%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="60%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">JavaScript</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">60%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="35%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">CSS</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">35%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="85%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Illustrator</span>
                                                            <div class="hr-wrap">

                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">85%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="60%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Wordpress</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">60%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="85%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Illustrator</span>
                                                            <div class="hr-wrap">

                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">85%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="60%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">JavaScript</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">60%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                    </div>
                                </div>
                            </div>
                            <!-- /skills container -->
                        </div>
                    </div>
                    <div class="btn-wrapp skl-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </section>

        <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
            <div class="container">
                <div class="row">
                    <div class="experience-inner">
                        <div class="col-sm-12 col-md-10 card-box-wrap">
                            <div class="row">
                                <div class="clearfix section-head experience-text">
                                    <div class="col-sm-12">
                                        <h2 class="title">Experience</h2>
                                        <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="experienceSlider" class="clearfix card-element-wrapper">
                                                <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/ghost_rider.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Apple.inc</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Apple.inc</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/lion.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Android One</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Android One</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/bull.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Android One</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Android One</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 cold-xs-12 single-card-box">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/beakers.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Windows Phone</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Windows Phone</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 cold-xs-12 single-card-box">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/kid.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Windows Phone</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Windows Phone</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapp exp-ctrl">
                            <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                            <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
            <div class="container">
                <div class="row">
                    <div class="education-inner">
                        <div class="col-sm-12 col-md-10 card-box-wrap">
                            <div class="row">
                                <div class="clearfix section-head education-text">
                                    <div class="col-sm-12">
                                        <h2 class="title">education</h2>
                                        <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="educationSlider" class="clearfix card-element-wrapper">

                                                <!-- single education -->
                                                <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">20011 - 2012</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="resources/images/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Masters of Science<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford University</p>
                                                        </div>
                                                        <!-- Reveal content-->
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Masters of Science<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford University</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education end -->

                                                <!-- single education -->
                                                <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">2005 - 2007</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="resources/images/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Bachelor of Science<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford University</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Bachelor of Science<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford University</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education -->

                                                <!-- single education -->
                                                <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">2005 - 2007</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="resources/images/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">A Level<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford College</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">A Level<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford College</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education -->

                                                <!-- single education -->
                                                <div class="col-sm-4 single-card-box">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">1995 - 2005</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="resources/images/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">O Level<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford School</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">O Level<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford School</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapp edu-ctrl">
                            <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                            <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->
    <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
        <div class="padd-tb-120 brand-bg portfolio-top">
            <div class="portfolio-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title">PORTFOLIO</h2>
                            <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                                <li class="active"><a href="index.html#" data-target="*">All</a>
                                </li>
                                <li><a href="index.html#" data-target=".category-1">Art</a>
                                </li>
                                <li><a href="index.html#" data-target=".category-2">Accessories</a>
                                </li>
                                <li><a href="index.html#" data-target=".category-3">Design</a>
                                </li>
                                <li><a href="index.html#" data-target=".category-4">Fashion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </div>
        <div id="portfolioModal" class="modal white">
            <div class="model-img"></div>
            <div class="modal-content">
                <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
                <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
            </div>

            <div class="modal-footer">
                <a href="index.html#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
                <a href="index.html#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
            </div>
        </div>

        <div class="portfolio-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="clearfix protfolio-item" id="protfolio-msnry">

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-1 category-3">
                                <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#"> <!-- Portfolio pop-up content-->
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/pf1.jpg" alt="portfolio"> <!-- portfolio thumbnail-->
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">item name</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-2 category-1">
                                <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/pf2.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">item name</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-1 category-2">
                                <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/pf3.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">item name</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-3">
                                <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/pf4.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">item name</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-1 category-3 category-4">
                                <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/pf5.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">item name</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-2 category-4">
                                <a href="index.html#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/pf6.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">item name</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                        </ul>
                        <!-- portfolio load more button-->
                        <a id="portfolio-item-loader" href="index.html#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #portfolio Section end -->

    <!-- Team Section end -->
    <section id="team" class="scroll-section root-sec brand-bg padd-tb-120 team-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix team-inner">
                    <div class="col-sm-12 col-md-10 card-box-wrap">
                        <div class="row">
                            <div class="clearfix section-head team-text">
                                <div class="col-sm-12">
                                    <h2 class="title">our team</h2>
                                    <p class="regular-text">Our Team combines a unique combination of creativity, experience, knowledge but most of all a shared 'can do' attitude to help clients get the very best support, advice and project management to achieve business goals.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <div id="teamSlider" class="clearfix card-element-wrapper">
                                            <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/t1.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>UX UI Designer</p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-close right"></i></span>
                                                            <p>UX UI Designer</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single team member -->
                                            <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/t2.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>Front End Developer</p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                                            <p>Front End Developer</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single team member -->
                                            <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/t3.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>Front End Developer</p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                                            <p>Front End Developer</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single team member -->
                                            <div class="col-sm-4 single-card-box">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/t4.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>Front End Developer</p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                                            <p>Front End Developer</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single team member -->
                                            <div class="col-sm-4 single-card-box">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/t5.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>Team Manager</p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                                            <p>Team Manager</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single team member -->
                                            <div class="col-sm-4 single-card-box">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/t6.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                                                        <p>Team Manager</p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <div class="rev-title-wrap">
                                                            <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                                            <p>Team Manager</p>
                                                        </div>
                                                        <p class="rev-content">
                                                            Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> <!-- single team member -->
                                        </div> <!-- #teamSlider end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapp tmu-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                        <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                    </div>
                </div>
            </div>

        </div> <!-- .container -->
    </section>
    <!-- #team Section end -->

    <!-- Funfacts Section end -->
    <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
        <div class="sec-inner padd-tb-120">
            <div class="container">
                <div class="row">
                    <div class="funfact-inner">
                        <div class="col-sm-4 funfact-box">
                            <div class="center-align card-panel white">
                                <div class="feature-box-outer">
                                    <div class="funfact-box-inner">
                                        <div class="clearfix ">
                                            <i class="mdi-editor-insert-emoticon"></i>
                                            <span class="num countNumb">150</span>
                                        </div>
                                        <div class="context">Happy clients</div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./single fun fact box -->
                        <div class="col-sm-4 funfact-box">
                            <div class="center-align card-panel white">
                                <div class="feature-box-outer">
                                    <div class="funfact-box-inner">
                                        <div class="clearfix ">
                                            <i class="mdi-action-wallet-travel"></i>
                                            <span class="num countNumb">230</span>
                                        </div>
                                        <div class="context">Project Completed</div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./single fun fact box -->
                        <div class="col-sm-4 funfact-box">
                            <div class="center-align card-panel white">
                                <div class="feature-box-outer">
                                    <div class="funfact-box-inner">
                                        <div class="clearfix ">
                                            <i class="mdi-action-wallet-giftcard"></i>
                                            <span class="num countNumb">79</span>
                                        </div>
                                        <div class="context">Award Won</div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./single fun fact box -->
                    </div>
                </div>

            </div>  <!-- .container end -->
        </div>
    </section>
    <!-- #funfacts Section end -->

    <!-- Testimonial Section end -->
    <section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
        <div class="container">
            <div class="row">
                <div class="testimonial-inner">
                    <div class="col-sm-12 col-md-10 card-box-wrap">
                        <div class="row">
                            <div class="clearfix section-head testimonial-text">
                                <div class="col-sm-12">
                                    <h2 class="title">testimonial</h2>
                                    <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <div id="testimonialSlider" class="clearfix card-element-wrapper">
                                            <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/client5.png" alt="">
                                                            <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Jonh Smith -</span>
                                                        <a href="index.html#">CEO, Apple Inc</a>
                                                    </div>
                                                </div>
                                            </div> <!-- ./single testimonial box -->
                                            <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/client1.png" alt="">
                                                            <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Jonh Smith -</span>
                                                        <a href="index.html#">CEO, Apple Inc</a>
                                                    </div>
                                                </div>
                                            </div> <!-- ./single testimonial box -->
                                            <div class="col-sm-6 single-card-box">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/client2.png" alt="">
                                                            <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Jonh Smith -</span>
                                                        <a href="index.html#">CEO, Apple Inc</a>
                                                    </div>
                                                </div>
                                            </div> <!-- ./single testimonial box -->
                                            <div class="col-sm-6 single-card-box">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/client3.png" alt="">
                                                            <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Jonh Smith -</span>
                                                        <a href="index.html#">CEO, Apple Inc</a>
                                                    </div>
                                                </div>
                                            </div> <!-- ./single testimonial box -->
                                            <div class="col-sm-6 single-card-box">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <div class="card-img-wrap">
                                                            <img class="activator" src="resources/images/client4.png" alt="">
                                                            <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <span class="card-title activator brand-text">Jonh Smith -</span>
                                                        <a href="index.html#">CEO, Apple Inc</a>
                                                    </div>
                                                </div>
                                            </div> <!-- ./single testimonial box -->
                                        </div> <!-- #testimonialSlider end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapp tmo-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                        <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                    </div>
                </div>
            </div>
        </div> <!-- ./container end -->
    </section>
    <!-- #testimonial Section end -->

    <!-- Blog Section end -->
    <section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
        <div class="container">
            <div class="row">
                <div class="blog-inner">
                    <div class="col-sm-12 card-box-wrap">
                        <div class="row">
                            <div class="clearfix section-head blog-text">
                                <div class="col-sm-10">
                                    <h2 class="title">Blog</h2>
                                    <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
                                </div>
                            </div>
                            <div class="clearfix card-element-wrapper" id="blog-posts">
                                <article class="col-sm-6 col-md-4 single-card-box single-post">
                                    <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                                        <div class="card-image">
                                            <div class="card-img-wrap">
                                                <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                    <a href="single.html"><img class="activator" src="resources/images/blog1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-body">
                                                    <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Awesome Post Title</h2></a>
                                                    <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix card-content">
                                            <a href="index.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">15</span></a>
                                            <a href="single.html" class="brand-text right waves-effect">Read More</a>
                                        </div>
                                    </div>
                                </article> <!-- ./single blog post end -->
                                <article class="col-sm-6 col-md-4  single-card-box single-post">
                                    <div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                        <div class="card-image">
                                            <div class="card-img-wrap">
                                                <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                    <a href="single.html"><img class="activator" src="resources/images/blog2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-body">
                                                    <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">An Image Post</h2></a>
                                                    <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix card-content">
                                            <a href="index.html#" class="left js-favorite active" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                            <a href="single.html" class="brand-text right waves-effect">Read More</a>
                                        </div>
                                    </div>
                                </article> <!-- ./single blog post end -->
                                <article class="col-sm-6 col-md-4 single-card-box single-post">
                                    <div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                        <div class="card-image">
                                            <div class="card-img-wrap">
                                                <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                    <a href="single.html"><img class="activator" src="resources/images/blog3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-body">
                                                    <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Another Image Post</h2></a>
                                                    <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix card-content">
                                            <a href="index.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">17</span></a>
                                            <a href="single.html" class="brand-text right waves-effect">Read More</a>
                                        </div>
                                    </div>
                                </article> <!-- ./single blog post end -->
                            </div>
                            <div class="clearfix left-align">
                                <div class="col-sm-12">
                                    <a href="blog.html" class="waves-effect waves-light btn-large load-more">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./container -->
    </section>
    <!-- #blog Section end -->

    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
        <div class="container">
            <div class="row">
                <div class="contact-inner">
                    <div class="col-sm-12 card-box-wrap">
                        <div class="row">
                            <div class="clearfix section-head contact-text">
                                <div class="col-sm-12">
                                    <h2 class="title">Contact</h2>
                                    <p class="regular-text">Collins Street West Victoria 8007 Australia</p>
                                    <ul class="clearfix contact-info">
                                        <li><a href="index.html">+880 1234 567890</a>
                                        </li>
                                        <li><a href="index.html">support@website.net</a>
                                        </li>
                                        <li><a href="index.html">www.website.net</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- contact text end -->

                            <div class="clearfix contact-form">

                                <!-- Map Start -->
                                <div class="col-sm-7">
                                    <div class="map-wrapper">
                                        <div id="map"></div>
                                    </div>
                                </div> <!-- Map end -->

                                <!-- Contact Form start -->
                                <div class="col-sm-5">
                                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                                        <form action="index.html#" id="contactForm" novalidate>
                                            <div class="input-field">
                                                <input id="contact_name" type="text" name="contactName" class="validate input-box">
                                                <label for="contact_name" class="input-label">Name</label>
                                            </div>
                                            <div class="input-field">
                                                <input id="email" type="email" name="contactEmail" class="validate input-box">
                                                <label for="email" class="input-label">Email</label>
                                            </div>
                                            <div class="input-field">
                                                <input id="subject" type="text" name="contactSubject" class="validate input-box">
                                                <label for="subject" class="input-label">Subject</label>
                                            </div>
                                            <div class="input-field textarea-input">
                                                <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                                                <label for="textarea1" class="input-label">Message</label>
                                            </div>
                                            <div class="input-field submit-wrap clearfix">
                                                <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                                                <div class="right form-loader-area">
                                                    <svg class="circular size-20" height="20" width="20">
                                                        <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- ./contact form end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./container end -->
        <div class="section-call-to-area">
            <div class="container">
                <div class="row">
                    <a href="index.html#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
                        <i class="mdi-navigation-expand-less"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix footer-inner">
                        <ul class="left social-icons">
                            <li><a href="index.html#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="index.html#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="index.html#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="index.html#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="index.html#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li><a href="index.html#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul> <!-- ./social icons end -->
                        <div class="right copyright">
                            <p>MaterialX &copy; All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

</main>
<!-- Main Container end-->


<!-- JavaScripts -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="resources/assets/js/jquery.easing.1.3.js"></script>
<script src="resources/assets/js/detectmobilebrowser.js"></script>
<script src="resources/assets/js/isotope.pkgd.min.js"></script>
<script src="resources/assets/js/wow.min.js"></script>
<script src="resources/assets/js/waypoints.js"></script>
<script src="resources/assets/js/jquery.counterup.min.js"></script>
<script src="resources/assets/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="resources/assets/js/gmaps.js"></script>
<script src="resources/assets/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="resources/assets/libs/materialize/js/materialize.min.js"></script>
<script src="resources/assets/libs/jwplayer/jwplayer.js"></script>
<script src="resources/assets/libs/sweetalert/sweet-alert.min.js"></script>
<script src="resources/assets/js/common.js"></script>
<script src="resources/assets/js/main.js"></script>
</body>

</html>