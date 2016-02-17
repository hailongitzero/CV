<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="CVs - Chu Hai Lon" content="IE=edge">
    <title>CVs - Chu Hai Long</title>
    <meta name="description" content="CVs - Chu Hai Lon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon-->
    <link rel="shortcut icon" href="resources/assets/css/favicons/favicon1.png" >

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
            <li><a href="#" onclick="setActiveStyleSheet('color1', 'favicon1', 'logo1', 'person1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color2', 'favicon2', 'logo2', 'person2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color3', 'favicon3', 'logo3', 'person3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color4', 'favicon4', 'logo4', 'person4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color5', 'favicon5', 'logo5', 'person5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color6', 'favicon6', 'logo6', 'person6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color7', 'favicon7', 'logo7', 'person7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color8', 'favicon8', 'logo8', 'person8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
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
                                <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="resources/assets/css/logos/logo1.png" alt="">
                                </a>
                                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                <ul class="right static-menu">
                                    <li class="search-form-li">
                                        <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                        <div class="search-form-wrap hide">
                                            <form action="#" class="">
                                                <input type="search" class="search">
                                                <button type="submit"><i class="mdi-action-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                                            <i class="mdi-navigation-more-vert right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="inline-menu side-nav" id="mobile-demo">

                                    <!-- Mini Profile // only visible in Tab and Mobile -->
                                    <li class="mobile-profile">
                                        <div class="profile-inner">
                                            <div class="pp-container">
                                                <img src="resources/assets/css/persons/person1.png" alt="">
                                            </div>
                                            <h3>Chu Hai Long</h3>
                                            <h5>Software Developer</h5>
                                        </div>
                                    </li><!-- mini profile end-->


                                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                                    </li>
                                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                                    </li>
                                    <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll"><i class="fa fa-pencil fa-fw"></i>Blog</a>
                                    </li>
                                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                                    </li>
                                </ul>
                                <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                                    <li>Home</li>
                                    <li><a href="blog">Blog</a>
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
                                <h1 class="home-title">HI! I'm <span>Chu Hai Long</span></h1>
                                <h2 class="home-subtitle">Software Developer from Vung Tau - Viet Nam</h2>
                                <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
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
                        <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
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
                            <p>Hello, I'm a Software Developer from Vung Tau, Viet Nam. I hold a HDSE degree of Software Developer from the HaNoi Aptech Computer Education. <br />
                                I working at Phu My Industrial(Ba Ria - Vung Tau), my current position is develop and maintenance Quality Control system of Posco SS-Vina Co.,ltd.</p>
                            <a href="https://drive.google.com/file/d/0B5ESEyeyXayxa0MwcklaZ29uWmM/view" target="_blank" class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a>
                        </div>
                    </div>
                    <!-- about me description -->

                    <div class="col-sm-6 col-md-4">
                        <div class="person-img wow fadeIn">
                            <img class="z-depth-1" src="resources/assets/css/persons/person1.png" alt="">
                        </div>
                    </div>
                    <!-- about me image -->

                    <div class="col-sm-6 col-md-4">
                        <div class="person-info">
                            <h3 class="about-subtitle">Personal Information</h3>
                            <h5><span>Name :</span> Chu Hai Long</h5>
                            <h5><span>Age :</span> 27 Years</h5>
                            <h5><span>Phone :</span> 0984462007</h5>
                            <h5><span>Email :</span> chuhailong89@gmail.com</h5>
                            <h5><span>Address :</span> Vung Tau - Viet Nam</h5>
                        </div>

                        <div class="about-social">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/ChuHaiLong" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/ChuChuhailong89" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/+LongChuHai/" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
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
                                    <p class="regular-text">You can't build any kind of organization if you're not going to surround yourself with people who have experience and skill base beyond your own - Howard Schultz.</p>
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
                                                    <div class="singel-hr-inner" data-height="40%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Photoshop</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">40%</span>
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
                                                    <div class="singel-hr-inner" data-height="50%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">CSS</span>
                                                            <div class="hr-wrap">

                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">50%</span>
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
                                                            <span class="skill-title">Codeigniter</span>
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
                                                    <div class="singel-hr-inner" data-height="45%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Laravel</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">45%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /single skill-->

                                        <!-- single skill -->
                                        <div class="single-skill">
                                            <div class="after-li">
                                                <div class="singel-hr">
                                                    <div class="singel-hr-inner" data-height="50%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Java</span>
                                                            <div class="hr-wrap">

                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">50%</span>
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
                                                            <span class="skill-title">SQL</span>
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
                                                    <div class="singel-hr-inner" data-height="60%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Oracle</span>
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
                                                    <div class="singel-hr-inner" data-height="70%">
                                                        <div class="skill-visiable">
                                                            <span class="skill-title">Office</span>
                                                            <div class="hr-wrap">
                                                                <div class="hrc"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="skill-count">70%</span>
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
                                        <p class="regular-text">Experience is what you get when you didn't get what you wanted. And experience is often the most valuable thing you have to offer - Randy Pausch. </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="experienceSlider" class="clearfix card-element-wrapper">
                                                <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">April 2013 - March 2014</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/vungtaurental.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">IT Manager<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Vung Tau House Co.,ltd.</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">IT Manager<i class="mdi-navigation-close right"></i></span>
                                                                <p>Vung Tau House Co.,ltd.</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Optimizer website, blog, SEO website.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">December 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/posco.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Software Engineer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Posco ICT VietNam Co., ltd.</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Software Engineer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Posco ICT VietNam Co., ltd.</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Software developer and maintenance Quality System of steel company Posco SS-Vina co., ltd. at Phu My Industrial Zones.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">Freelance</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="resources/images/vungchua.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Full stack website developer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Vung Chua Travel Co., ltd.</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Full stack website developer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Vung Chua Travel Co., ltd.</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                <a href="http://www.vungchuatravel.com" class="post-title-link">vungchuatravel.com</a> A website about travel and booking tour, airplane ticket... Base on Codeigniter php framework, css3, html5, bootstrap...
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
                                        <p class="regular-text">Education is the most powerful weapon which you can use to change the world - Nelson Mandela.</p>
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
                                                            <h2 class="left-align card-title-top">2009 - 2012</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="resources/images/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Higher Diploma in Software Engineering<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>HaNoi Aptech Computer Education</p>
                                                        </div>
                                                        <!-- Reveal content-->
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Higher Diploma in Software Engineering<i class="mdi-navigation-close right"></i></span>
                                                                <p>HaNoi Aptech Computer Education</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Higher Diploma in Software Engineering with an acclaimed International certification aimed to equip students with IT skills that is necessary for any IT professional to enter to the world of IT industry. To train a fresh mind to meet the extremely challenging, rapidly changing IT industry.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education end -->
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
                            <h2 class="title">Another</h2>
                            <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                                <li class="active"><a href="#" data-target="*">All</a>
                                </li>
                                <li><a href="#" data-target=".category-1">Another Skill</a>
                                </li>
                                <li><a href="#" data-target=".category-2">Hobbies</a>
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
                <h2 class="title"></h2>
                <p class="m-content"></p>
            </div>

            <div class="modal-footer">
                {{--<a href="#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>--}}
                <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
            </div>
        </div>

        <div class="portfolio-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="clearfix protfolio-item" id="protfolio-msnry">

                            <!-- Office -->
                            <li class="single-port-item category-1">
                                <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="resources/images/portfolio/office1.png" data-title="Microsoft Office skill" data-content="Good skill at Microsoft Work, Excel, Power Point..." data-demo-link="#"> <!-- Portfolio pop-up content-->
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/office.png" alt="portfolio"> <!-- portfolio thumbnail-->
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">Office</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-1">
                                <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="resources/images/portfolio/git-1.jpg" data-title="SVN and Git" data-content="Management project source code using SVN server and Github." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/git.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">SVN, GIT</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-1">
                                <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="resources/images/portfolio/seo-1.jpg" data-title="Experience in SEO website" data-content="Experience in SEO website and design website with SEO standard." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/seo.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">SEO</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-2">
                                <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="resources/images/portfolio/pf6.jpg" data-title="Book" data-content="Books is treasure invaluable of humanity." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/pf6.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">Book</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-2">
                                <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="resources/images/portfolio/football-1.jpg" data-title="Football" data-content="" data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/football.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">Football</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-2">
                                <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="resources/images/portfolio/music-1.jpg" data-title="Music" data-content="Music is the universal language of mankind." data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/music.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">Music</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                            <!-- Single Portfolio-->
                            <li class="single-port-item category-2">
                                <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="resources/images/portfolio/movie-1.jpg" data-title="Movie" data-content="" data-demo-link="#">
                                    <div class="protfolio-image">
                                        <img src="resources/images/portfolio/movie.jpg" alt="portfolio">
                                        <div class="protfolio-content waves-effect waves-block waves-light">
                                            <div class="protfolio-content__inner">
                                                <h2 class="p-title">Movie</h2>
                                            </div>
                                        </div>
                                        <div class="p-overlay"></div>
                                    </div>
                                </a>
                            </li>
                            <!--/ single portfolio -->

                        </ul>
                        <!-- portfolio load more button-->
                        <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #portfolio Section end -->

    {{--<!-- Blog Section end -->--}}
    {{--<section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="blog-inner">--}}
                    {{--<div class="col-sm-12 card-box-wrap">--}}
                        {{--<div class="row">--}}
                            {{--<div class="clearfix section-head blog-text">--}}
                                {{--<div class="col-sm-10">--}}
                                    {{--<h2 class="title">Blog</h2>--}}
                                    {{--<p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix card-element-wrapper" id="blog-posts">--}}
                                {{--<article class="col-sm-6 col-md-4 single-card-box single-post">--}}
                                    {{--<div class="card wow fadeInUpSmall" data-wow-duration=".7s">--}}
                                        {{--<div class="card-image">--}}
                                            {{--<div class="card-img-wrap">--}}
                                                {{--<div class="blog-post-thumb waves-effect waves-block waves-light">--}}
                                                    {{--<a href="single.html"><img class="activator" src="resources/images/blog1.jpg" alt="">--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="post-body">--}}
                                                    {{--<a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Awesome Post Title</h2></a>--}}
                                                    {{--<p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="clearfix card-content">--}}
                                            {{--<a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">15</span></a>--}}
                                            {{--<a href="single.html" class="brand-text right waves-effect">Read More</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article> <!-- ./single blog post end -->--}}
                                {{--<article class="col-sm-6 col-md-4  single-card-box single-post">--}}
                                    {{--<div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">--}}
                                        {{--<div class="card-image">--}}
                                            {{--<div class="card-img-wrap">--}}
                                                {{--<div class="blog-post-thumb waves-effect waves-block waves-light">--}}
                                                    {{--<a href="single.html"><img class="activator" src="resources/images/blog2.jpg" alt="">--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="post-body">--}}
                                                    {{--<a href="single.html" class="post-title-link brand-text"><h2 class="post-title">An Image Post</h2></a>--}}
                                                    {{--<p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="clearfix card-content">--}}
                                            {{--<a href="#" class="left js-favorite active" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>--}}
                                            {{--<a href="single.html" class="brand-text right waves-effect">Read More</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article> <!-- ./single blog post end -->--}}
                                {{--<article class="col-sm-6 col-md-4 single-card-box single-post">--}}
                                    {{--<div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">--}}
                                        {{--<div class="card-image">--}}
                                            {{--<div class="card-img-wrap">--}}
                                                {{--<div class="blog-post-thumb waves-effect waves-block waves-light">--}}
                                                    {{--<a href="single.html"><img class="activator" src="resources/images/blog3.jpg" alt="">--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                                {{--<div class="post-body">--}}
                                                    {{--<a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Another Image Post</h2></a>--}}
                                                    {{--<p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="clearfix card-content">--}}
                                            {{--<a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">17</span></a>--}}
                                            {{--<a href="single.html" class="brand-text right waves-effect">Read More</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article> <!-- ./single blog post end -->--}}
                            {{--</div>--}}
                            {{--<div class="clearfix left-align">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<a href="blog.html" class="waves-effect waves-light btn-large load-more">See More</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div> <!-- ./container -->--}}
    {{--</section>--}}
    {{--<!-- #blog Section end -->--}}

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
                                    <p class="regular-text">227/6 Luu Chi Hieu,W 10, Vung Tau</p>
                                    <ul class="clearfix contact-info">
                                        <li><a href="materialx.html">0984462007</a>
                                        </li>
                                        <li><a href="materialx.html">chuhailong89@gmail.com</a>
                                        </li>
                                        <li><a href="materialx.html">www.chuhailong.cf</a>
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
                                        <form action="#" id="contactForm" novalidate>
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
                    <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
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
                            <li><a href="https://www.facebook.com/ChuHaiLong" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                            <li><a href="https://twitter.com/ChuChuhailong89" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                            <li><a href="https://plus.google.com/+LongChuHai/" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                        </ul> <!-- ./social icons end -->
                        <div class="right copyright">
                            <p>ChuHaiLong &copy; All Rights Reserved</p>
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