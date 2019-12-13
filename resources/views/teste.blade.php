<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<link rel="stylesheet" href="{{ asset('/mycenas/css/icon-font-linea.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/bootstrap-theme.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/themify-icons.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/style.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/effect.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/font-awesome.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/home.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/owl.theme.default.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/owl.carousel.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('/mycenas/css/responsive.css') }}"/>






{{--{{ URL::style('/css/icon-font-linea.css') }}--}}
{{--{{ URL::style('/css/themify-icons.css') }}--}}
{{--{{ URL::style('/css/style.css') }}--}}
{{--{{ URL::style('/css/effect.css') }}--}}
{{--{{ URL::style('/css/font-awesome.min.css') }}--}}
{{--{{ URL::style('/css/home.css') }}--}}
{{--{{ URL::style('/css/owl.theme.default.css') }}--}}
{{--{{ URL::style('/css/owl.carousel.min.css') }}--}}
{{--{{ URL::style('/css/responsive.css') }}--}}


@section('sidebar')

    <script type="text/javascript" src="{{ URL::asset('mycenas/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mycenas/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mycenas/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('mycenas/js/scripts.js') }}"></script>
{{--    <!DOCTYPE html>--}}
{{--    <html lang="en">--}}

{{--    <head>--}}
{{--        <title>Home Page</title>--}}
{{--        <meta name="format-detection" content="telephone=no">--}}
{{--        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1.0" />--}}
{{--        <meta http-equiv="X-UA-Compatible" content="IE=edge" />--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">--}}


{{--        <link rel="stylesheet" type="text/css" href="css/icon-font-linea.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/themify-icons.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/style.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/effect.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/home.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">--}}
{{--        <link rel="stylesheet" type="text/css" href="css/responsive.css">--}}
{{--    </head>--}}

{{--    <body>--}}
    <!-- push menu-->

<!-- push menu-->
<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="fa fa-times f-20"></i></span>
        <div class="clearfix"></div>
        <form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form>
        <ul class="nav-home5 js-menubar">
            <li class="level1 active dropdown">
                <a href="#">Home</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="Cenas.html" title="">Cenas 1</a></li>
                    <li class="level2"><a href="Cenas.html" title="">Cenas 2</a></li>
                    <li class="level2"><a href="Cenas.html" title="">Cenas 3</a></li>
                </ul>
            </li>
            <li class="level1 active dropdown"><a href="#">Shop</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">
                            <a href="#">Shop Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="Cenas.html" title="">Cenas V1</a></li>
                                <li class="level3"><a href="Cenas.html" title="">Cenas V1.2</a></li>
                                <li class="level3"><a href="Cenas.html" title="">Cenas V2</a></li>
                                <li class="level3"><a href="Cenas.html" title="">Cenas V2.2</a></li>
                                <li class="level3"><a href="Cenas.html" title="">Cenas V3</a></li>
                                <li class="level3"><a href="Cenas.html" title="">Cenas V3.2</a></li>
                                <li class="level3"><a href="Cenas.html" title="">Cenas V4</a></li>
                                <li class="level3"><a href="Cenas.html" title="">Cenas V4.2</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="product_v1.html" title="">Produto 1</a></li>
                                <li class="level3"><a href="product_v2.html" title="">Produto 2</a></li>
                                <li class="level3"><a href="product_v3.html" title="">Produto 3</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Order Page</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="cartpage.html" title="">Carrinho</a></li>
                                <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                <li class="level3"><a href="compare.html" title="">qualquer coisa</a></li>
                                <li class="level3"><a href="quickview.html" title="">Quickview</a></li>
                                <li class="level3"><a href="trackyourorder.html">Estado Encomenda</a></li>
                                <li class="level3"><a href="wishlist.html">Favoritos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="level1">
                <a href="#">Pages</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="about.html" title="About Us ">Acerca de Nós </a></li>
                    <li class="level2"><a href="contact.html" title="Contact">Contato</a></li>
                    <li class="level2"><a href="404.html" title="404">404</a></li>
                </ul>
            </li>
            <li class="level1">
                <a href="#">Blog</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="blog.html" title="Blog Standar">Cenas 1</a></li>
                    <li class="level2"><a href="blogdetail.html" title="Blog Gird">Cenas 2</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end push menu-->
<!-- Menu Mobile -->
<div class="menu-mobile-left-content menu-bg-white">
    <ul>
        <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Promoções</p></a></li>
        <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Magnéticos Metal</p></a></li>
        <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Magnéticos Madeira</p></a></li>
        <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Têxteis</p></a></li>
        <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Pedras</p></a></li>
        <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Crachás</p></a></li>
        <li><a href="#"><img src="img/icon_health_gray.png" alt="Icon Health & Beauty" /> <p>Presépios</p></a></li>
        <li><a href="#"><img src="img/icon_mother_gray.png" alt="Icon Mother & Baby" /> <p> Vidros</p></a></li>
        <li><a href="#"><img src="img/icon_book_gray.png" alt="Icon Books & Stationery" /> <p>Personalizados</p></a></li>
        <li><a href="#"><img src="img/icon_home_gray.png" alt="Icon Home & Life" /> <p>Cenas 7</p></a></li>
        <li><a href="#"><img src="img/icon_sport_gray.png" alt="Icon Sports & Outdoors" /> <p>Cenas 8</p></a></li>
        <li><a href="#"><img src="img/icon_auto_gray.png" alt="Icon Auto & Moto" /> <p>Cenas 9</p></a></li>
        <li><a href="#"><img src="img/icon_voucher_gray.png" alt="Icon Voucher Service" /> <p>Cenas 10</p></a></li>
    </ul>
</div>
<!-- Header Box -->
<div class="wrappage">
    <header class="relative full-width">
        <div class=" container-web relative">
            <div class=" container">
                <div class="row">
                    <div class=" header-top">
                        <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin">
                            <img src="img/icon_phone_top.png" alt="Icon Phone Top Header" /> Ligue-nos <span class="text-red bold">232 696 969</span>
                        </p>
                        <div class="menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding">
                            <ul class="clear-margin">
                                <li class="relative"><a href="#">Minha Conta</a></li>
                                <li class="relative"><a href="#">Favoritos</a></li>
                                <li class="relative">
                                    <a href="#">PT</a>
                                    <ul>
                                        <li class="relative"><a href="#">PT</a></li>
                                        <li class="relative"><a href="#">EN</a></li>
                                        <li class="relative"><a href="#">ES</a></li>
                                    </ul>
                                </li>
                                <li class="relative">
                                    <a href="#">EUR</a>
                                    <ul>
                                        <li class="relative"><a href="#">EUR</a></li>
                                        <li class="relative"><a href="#">GBP</a></li>
                                        <li class="relative"><a href="#">USD</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="clearfix header-content full-width relative">
                        <div class="clearfix icon-menu-bar">
                            <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
                        </div>
                        <div class="clearfix logo">
                            <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                        </div>
                        <div class="clearfix search-box relative float-left">
                            <form method="GET" action="/" class="">
                                <div class="clearfix category-box relative">
                                    <select name="cate_search">
                                        <option>Todas as Categorias</option>
                                        <option>Magnéticos Metal</option>
                                        <option>Magnéticos Madeira</option>
                                        <option>Têxteis</option>
                                        <option>Laser</option>
                                        <option>Crachás</option>
                                        <option>Cenas 1</option>
                                        <option>Cenas 2</option>
                                        <option>Cenas 3</option>
                                        <option>Cenas 4</option>
                                        <option>Cenas 5</option>
                                        <option>Cenas 6</option>
                                        <option>Cenas 7</option>
                                    </select>

                                </div>
                                <input type="text" name="s" placeholder="Insira palavra a pesquisar . . .">
                                <button type="submit" class="animate-default button-hover-red">Pesqisar</button>
                            </form>
                        </div>
                        <div class="clearfix icon-search-mobile absolute">
                            <i onclick="showBoxSearchMobile()" class="data-icon data-icon-basic icon-basic-magnifier"></i>
                        </div>
                        <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                            <img alt="Icon Cart" src="img/icon_cart.png" />
                            <p class="count-total-shopping absolute">2</p>
                        </div>
                        <div class="clearfix cart-website absolute" onclick="showCartBoxDetail()">
                            <img alt="Icon Cart" src="img/icon_cart.png" />
                            <p class="count-total-shopping absolute">2</p>
                        </div>
                        <div class="cart-detail-header border">
                            <div class="relative">
                                <div class="product-cart-son clearfix">
                                    <div class="image-product-cart float-left center-vertical-image ">
                                        <a href="#"><img src="img/product_image_6-min.png" alt="" /></a>
                                    </div>
                                    <div class="info-product-cart float-left">
                                        <p class="title-product title-hover-black"><a class="animate-default" href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                    </div>
                                </div>
                                <div class="product-cart-son">
                                    <div class="image-product-cart float-left center-vertical-image">
                                        <a href="#"><img src="img/product_image_7-min.png" alt="" /></a>
                                    </div>
                                    <div class="info-product-cart float-left">
                                        <p class="title-product title-hover-black"><a class="animate-default" href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product">$350 <span class="total-product-cart-son">(x1)</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative border no-border-l no-border-r total-cart-header">
                                <p class="bold clear-margin">Subtotal:</p>
                                <p class=" clear-margin bold">$700</p>
                            </div>
                            <div class="relative btn-cart-header">
                                <a href="#" class="uppercase bold animate-default">view cart</a>
                                <a href="#" class="uppercase bold button-hover-red animate-default">checkout</a>
                            </div>
                        </div>
                        <div class="mask-search absolute clearfix" onclick="hiddenBoxSearchMobile()"></div>
                        <div class="clearfix box-search-mobile">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="menu-vertical hidden-md hidden-lg" onclick="showMenuMobie()">
                        <span class="animate-default"><i class="fa fa-list" aria-hidden="true"></i> Categorias</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-header-v3 hidden-ipx">
            <div class="container">
                <div class="row">
                    <!-- Menu Page -->
                    <div class="menu-header full-width">
                        <ul class="clear-margin">
                            <li onclick="showMenuHomeV3()"><a class="animate-default" href="#"><i class="fa fa-list" aria-hidden="true"></i> Categorias</a></li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">home</a>
                                <ul class="sub-menu mega-menu">
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                        <p><a href="home_v1.html">Home 1</a></p>
                                    </li>
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                        <p><a href="home_v2.html">Home 2</a></p>
                                    </li>
                                    <li class="relative">
                                        <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                        <p><a href="home_v3.html">Home 3</a></p>
                                    </li>
                                </ul>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">Loja</a>
                                <div class="sub-menu mega-menu-v2">
                                    <ul>
                                        <li>Tipo de Produto</li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Category v1</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Category v1.2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Category v2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Category v2.2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Category v3</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Category v3.2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Category v4</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Category v4.2</a></li>
                                    </ul>
                                    <ul>
                                        <li>Outro Tipo de Produto</li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Product Single 1</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Product Single 2</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Product Single 3</a></li>
                                    </ul>
                                    <ul>
                                        <li>e ainda outro Tipo de Produto</li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Cart Page</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Checkout</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Compare</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">QuickView</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Track Order</a></li>
                                        <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">WishList</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">Empresa</a>
                                <ul>
                                    <li class="title-hover-red"><a class="animate-default" href="about.html">Acerca</a></li>
                                    <li class="title-hover-red"><a class="animate-default" href="contact.html">Contactos</a></li>
                                    <li class="title-hover-red"><a class="animate-default" href="404.html">qualquer coisa</a></li>
                                </ul>
                            </li>
                            <li class="title-hover-red">
                                <a class="animate-default" href="#">Blog</a>
                                <ul>
                                    <li class="title-hover-red"><a class="animate-default" href="blog.html">cenas 1</a></li>
                                    <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">cenas 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End Menu Page -->
                </div>
            </div>
        </div>
        <div class="clearfix menu_more_header menu-web menu-bg-white">
            <ul>
                <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
                <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Food</p></a></li>
                <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
                <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>
                <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>
                <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Fashion</p></a></li>
                <li><a href="#"><img src="img/icon_health_gray.png" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>
                <li><a href="#"><img src="img/icon_mother_gray.png" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>
                <li><a href="#"><img src="img/icon_book_gray.png" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>
                <li><a href="#"><img src="img/icon_home_gray.png" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>
                <li><a href="#"><img src="img/icon_sport_gray.png" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>
                <li><a href="#"><img src="img/icon_auto_gray.png" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>
                <li><a href="#"><img src="img/icon_voucher_gray.png" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li>
            </ul>
        </div>
        <div class="header-ontop">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="clearfix logo">
                            <a href="#"><img alt="Logo" src="img/logo.png" /></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu-header">
                            <ul class="main__menu clear-margin">
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">home</a>
                                    <ul class="sub-menu mega-menu">
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v1.html"><img src="img/home_1_menu-min.png" alt=""></a>
                                            <p><a href="home_v1.html">Home 1</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v2.html"><img src="img/home_2_menu-min.png" alt=""></a>
                                            <p><a href="home_v2.html">Home 2</a></p>
                                        </li>
                                        <li class="relative">
                                            <a class="animate-default center-vertical-image" href="home_v3.html"><img src="img/home_3_menu-min.png" alt=""></a>
                                            <p><a href="home_v3.html">Home 3</a></p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">shop</a>
                                    <div class="sub-menu mega-menu-v2">
                                        <ul>
                                            <li>Catgory Type</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1.html">Category v1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v1_2.html">Category v1.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2.html">Category v2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v2_2.html">Category v2.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3.html">Category v3</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v3_2.html">Category v3.2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4.html">Category v4</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="category_v4_2.html">Category v4.2</a></li>
                                        </ul>
                                        <ul>
                                            <li>Single Product Type</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v1.html">Product Single 1</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v2.html">Product Single 2</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="product_v3.html">Product Single 3</a></li>
                                        </ul>
                                        <ul>
                                            <li>Order Page</li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="cartpage.html">Cart Page</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="checkout.html">Checkout</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="compare.html">Compare</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="quickview.html">QuickView</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="trackyourorder.html">Track Order</a></li>
                                            <li class="title-hover-red"><a class="animate-default clear-padding" href="wishlist.html">WishList</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">pages</a>
                                    <ul>
                                        <li class="title-hover-red"><a class="animate-default" href="about.html">About Us</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="contact.html">Contact</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="title-hover-red">
                                    <a class="animate-default" href="#">Blog</a>
                                    <ul>
                                        <li class="title-hover-red"><a class="animate-default" href="blog.html">Blog Category</a></li>
                                        <li class="title-hover-red"><a class="animate-default" href="blogdetail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Box -->
    <!-- Content Box -->
    <div class="relative clearfix full-width">
        <!-- Menu & Slide -->
        <div class="clearfix container-web relative">
            <div class=" container relative">
                <div class="row">
                    <div class=" relative menu-slide col-lg-12 clear-padding bottom-margin-15-default">
                        <!-- Menu -->
                        <div class=" menu-web relative menu-bg-white border no-border-t">
                            <ul>
                                <li><a href="#"><img src="img/icon_hot_gray.png" alt="Icon Hot Deals" /> <p>Hot Deals</p></a></li>
                                <li><a href="#"><img src="img/icon_food_gray.png" alt="Icon Food" /> <p>Food</p></a></li>
                                <li><a href="#"><img src="img/icon_mobile_gray.png" alt="Icon Mobile & Tablet" /> <p>Mobile & Tablet</p></a></li>
                                <li><a href="#"><img src="img/icon_electric_gray.png" alt="Icon Electric Appliances" /> <p>Electric Appliances</p></a></li>
                                <li><a href="#"><img src="img/icon_computer_gray.png" alt="Icon Electronics & Technology" /> <p>Electronics & Technology</p></a></li>
                                <li><a href="#"><img src="img/icon_fashion_gray.png" alt="Icon Fashion" /> <p>Fashion</p></a></li>
                                <li><a href="#"><img src="img/icon_health_gray.png" alt="Icon Health & Beauty" /> <p>Health & Beauty</p></a></li>
                                <li><a href="#"><img src="img/icon_mother_gray.png" alt="Icon Mother & Baby" /> <p>Mother & Baby</p></a></li>
                                <li><a href="#"><img src="img/icon_book_gray.png" alt="Icon Books & Stationery" /> <p>Books & Stationery</p></a></li>
                                <li><a href="#"><img src="img/icon_home_gray.png" alt="Icon Home & Life" /> <p>Home & Life</p></a></li>
                                <li><a href="#"><img src="img/icon_sport_gray.png" alt="Icon Sports & Outdoors" /> <p>Sports & Outdoors</p></a></li>
                                <li><a href="#"><img src="img/icon_auto_gray.png" alt="Icon Auto & Moto" /> <p>Auto & Moto</p></a></li>
                                <li><a href="#"><img src="img/icon_voucher_gray.png" alt="Icon Voucher Service" /> <p>Voucher Service</p></a></li>
                            </ul>
                        </div>
                        <!-- Slide -->
                        <div class="clearfix slide-box-home slide-v3 relative top-margin-15-default left-margin-15-default">
                            <div class="clearfix slide-home owl-carousel owl-theme">
                                <div class="item"><a href="#"><img src="img/slide_v3.png" alt="Banner Home V3"></a></div>
                                <div class="item"><a href="#"><img src="img/banner_v3_1-min.png" alt="Banner Home V3"></a></div>
                            </div>
                        </div>
                        <div class="category-image top-margin-15-default left-margin-15-default float-left border">
                            <div class="owl-carousel owl-theme">
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_slide_top_1-min.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Mobile</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_slide_top_2-min.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Accessory</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_slide_top_3-min.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Camera</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_shore.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Shoes</p>
                                    </a>
                                </div>
                                <div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="img/image_slide_top_4-min.png" alt="Image Shore" />
                                        <a href="#"></a>
                                    </div>
                                    <a href="#">
                                        <p class="uppercase bold">Bags</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix box-banner-small-v3 top-margin-15-default left-margin-15-default box-banner-small">
                            <div class="effect-layla banner-v3-home center-vertical-image zoom-image-hover relative bottom-margin-15-default">
                                <img src="img/banner_slide_v3.png" alt="">
                                <a href="#"></a>
                            </div>
                            <div class="effect-layla banner-v3-home center-vertical-image zoom-image-hover relative">
                                <img src="img/banner_slide_v3_1-min.png" alt="">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Menu & Slide -->
                </div>
            </div>
        </div>
        <!-- Box Banner Percent 3 -->
        <div class=" banner-percent-3 container-web">
            <div class=" container">
                <div class="row">
                    <div class="banner-pecent-3-top bottom-margin-15-default display-table">
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative right-margin-15-default ">
                            <img src="img/banner_percent_3.png" class="" alt="Banner Percent" />
                            <a href="#"></a>
                        </div>
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative">
                            <img src="img/banner_pecent_3_1-min.png" class="" alt="Banner Percent" />
                            <a href="#"></a>
                        </div>
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative left-margin-15-default">
                            <img src="img/banner_pecent_3_2-min.png" class="" alt="Banner Percent" />
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Percent 3 -->
        <!-- List Logo Top -->
        <div class="container-web">
            <div class="container">
                <div class="row list-logo-top-v3">
                    <ul class="clear-margin border-collapsed-box">
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_7.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_8.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_9.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_6.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_10.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_1.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_11.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_2.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_12.png" alt="Logo" /></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_13-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_14-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_15-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_16-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="#"><img src="img/logo_17-min.png" alt="Logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End List Logo Top -->
        <!-- Product Box -->
        <div class="top-margin-default container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-green-bd relative">
                            <img src="img/icon_food_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">fresh food</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#confectionery','.box-food-content')">Confectionery</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#milk-cream','.box-food-content')">Milk & Cream</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#dry-food','.box-food-content')">Dry Food</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#vegetables','.box-food-content')">Vegetables</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID('#drinks','.box-food-content')">Drinks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="img/banner_home_v3-min.png" alt="Banner Home V3">
                            <a href="#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="box-food-content relative animate-default active-box-category hidden-content-box border-collapsed-box" id="confectionery">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="milk-cream">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="dry-food">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="vegetables">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="drinks">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- List Logo V3 -->
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Full With -->
        <div class="clearfix relative full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row overfollow-hidden banners-effect5 relative">
                        <img src="img/banner_full_w.png" alt="Banner Full Width . . .">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
        <!-- Product Box -->
        <div class=" container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-jungle-green-bd relative">
                            <img src="img/icon_phone_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">mobile & tablet</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a onclick="showBoxCateHomeByID('#smart-phone','.box-mobile-content')" href="javascript:;">Smart phone</a></li>
                                <li><a onclick="showBoxCateHomeByID('#tablet','.box-mobile-content')" href="javascript:;">Tablet</a></li>
                                <li><a onclick="showBoxCateHomeByID('#smart-watch','.box-mobile-content')" href="javascript:;">Smart Watch</a></li>
                                <li><a onclick="showBoxCateHomeByID('#case','.box-mobile-content')" href="javascript:;">Case</a></li>
                                <li><a onclick="showBoxCateHomeByID('#gadget','.box-mobile-content')" href="javascript:;">Gadget</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="img/banner_home_v3_1-min.png" alt="Banner Home V3">
                            <a href="#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box active-box-category" id="smart-phone">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="tablet">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="smart-watch">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="case">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="gadget">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- List Logo V3 -->
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Full With -->
        <div class="clearfix relative full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row relative banners-effect5 overfollow-hidden">
                        <img src="img/banner_full_w_1.png" alt="Banner Full Width . . .">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
        <!-- Product Box -->
        <div class=" container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-turquoise-bd relative">
                            <img src="img/icon_electric_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">electric</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a onclick="showBoxCateHomeByID('#television','.box-electric-content')" href="javascript:;">television</a></li>
                                <li><a onclick="showBoxCateHomeByID('#laptop','.box-electric-content')" href="javascript:;">laptop</a></li>
                                <li><a onclick="showBoxCateHomeByID('#camera','.box-electric-content')" href="javascript:;">camera</a></li>
                                <li><a onclick="showBoxCateHomeByID('#audio','.box-electric-content')" href="javascript:;">audio</a></li>
                                <li><a onclick="showBoxCateHomeByID('#accessories','.box-electric-content')" href="javascript:;">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="img/banner_home_v3_2-min.png" alt="Banner Home V3">
                            <a href="#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="border-collapsed-box active-box-category hidden-content-box box-electric-content animate-default" id="television">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="laptop">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="camera">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="audio">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="accessories">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="#"><img src="img/logo_3.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_4.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_5.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_6.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_1.png" alt="Logo"></a></li>
                                <li><a href="#"><img src="img/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Half Website -->
        <div class=" relative banner-half-web full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix content-left col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
                            <div class="overfollow-hidden effect-oscar relative">
                                <img class="max-width" src="img/banner_halt.png" alt="Banner . . ." />
                                <a href="#"></a>
                            </div>
                        </div>
                        <div class="clearfix content-right col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
                            <div class="overfollow-hidden effect-oscar relative">
                                <img class="max-width" src="img/banner_percent_2.png" alt="Banner . . ." />
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Category Percent 2 -->
        <div class=" full-width category-percent-two bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class=" clearfix content-left col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-gold-bg relative">
                                    <img src="img/icon_fashion.png" alt="Icon Fashion" class="absolute" />
                                    <p>fashion</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
                                <img src="img/banner_product_percent.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_1-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_2-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_3-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Impulse Duffle2</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_4-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Rival Field Messenger</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_5-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_6-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Rival Field Messenger</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clearfix content-right col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-violet-bg relative">
                                    <img src="img/icon_health.png" alt="Icon Health & Beauty" class="absolute" />
                                    <p>health & beauty</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
                                <img src="img/banner_p_2_1.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_7-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Cras sed quam</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_8-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_9-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Nullam lectus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_10-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">expedita lirope</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_11-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">corrupti</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_12-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">accusamus odiote</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Category Percent 2 -->
        <!-- Product Category Percent 2 -->
        <div class=" full-width category-percent-two bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class=" clearfix content-left col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-magenta-bg relative">
                                    <img src="img/icon_mother.png" alt="Icon Mother" class="absolute">
                                    <p>mother & baby</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
                                <img src="img/banner_p_2_2.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_13-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Aliquam Consequat</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_14-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Aliquam Consequat</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_15-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Cas Meque Metus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_16-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Donec Ac Tempus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_17-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Donec Non Est</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_18-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Letraset Sheets</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clearfix content-right col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-orchild-bg relative">
                                    <img src="img/icon_auto.png" alt="Icon Auto" class="absolute">
                                    <p>auto & moto</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
                                <img src="img/banner_p_2_3.png" class="max-width" alt="Image . . ." />
                                <a href="#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_19-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Fusce Aliquam</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_20-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Canmentum bar risus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_21-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Ecurna sceleriq</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_22-min.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Odales enimn</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_23.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Placerat ultriciesus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="img/img_product_small_24.png" alt="Product Image . . .">
                                        <a href="#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="#">Placerat ligula</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Category Percent 2 -->
        <!-- Banner Full With -->
        <div class=" relative full-width bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row overfollow-hidden banners-effect5 relative">
                        <img src="img/banner_full_width_v3-min.png" alt="Banner Full Width . . .">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
    </div>
    <!-- End Content Box -->
    <!-- Footer Box -->
    <footer class=" bg-gray full-width border no-border-r no-border-l footer-v3 no-border-b">
        <div class="clearfix container-web relative">
            <div class=" container clear-padding">
                <div class="row">
                    <!-- Support -->
                    <div class="clearfix support-box support-box-v3 full-width">
                        <div class="container-web clearfix">
                            <div class=" container ">
                                <div class="row">
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="img/icon_free_ship.png" alt="Icon Free Ship" class="float-left" />
                                        <p class="float-left">Envios Gratuitos</p>
                                        <p class="float-left">Compras superiores a 500€</p>
                                    </div>
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="img/icon_support.png" alt="Icon Supports" class="float-left">
                                        <p class="float-left">suporte</p>
                                        <p class="float-left">life time support 24/7</p>
                                    </div>
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="img/icon_patner.png" alt="Icon partner" class="float-left">
                                        <p class="float-left">help partner</p>
                                        <p class="float-left">help all aspects</p>
                                    </div>
                                    <div class=" support-box-info relative col-md-3 col-sm-3 col-xs-6">
                                        <img src="img/icon_phone_big.png" alt="Icon Phone Tablet" class="float-left">
                                        <p class="float-left">Contacta-nos</p>
                                        <p class="float-left">232 428 491</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Support Box -->
                </div>
                <div class="row">
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>A Minha Conta</p>
                        <ul class="list-footer">
                            <li><a href="#">Conta</a></li>
                            <li><a href="#">Entrar</a></li>
                            <li><a href="#">Carrinho</a></li>
                            <li><a href="#">Favoritos</a></li>
                            <li><a href="#">Comparações</a></li>
                        </ul>
                    </div>
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>Informação</p>
                        <ul class="list-footer">
                            <li><a href="#">Informações</a></li>
                            <li><a href="#">Minhas Encomendas</a></li>
                            <li><a href="#">Favoritos</a></li>
                            <li><a href="#">Politica de Privacidade</a></li>
                            <li><a href="#">Mapa do WebSite</a></li>
                        </ul>
                    </div>
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>Nossos Serviços</p>
                        <ul class="list-footer">
{{--                            <li><a href="#">Product Recall</a></li>--}}
                            <li><a href="#">Vouchers</a></li>
                            <li><a href="#">Devoluções e/ou trocas</a></li>
                            <li><a href="#">Opções de envio</a></li>
                            <li><a href="#">Termos de Uso</a></li>
                        </ul>
                    </div>
                    <div class="clearfix col-md-3 col-sm-6 col-xs-12 text-footer">
                        <p>contact us</p>
                        <ul class="icon-footer">
                            <li><i class="fa fa-home" aria-hidden="true"></i> Av. Cap. Silva Pereira 24, 3500-160 Viseu</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> geral@allprint.pt</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>  232 428 491</li>
{{--                            <li><i class="fa fa-fax" aria-hidden="true"></i> 070-7782-9138</li>--}}
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 19:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Box Social -->
        <div class=" top-footer full-width">
            <div class="clearfix container-web relative">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix col-md-9 col-sm-12 clear-padding col-xs-12">
                            <div class="clearfix text-subscribe">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <p>sign up for newsletter</p>
                                <p>Get updates on discount & counpons.</p>
                            </div>
                            <div class="clearfix form-subscribe">
                                <input type="text" name="email-subscribe" placeholder="inserir e-mail . . .">
                                <button class="animate-default button-hover-red">subescrever</button>
                            </div>
                        </div>
                        <div class="clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right">
                            <a href="#"><img src="img/social_tw-min.png" alt="Icon Social Twiter"></a>
                            <a href="#"><img src="img/social_fa-min.png" alt="Icon Social Facebook"></a>
                            <a href="#"><img src="img/social_int-min.png" alt="Icon Social Instagram"></a>
                            <a href="#"><img src="img/social_yt-min.png" alt="Icon Social Youtube" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Box Social -->
        <div class=" bottom-footer full-width">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix col-md-7 clear-padding copyright">
                            <p>Copyright © 2019 by E-SomeONE All Rights Reserved.</p>
                        </div>
                        <div class="clearfix footer-icon-bottom col-md-5 float-right clear-padding">
                            <div class="icon_logo_footer float-right">
                                <img src="img/image_payment_footer-min.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- End Footer Box -->

{{--    </body>--}}

    </html>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>

