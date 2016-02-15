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
    <title>Post Title | MaterialX - Material Design Personal Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon-->
    <link rel="shortcut icon" href="resources/images/favicon.png" >

    <!-- Stylesheets-->
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
            <li><a href="single.html#" onclick="setActiveStyleSheet('color1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
            <li><a href="single.html#" onclick="setActiveStyleSheet('color2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
            <li><a href="single.html#" onclick="setActiveStyleSheet('color3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
            <li><a href="single.html#" onclick="setActiveStyleSheet('color4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
            <li><a href="single.html#" onclick="setActiveStyleSheet('color5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
            <li><a href="single.html#" onclick="setActiveStyleSheet('color6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
            <li><a href="single.html#" onclick="setActiveStyleSheet('color7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
            <li><a href="single.html#" onclick="setActiveStyleSheet('color8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
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
                                <a href="single.html#!" class="left brand-logo"><img src="resources/images/logo.png" alt="">
                                </a>
                                <a href="single.html#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                                <ul class="right static-menu">
                                    <li class="search-form-li">
                                        <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                                        <div class="search-form-wrap hide">
                                            <form action="single.html#" class="">
                                                <input type="search" class="search">
                                                <button type="submit"><i class="mdi-action-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-button blog-submenu-init" href="single.html#!" data-activates="dropdown1">
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
                                    </li> <!-- mini profile end-->

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
                                    <li><a href="single.html#">Demo link 1</a>
                                    </li>
                                    <li><a href="single.html#">Demo link 2</a>
                                    </li>
                                    <li><a href="single.html#">Demo link 3</a>
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
    <section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix blog-banner-text blog-single-banner">
                    <div class="col-md-12">
                        <h2 class="title">Your awesome post title</h2>
                        <ul class="clearfix blog-post-meta">
                            <li>By <a href="single.html#">Admin</a>
                            </li>
                            <li>March 28, 2015</li>
                            <li><a href="single.html#">5 Comments</a>
                            </li>
                            <li><a href="single.html#">UX Design</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- ./Banner end -->

    <!-- Blog Post Container-->
    <section id="all-posts" class="root-sec grey lighten-5 blogpage-posts-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix all-blog-post blog-inner with-sidebar">

                    <!-- post container start-->
                    <div class="col-sm-8">
                        <article class="single-post-page">
                            <div class="thumb-wrap">
                                <img src="resources/images/single-blog.png" alt="">
                            </div>
                            <div class="single-post-content">
                                <p>Curabitur suscipit suscipit tellus. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Donec vitae sapien ut libero venenatis faucibus. In ac felis quis tortor malesuada pretium.</p>

                                <h2>Photography by <a href="single.html#">Picjumbo</a></h2>

                                <p>Maecenas vestibulum mollis diam. Duis vel nibh at velit scelerisque suscipit. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. In ac felis quis tortor malesuada pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

                                <h3>Lorem ipsum dolor sit amet</h3>

                                <p>Nullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.</p>


                                <blockquote>Nulla consequat massa quis enim. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Curabitur suscipit suscipit tellus.</blockquote>

                                <p>Suspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>

                                <ul>
                                    <li>Consectetur adipiscing elit vtae elit libero</li>
                                    <li>Nullam id dolor id eget lacinia odio posuere erat a ante</li>
                                    <li>Integer posuere erat dapibus posuere velit</li>
                                </ul>


                                <p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.</p>

