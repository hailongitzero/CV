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
    <link rel="shortcut icon" href="../resources/assets/css/favicons/favicon1.png" >

    <!-- Stylesheets-->
    <link rel="stylesheet" href="../resources/assets/css/normalize.css">
    <link rel="stylesheet" href="../resources/assets/font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../resources/assets/css/bootstrap.css" media="screen,projection" />
    <link rel="stylesheet" href="../resources/assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
    <link rel="stylesheet" href="../resources/assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
    <link rel="stylesheet" href="../resources/assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />
    <link rel="stylesheet" href="../resources/assets/css/main.css">
    <link rel="stylesheet" href="../resources/assets/css/responsive.css">
    <link rel="stylesheet" href="../resources/assets/css/blog.css">

    <!-- Choose your default colors -->
    <link rel="stylesheet" href="../resources/assets/css/colors/color1.css">
    <!-- <link rel="stylesheet" href="assets/css/colors/color2.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/colors/color3.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/colors/color4.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/colors/color5.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/colors/color6.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/colors/color7.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/colors/color8.css"> -->

    <!--[if lt IE 9]>
    <script src="../resources/assets/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<!-- start option panel -->
<div id="switch">
    <div class="content-switcher">
        <p class="brand-text">Color Options:</p>
        <ul class="header">
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color1', 'favicon1', 'logo1', 'person1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color2', 'favicon2', 'logo2', 'person2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color3', 'favicon3', 'logo3', 'person3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color4', 'favicon4', 'logo4', 'person4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color5', 'favicon5', 'logo5', 'person5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color6', 'favicon6', 'logo6', 'person6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color7', 'favicon7', 'logo7', 'person7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
            <li><a href="materialx.html#" onclick="setActiveStyleSheet('color8', 'favicon8', 'logo8', 'person8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
        </ul>
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

<div id="app">
    <!-- header navigation -->
    <header id="navigation" class="root-sec white nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nav-inner">
                        <nav class="primary-nav">
                            <div class="clearfix nav-wrapper">
                                <a href="blog.html#!" class="left brand-logo"><img src="../resources/assets/css/logos/logo1.png" alt="">
                                </a>
                                <a href="blog.html#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                <ul class="right static-menu">
                                    <li class="search-form-li">
                                        <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                        <div class="search-form-wrap hide">
                                            <form action="blog.html#" class="">
                                                <input type="search" class="search">
                                                <button type="submit"><i class="mdi-action-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-button blog-submenu-init" href="blog.html#!" data-activates="dropdown1">
                                            <i class="mdi-navigation-more-vert right"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="inline-menu side-nav" id="mobile-demo">

                                    <!-- Mini Profile // only visible in Tab and Mobile -->
                                    <li class="mobile-profile">
                                        <div class="profile-inner">
                                            <div class="pp-container">
                                                <img src="../resources/assets/css/persons/person1.png" alt="">
                                            </div>
                                            <h3>John Doe</h3>
                                            <h5>Creative UI/UX Expert</h5>
                                        </div>
                                    </li><!-- mini profile end-->

                                    <li><a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html"><i class="fa fa-pencil fa-fw"></i>Blog with Sidebar</a>
                                    </li>
                                    <li><a href="blog.html"><i class="fa fa-pencil fa-fw"></i>Blog Full width</a>
                                    </li>
                                    <li><a href="single.html"><i class="fa fa-pencil fa-fw"></i>Single Blog</a>
                                    </li>
                                </ul>
                                <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                                    <li><a href="blog.html#">Demo link 1</a>
                                    </li>
                                    <li><a href="blog.html#">Demo link 2</a>
                                    </li>
                                    <li><a href="blog.html#">Demo link 3</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- header navigation end -->

    <!-- Banner start -->
    <section id="banner" class="root-sec brand-bg padd-tb-73 blogpage-banner-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix blog-banner-text">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h2 class="title">BLOG</h2>
                        <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--./Banner end-->

    <!-- Blog Post Container-->
    <section class="bottom-50 root-sec grey lighten-5 blogpage-posts-wrap">
        <div class="container">
            <div class="row">
                <div id="blog-posts" class="clearfix all-blog-post blog-inner without-sidebar">
                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                                        <a href="single.html"><img class="activator" src="images/blog1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article> <!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                                        <div class="player" id="audio1" data-file-sec="audios/audio.mp3" data-height="40"></div>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Audio Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb videoPost">
                                        <iframe src="http://player.vimeo.com/video/7449107" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Vimeo Video Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                                        <a href="single.html"><img class="activator" src="images/blog2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                                        <div class="thumb-slides-container">
                                            <img class="activator" src="images/blog3.jpg" alt="">
                                            <img class="activator" src="images/blog2.jpg" alt="">
                                            <img class="activator" src="images/blog1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Slider Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                                        <a href="single.html"><img class="activator" src="images/blog3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb waves-effect waves-block waves-light">
                                        <div class="thumb-slides-container">
                                            <img class="activator" src="images/blog2.jpg" alt="">
                                            <img class="activator" src="images/blog1.jpg" alt="">
                                            <img class="activator" src="images/blog3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Slider Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb videoPost">
                                        <div class="player" id="video1" data-file-sec="videos/video.mp4" data-image-src="images/video-placeholder.png" data-aspectratio="16:9"></div>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Video Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                    <article class="col-sm-4 single-card-box single-post">
                        <div class="card">
                            <div class="card-image">
                                <div class="card-img-wrap">
                                    <div class="blog-post-thumb videoPost">
                                        <iframe src="https://www.youtube.com/embed/hQfNtnKm5nA" allowfullscreen></iframe>
                                    </div>
                                    <div class="post-body">
                                        <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The YouTube Video Post</h2></a>
                                        <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix card-content">
                                <a href="blog.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                <a href="single.html" class="brand-text right waves-effect">read more</a>
                            </div>
                        </div>
                    </article><!--./single blog post-->

                </div>
            </div>
        </div><!--./container end-->
    </section> <!-- ./Blog Post Container end-->

    <!-- Footer Start-->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix footer-inner">
                        <ul class="left social-icons">
                            <li><a href="blog.html#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="blog.html#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="blog.html#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="blog.html#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="blog.html#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li><a href="blog.html#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul>
                        <div class="right copyright">
                            <p>MaterialX &copy; All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Footer end-->
</div> <!--#app end-->


<!-- JavaScripts -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../resources/assets/js/isotope.pkgd.min.js"></script>
<script src="../resources/assets/js/jquery.nicescroll.min.js"></script>
<script src="../resources/assets/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="../resources/assets/libs/materialize/js/materialize.min.js"></script>
<script src="../resources/assets/libs/jwplayer/jwplayer.js"></script>
<script src="../resources/assets/js/common.js"></script>
</body>

</html>