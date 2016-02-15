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
    <link rel="stylesheet" href="resources/assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
    <link rel="stylesheet" href="resources/assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
    <link rel="stylesheet" href="resources/assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />
    <link rel="stylesheet" href="resources/assets/css/main.css">
    <link rel="stylesheet" href="resources/assets/css/responsive.css">
    <link rel="stylesheet" href="resources/assets/css/blog.css">

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
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
            <li><a href="blog-with-sidebar.html#" onclick="setActiveStyleSheet('color8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
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

    <header id="navigation" class="root-sec white nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nav-inner">
                        <nav class="primary-nav">
                            <div class="clearfix nav-wrapper">
                                <a href="blog-with-sidebar.html#!" class="left brand-logo"><img src="resources/images/logo.png" alt="">
                                </a>
                                <a href="blog-with-sidebar.html#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                <ul class="right static-menu">
                                    <li class="search-form-li">
                                        <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                        <div class="search-form-wrap hide">
                                            <form action="blog-with-sidebar.html#" class="">
                                                <input type="search" class="search">
                                                <button type="submit"><i class="mdi-action-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-button blog-submenu-init" href="blog-with-sidebar.html#!" data-activates="dropdown1">
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
                                    <li><a href="blog-with-sidebar.html#">Demo link 1</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">Demo link 2</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">Demo link 3</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- header navigation end -->

    <!-- Blog Banner -->
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
    </section> <!-- Banner end -->

    <!-- Blog Post Container -->
    <section class="bottom-50 root-sec grey lighten-5 blogpage-posts-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix all-blog-post blog-inner with-sidebar">
                    <div class="col-sm-8">
                        <div class="row" id="blog-posts">
                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="single.html"><img class="activator" src="resources/images/blog1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
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
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="single.html"><img class="activator" src="resources/images/blog2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <div class="thumb-slides-container">
                                                    <img class="activator" src="resources/images/blog2.jpg" alt="">
                                                    <img class="activator" src="resources/images/blog1.jpg" alt="">
                                                    <img class="activator" src="resources/images/blog3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Slider Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <a href="single.html"><img class="activator" src="resources/images/blog3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <div class="thumb-slides-container">
                                                    <img class="activator" src="resources/images/blog3.jpg" alt="">
                                                    <img class="activator" src="resources/images/blog2.jpg" alt="">
                                                    <img class="activator" src="resources/images/blog1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Image Slider Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb videoPost">
                                                <div class="player" id="video1" data-file-sec="videos/video.mp4" data-image-src="resources/images/video-placeholder.png" data-aspectratio="16:9"></div>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Video Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div></div>
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
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb videoPost">
                                                <iframe src="http://player.vimeo.com/video/7449107" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Viemo Video Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                            <article class="col-xs-12 col-sm-12 col-md-6 single-card-box single-post">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="card-img-wrap">
                                            <div class="blog-post-thumb waves-effect waves-block waves-light">
                                                <div class="player" id="audio2" data-file-sec="audios/audio.mp3" data-height="40"></div>
                                            </div>
                                            <div class="post-body">
                                                <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">The Audio Post</h2></a>
                                                <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix card-content">
                                        <a href="blog-with-sidebar.html#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                                        <a href="single.html" class="brand-text right waves-effect">read more</a>
                                    </div>
                                </div>
                            </article> <!--./single post-->

                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-sm-4">
                        <div class="primary-sidebar">
                            <aside class="single-widget">
                                <h2 class="widget-title">RECENT POSTS</h2>
                                <ul>
                                    <li>
                                        <a href="blog-with-sidebar.html">The Image Post One</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="blog-with-sidebar.html">The Image Post Two</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="blog-with-sidebar.html">The Image Post Three</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="blog-with-sidebar.html">The Image Post Four</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="blog-with-sidebar.html">The Image Post Five</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single-widget">
                                <h2 class="widget-title">CATEGORIES</h2>
                                <ul>
                                    <li><a href="blog-with-sidebar.html#">UX Design</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">UI Design</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">HTML</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">Audio</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">Video</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single-widget">
                                <h2 class="widget-title">ARCHIVES</h2>
                                <ul>
                                    <li><a href="blog-with-sidebar.html#">March 24, 2015</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">April 24, 2015</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">May 24, 2015</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">June 24, 2015</a>
                                    </li>
                                    <li><a href="blog-with-sidebar.html#">July 24, 2015</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single-widget">
                                <h2 class="widget-title">TAGS</h2>
                                <div class="widget-text">
                                    <a href="blog-with-sidebar.html#" class="tags">Art</a>
                                    <a href="blog-with-sidebar.html#" class="tags">Awesome</a>
                                    <a href="blog-with-sidebar.html#" class="tags">Style</a>
                                    <a href="blog-with-sidebar.html#" class="tags">Image</a>
                                    <a href="blog-with-sidebar.html#" class="tags">Design</a>
                                    <a href="blog-with-sidebar.html#" class="tags">Post</a>
                                    <a href="blog-with-sidebar.html#" class="tags">Three</a>
                                    <a href="blog-with-sidebar.html#" class="tags">Typhography</a>
                                    <a href="blog-with-sidebar.html#" class="tags">BDinfosys</a>
                                </div>
                            </aside>
                        </div>
                    </div> <!-- ./sidebar end -->
                </div>
            </div>
        </div> <!-- ./container end -->
    </section> <!-- ./Blog Post container end-->

    <!-- Footer start -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix footer-inner">
                        <ul class="left social-icons">
                            <li><a href="blog-with-sidebar.html#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="blog-with-sidebar.html#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="blog-with-sidebar.html#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="blog-with-sidebar.html#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="blog-with-sidebar.html#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li><a href="blog-with-sidebar.html#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul>
                        <div class="right copyright">
                            <p>MaterialX &copy; All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Footer end -->
</div>


<!-- JavaScripts -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="resources/assets/js/isotope.pkgd.min.js"></script>
<script src="resources/assets/js/jquery.nicescroll.min.js"></script>
<script src="resources/assets/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="resources/assets/libs/materialize/js/materialize.min.js"></script>
<script src="resources/assets/libs/jwplayer/jwplayer.js"></script>
<script src="resources/assets/js/common.js"></script>
</body>

</html>