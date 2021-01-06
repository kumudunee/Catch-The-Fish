<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) 
  {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../forbidden.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Kompleet by Distinctive Themes</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading"/></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown header-6" data-wow-delay="0.5s">
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix">
                        <ul class="list-inline social-links wow pull-left">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>

                        <div class="pull-right text-right">
                            <ul class="list-inline">
                                <li>
                                    <div><i class="fa fa-envelope-o"></i> email@domain.com</div>
                                </li>
                                <li>
                                    <div class="meta-item"><i class="fa fa-mobile"></i> +44 8780 648 605</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll col-sm-12 text-center">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie logo" href="level01page.php"><img src="assets/img/logo_reverse.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse col-sm-12 text-center" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Agency</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-agency-1.php">Agency - Layout 1</a></li>
                                        <li><a href="index-agency-2.php">Agency - Layout 2</a></li>
                                        <li><a href="index-agency-3.php">Agency - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-portfolio-1.php">Portfolio - Layout 1</a></li>
                                        <li><a href="index-portfolio-2.php">Portfolio - Layout 2</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Corporate</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-corporate-1.php">Corporate - Layout 1</a></li>
                                        <li><a href="index-corporate-2.php">Corporate - Layout 2</a></li>
                                        <li><a href="index-corporate-3.php">Corporate - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Landing Page</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-landing-1.php">Landing Page - Layout 1</a></li>
                                        <li><a href="index-landing-2.php">Landing Page - Layout 2</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home - Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-blog-1.php">Blog - Layout 1</a></li>
                                        <li><a href="index-blog-2.php">Blog - Layout 2</a></li>
                                        <li><a href="index-blog-3.php">Blog - Layout 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="index-app.php">Home - App</a></li>
                                <li><a href="index-restaurant.php">Home - Restaurant</a></li>
                                
                                <li><a href="index-minimal.php">Home - Minimal</a></li>
                                <li><a href="index-countdown.php">Home - Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Headers <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="header-1.php">Header 1</a></li>
                                <li><a href="header-2.php">Header 2</a></li>
                                <li><a href="header-3.php">Header 3</a></li>
                                <li><a href="header-4.php">Header 4</a></li>
                                <li><a href="header-5.php">Header 5</a></li>
                                <li><a href="header-6.php">Header 6</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Footers <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="footer-1.php">Footer 1</a></li>
                                <li><a href="footer-2.php">Footer 2</a></li>
                                <li><a href="footer-3.php">Footer 3</a></li>
                                <li><a href="footer-4.php">Footer 4</a></li>
                                <li><a href="footer-5.php">Footer 5</a></li>
                                <li><a href="footer-6.php">Footer 6</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - About Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about-us-1.php">About Us - Layout 1</a></li>
                                        <li><a href="about-us-2.php">About Us - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services-1.php">Services - Layout 1</a></li>
                                        <li><a href="services-2.php">Services - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Contact</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact-us-1.php">Contact - Layout 1</a></li>
                                        <li><a href="contact-us-2.php">Contact - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.php">Pages - 404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-grid-4col.php">Full Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-full-grid-3col.php">Full Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-full-grid-2col.php">Full Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-grid-4col.php">Boxed Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-3col.php">Boxed Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-2col.php">Boxed Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-masonry-4col.php">Full Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-3col.php">Full Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-2col.php">Full Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-masonry-4col.php">Boxed Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-3col.php">Boxed Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-2col.php">Boxed Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="single-portfolio-slider.php">Single Portfolio - Slider</a></li>
                                        <li><a href="single-portfolio-carousel.php">Single Portfolio - Carousel</a></li>
                                        <li><a href="single-portfolio-video.php">Single Portfolio - Video</a></li>
                                        <li><a href="single-portfolio-fullscreen-slider.php">Single Portfolio - Fullscreen Slider</a></li>
                                        <li><a href="single-portfolio-fullscreen-video.php">Single Portfolio - Fullscreen Video</a></li>
                                        <li><a href="single-portfolio-image-list.php">Single Portfolio - Image List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Feeds</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-grid-2col.php">Blog Grid - 2 Column</a></li>
                                        <li><a href="blog-grid-3col.php">Blog Grid - 3 Column</a></li>
                                        <li><a href="blog-grid-2col-sidebar.php">Blog Grid - 2 Column Sidebar</a></li>
                                        <li><a href="blog-grid-3col-sidebar.php">Blog Grid - 3 Column Sidebar</a></li>
                                        <li><a href="blog-traditional.php">Blog Traditional</a></li>
                                        <li><a href="blog-traditional-sidebar.php">Blog Traditional Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Posts</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="single-post-fullwidth.php">Single Post - Full Width</a></li>
                                        <li><a href="single-post-thin.php">Single Post - Thin</a></li>
                                        <li><a href="single-post-left-sidebar.php">Single Post - Left Sidebar</a></li>
                                        <li><a href="single-post-right-sidebar.php">Single Post - Right Sidebar</a></li>
                                        
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Shop <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index-shop.php">Home Shop</a></li>
                                <li><a href="single-product.php">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="backstretched no-overlay special-max-height">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-center smoothie">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Kompleet Kitchen</div>
                    <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Take a look our <span class="rotate">awesome home pages, sexy portfolio items, flexible blog examples</span></div>
                </div>
            </div>
        </header>

        <section id="our-menu-2">
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb100 wow text-center">
                            <h2 class="section-heading">Welcome To Kompleet</h2>
                            <h3 class="section-subheading secondary-font">Were very happy to see you.</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12" role="tabpanel">
                            <div class="row ptb">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-justified" id="menu-tabs" role="tablist">
                                        <li class="active" role="presentation">
                                            <a aria-controls="starter-courses" aria-expanded="true" class="btn btn-primary btn-outlined btn-lg" data-toggle="tab" href="#starter-courses" role="tab"><span>Starters</span></a>
                                        </li>
                                        <li class="" role="presentation">
                                            <a aria-controls="main-courses" aria-expanded="false" class="btn btn-primary btn-outlined btn-lg" data-toggle="tab" href="#main-courses" role="tab"><span>Mains</span></a>
                                        </li>
                                        <li class="" role="presentation">
                                            <a aria-controls="desserts" aria-expanded="false" class="btn btn-primary btn-outlined btn-lg" data-toggle="tab" href="#desserts" role="tab"><span>Desserts</span></a>
                                        </li>
                                        <li class="" role="presentation">
                                            <a aria-controls="drinks" aria-expanded="false" class="btn btn-primary btn-outlined btn-lg" data-toggle="tab" href="#drinks" role="tab"><span>Drinks</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <!-- Tab panes -->
                                    <div class="tab-content pt60" id="tabs-collapse">
                                        <div class="tab-pane fade active in" id="starter-courses" role="tabpanel">
                                            <div class="tab-inner">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Starter Meal</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>8</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Starter Meal</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>8</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Starter Meal</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>9</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Starter Meal</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>9</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Starter Meal</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>11</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Starter Meal</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>11</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="main-courses" role="tabpanel">
                                            <div class="tab-inner">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Main Course</span></h5>
                                                                <p>Dynamically architect end-to-end catalysts for change rather than clicks-and-mortar growth strategies.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="desserts" role="tabpanel">
                                            <div class="tab-inner">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Dessert Course</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Dessert Course</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Dessert Course</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Dessert Course</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Dessert Course</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Dessert Course</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="drinks" role="tabpanel">
                                            <div class="tab-inner">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Drink Item</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Drink Item</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Drink Item</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Drink Item</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Drink Item</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-xs-9">
                                                                <h5><span>Drink Item</span></h5>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error doloremque sit voluptatem accusantium.</p>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <h1><span>$</span>17</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-menu">
            <div class="section-inner nopaddingbottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb100 wow text-center">
                            <h2 class="section-heading">Our Team</h2>
                            <h3 class="section-subheading secondary-font">Cooking up a storm.</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-desktop="[1200,3]" data-items-desktop-small="[980,3]" data-items-tablet="[768,3]" data-items-mobile="[479,2]">
                                <li>
                                    <img src="assets/img/restaurant/chef-1.jpg" class="img-responsive" alt="">
                                </li>
                                <li>
                                    <img src="assets/img/restaurant/chef-3.jpg" class="img-responsive" alt="">
                                </li>
                                <li>
                                    <img src="assets/img/restaurant/chef-2.jpg" class="img-responsive" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="footer-wrapper" class="dark-footer-image-bg">
            <section class="dark-wrapper">
                <div class="section-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget about-us-widget">
                                    <h4 class="widget-title"><strong>Global</strong> Coverage</h4>
                                    <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                    <div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Blog Post A</a></span>
                                                <small class="muted">Posted 14 April 2015</small>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Blog Post B</a></span>
                                                <small class="muted">Posted 14 April 2015</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget">
                                    <h4 class="widget-title">Popular Tags</h4>
                                    <div class="tagcloud">
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Local</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Business</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Media</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Photogtraphy</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Aid</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Fashion</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">News</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Cars</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Global Affairs</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Music</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Downloads</a>
                                        <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">MP3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="white-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <ul class="list-inline social-links wow">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6 text-right">
                            <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <div class="flexpanel">
        <div class="viewport-wrap">
            <div class="viewport">
                <div class="widget mb50">
                    <h4 class="widget-title">Latest Articles</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Panic In London</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">New iPhone News</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Our Year In Review</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Sheen Interview</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget mb50">
                    <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                    <div class="tagcloud">
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Local</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Business</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Media</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Photogtraphy</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Aid</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Fashion</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">News</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Cars</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Global Affairs</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Music</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Downloads</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">MP3</a>
                    </div>
                </div>
                <div class="widget about-us-widget mb50">
                    <h4 class="widget-title">About Kompleet</h4>
                    <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "assets/img/restaurant/hero-bg.jpg"
        ], {
            duration: 8000,
            fade: 500
        });
    });
    </script>

</body>

</html>
