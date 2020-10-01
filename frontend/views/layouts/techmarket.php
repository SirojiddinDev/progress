<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\TechmarketAppAsset;

TechmarketAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav-icon.png">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="woocommerce-active page-template-template-homepage-v10">
    <?php $this->beginBody() ?>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header header-v8" style="background-image: none; ">
            <div class="col-full desktop-only">
                <div class="techmarket-sticky-wrap">
                    <div class="row">
                        <div class="site-branding">
                            <a href="home-v1.html" class="custom-logo-link" rel="home">
                                <svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.34 26.64">
                                    <defs>
                                        <style>
                                            .cls-h1 {
                                                fill: #ffffff
                                            }

                                            .cls-h2 {
                                                fill: #6dc4b4
                                            }
                                        </style>
                                    </defs>
                                    <title>Shoe-logo</title>
                                    <polygon class="cls-h1" points="158.76 2.79 158.76 11.05 157.94 11.05 157.94 2.79 157.94 2.74 157.94 2.1 162.34 2.1 162.34 2.79 158.76 2.79"></polygon>
                                    <rect class="cls-h1" x="154.31" y="2.1" width="2.84" height="0.69"></rect>
                                    <rect class="cls-h1" x="148.96" y="5.99" width="2.87" height="0.69"></rect>
                                    <polygon class="cls-h1" points="147.85 11.05 147.12 11.05 147.12 2.1 147.82 2.1 147.91 2.1 153.25 2.1 153.25 2.76 147.91 2.76 147.91 10.39 153.33 10.39 153.33 11.05 147.91 11.05 147.85 11.05"></polygon>
                                    <polygon class="cls-h1" points="140.69 7.46 141.27 6.92 145.75 11.03 144.62 11.03 140.69 7.46"></polygon>
                                    <polygon class="cls-h1" points="139.12 11.03 138.32 11.03 138.32 2.09 139.12 2.09 139.12 6.77 144.01 2.32 145.08 2.32 139.12 7.82 139.12 11.03"></polygon>
                                    <path class="cls-h1" d="M136.81,11.56h-1s-0.4-.32-0.58-0.48l-1.1-1c-0.2-.19-0.56-0.54-0.56-0.54V8.92a2.91,2.91,0,0,0,2.9-2.35A2.75,2.75,0,0,0,133.8,3.3H130.6v8.26h-0.82v-9h4.09a3.45,3.45,0,0,1,.61,6.82C135.24,10.12,136.81,11.56,136.81,11.56Z" transform="translate(-0.33 -0.51)"></path>
                                    <polygon class="cls-h1" points="126.37 3.76 122.32 8.5 125.34 8.5 125.34 9.16 121.76 9.16 120.14 11.05 119.21 11.05 126.87 2.05 127.19 2.05 127.19 11.05 126.37 11.05 126.37 3.76"></polygon>
                                    <polygon class="cls-h1" points="117.31 3.72 114.05 7.08 114.05 7.11 114.04 7.1 114.03 7.11 114.03 7.08 110.77 3.72 110.77 11.05 109.97 11.05 109.97 2.05 110.24 2.05 114.04 5.98 117.85 2.05 118.11 2.05 118.11 11.05 117.31 11.05 117.31 3.72"></polygon>
                                    <ellipse class="cls-h2" cx="115.12" cy="19.94" rx="5.15" ry="5.18"></ellipse>
                                    <path class="cls-h1" d="M5.22,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,.33,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24H4.48a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,7.31,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2A15.74,15.74,0,0,1,3,12.83,6,6,0,0,1,1,7.94,6.49,6.49,0,0,1,2.18,4.12,7.86,7.86,0,0,1,5.57,1.47a12.71,12.71,0,0,1,5.12-1A12.18,12.18,0,0,1,16,1.58a8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24H16.35a1.1,1.1,0,0,1-1.11-.67,2.87,2.87,0,0,0-1.44-2,5.71,5.71,0,0,0-3.11-.8,5.71,5.71,0,0,0-3.2.78A2.54,2.54,0,0,0,6.33,7.83,2.41,2.41,0,0,0,6.92,9.5a4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,5.22,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M22.24,26.52A0.86,0.86,0,0,1,22,25.89V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,22.86.88h3.4a0.89,0.89,0,0,1,.92.92v9.51H38V1.8a0.9,0.9,0,0,1,.26-0.67A0.86,0.86,0,0,1,38.89.88h3.44a0.84,0.84,0,0,1,.65.26,0.94,0.94,0,0,1,.24.67V25.89a0.89,0.89,0,0,1-.24.63,0.84,0.84,0,0,1-.65.26H38.89A0.88,0.88,0,0,1,38,25.89V16H27.19v9.88a0.86,0.86,0,0,1-.26.63,0.9,0.9,0,0,1-.67.26h-3.4A0.85,0.85,0,0,1,22.24,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M47.4,24.59Q44.58,22,44.44,17q0-1.07,0-3.15t0-3.18q0.15-4.92,3-7.55A11.16,11.16,0,0,1,55.28.51a11.17,11.17,0,0,1,7.79,2.63q2.9,2.63,3.05,7.55,0.07,2.15.07,3.18T66.12,17q-0.15,5-3,7.58t-7.86,2.55Q50.21,27.15,47.4,24.59Zm11.8-3.22a6.66,6.66,0,0,0,1.55-4.55q0.07-2.22.07-3t-0.07-3A6.58,6.58,0,0,0,59.16,6.3a5.83,5.83,0,0,0-7.81,0,6.45,6.45,0,0,0-1.55,4.53q0,1.07,0,3t0,3a6.5,6.5,0,0,0,1.54,4.53A5.93,5.93,0,0,0,59.2,21.38Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M67.56,26.52a0.86,0.86,0,0,1-.26-0.63V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,68.19.88H84.51a0.89,0.89,0,0,1,.93.92V4.28a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.48H83.69a0.89,0.89,0,0,1,.93.92V14.9a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.7H84.8a0.94,0.94,0,0,1,.67.24,0.84,0.84,0,0,1,.26.65v2.52a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H68.19A0.85,0.85,0,0,1,67.56,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-h1" d="M90,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,85.1,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24h3.37a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,92.07,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2a15.74,15.74,0,0,1-6.4-2.74,6,6,0,0,1-2-4.88,6.49,6.49,0,0,1,1.18-3.83,7.86,7.86,0,0,1,3.39-2.65,12.71,12.71,0,0,1,5.12-1,12.18,12.18,0,0,1,5.31,1.07,8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24h-3.52A1.1,1.1,0,0,1,100,7.57a2.87,2.87,0,0,0-1.44-2,6.72,6.72,0,0,0-6.31,0,2.54,2.54,0,0,0-1.17,2.26,2.41,2.41,0,0,0,.59,1.67,4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,90,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                </svg>
                            </a>
                            <!-- /.custom-logo-link -->
                        </div>
                        <!-- /.site-branding -->
                        <!-- ============================================================= End Header Logo ============================================================= -->
                        <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                            <ul id="menu-primary-menu" class="nav yamm">
                                <li class="sale-clr yamm-fw menu-item animate-dropdown">
                                    <a title="Super deals" href="/tech-market/category">Super deals</a>
                                </li>
                                <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                    <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Mother`s Day <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown">
                                            <a title="Wishlist" href="/tech-market/wishlist">Wishlist</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="Add to compare" href="/tech-market/compare">Add to compare</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="About Us" href="/tech-market/about">About Us</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="Track Order" href="/tech-market/track-your-order">Track Order</a>
                                        </li>
                                    </ul>
                                    <!-- .dropdown-menu -->
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Logitech Sale" href="product-category.html">Logitech Sale</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Headphones Sale" href="product-category.html">Headphones Sale</a>
                                </li>
                                <li class="techmarket-flex-more-menu-item dropdown">
                                    <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                    <ul class="overflow-items dropdown-menu"></ul>
                                    <!-- . -->
                                </li>
                            </ul>
                            <!-- .nav -->
                        </nav>
                        <!-- .primary-navigation -->
                        <ul class="header-compare nav navbar-nav">
                            <li class="nav-item">
                                <a href="compare.html" class="nav-link">
                                    <i class="tm tm-compare"></i>
                                    <span id="top-cart-compare-count" class="value">3</span>
                                </a>
                            </li>
                        </ul>
                        <!-- .header-compare -->
                        <ul class="header-wishlist nav navbar-nav">
                            <li class="nav-item">
                                <a href="wishlist.html" class="nav-link">
                                    <i class="tm tm-favorites"></i>
                                    <span id="top-cart-wishlist-count" class="value">3</span>
                                </a>
                            </li>
                        </ul>
                        <!-- .header-wishlist -->
                        <ul id="site-header-cart" class="site-header-cart menu">
                            <li class="animate-dropdown dropdown ">
                                <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="count">2</span>
                                    <span class="amount">
                                        <span class="price-label">Your Cart</span>&#036;136.99</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-mini-cart">
                                    <li>
                                        <div class="widget woocommerce widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                                        <a href="single-product-sidebar.html">
                                                            <img src="/images/products/mini-cart1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">XONE Wireless Controller&nbsp;
                                                        </a>
                                                        <span class="quantity">1 ×
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>64.99</span>
                                                        </span>
                                                    </li>
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="">×</a>
                                                        <a href="single-product-sidebar.html">
                                                            <img src="/images/products/mini-cart2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;
                                                        </a>
                                                        <span class="quantity">1 ×
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <!-- .cart_list -->
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Subtotal:</strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>136.99</span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="cart.html" class="button wc-forward">View cart</a>
                                                    <a href="checkout.html" class="button checkout wc-forward">Checkout</a>
                                                </p>
                                            </div>
                                            <!-- .widget_shopping_cart_content -->
                                        </div>
                                        <!-- .widget_shopping_cart -->
                                    </li>
                                </ul>
                                <!-- .dropdown-menu-mini-cart -->
                            </li>
                        </ul>
                        <!-- .site-header-cart -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.techmarket-sticky-wrap -->
            </div>
            <!-- .col-full -->
            <div class="col-full handheld-only">
                <div class="handheld-header">
                    <div class="row">
                        <div class="site-branding">
                            <a href="home-v1.html" class="custom-logo-link" rel="home">
                                <svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.34 26.64">
                                    <defs>
                                        <style>
                                            .cls-s1 {
                                                fill: #000
                                            }

                                            .cls-s2 {
                                                fill: #6dc4b4
                                            }
                                        </style>
                                    </defs>
                                    <title>Shoe-logo</title>
                                    <polygon class="cls-s1" points="158.76 2.79 158.76 11.05 157.94 11.05 157.94 2.79 157.94 2.74 157.94 2.1 162.34 2.1 162.34 2.79 158.76 2.79"></polygon>
                                    <rect class="cls-s1" x="154.31" y="2.1" width="2.84" height="0.69"></rect>
                                    <rect class="cls-s1" x="148.96" y="5.99" width="2.87" height="0.69"></rect>
                                    <polygon class="cls-s1" points="147.85 11.05 147.12 11.05 147.12 2.1 147.82 2.1 147.91 2.1 153.25 2.1 153.25 2.76 147.91 2.76 147.91 10.39 153.33 10.39 153.33 11.05 147.91 11.05 147.85 11.05"></polygon>
                                    <polygon class="cls-s1" points="140.69 7.46 141.27 6.92 145.75 11.03 144.62 11.03 140.69 7.46"></polygon>
                                    <polygon class="cls-s1" points="139.12 11.03 138.32 11.03 138.32 2.09 139.12 2.09 139.12 6.77 144.01 2.32 145.08 2.32 139.12 7.82 139.12 11.03"></polygon>
                                    <path class="cls-s1" d="M136.81,11.56h-1s-0.4-.32-0.58-0.48l-1.1-1c-0.2-.19-0.56-0.54-0.56-0.54V8.92a2.91,2.91,0,0,0,2.9-2.35A2.75,2.75,0,0,0,133.8,3.3H130.6v8.26h-0.82v-9h4.09a3.45,3.45,0,0,1,.61,6.82C135.24,10.12,136.81,11.56,136.81,11.56Z" transform="translate(-0.33 -0.51)"></path>
                                    <polygon class="cls-s1" points="126.37 3.76 122.32 8.5 125.34 8.5 125.34 9.16 121.76 9.16 120.14 11.05 119.21 11.05 126.87 2.05 127.19 2.05 127.19 11.05 126.37 11.05 126.37 3.76"></polygon>
                                    <polygon class="cls-s1" points="117.31 3.72 114.05 7.08 114.05 7.11 114.04 7.1 114.03 7.11 114.03 7.08 110.77 3.72 110.77 11.05 109.97 11.05 109.97 2.05 110.24 2.05 114.04 5.98 117.85 2.05 118.11 2.05 118.11 11.05 117.31 11.05 117.31 3.72"></polygon>
                                    <ellipse class="cls-s2" cx="115.12" cy="19.94" rx="5.15" ry="5.18"></ellipse>
                                    <path class="cls-s1" d="M5.22,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,.33,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24H4.48a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,7.31,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2A15.74,15.74,0,0,1,3,12.83,6,6,0,0,1,1,7.94,6.49,6.49,0,0,1,2.18,4.12,7.86,7.86,0,0,1,5.57,1.47a12.71,12.71,0,0,1,5.12-1A12.18,12.18,0,0,1,16,1.58a8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24H16.35a1.1,1.1,0,0,1-1.11-.67,2.87,2.87,0,0,0-1.44-2,5.71,5.71,0,0,0-3.11-.8,5.71,5.71,0,0,0-3.2.78A2.54,2.54,0,0,0,6.33,7.83,2.41,2.41,0,0,0,6.92,9.5a4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,5.22,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-s1" d="M22.24,26.52A0.86,0.86,0,0,1,22,25.89V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,22.86.88h3.4a0.89,0.89,0,0,1,.92.92v9.51H38V1.8a0.9,0.9,0,0,1,.26-0.67A0.86,0.86,0,0,1,38.89.88h3.44a0.84,0.84,0,0,1,.65.26,0.94,0.94,0,0,1,.24.67V25.89a0.89,0.89,0,0,1-.24.63,0.84,0.84,0,0,1-.65.26H38.89A0.88,0.88,0,0,1,38,25.89V16H27.19v9.88a0.86,0.86,0,0,1-.26.63,0.9,0.9,0,0,1-.67.26h-3.4A0.85,0.85,0,0,1,22.24,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-s1" d="M47.4,24.59Q44.58,22,44.44,17q0-1.07,0-3.15t0-3.18q0.15-4.92,3-7.55A11.16,11.16,0,0,1,55.28.51a11.17,11.17,0,0,1,7.79,2.63q2.9,2.63,3.05,7.55,0.07,2.15.07,3.18T66.12,17q-0.15,5-3,7.58t-7.86,2.55Q50.21,27.15,47.4,24.59Zm11.8-3.22a6.66,6.66,0,0,0,1.55-4.55q0.07-2.22.07-3t-0.07-3A6.58,6.58,0,0,0,59.16,6.3a5.83,5.83,0,0,0-7.81,0,6.45,6.45,0,0,0-1.55,4.53q0,1.07,0,3t0,3a6.5,6.5,0,0,0,1.54,4.53A5.93,5.93,0,0,0,59.2,21.38Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-s1" d="M67.56,26.52a0.86,0.86,0,0,1-.26-0.63V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,68.19.88H84.51a0.89,0.89,0,0,1,.93.92V4.28a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.48H83.69a0.89,0.89,0,0,1,.93.92V14.9a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.7H84.8a0.94,0.94,0,0,1,.67.24,0.84,0.84,0,0,1,.26.65v2.52a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H68.19A0.85,0.85,0,0,1,67.56,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                    <path class="cls-s1" d="M90,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,85.1,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24h3.37a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,92.07,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2a15.74,15.74,0,0,1-6.4-2.74,6,6,0,0,1-2-4.88,6.49,6.49,0,0,1,1.18-3.83,7.86,7.86,0,0,1,3.39-2.65,12.71,12.71,0,0,1,5.12-1,12.18,12.18,0,0,1,5.31,1.07,8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24h-3.52A1.1,1.1,0,0,1,100,7.57a2.87,2.87,0,0,0-1.44-2,6.72,6.72,0,0,0-6.31,0,2.54,2.54,0,0,0-1.17,2.26,2.41,2.41,0,0,0,.59,1.67,4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,90,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                </svg>
                            </a>
                        </div>
                        <!-- ============================================================= End Header Logo ============================================================= -->
                        <div class="handheld-header-links">
                            <ul class="columns-3">
                                <li class="my-account">
                                    <a href="login-and-register.html" class="has-icon">
                                        <i class="tm tm-login-register"></i>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="wishlist.html" class="has-icon">
                                        <i class="tm tm-favorites"></i>
                                        <span class="count">3</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="compare.html" class="has-icon">
                                        <i class="tm tm-compare"></i>
                                        <span class="count">3</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .columns-3 -->
                        </div>
                        <!-- .handheld-header-links -->
                    </div>
                    <!-- /.row -->
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                                <button class="btn navbar-toggler" type="button">
                                    <i class="tm tm-departments-thin"></i>
                                    <span>Menu</span>
                                </button>
                                <div class="handheld-navigation-menu">
                                    <span class="tmhm-close">Close</span>
                                    <ul id="menu-departments-menu-1" class="nav">
                                        <li class="highlight menu-item animate-dropdown">
                                            <a title="Value of the Day" href="shop.html">Value of the Day</a>
                                        </li>
                                        <li class="highlight menu-item animate-dropdown">
                                            <a title="Top 100 Offers" href="shop.html">Top 100 Offers</a>
                                        </li>
                                        <li class="highlight menu-item animate-dropdown">
                                            <a title="New Arrivals" href="shop.html">New Arrivals</a>
                                        </li>
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Computers &#038; Laptops <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img src="/images/megamenu.jpg" class="" alt="" />
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                            <li><a href="shop.html">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="shop.html">Computer Accessories</a></li>
                                                                            <li><a href="shop.html">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <span class="nav-text">All Electronics</span>
                                                                                    <span class="nav-subtext">Discover more products</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                                            <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="Cameras &amp; Photo" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Cameras &#038; Photo <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img src="/images/megamenu-1.jpg" class="" alt="" />
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Cameras & Photography</li>
                                                                            <li><a href="shop.html">All Cameras & Photography</a></li>
                                                                            <li><a href="shop.html">Point & Shoot Cameras</a></li>
                                                                            <li><a href="shop.html">Lenses</a></li>
                                                                            <li><a href="shop.html">Camera Accessories</a></li>
                                                                            <li><a href="shop.html">Security & Surveillance</a></li>
                                                                            <li><a href="shop.html">Binoculars & Telescopes</a></li>
                                                                            <li><a href="shop.html">Camcorders</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <span class="nav-text">All Electronics</span>
                                                                                    <span class="nav-subtext">Discover more products</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Audio & Video</li>
                                                                            <li><a href="shop.html">All Audio & Video</a></li>
                                                                            <li><a href="shop.html">Headphones & Speakers</a></li>
                                                                            <li><a href="shop.html">Home Entertainment Systems</a></li>
                                                                            <li><a href="shop.html">MP3 & Media Players</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="Smart Phones &amp; Tablets" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Smart Phones &#038; Tablets <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img src="/images/megamenu.jpg" class="" alt="" />
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                            <li><a href="shop.html">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="shop.html">Computer Accessories</a></li>
                                                                            <li><a href="shop.html">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <span class="nav-text">All Electronics</span>
                                                                                    <span class="nav-subtext">Discover more products</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                                            <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="Video Games &amp; Consoles" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Video Games &#038; Consoles <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img src="/images/megamenu-1.jpg" class="" alt="" />
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Cameras & Photography</li>
                                                                            <li><a href="shop.html">All Cameras & Photography</a></li>
                                                                            <li><a href="shop.html">Point & Shoot Cameras</a></li>
                                                                            <li><a href="shop.html">Lenses</a></li>
                                                                            <li><a href="shop.html">Camera Accessories</a></li>
                                                                            <li><a href="shop.html">Security & Surveillance</a></li>
                                                                            <li><a href="shop.html">Binoculars & Telescopes</a></li>
                                                                            <li><a href="shop.html">Camcorders</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <span class="nav-text">All Electronics</span>
                                                                                    <span class="nav-subtext">Discover more products</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Audio & Video</li>
                                                                            <li><a href="shop.html">All Audio & Video</a></li>
                                                                            <li><a href="shop.html">Headphones & Speakers</a></li>
                                                                            <li><a href="shop.html">Home Entertainment Systems</a></li>
                                                                            <li><a href="shop.html">MP3 & Media Players</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="TV &amp; Audio" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">TV &#038; Audio <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img src="/images/megamenu.jpg" class="" alt="" />
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                            <li><a href="shop.html">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="shop.html">Computer Accessories</a></li>
                                                                            <li><a href="shop.html">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <span class="nav-text">All Electronics</span>
                                                                                    <span class="nav-subtext">Discover more products</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                                            <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="Car Electronic &amp; GPS" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Car Electronic &#038; GPS <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img src="/images/megamenu-1.jpg" class="" alt="" />
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Cameras & Photography</li>
                                                                            <li><a href="shop.html">All Cameras & Photography</a></li>
                                                                            <li><a href="shop.html">Point & Shoot Cameras</a></li>
                                                                            <li><a href="shop.html">Lenses</a></li>
                                                                            <li><a href="shop.html">Camera Accessories</a></li>
                                                                            <li><a href="shop.html">Security & Surveillance</a></li>
                                                                            <li><a href="shop.html">Binoculars & Telescopes</a></li>
                                                                            <li><a href="shop.html">Camcorders</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <span class="nav-text">All Electronics</span>
                                                                                    <span class="nav-subtext">Discover more products</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Audio & Video</li>
                                                                            <li><a href="shop.html">All Audio & Video</a></li>
                                                                            <li><a href="shop.html">Headphones & Speakers</a></li>
                                                                            <li><a href="shop.html">Home Entertainment Systems</a></li>
                                                                            <li><a href="shop.html">MP3 & Media Players</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="Accesories" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Accesories <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img src="/images/megamenu.jpg" class="" alt="" />
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="shop.html">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="shop.html">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="shop.html">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="shop.html">Printers &amp; Ink</a></li>
                                                                            <li><a href="shop.html">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="shop.html">Computer Accessories</a></li>
                                                                            <li><a href="shop.html">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <span class="nav-text">All Electronics</span>
                                                                                    <span class="nav-subtext">Discover more products</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="shop.html">All Office &amp; Stationery</a></li>
                                                                            <li><a href="shop.html">Pens &amp; Writing</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .kc_column -->
                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="Gadgets" href="shop.html">Gadgets</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="Virtual Reality" href="shop.html">Virtual Reality</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .handheld-navigation-menu -->
                            </nav>
                            <!-- .handheld-navigation -->
                            <div class="site-search">
                                <div class="widget woocommerce widget_product_search">
                                    <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                        <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                        <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                        <input type="submit" value="Search" />
                                        <input type="hidden" name="post_type" value="product" />
                                    </form>
                                </div>
                                <!-- .widget -->
                            </div>
                            <!-- .site-search -->
                            <a class="handheld-header-cart-link has-icon" href="cart.html" title="View your shopping cart">
                                <i class="tm tm-shopping-bag"></i>
                                <span class="count">2</span>
                            </a>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                </div>
                <!-- .handheld-header -->
            </div>
            <!-- .handheld-only -->
        </header>


        <?= $content; ?>


        <footer class="site-footer footer-v1">
            <div class="col-full">
                <div class="before-footer-wrap">
                    <div class="col-full">
                        <div class="footer-newsletter">
                            <div class="media">
                                <i class="footer-newsletter-icon tm tm-newsletter"></i>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <div class="newsletter-header">
                                            <h5 class="newsletter-title">Sign up to Newsletter</h5>
                                            <span class="newsletter-marketing-text">...and receive
                                                <strong>$20 coupon for first shopping</strong>
                                            </span>
                                        </div>
                                        <!-- .newsletter-header -->
                                        <div class="newsletter-body">
                                            <form class="newsletter-form">
                                                <input type="text" placeholder="Enter your email address">
                                                <button class="button" type="button">Sign up</button>
                                            </form>
                                        </div>
                                        <!-- .newsletter body -->
                                    </div>
                                    <!-- .clearfix -->
                                </div>
                                <!-- .media-body -->
                            </div>
                            <!-- .media -->
                        </div>
                        <!-- .footer-newsletter -->
                        <div class="footer-social-icons">
                            <ul class="social-icons nav">
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="#">
                                        <i class="fa fa-facebook"></i> Facebook</a>
                                </li>
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="#">
                                        <i class="fa fa-twitter"></i> Twitter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="#">
                                        <i class="fa fa-google-plus"></i> Google+</a>
                                </li>
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="#">
                                        <i class="fa fa-vimeo-square"></i> Vimeo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="#">
                                        <i class="fa fa-rss"></i> RSS</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .footer-social-icons -->
                    </div>
                    <!-- .col-full -->
                </div>
                <!-- .before-footer-wrap -->
                <div class="footer-widgets-block">
                    <div class="row">
                        <div class="footer-contact">
                            <div class="footer-logo">
                                <a href="home-v1.html" class="custom-logo-link" rel="home">
                                    <svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 162.34 26.64">
                                        <defs>
                                            <style>
                                                .cls-f1 {
                                                    fill: #000
                                                }

                                                .cls-f2 {
                                                    fill: #6dc4b4
                                                }
                                            </style>
                                        </defs>
                                        <title>Shoe-logo</title>
                                        <polygon class="cls-f1" points="158.76 2.79 158.76 11.05 157.94 11.05 157.94 2.79 157.94 2.74 157.94 2.1 162.34 2.1 162.34 2.79 158.76 2.79"></polygon>
                                        <rect class="cls-f1" x="154.31" y="2.1" width="2.84" height="0.69"></rect>
                                        <rect class="cls-f1" x="148.96" y="5.99" width="2.87" height="0.69"></rect>
                                        <polygon class="cls-f1" points="147.85 11.05 147.12 11.05 147.12 2.1 147.82 2.1 147.91 2.1 153.25 2.1 153.25 2.76 147.91 2.76 147.91 10.39 153.33 10.39 153.33 11.05 147.91 11.05 147.85 11.05"></polygon>
                                        <polygon class="cls-f1" points="140.69 7.46 141.27 6.92 145.75 11.03 144.62 11.03 140.69 7.46"></polygon>
                                        <polygon class="cls-f1" points="139.12 11.03 138.32 11.03 138.32 2.09 139.12 2.09 139.12 6.77 144.01 2.32 145.08 2.32 139.12 7.82 139.12 11.03"></polygon>
                                        <path class="cls-f1" d="M136.81,11.56h-1s-0.4-.32-0.58-0.48l-1.1-1c-0.2-.19-0.56-0.54-0.56-0.54V8.92a2.91,2.91,0,0,0,2.9-2.35A2.75,2.75,0,0,0,133.8,3.3H130.6v8.26h-0.82v-9h4.09a3.45,3.45,0,0,1,.61,6.82C135.24,10.12,136.81,11.56,136.81,11.56Z" transform="translate(-0.33 -0.51)"></path>
                                        <polygon class="cls-f1" points="126.37 3.76 122.32 8.5 125.34 8.5 125.34 9.16 121.76 9.16 120.14 11.05 119.21 11.05 126.87 2.05 127.19 2.05 127.19 11.05 126.37 11.05 126.37 3.76"></polygon>
                                        <polygon class="cls-f1" points="117.31 3.72 114.05 7.08 114.05 7.11 114.04 7.1 114.03 7.11 114.03 7.08 110.77 3.72 110.77 11.05 109.97 11.05 109.97 2.05 110.24 2.05 114.04 5.98 117.85 2.05 118.11 2.05 118.11 11.05 117.31 11.05 117.31 3.72"></polygon>
                                        <ellipse class="cls-f2" cx="115.12" cy="19.94" rx="5.15" ry="5.18"></ellipse>
                                        <path class="cls-f1" d="M5.22,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,.33,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24H4.48a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,7.31,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2A15.74,15.74,0,0,1,3,12.83,6,6,0,0,1,1,7.94,6.49,6.49,0,0,1,2.18,4.12,7.86,7.86,0,0,1,5.57,1.47a12.71,12.71,0,0,1,5.12-1A12.18,12.18,0,0,1,16,1.58a8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24H16.35a1.1,1.1,0,0,1-1.11-.67,2.87,2.87,0,0,0-1.44-2,5.71,5.71,0,0,0-3.11-.8,5.71,5.71,0,0,0-3.2.78A2.54,2.54,0,0,0,6.33,7.83,2.41,2.41,0,0,0,6.92,9.5a4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,5.22,26.15Z" transform="translate(-0.33 -0.51)"></path>
                                        <path class="cls-f1" d="M22.24,26.52A0.86,0.86,0,0,1,22,25.89V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,22.86.88h3.4a0.89,0.89,0,0,1,.92.92v9.51H38V1.8a0.9,0.9,0,0,1,.26-0.67A0.86,0.86,0,0,1,38.89.88h3.44a0.84,0.84,0,0,1,.65.26,0.94,0.94,0,0,1,.24.67V25.89a0.89,0.89,0,0,1-.24.63,0.84,0.84,0,0,1-.65.26H38.89A0.88,0.88,0,0,1,38,25.89V16H27.19v9.88a0.86,0.86,0,0,1-.26.63,0.9,0.9,0,0,1-.67.26h-3.4A0.85,0.85,0,0,1,22.24,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                        <path class="cls-f1" d="M47.4,24.59Q44.58,22,44.44,17q0-1.07,0-3.15t0-3.18q0.15-4.92,3-7.55A11.16,11.16,0,0,1,55.28.51a11.17,11.17,0,0,1,7.79,2.63q2.9,2.63,3.05,7.55,0.07,2.15.07,3.18T66.12,17q-0.15,5-3,7.58t-7.86,2.55Q50.21,27.15,47.4,24.59Zm11.8-3.22a6.66,6.66,0,0,0,1.55-4.55q0.07-2.22.07-3t-0.07-3A6.58,6.58,0,0,0,59.16,6.3a5.83,5.83,0,0,0-7.81,0,6.45,6.45,0,0,0-1.55,4.53q0,1.07,0,3t0,3a6.5,6.5,0,0,0,1.54,4.53A5.93,5.93,0,0,0,59.2,21.38Z" transform="translate(-0.33 -0.51)"></path>
                                        <path class="cls-f1" d="M67.56,26.52a0.86,0.86,0,0,1-.26-0.63V1.8a0.94,0.94,0,0,1,.24-0.67A0.84,0.84,0,0,1,68.19.88H84.51a0.89,0.89,0,0,1,.93.92V4.28a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.48H83.69a0.89,0.89,0,0,1,.93.92V14.9a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H72.37v6.7H84.8a0.94,0.94,0,0,1,.67.24,0.84,0.84,0,0,1,.26.65v2.52a0.84,0.84,0,0,1-.26.65,0.94,0.94,0,0,1-.67.24H68.19A0.85,0.85,0,0,1,67.56,26.52Z" transform="translate(-0.33 -0.51)"></path>
                                        <path class="cls-f1" d="M90,26.15a8.46,8.46,0,0,1-3.59-2.63A6.21,6.21,0,0,1,85.1,20a0.77,0.77,0,0,1,.22-0.54,0.72,0.72,0,0,1,.55-0.24h3.37a1.12,1.12,0,0,1,.67.19,2,2,0,0,1,.48.52A3.78,3.78,0,0,0,92.07,22a6.58,6.58,0,0,0,3.61.85,7.12,7.12,0,0,0,3.9-.87,2.72,2.72,0,0,0,1.31-2.39,2.26,2.26,0,0,0-.67-1.66,5.56,5.56,0,0,0-2-1.17q-1.35-.5-4-1.2a15.74,15.74,0,0,1-6.4-2.74,6,6,0,0,1-2-4.88,6.49,6.49,0,0,1,1.18-3.83,7.86,7.86,0,0,1,3.39-2.65,12.71,12.71,0,0,1,5.12-1,12.18,12.18,0,0,1,5.31,1.07,8.76,8.76,0,0,1,3.4,2.68,5.93,5.93,0,0,1,1.24,3.2,0.77,0.77,0,0,1-.22.54,0.72,0.72,0,0,1-.55.24h-3.52A1.1,1.1,0,0,1,100,7.57a2.87,2.87,0,0,0-1.44-2,6.72,6.72,0,0,0-6.31,0,2.54,2.54,0,0,0-1.17,2.26,2.41,2.41,0,0,0,.59,1.67,4.83,4.83,0,0,0,1.85,1.17,33.57,33.57,0,0,0,3.66,1.13,25.55,25.55,0,0,1,5.24,1.67,6.83,6.83,0,0,1,2.87,2.33,6.41,6.41,0,0,1,.92,3.59,6.76,6.76,0,0,1-1.31,4.16,8.15,8.15,0,0,1-3.7,2.68,15.25,15.25,0,0,1-5.53.93A14.63,14.63,0,0,1,90,26.15Z" transform="translate(-0.33 -0.51)">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <!-- .footer-logo -->
                            <div class="contact-payment-wrap">
                                <div class="footer-contact-info">
                                    <div class="media">
                                        <span class="media-left icon media-middle">
                                            <i class="tm tm-call-us-footer"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="call-us-title">Got Questions ? Call us 24/7!</span>
                                            <span class="call-us-text">(800) 8001-8588, (0600) 874 548</span>
                                            <address class="footer-contact-address">17 Princess Road, London, Greater London NW1 8JR, UK</address>
                                            <a href="#" class="footer-address-map-link">
                                                <i class="tm tm-map-marker"></i>Find us on map</a>
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .footer-contact-info -->
                                <div class="footer-payment-info">
                                    <div class="media">
                                        <span class="media-left icon media-middle">
                                            <i class="tm tm-safe-payments"></i>
                                        </span>
                                        <div class="media-body">
                                            <h5 class="footer-payment-info-title">We are using safe payments</h5>
                                            <div class="footer-payment-icons">
                                                <ul class="list-payment-icons nav">
                                                    <li class="nav-item">
                                                        <img class="payment-icon-image" src="/images/credit-cards/mastercard.svg" alt="mastercard" />
                                                    </li>
                                                    <li class="nav-item">
                                                        <img class="payment-icon-image" src="/images/credit-cards/visa.svg" alt="visa" />
                                                    </li>
                                                    <li class="nav-item">
                                                        <img class="payment-icon-image" src="/images/credit-cards/paypal.svg" alt="paypal" />
                                                    </li>
                                                    <li class="nav-item">
                                                        <img class="payment-icon-image" src="/images/credit-cards/maestro.svg" alt="maestro" />
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .footer-payment-icons -->
                                            <div class="footer-secure-by-info">
                                                <h6 class="footer-secured-by-title">Secured by:</h6>
                                                <ul class="footer-secured-by-icons">
                                                    <li class="nav-item">
                                                        <img class="secure-icons-image" src="/images/secured-by/norton.svg" alt="norton" />
                                                    </li>
                                                    <li class="nav-item">
                                                        <img class="secure-icons-image" src="/images/secured-by/mcafee.svg" alt="mcafee" />
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .footer-secure-by-info -->
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .footer-payment-info -->
                            </div>
                            <!-- .contact-payment-wrap -->
                        </div>
                        <!-- .footer-contact -->
                        <div class="footer-widgets">
                            <div class="columns">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Find it Fast</h4>
                                        <div class="menu-footer-menu-1-container">
                                            <ul id="menu-footer-menu-1" class="menu">
                                                <li class="menu-item">
                                                    <a href="shop.html">Computers &#038; Laptops</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Cameras &#038; Photography</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Smart Phones &#038; Tablets</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Video Games &#038; Consoles</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">TV</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Car Electronic &#038; GPS</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu-footer-menu-1-container -->
                                    </div>
                                    <!-- .body -->
                                </aside>
                                <!-- .widget -->
                            </div>
                            <!-- .columns -->
                            <div class="columns">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">&nbsp;</h4>
                                        <div class="menu-footer-menu-2-container">
                                            <ul id="menu-footer-menu-2" class="menu">
                                                <li class="menu-item">
                                                    <a href="shop.html">Printers &#038; Ink</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Audio &amp; Music</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Home Theaters</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">PC Components</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Ultrabooks</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Smartwatches</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu-footer-menu-2-container -->
                                    </div>
                                    <!-- .body -->
                                </aside>
                                <!-- .widget -->
                            </div>
                            <!-- .columns -->
                            <div class="columns">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Customer Care</h4>
                                        <div class="menu-footer-menu-3-container">
                                            <ul id="menu-footer-menu-3" class="menu">
                                                <li class="menu-item">
                                                    <a href="login-and-register.html">My Account</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="track-your-order.html">Track Order</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop.html">Shop</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="about.html">About Us</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="terms-and-conditions.html">Returns/Exchange</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="faq.html">FAQs</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu-footer-menu-3-container -->
                                    </div>
                                    <!-- .body -->
                                </aside>
                                <!-- .widget -->
                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .footer-widgets -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .footer-widgets-block -->
                <div class="site-info">
                    <div class="col-full">
                        <div class="copyright">Copyright &copy; 2017 <a href="home-v1.html">Techmarket</a> Theme. All rights reserved.</div>
                        <!-- .copyright -->
                        <div class="credit">Made with
                            <i class="fa fa-heart"></i> by bcube.</div>
                        <!-- .credit -->
                    </div>
                    <!-- .col-full -->
                </div>
                <!-- .site-info -->
            </div>
            <!-- .col-full -->
        </footer>
        <!-- .site-footer -->
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>