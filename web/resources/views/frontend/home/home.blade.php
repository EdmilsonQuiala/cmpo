@extends('frontend.layouts.home')
@section('content')
    <div class="tabs">
        <div id="tab-home" class="tab tab-active tab-home">
            <div class="navbar navbar-home">
                <div class="navbar-inner">
                    <div class="left">
                        {{-- <a href="#" class="panel-open" data-panel="left">
                            <i class="fas fa-bars"></i>
                        </a> --}}
                    </div>
                    <div class="title">
                        <h2 style="color: #39673d">AFERCON PAY</h2>
                    </div>
                    <div class="right">
                        <a href="#">
                            <i class="fas fa-bell"></i>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="subnavbar">
                <form class="searchbar searchbar-init" data-search-container=".search-list" data-search-in=".item-title">
                    <div class="searchbar-inner">
                        <div class="searchbar-input-wrap">
                            <input type="search" placeholder="Pesquise por moedas...">
                            <i class="searchbar-icon"></i>
                            <span class="input-clear-button"></span>
                        </div>
                        <span class="searchbar-disable-button">Cancelar</span>
                    </div>
                </form>
            </div>

            <div class="divider-line-half"></div>

            <div class="panel-backdrop"></div>

            <div class="panel panel-left panel-cover sidebar">
                <div class="list accordion-list">
                    <ul>
                        <li class="accordion-item">
                            <a href="#" class="item-link item-content">
                                <div class="item-media">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Shop Pages</div>
                                </div>
                            </a>
                            <div class="accordion-item-content">

                                <div class="divider-space-text"></div>

                                <a href="/shopping-cart/" class="panel-close"><i class="fas fa-shopping-cart"></i>Shopping Cart</a>
                                <a href="/all-categories/" class="panel-close"><i class="fas fa-layer-group"></i>Categories</a>
                                <a href="/wishlist/" class="panel-close"><i class="fas fa-heart"></i>Wishlist</a>
                                <a href="/checkout/" class="panel-close"><i class="fas fa-cart-arrow-down"></i>Checkout</a>
                                <a href="/account-buyer/" class="panel-close"><i class="fas fa-user"></i>Account Buyer</a>
                                <a href="/account-seller/" class="panel-close"><i class="fas fa-user"></i>Account Seller</a>
                                <a href="/tracking-order/" class="panel-close"><i class="fas fa-truck"></i>Tracking Order</a>
                                <a href="/order-history/" class="no-mb panel-close"><i class="fas fa-history"></i><span>Order History</span></a>

                                <div class="divider-space-text"></div>
                            </div>
                        </li>
                        <li>
                            <a href="/blog/" class="item-link item-content panel-close">
                                <div class="item-media">
                                    <i class="fas fa-blog"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Blog</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/blog-single/" class="item-link item-content panel-close">
                                <div class="item-media">
                                    <i class="fas fa-rss"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Blog Single</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/sign-in/" class="item-link item-content panel-close">
                                <div class="item-media">
                                    <i class="fas fa-sign-in-alt"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Sign In</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/sign-up/" class="item-link item-content panel-close">
                                <div class="item-media">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Sign Up</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/contact-seller/" class="item-link item-content panel-close">
                                <div class="item-media">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Contact Seller</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item-link item-content panel-close">
                                <div class="item-media">
                                    <i class="fas fa-power-off"></i>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title">Logout</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="categories segments">
                <div class="container">
                    <div class="row">
                        <div class="col-30">
                            <div class="content">
                                <a href="/all-categories/">
                                    <div class="icon">
                                        <i class="fa fa-plus-square"></i>
                                    </div>
                                    <span>Adicionar</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="content">
                                <a href="/categories-details/">
                                    <div class="icon">
                                        <i class="fa fa-upload"></i>
                                    </div>
                                    <span>Levantar</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="content">
                                <a href="/categories-details/">
                                    <div class="icon">
                                        <i class="fa fa-paper-plane"></i>
                                    </div>
                                    <span>Enviar</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="content">
                                <a href="/categories-details/">
                                    <div class="icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <span>Solicitar</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="content">
                                <a href="/categories-details/">
                                    <div class="icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <span>Cartão virtual</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-30">
                            <div class="content">
                                <a href="/categories-details/">
                                    <div class="icon">
                                        <i class="fa fa-qrcode"></i>
                                    </div>
                                    <span>Scanear</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flash-sale segments no-pd-b">
                <div class="container">
                    <div class="section-title">
                        <h3>Moedas disponíveis</h3>
                    </div>
                    <div class="section-title flash-s-title">
                        <h3></h3>
                        <div data-space-between="10" data-slides-per-view="auto" class="swiper-container swiper-init">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="product-mark-discount">
                                                <ul>
                                                    <li>1</li>
                                                    <li>10%</li>
                                                </ul>
                                            </div>
                                            <img src="{{ asset('frontend/images/afercon/moedas/dolar-2.png') }}" alt="flash-sale">
                                            <div class="text">
                                                <p>= 850 Kwanzas <span></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="product-mark-discount">
                                                <ul>
                                                    <li>1</li>
                                                    <li>30%</li>
                                                </ul>
                                            </div>
                                            <img src="{{ asset('frontend/images/afercon/moedas/euro-2.png') }}" alt="flash-sale">
                                            <div class="text">
                                                <p>= 930 Kwanzas <span></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="product-mark-discount">
                                                <ul>
                                                    <li>1</li>
                                                    <li>2%</li>
                                                </ul>
                                            </div>
                                            <img src="{{ asset('frontend/images/afercon/moedas/brazilian-real_2.png') }}" alt="flash-sale">
                                            <div class="text">
                                                <p>= 520 Kwanzas <span></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content content-shadow-product">
                                        <a href="/product-details/">
                                            <div class="product-mark-discount">
                                                <ul>
                                                    <li>1</li>
                                                    <li>3%</li>
                                                </ul>
                                            </div>
                                            <img src="{{ asset('frontend/images/afercon/moedas/yen-2.png') }}" alt="flash-sale">
                                            <div class="text">
                                                <p>= 680 Kwanzas <span></span></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="popular-product segments-bottom">
                <div class="container">
                    <div class="section-title">
                        <h3>Seus cartões
                            <a href="#" class="see-all-link">Ver todos</a>
                        </h3>
                    </div>
                    <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" data-slides-per-view="2" class="swiper-container swiper-init">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <img src="{{ asset('frontend/images/afercon/moedas/visa.png') }}" alt="product">
                                        <div class="text">
                                            <p class="price">$ 500.00</p>
                                            <p class="title-product">0255.2220.0000.0000.0000</p>
                                            <p class="location">Expira: <strong>07/2028</strong> | CVV: <strong>123</strong></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <img src="{{ asset('frontend/images/afercon/moedas/mastercard.png') }}" alt="product">
                                        <div class="text">
                                            <p class="price">$ 500.00</p>
                                            <p class="title-product">0255.2220.0000.0000.0000</p>
                                            <p class="location">Expira: <strong>07/2028</strong> | CVV: <strong>123</strong></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <img src="{{ asset('frontend/images/afercon/moedas/visa.png') }}" alt="product">
                                        <div class="text">
                                            <p class="price">$ 500.00</p>
                                            <p class="title-product">0255.2220.0000.0000.0000</p>
                                            <p class="location">Expira: <strong>07/2028</strong> | CVV: <strong>123</strong></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recommended product segments-bottom">
                <div class="container">
                    <div class="section-title">
                        <h3>Outros serviços
                            <a href="#" class="see-all-link">Ver todos</a>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-50">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <img src="{{ asset('frontend/images/afercon/moedas/logo.png') }}" alt="product">
                                    <div class="text">
                                        <p class="title-product">Programa de Pontos</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <img src="{{ asset('frontend/images/afercon/moedas/logo.png') }}" alt="product">
                                    <div class="text">
                                        <p class="title-product">Relatórios e Controle Financeiro</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-50">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <img src="{{ asset('frontend/images/afercon/moedas/logo.png') }}" alt="product">
                                    <div class="text">
                                        <p class="title-product">Compra de Serviços internacionais</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="content content-shadow-product">
                                <a href="/product-details/">
                                    <img src="{{ asset('frontend/images/afercon/moedas/logo.png') }}" alt="product">
                                    <div class="text">
                                        <p class="title-product">Compra de Serviços Nacionais</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab-brand" class="page-content tab">

            <div class="navbar navbar-page">
                <div class="navbar-inner">
                    <div class="left"></div>
                    <div class="title">
                        Official Brand
                    </div>
                    <div class="right"></div>
                </div>
            </div>

            <div class="official-brand">
                <div class="container">

                    <div class="slider-brand segments-bottom">
                        <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="mask"></div>
                                        <img src="{{ asset('frontend/images/banner4.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="mask"></div>
                                        <img src="{{ asset('frontend/images/banner5.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content">
                                        <div class="mask"></div>
                                        <img src="{{ asset('frontend/images/banner6.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="popular-brand segments-bottom">
                        <div class="section-title">
                            <h3>Populars Brand <a href="#" class="see-all-link">See All</a></h3>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/trip.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/wobag.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/john.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/alya.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/green.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/zona.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/beauty.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-25">
                                <div class="content">
                                    <a href="#"><img src="{{ asset('frontend/images/fitbro.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="brand-promo segments-bottom product">
                        <div class="section-title">
                            <h3>Brand Promo Specials <a href="#" class="see-all-link">See All</a></h3>
                        </div>
                        <div class="row">
                            <div class="col-50">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <div class="product-mark-discount">
                                            <ul>
                                                <li>50%</li>
                                                <li>OFF</li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('frontend/images/product1.jpg') }}" alt="">
                                        <div class="text">
                                            <p class="title-product">Sweater with high quality misty-fabric</p>
                                            <p class="price">$85.00</p>
                                            <p class="location">New York</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <div class="product-mark-discount">
                                            <ul>
                                                <li>50%</li>
                                                <li>OFF</li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('frontend/images/product3.jpg') }}" alt="">
                                        <div class="text">
                                            <p class="title-product">Jacket - original parachute material</p>
                                            <p class="price">$199.99</p>
                                            <p class="location">New York</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-50">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <div class="product-mark-discount">
                                            <ul>
                                                <li>50%</li>
                                                <li>OFF</li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('frontend/images/product5.jpg') }}" alt="">
                                        <div class="text">
                                            <p class="title-product">Long sleeve black shirt - comfortable</p>
                                            <p class="price">$90.00</p>
                                            <p class="location">New York</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <div class="product-mark-discount">
                                            <ul>
                                                <li>50%</li>
                                                <li>OFF</li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('frontend/images/product6.jpg') }}" alt="">
                                        <div class="text">
                                            <p class="title-product">Long-sleeved brown sweater, soft material</p>
                                            <p class="price">$50.00</p>
                                            <p class="location">New York</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-50">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <div class="product-mark-discount">
                                            <ul>
                                                <li>50%</li>
                                                <li>OFF</li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('frontend/images/product9.jpg') }}" alt="">
                                        <div class="text">
                                            <p class="title-product">Long-sleeved gray Sweater, soft material</p>
                                            <p class="price">$77.00</p>
                                            <p class="location">New York</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="content content-shadow-product">
                                    <a href="/product-details/">
                                        <div class="product-mark-discount">
                                            <ul>
                                                <li>50%</li>
                                                <li>OFF</li>
                                            </ul>
                                        </div>
                                        <img src="{{ asset('frontend/images/product10.jpg') }}" alt="">
                                        <div class="text">
                                            <p class="title-product">Thick jacket suitable for winter - free hat</p>
                                            <p class="price">$110.00</p>
                                            <p class="location">New York</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="tab-cart" class="page-content tab">

            <div class="navbar navbar-page">
                <div class="navbar-inner">
                    <div class="left"></div>
                    <div class="title">
                        Shopping Cart
                    </div>
                    <div class="right"></div>
                </div>
            </div>

            <div class="cart segments">
                <div class="container">
                    <div class="name-store">
                        <img src="{{ asset('frontend/images/user-seller1.png') }}" alt="">
                        <div class="title-store">
                            <h6>ABC Shoes Store</h6>
                        </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-10">
                                <div class="content-checkbox">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <i class="icon-checkbox"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-90">
                                <div class="content-cart content-shadow-product">
                                    <img src="{{ asset('frontend/images/product8.jpg') }}" alt="">
                                    <div class="product-info">
                                        <a href="#"><p class="title-product">Loafers with genuine leather</p></a>
                                        <p class="price">$50.00</p>
                                    </div>
                                    <div class="number-goods">
                                        <div class="stepper stepper-small stepper-init">
                                            <div class="stepper-button-minus"></div>
                                            <div class="stepper-input-wrap">
                                                <input type="text" value="0" readonly>
                                            </div>
                                            <div class="stepper-button-plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-10">
                                <div class="content-checkbox">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <i class="icon-checkbox"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-90">
                                <div class="content-cart content-shadow-product">
                                    <img src="{{ asset('frontend/images/product12.jpg') }}" alt="">
                                    <div class="product-info">
                                        <a href="#"><p class="title-product">The latest brand of loafers</p></a>
                                        <p class="price">$50.00</p>
                                    </div>
                                    <div class="number-goods">
                                        <div class="stepper stepper-small stepper-init">
                                            <div class="stepper-button-minus"></div>
                                            <div class="stepper-input-wrap">
                                                <input type="text" value="0" readonly>
                                            </div>
                                            <div class="stepper-button-plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider-line-half"></div>

                    <div class="name-store">
                        <img src="{{ asset('frontend/images/user-seller2.png') }}" alt="">
                        <div class="title-store">
                            <h6>Shirt Mart</h6>
                        </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-10">
                                <div class="content-checkbox">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <i class="icon-checkbox"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-90">
                                <div class="content-cart content-shadow-product">
                                    <img src="{{ asset('frontend/images/flash-sale1.jpg') }}" alt="">
                                    <div class="product-info">
                                        <a href="#"><p class="title-product">Cheap, plain t-shirts</p></a>
                                        <p class="price">$50.00</p>
                                    </div>
                                    <div class="number-goods">
                                        <div class="stepper stepper-small stepper-init">
                                            <div class="stepper-button-minus"></div>
                                            <div class="stepper-input-wrap">
                                                <input type="text" value="0" readonly>
                                            </div>
                                            <div class="stepper-button-plus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-line-full"></div>

                <div class="wrap-total-cart">
                    <div class="container">
                        <div class="row">
                            <div class="col-40">
                                <div class="content-total">
                                    <p>Total</p>
                                    <h6>$150</h6>
                                </div>
                            </div>
                            <div class="col-60">
                                <div class="content-button">
                                    <a href="/checkout/" class="button primary-button"><i class="fas fa-shopping-bag"></i>Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="tab-account" class="page-content tab">

            <div class="navbar navbar-page">
                <div class="navbar-inner">
                    <div class="left"></div>
                    <div class="title">
                        Account Buyer
                    </div>
                    <div class="right">
                        <a href="/settings/">
                            <i class="fas fa-cog"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="account-buyer segments">
                <div class="container">
                    <div class="header-account content-shadow">
                        <img src="{{ asset('frontend/images/user-buyer6.png') }}" alt="">
                        <div class="title-name">
                            <h5>Airy Fashion</h5>
                            <p><i class="fas fa-map-marker-alt"></i>Washington</p>
                        </div>
                    </div>
                </div>
                <div class="container segments">
                    <div class="info-balance content-shadow">
                        <div class="row">
                            <div class="col-50">
                                <div class="content-text">
                                    <p>Your Balance</p>
                                    <h5>$310.00</h5>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="content-button">
                                    <a href="#" class="button primary-button"><i class="fas fa-wallet"></i>Top Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-menu">
                    <div class="list media-list">
                        <ul>
                            <li>
                                <a href="/wishlist/" class="item-link item-content">
                                    <div class="item-media">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">Wishlist</div>
                                        </div>
                                        <div class="item-subtitle">All products that you have saved</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/transaction/" class="item-link item-content">
                                    <div class="item-media">
                                        <i class="fas fa-exchange-alt"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">Transaction</div>
                                        </div>
                                        <div class="item-subtitle">All your transactions are here</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/notification/" class="item-link item-content">
                                    <div class="item-media">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">Notification</div>
                                        </div>
                                        <div class="item-subtitle">Transaction, Purchase, Notification update</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/faq/" class="item-link item-content">
                                    <div class="item-media">
                                        <i class="fas fa-question"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">Help</div>
                                        </div>
                                        <div class="item-subtitle">Need Help, Frequently Asked Questions</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/contact-seller/" class="item-link item-content">
                                    <div class="item-media">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">Contact Seller</div>
                                        </div>
                                        <div class="item-subtitle">Other questions can contact me</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="item-link item-content">
                                    <div class="item-media">
                                        <i class="fas fa-power-off"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">Logout</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