<pre>
.some-style {
    width: 1170px;
    height: 200px;
    margin: 0 auto;
    background-color: #000000;
}
</pre>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur. Aliquam erat volutpat. Nunc eu nibh nulla, id cursus arcu.</p>
                                <p class="italic">In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. </p>
                            </div>
                            <div class="clearfix post-footer">
                                <a href="single.html#" class="left post-like js-favorite" title="Love this"><i class="mdi-action-favorite"></i> <span class="numb">109</span></a>
                                <ul class="clearfix right share-post">
                                    <li><a href="single.html#"><i class="fa fa-facebook"></i> <span>SHARE</span></a>
                                    </li>
                                    <li><a href="single.html#"><i class="fa fa-twitter"></i> <span>TWEET</span></a>
                                    </li>
                                    <li><a href="single.html#"><i class="fa fa-google-plus"></i> <span>PLUS</span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="comment-reply-section">
                                <h2 class="com-title">8 Comments</h2>
                                <div class="comment-list-wrapper">
                                    <ul class="comment-list">
                                        <li>
                                            <div class="clearfix card">
                                                <div class="left comment-img">
                                                    <a href="single.html#"><img src="resources/images/cmt1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-content comment-content">
                                                    <div class="comment-meta">
                                                        <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                        </p>
                                                        <p class="date">March 25, 2015 at 07.50 am</p>
                                                        <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="comment-list">
                                                <li>
                                                    <div class="clearfix card">
                                                        <div class="left comment-img">
                                                            <a href="single.html#"><img src="resources/images/unknown.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="card-content comment-content">
                                                            <div class="comment-meta">
                                                                <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                                </p>
                                                                <p class="date">March 25, 2015 at 07.50 am</p>
                                                                <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="comment-list">
                                                        <li>
                                                            <div class="clearfix card">
                                                                <div class="left comment-img">
                                                                    <a href="single.html#"><img src="resources/images/cmt1.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="card-content comment-content">
                                                                    <div class="comment-meta">
                                                                        <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                                        </p>
                                                                        <p class="date">March 25, 2015 at 07.50 am</p>
                                                                        <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                                    </div>
                                                                    <div class="comment-text">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="clearfix card">
                                                <div class="left comment-img">
                                                    <a href="single.html#"><img src="resources/images/cmt2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-content comment-content">
                                                    <div class="comment-meta">
                                                        <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                        </p>
                                                        <p class="date">March 25, 2015 at 07.50 am</p>
                                                        <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="comment-list">
                                                <li>
                                                    <div class="clearfix card">
                                                        <div class="left comment-img">
                                                            <a href="single.html#"><img src="resources/images/cmt1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="card-content comment-content">
                                                            <div class="comment-meta">
                                                                <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                                </p>
                                                                <p class="date">March 25, 2015 at 07.50 am</p>
                                                                <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="clearfix card">
                                                        <div class="left comment-img">
                                                            <a href="single.html#"><img src="resources/images/cmt2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="card-content comment-content">
                                                            <div class="comment-meta">
                                                                <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                                </p>
                                                                <p class="date">March 25, 2015 at 07.50 am</p>
                                                                <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="clearfix card">
                                                <div class="left comment-img">
                                                    <a href="single.html#"><img src="resources/images/unknown.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-content comment-content">
                                                    <div class="comment-meta">
                                                        <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                        </p>
                                                        <p class="date">March 25, 2015 at 07.50 am</p>
                                                        <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="clearfix card">
                                                <div class="left comment-img">
                                                    <a href="single.html#"><img src="resources/images/cmt1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="card-content comment-content">
                                                    <div class="comment-meta">
                                                        <p class="author"><a href="single.html#">BDInfoSys</a> <span>says:</span>
                                                        </p>
                                                        <p class="date">March 25, 2015 at 07.50 am</p>
                                                        <a href="single.html#" class="tooltips tooltipped reply-btn" data-position="top" data-delay="50" data-tooltip="Reply"><i class="mdi-content-reply"></i></a>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non enim ut enim fringilla adipiscing id in lorem. Quisque aliquet neque vitae lectus tempus consectetur.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-form  comment-reply-form">
                                <h2 class="com-title">Leave a Reply<a href="single.html#">Cancel Replay</a></h2>
                                <form action="single.html#" class="cform-wrapper">
                                    <div class="input-field">
                                        <input id="name" type="text" class="validate input-box">
                                        <label for="name" class="input-label">Name*</label>
                                    </div>
                                    <div class="input-field">
                                        <input id="email" type="email" class="validate input-box">
                                        <label for="email" class="input-label">Email*</label>
                                    </div>
                                    <div class="input-field">
                                        <input id="website" type="text" class="validate input-box">
                                        <label for="website" class="input-label">Website</label>
                                    </div>
                                    <div class="input-field textarea-input">
                                        <textarea id="comment" class="materialize-textarea" style="height: 22px;"></textarea>
                                        <label for="comment" class="input-label">Comment</label>
                                    </div>
                                    <div class="input-field submit-wrap">
                                        <button type="submit" class="waves-effect waves-light btn-large brand-bg white-text comm-submit regular-text">SEND MESSAGE</button>

                                    </div>
                                </form>
                            </div>
                        </article>
                    </div> <!-- ./post container end-->

                    <!-- Sidebar start-->
                    <div class="col-sm-4">
                        <div class="primary-sidebar">
                            <aside class="single-widget">
                                <h2 class="widget-title">RECENT POSTS</h2>
                                <ul>
                                    <li>
                                        <a href="single.html">The Image Post One</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="single.html">The Image Post Two</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="single.html">The Image Post Three</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="single.html">The Image Post Four</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                    <li>
                                        <a href="single.html">The Image Post Five</a>
                                        <span>March 24, 2015</span>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single-widget">
                                <h2 class="widget-title">CATEGORIES</h2>
                                <ul>
                                    <li><a href="single.html#">UX Design</a>
                                    </li>
                                    <li><a href="single.html#">UI Design</a>
                                    </li>
                                    <li><a href="single.html#">HTML</a>
                                    </li>
                                    <li><a href="single.html#">Audio</a>
                                    </li>
                                    <li><a href="single.html#">Video</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single-widget">
                                <h2 class="widget-title">ARCHIVES</h2>
                                <ul>
                                    <li><a href="single.html#">March 24, 2015</a>
                                    </li>
                                    <li><a href="single.html#">April 24, 2015</a>
                                    </li>
                                    <li><a href="single.html#">May 24, 2015</a>
                                    </li>
                                    <li><a href="single.html#">June 24, 2015</a>
                                    </li>
                                    <li><a href="single.html#">July 24, 2015</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single-widget">
                                <h2 class="widget-title">TAGS</h2>
                                <div class="widget-text">
                                    <a href="single.html#" class="tags">Art</a>
                                    <a href="single.html#" class="tags">Awesome</a>
                                    <a href="single.html#" class="tags">Style</a>
                                    <a href="single.html#" class="tags">Image</a>
                                    <a href="single.html#" class="tags">Design</a>
                                    <a href="single.html#" class="tags">Post</a>
                                    <a href="single.html#" class="tags">Three</a>
                                    <a href="single.html#" class="tags">Typhography</a>
                                    <a href="single.html#" class="tags">BDinfosys</a>
                                </div>
                            </aside>
                        </div>
                    </div> <!-- ./sidebar end-->
                </div>
            </div>
        </div> <!-- ./container end-->
    </section>  <!-- ./Blog Post Container end-->

    <!-- Footer Start -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix footer-inner">
                        <ul class="media-float-none social-icons">
                            <li><a href="single.html#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="single.html#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="single.html#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="single.html#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="single.html#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li><a href="single.html#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul>
                        <div class="media-float-none copyright">
                            <p>MaterialX &copy; All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Footer End -->
</div> <!--#app end -->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="resources/assets/js/jquery.nicescroll.min.js"></script>
<script src="resources/assets/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="resources/assets/libs/materialize/js/materialize.min.js"></script>
<script src="resources/assets/libs/jwplayer/jwplayer.js"></script>
<script src="resources/assets/js/common.js"></script>
</body>

</html>