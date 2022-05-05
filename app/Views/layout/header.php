<?php 

$page_name = isset($page_name) ? $page_name : "";
$data['page_name'] = $page_name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?= $page_meta['title'] ?></title>
    <meta name="description" content="<?= $page_meta['description'] ?>" />
    <meta name="keywords" content="<?= $page_meta['keywords'] ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/all-styles.css?v=1.1" />
    <?php /* ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/owl.theme.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/magnific-popup.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/royal-preload.css" />
    <?php */ ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HRLG21TRKN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HRLG21TRKN');
    </script>
</head>

<body class="royal_preloader">
    <div id="page" class="site">
            <header id="site-header" class="site-header header-style-2 header-fullwidth sticky-header header-static">
                <!-- Main Header start -->
                <div class="header-topbar">
                    <div class="octf-area-wrap">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="topbar-info">
                                        <li><i class="fas fa-envelope"></i><a href="mailto:sales@tag4tech.com">
                                                sales@tag4tech.com</a></li>
                                       <?php /* ?> <li><i class="fas fa-clock"></i> Mon - Sat: 8.00 am - 7.00 pm</li> <?php */ ?>
                                    </ul>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="topbar-right">
                                        <ul class="extra-text">
                                            <li>Tag us for exciting, innovative and maintainable solutions! <a
                                                    href="<?php echo base_url() ?>/contact">Hire Us</a></li>
                                        </ul>
                                        <?php /* ?>
                                        <ul class="social-list">
                                            <li><a href="http://twitter.com" target="_self"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="http://facebook.com" target="_self"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="http://linkedin.com" target="_self"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="http://instagram" target="_self"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <?php */ ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="octf-main-header">
                    <div class="octf-area-wrap">
                        <div class="container-fluid octf-mainbar-container">
                            <div class="octf-mainbar">
                                <div class="octf-mainbar-row octf-row">
                                    <div class="octf-col logo-col">
                                        <div id="site-logo" class="site-logo">
                                            <a href="<?php echo base_url() ?>/">
                                                <img src="<?php echo base_url() ?>/images/tag4tech.png" alt="Tag4Tech"
                                                    class="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="octf-col menu-col">
                                        <nav id="site-navigation" class="main-navigation">
                                            <ul class="menu">
                                                <?php echo view('layout/menu-list',$data); ?>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="octf-col cta-col text-right">
                                        
                                        <div class="octf-btn-cta">

                                            <?php /* ?>div class="octf-header-module cart-btn-hover">
                                            <div class="h-cart-btn octf-cta-icons">
                                                <a class="cart-icon" href="cart-page.html"><i
                                                        class="flaticon-shopper"></i><span class="count">0</span></a>
                                            </div>
                                            <div class="site-header-cart">
                                                <div class="widget woocommerce widget_shopping_cart">
                                                    <div class="widget_shopping_cart_content">
                                                        <p class="woocommerce-mini-cart__empty-message">No products in
                                                            the cart.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="octf-header-module">
                                            <div class="toggle_search octf-cta-icons">
                                                <i class="flaticon-search"></i>
                                            </div>
                                            <!-- Form Search on Header -->
                                            <div class="h-search-form-field collapse">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" id="hsearch-form"
                                                        class="search-form">
                                                        <label><span class="screen-reader-text">Search for:</span>
                                                            <input type="search" class="search-field"
                                                                placeholder="Search …" value="" name="s"></label>
                                                        <button type="submit" class="search-submit"><i
                                                                class="flaticon-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php */ ?>
                                        <div class="octf-header-module">
                                            <div class="btn-cta-group contact-header">
                                                <i class="fas fa-phone"></i>
                                                <div class="cinfo-header">
                                                    <span>Have Any Questions?</span>
                                                    <span class="main-text"><a
                                                            href="tel:+1-289-834-4665"> <img src="<?php echo base_url() ?>/images/canada-flag.svg" /> +1-289-834-4665 </a></span>
                                                            
                                                </div>
                                            </div>
                                        </div>

                                        <div class="octf-header-module">
                                            <div class="btn-cta-group btn-cta-header">
                                                <a class="octf-btn octf-btn-third"
                                                    href="<?php echo base_url() ?>/contact">Contact</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>


    <div class="header_mobile">
        <div class="container">
            <div class="mlogo_wrapper clearfix">
                <div class="mobile_logo">
                    <a href="<?php echo base_url() ?>/">
                        <img src="<?php echo base_url() ?>/images/tag4tech.png" alt="Tag4Technology">
                    </a>
                </div>
                <div id="mmenu_toggle">
                    <button></button>
                </div>
            </div>
            <div class="mmenu_wrapper">
                <div class="mobile_nav collapse">
                    <ul id="menu-main-menu" class="mobile_mainmenu">
                        <?php echo view('layout/menu-list',$data); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </header>