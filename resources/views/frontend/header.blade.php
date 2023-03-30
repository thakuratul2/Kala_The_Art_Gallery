<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kala</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('assets/css/plugins.css')}}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style2.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style-prefix.css')}}">
</head>

<body class="template-index belle template-index-belle">
    <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div>
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"
                            style="color: white;"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..."
                        aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                        <div class="currency-picker">
                            <span class="selected-currency">INR</span>
                            <ul id="currencies">
                                <li data-currency="INR" class="">USD</li>
    
                            </ul>
                        </div>
                        <div class="language-dropdown">
                            <span class="language-dd">English</span>
                            <ul id="language">
                                <li class="">Hindi</li>
    
                            </ul>
                        </div>
                        <p class="phone-no"><i class="anm anm-phone-s"></i> +91 8192002404</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Create Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap classicHeader animated d-flex">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="{{url('/')}}">
                            <img src="assets/images/" alt="kala" title="kala" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="#">Home <i
                                            class="anm anm-angle-down-l"></i></a>
    
                                </li>
    
                                <li class="lvl1 parent megamenu"><a href="#">Gallery <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <div class="megamenu style2">
                                        <ul class="grid mmWrapper">
                                            <li class="grid__item one-whole">
                                                <ul class="grid">
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Page</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="product-layout-1.html"
                                                                    class="site-nav lvl-2">Product Layout 1</a></li>
                                                            <li class="lvl-2"><a href="product-layout-2.html"
                                                                    class="site-nav lvl-2">Product Layout 2</a></li>
                                                            <li class="lvl-2"><a href="product-layout-3.html"
                                                                    class="site-nav lvl-2">Product Layout 3</a></li>
                                                            <li class="lvl-2"><a href="product-with-left-thumbs.html"
                                                                    class="site-nav lvl-2">Product With Left Thumbs</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-with-right-thumbs.html"
                                                                    class="site-nav lvl-2">Product With Right Thumbs</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-with-bottom-thumbs.html"
                                                                    class="site-nav lvl-2">Product With Bottom
                                                                    Thumbs</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Features</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="short-description.html"
                                                                    class="site-nav lvl-2">Short Description</a></li>
                                                            <li class="lvl-2"><a href="product-countdown.html"
                                                                    class="site-nav lvl-2">Product Countdown</a></li>
                                                            <li class="lvl-2"><a href="product-video.html"
                                                                    class="site-nav lvl-2">Product Video</a></li>
                                                            <li class="lvl-2"><a href="product-quantity-message.html"
                                                                    class="site-nav lvl-2">Product Quantity Message</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-visitor-sold-count.html"
                                                                    class="site-nav lvl-2">Product Visitor/Sold Count
                                                                    <span class="lbl nm_label3">Hot</span></a></li>
                                                            <li class="lvl-2"><a href="product-zoom-lightbox.html"
                                                                    class="site-nav lvl-2">Product Zoom/Lightbox <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Features</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="product-with-variant-image.html"
                                                                    class="site-nav lvl-2">Product with Variant
                                                                    Image</a></li>
                                                            <li class="lvl-2"><a href="product-with-color-swatch.html"
                                                                    class="site-nav lvl-2">Product with Color Swatch</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-with-image-swatch.html"
                                                                    class="site-nav lvl-2">Product with Image Swatch</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-with-dropdown.html"
                                                                    class="site-nav lvl-2">Product with Dropdown</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-with-rounded-square.html"
                                                                    class="site-nav lvl-2">Product with Rounded
                                                                    Square</a></li>
                                                            <li class="lvl-2"><a href="swatches-style.html"
                                                                    class="site-nav lvl-2">Product Swatches All
                                                                    Style</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Features</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="{{url('/product')}}"
                                                                    class="site-nav lvl-2">Product Accordion</a></li>
                                                            <li class="lvl-2"><a href="product-pre-orders.html"
                                                                    class="site-nav lvl-2">Product Pre-orders <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                            <li class="lvl-2"><a href="product-labels-detail.html"
                                                                    class="site-nav lvl-2">Product Labels</a></li>
                                                            <li class="lvl-2"><a href="product-discount.html"
                                                                    class="site-nav lvl-2">Product Discount In %</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-shipping-message.html"
                                                                    class="site-nav lvl-2">Product Shipping Message</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="size-guide.html"
                                                                    class="site-nav lvl-2">Size Guide <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="grid__item large-up--one-whole imageCol"><a href="#"><img
                                                        src="assets/images/megamenu-bg2.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Artist<i
                                            class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="cart-variant1.html" class="site-nav">Cart Page <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                                                <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="compare-variant1.html" class="site-nav">Compare Product <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="compare-variant1.html" class="site-nav">Compare
                                                        Variant1</a></li>
                                                <li><a href="compare-variant2.html" class="site-nav">Compare
                                                        Variant2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                                        <li><a href="about-us.html" class="site-nav">About Us <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                        <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                                        <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                                        <li><a href="lookbook1.html" class="site-nav">Lookbook<i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul>
                                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                                <li><a href="lookbook2.html" class="site-nav">Style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html" class="site-nav">404</a></li>
                                        <li><a href="coming-soon.html" class="site-nav">Coming soon <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">About Us <i
                                            class="anm anm-angle-down-l"></i></a>
    
                                </li>
                                <li class="lvl1"><a href="#">Contact Us <i class="anm anm-angle-down-l"></i></a></li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images" alt="kala"
                                    title="kala" />
                            </a>
                        </div>
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count"
                                    data-cart-render="item_count">2</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/collection/paint2.jpg"
                                                alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Painting 1</a>
                                            <div class="variant-cart">By Atul Pratap Singh</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">₹59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/collection/paint6.jpg"
                                                alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Painting 2</a>
                                            <div class="variant-cart">By Sidharth Agarwal</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1"
                                                        class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">₹99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span
                                                class="money">₹748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="{{url('/cart')}}" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--EndMinicart Popup-->
                        </div>
                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"
                                    style="color: white;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
        <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
            <li class="lvl1 parent megamenu"><a href="index.html">Home </a>

            </li>
            <li class="lvl1 parent megamenu"><a href="#">Gallery </a>

            </li>
            <li class="lvl1 parent megamenu"><a href="product-layout-1.html">Artist</a>

            </li>
            <li class="lvl1 parent megamenu"><a href="about-us.html">About Us</a>

            </li>
            <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Contact Us </a>

            </li>
            
        </ul>
    </div>
    <!--End Mobile Menu-->