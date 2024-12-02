@extends('layouts.web')

@section('content')
    <!-- hero section start  -->
    <section class="hero hero-two pos-rel pt-120 mb-160">
        <div class="hero-img" data-background="{{ asset('assets/web/assets/img/bg/hero-bg2.png') }}"></div>
        <div class="hero-shape-two">
            <div class="shape--1">
                <img class="topToBottom" src="{{ asset('assets/web/assets/img/shape/hero-sp_07.svg') }}" alt="">
            </div>
            <div class="shape--2">
                <img class="leftToRight" src="{{ asset('assets/web/assets/img/shape/hero-sp_08.svg') }}" alt="">
            </div>
        </div>
        <div class="xb-hero-shape">
            <div class="shape shape--1">
                <img class="rotateme2" src="{{ asset('assets/web/assets/img/shape/h_shape1.png') }}" alt="">
            </div>
            <div class="shape shape--2">
                <img class="rotateme" src="{{ asset('assets/web/assets/img/shape/h_shape2.png') }}" alt="">
            </div>
            <div class="shape shape--3">
                <img src="{{ asset('assets/web/assets/img/shape/h_shape3.png') }}" alt="">
            </div>
            <div class="shape shape--4"></div>
        </div>
        <div class="container pos-rel">
            <div class="hero__content-wrap hero-style-two text-center">
                <div class="section-title hero--sec-titlt-two wow fadeInUp" data-wow-duration=".7s">
                    <h1 class="title">Trusted Secure Cryco <br> <span>Crypto</span> Exchange</h1>
                </div>
                <p class="xb-item--content wow fadeInUp" data-wow-duration=".7s" data-wow-delay="150ms">
                    Welcome to our trusted Cryco crypto exchange. Security is paramount. Trade with confidence.
                </p>
                <div class="hero__btn btns pt-60 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="250ms">
                    <a class="them-btn" href="contact.html">
                        <span class="btn_label" data-text="Get Started">Get Started</span>
                        <span class="btn_icon">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                    fill="white"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="contact.html" class="them-btn btn-transparent">
                        <span class="btn_label" data-text="Explore More">Explore More</span>
                        <span class="btn_icon">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                    fill="white"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="hero-dashbord wow fadeInUp" data-wow-duration=".7s" data-wow-delay="350ms">
                    <img src="{{ asset('assets/web/assets/img/hero/Dashbord.png') }}" alt="">
                    <div class="dashbord-shape">
                        <div class="shape shape--1">
                            <img class="topToBottom" src="{{ asset('assets/web/assets/img/shape/hero-sp_09.svg') }}"
                                alt="">
                        </div>
                        <div class="shape shape--2">
                            <img class="topToBottom2" src="{{ asset('assets/web/assets/img/shape/hero-sp_10.svg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay-shape">
            <div class="shape shape--1">
                <img src="{{ asset('assets/web/assets/img/hero/shape-color1.png') }}" alt="">
            </div>
            <div class="shape shape--2">
                <img src="{{ asset('assets/web/assets/img/hero/shape-color2.png') }}" alt="">
            </div>
        </div>
    </section>
    <!-- hero section end  -->

    <!-- partners section start  -->
    <section class="partners z-1 pos-rel partners-two pt-200">
        <div class="patners-title text-center">
            <span><img src="{{ asset('assets/web/assets/img/partner/partner_07.png') }}" alt=""> our
                top
                partners <img src="{{ asset('assets/web/assets/img/partner/partner_08.png') }}" alt=""></span>
        </div>
        <div class="partner-slider partner-slider-two ul_li">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('assets/web/assets/img/partner/partner_09.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('assets/web/assets/img/partner/partner_10.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('assets/web/assets/img/partner/partner_11.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('assets/web/assets/img/partner/partner_12.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('web/assets/img/partner/partner_13.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('web/assets/img/partner/partner_09.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('web/assets/img/partner/partner_14.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('web/assets/img/partner/partner_15.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('web/assets/img/partner/partner_16.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('web/assets/img/partner/partner_14.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="xb-item--brand">
                        <div class="xb-item--brand_logo">
                            <img src="{{ asset('web/assets/img/partner/partner_15.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partners section end  -->

    <!-- feature section start -->
    <section class="feature z-1 pos-rel pt-110">
        <div class="container">
            <div class="section-title pb-55">
                <h1 class="title">How It Works</h1>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('web/assets/img/feature/feature-icon1.png') }}" alt="">
                            </div>
                            <h2 class="xb-item--title">Create Wallet</h2>
                            <p class="xb-item--content">Secure your digital assets effortlessly.Join now for
                                peace of mind.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature top-border pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('web/assets/img/feature/feature-icon2.png" alt="') }}">
                            </div>
                            <h2 class="xb-item--title">Create Account</h2>
                            <p class="xb-item--content">Get started in seconds. Sign up for your account
                                effortlessly with us today.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('web/assets/img/feature/feature-icon3.png" alt="') }}">
                            </div>
                            <h2 class="xb-item--title">Register</h2>
                            <p class="xb-item--content">Begin your journey swiftly. Sign up now and access
                                limitless with ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature top-border pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('web/assets/img/feature/feature-icon1.png" alt="') }}">
                            </div>
                            <h2 class="xb-item--title">Start Trading</h2>
                            <p class="xb-item--content">Dive in now. Seamlessly begin your trading journey with
                                us endless possibilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xb-feature-shape">
            <div class="shape shape--1">
                <img src="{{ asset('web/assets/img/shape/h_shape3.png" alt="') }}">
            </div>
            <div class="shape shape--2">
                <img data-parallax='{"y":-70}' src="{{ asset('web/assets/img/shape/f_line_shape.png" alt="') }}">
            </div>
        </div>
    </section>
    <!-- feature section end -->

    <!-- feature crypto start -->
    <section id="features" class="feature pos-rel z-1 mt-130">
        <div class="feature-crypto-wrap pt-125 pb-120">
            <div class="fea-shape">
                <img src="{{ asset('web/assets/img/feature/fea-shape-01.png" alt="') }}">
                <img src="{{ asset('web/assets/img/feature/fea-shape-01.png" alt="') }}">
            </div>
            <div class="container">
                <div class="section-title pb-55 text-center">
                    <h1 class="title">The best crypto features you won't find anywhere else</h1>
                </div>
                <div class="row align-items-start">
                    <div class="col-lg-7 ">
                        <div class="feature-left-inner">
                            <div class="row">
                                <div class="col-lg-12 mb-30">
                                    <div class="xb-freatue-crypto bg_img ul_li "
                                        data-background="{{ asset('web/assets/img/feature/feature-col-bg.svg') }}">
                                        <div class="xb-item--holder">
                                            <h2 class="xb-item--title">Decentralized Identity Verification</h2>
                                            <p class="xb-item--content">
                                                Decentralized Identity Verification offers a secure and
                                                transparent solution for authenticating identities without
                                                relying.
                                            </p>
                                        </div>
                                        <div class="xb-item--img col-img">
                                            <img src="{{ asset('web/assets/img/feature/feature-col-item.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <div class="xb-freatue-crypto bg_img ul_li"
                                        data-background="{{ asset('web/assets/img/feature/feature-col-bg1.svg') }}">
                                        <div class="xb-item--holder">
                                            <h2 class="xb-item--title">Instant Deposits and Withdrawals</h2>
                                            <p class="xb-item--content">
                                                Instant Deposits and Withdrawals: Trade swiftly with immediate
                                                access to your funds. No waiting, just seamless transactions.
                                            </p>
                                        </div>
                                        <div class="xb-item--img">
                                            <img src="{{ asset('web/assets/img/feature/feature-col-item1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-30">
                        <div class="feature-right-inner">
                            <div class="xb-crypto-right bg_img ul_li"
                                data-background="{{ asset('web/assets/img/feature/feature-col-bg2.svg') }}">
                                <div class="xb-item--img">
                                    <img src="{{ asset('web/assets/img/feature/feature-col-item2.png') }}"
                                        alt="">
                                </div>
                                <div class="xb-item--holder">
                                    <h2 class="xb-item--title">Comprehensive Asset Selection</h2>
                                    <p class="xb-item--content">
                                        Our platform offers a thorough and effective solution that covers all
                                        aspects of your trading needs, ensuring a comprehensive experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-130">
                    <div class="col-lg-12">
                        <div class="xb-freatue-crypto feature-bottom bg_img"
                            data-background="{{ asset('web/assets/img/feature/feature-col-bg3.svg') }}">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Competitive Trading Fees & 24/7 Support</h2>
                                <p class="xb-item--content">Competitive Trading Fees & 24/7 Support: Benefit
                                    from our competitive trading fees while enjoying round-the-clock support.
                                    Trade efficiently and get assistance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-counter-wrap pt-130">
                <div class="container">
                    <div class="row mt-none-30">
                        <div class="col-lg-3 col-md-6 mt-30">
                            <div class="xb-feature-inner">
                                <div class="xb-feature-item">
                                    <h2 class="title"><span class="xbo" data-count="280">00</span><span
                                            class="suffix">K+</span></h2>
                                    <span class="sub-title">Happy Clients</span>
                                </div>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30">
                            <div class="xb-feature-inner">
                                <div class="xb-feature-item">
                                    <h2 class="title"><span class="xbo" data-count="99">00</span><span
                                            class="suffix">%</span></h2>
                                    <span class="sub-title">Customer Saatisfaction</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30">
                            <div class="xb-feature-inner">
                                <div class="xb-feature-item">
                                    <h2 class="title"><span class="xbo" data-count="30">00</span><span
                                            class="suffix">K+</span></h2>
                                    <span class="sub-title">Sucessful Project</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-30">
                            <div class="xb-feature-item">
                                <h2 class="title"><span class="xbo" data-count="100">00</span><span
                                        class="suffix">%</span></h2>
                                <span class="sub-title">Security Certification</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature crypto end -->

    <!-- currrency section start -->
    <section class="currency z-1 pos-rel pt-125 pb-130">
        <div class="container">
            <div class="section-title pb-50 text-center">
                <h1 class="title">exchange any of <br> Bitcoin pairs</h1>
            </div>
            <div class="xb-currency">
                <div class="xb-item--title ul_li">
                    <span>Name</span>
                    <span>Price</span>
                    <span>24h Change</span>
                    <span>Chart</span>
                    <span>Buy</span>
                </div>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image"><img src="{{ asset('web/assets/img/currency/curr-icon01.png') }}"
                                alt=""></span>
                        <span class="xb-item--color-white">Bitcoin</span>
                        <span>BTC</span>
                    </li>
                    <li>36,201.34</li>
                    <li>+1.71%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape01.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-two"><img
                                src="{{ asset('web/assets/img/currency/curr-icon02.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Ethereum</span>
                        <span>ETH</span>
                    </li>
                    <li>$2,605.95</li>
                    <li>+2.04%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape02.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-three"><img
                                src="{{ asset('web/assets/img/currency/curr-icon03.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Tether</span>
                        <span>USDT</span>
                    </li>
                    <li>$939.20</li>
                    <li>-0.74%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape03.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-four"><img
                                src="{{ asset('web/assets/img/currency/curr-icon04.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Ripple</span>
                        <span>XRP</span>
                    </li>
                    <li>$1.02</li>
                    <li>+1.20%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape04.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-five"><img
                                src="{{ asset('web/assets/img/currency/curr-icon05.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Chainlink</span>
                        <span>LINK</span>
                    </li>
                    <li>$30.56</li>
                    <li>-3.84%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape05.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
            </div>
        </div>
        <div class="currency-shape">
            <img src="{{ asset('web/assets/img/currency/currency-shape.png') }}" alt="">
            <img src="{{ asset('web/assets/img/currency/currency-shape.png') }}" alt="">
        </div>
    </section>
    <!-- currrency section end -->

    <!-- testimonial section start-->
    <section class="testimonial pos-rel z-1">
        <div class="testimonial-two pt-115">
            <div class="tes-shape">
                <div class="shape shape--2">
                    <img class="topToBottom2" src="{{ asset('web/ssets/img/shape/tes-shape02.svg') }}" alt="">
                </div>
                <div class="shape shape--3">
                    <img class="topToBottom" src="{{ asset('web/assets/img/shape/tes-shape03.svg') }}" alt="">
                </div>
                <div class="shape shape--4">
                    <img src="{{ asset('web/assets/img/shape/it_shape1.png') }}" alt="">
                </div>
                <div class="shape shape--5">
                    <img src="{{ asset('web/assets/img/shape/it_shape1.png') }}" alt="">
                </div>
            </div>
            <div class="container">
                <div class="section-title pb-55">
                    <h1 class="title">what clients says</h1>
                </div>
                <div class="xb-review ul_li_between">
                    <div class="xb-item--holder ul_li">
                        <div class="xb-item--img">
                            <img src="{{ asset('web/assets/img/testimonial/tes-icon01.png') }}" alt="">
                        </div>
                        <div class="xb-item--review">
                            <div class="xb-item--star">
                                <img src="{{ asset('web/assets/img/testimonial/review01.png') }}" alt="">
                                <span>5.0</span>
                            </div>
                            <span>26 REVIEWS </span>
                        </div>
                    </div>
                    <div class="xb-item--holder ul_li">
                        <div class="xb-item--img">
                            <img src="{{ asset('web/assets/img/testimonial/tes-icon02.png') }}" alt="">
                        </div>
                        <div class="xb-item--review">
                            <div class="xb-item--star">
                                <img src="{{ asset('web/assets/img/testimonial/review02.png') }}" alt="">
                                <span>4.8</span>
                            </div>
                            <span>15 REVIEWS </span>
                        </div>
                    </div>
                    <div class="xb-item--holder ul_li">
                        <div class="xb-item--img">
                            <img src="{{ asset('web/assets/img/testimonial/tes-icon03.png') }}" alt="">
                        </div>
                        <div class="xb-item--review">
                            <div class="xb-item--star">
                                <img src="{{ asset('web/assets/img/testimonial/review01.png') }}" alt="">
                                <span>5.0</span>
                            </div>
                            <span>22 REVIEWS </span>
                        </div>
                    </div>
                </div>
                <div class="xb-testimonial-wrap">
                    <div class="xb-testimonial-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ul_li">
                                <div class="xb-item--author text-center">
                                    <div class="xb-item--avater">
                                        <img src="{{ asset('web/assets/img/testimonial/testimonial.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <div class="xb-item--nationality align-items-center">
                                            <img src="{{ asset('web/assets/img/testimonial/tes-flag.png') }}"
                                                alt="">
                                            <span>Denmark</span>
                                        </div>
                                        <h3 class="xb-item--title">Reynolds Anthony</h3>
                                        <span class="xb-item--sub-title">Cryptocurrency Trader</span>
                                    </div>
                                </div>
                                <div class="xb-item--content">
                                    <p>
                                        "Since I switched to this crypto exchange, my trading experience has
                                        been nothing short of exceptional. The platform's intuitive interface
                                        combined with lightning-fast transaction speeds has significantly
                                        enhanced my ability to execute trades effectively.."
                                    </p>
                                    <div class="xb-item--reating ul_li">
                                        <img src="{{ asset('web/assets/img/testimonial/tes-clint-logo.png') }}"
                                            alt="">
                                        <span>5.0</span>
                                        <img src="{{ asset('web/assets/img/testimonial/review01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ul_li">
                                <div class="xb-item--author text-center">
                                    <div class="xb-item--avater">
                                        <img src="{{ asset('web/assets/img/testimonial/testimonial.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <div class="xb-item--nationality align-items-center">
                                            <img src="{{ asset('web/assets/img/testimonial/tes-flag.png') }}"
                                                alt="">
                                            <span>Denmark</span>
                                        </div>
                                        <h3 class="xb-item--title">Reynolds Anthony</h3>
                                        <span class="xb-item--sub-title">Cryptocurrency Trader</span>
                                    </div>
                                </div>
                                <div class="xb-item--content">
                                    <p>
                                        "Since I switched to this crypto exchange, my trading experience has
                                        been nothing short of exceptional. The platform's intuitive interface
                                        combined with lightning-fast transaction speeds has significantly
                                        enhanced my ability to execute trades effectively.."
                                    </p>
                                    <div class="xb-item--reating ul_li">
                                        <img src="{{ asset('web/assets/img/testimonial/tes-clint-logo.png') }}"
                                            alt="">
                                        <span>5.0</span>
                                        <img src="{{ asset('web/assets/img/testimonial/review01.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="integration" class="integrate mt-115">
                <div class="section-title pb-25">
                    <h1 class="title">Integrated with most popular <br> crypto currencies</h1>
                </div>
                <div class="xb-integrate">
                    <img src="{{ asset('web/assets/img/integrate/int-bg_img.png') }}" alt="">
                    <div class="image">
                        <img src="{{ asset('web/assets/img/integrate/frame.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end-->

    <!-- faq start -->
    <section class="faq pos-rel mt-130 pb-5">
        <div class="faq-shape_two">
            <img src="{{ asset('web/assets/img/shape/faq-shape01.svg') }}" alt="">
            <img src="{{ asset('web/assets/img/shape/faq-shape01.svg') }}" alt="">
            <img class="topToBottom" src="{{ asset('web/assets/img/shape/faq-shape02.svg') }}" alt="">
            <img class="topToBottom2" src="{{ asset('web/assets/img/shape/faq-shape03.svg') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title pb-55">
                <h1 class="title">Frequently Asked Questions</h1>
            </div>
            <div class="faq__blockchain-two">
                <ul class="accordion_box clearfix">
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q1:</span> How do I get started with trading on your platform?
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    Here are some points about the cryptocurrencies you can trade on our
                                    exchange:
                                    <ul class="list-item">
                                        <li>Major Cryptocurrencies.</li>
                                        <li>New and Emerging Tokens.</li>
                                        <li>Popular Altcoins.</li>
                                    </ul>
                                    We offer a wide range of cryptocurrencies for trading, including popular
                                    options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                    Our platform regularly updates the list of available cryptocurrencies access
                                    options.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block active-block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q2:</span>What cryptocurrencies can I trade on your exchange?
                            </div>
                            <div class="acc_body current">
                                <div class="content">
                                    <ul class="list-item">
                                        <li>Major Cryptocurrencies.</li>
                                        <li>New and Emerging Tokens.</li>
                                        <li>Popular Altcoins.</li>
                                    </ul>
                                    We offer a wide range of cryptocurrencies for trading, including popular
                                    options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                    Our platform regularly updates the list of available cryptocurrencies access
                                    options.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q3:</span>Is there a mobile app available for trading?
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <ul class="list-item">
                                        <li>Major Cryptocurrencies.</li>
                                        <li>New and Emerging Tokens.</li>
                                        <li>Popular Altcoins.</li>
                                    </ul>
                                    We offer a wide range of cryptocurrencies for trading, including popular
                                    options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                    Our platform regularly updates the list of available cryptocurrencies access
                                    options.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q4:</span>What are your trading fees?
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <ul class="list-item">
                                        <li>Major Cryptocurrencies.</li>
                                        <li>New and Emerging Tokens.</li>
                                        <li>Popular Altcoins.</li>
                                    </ul>
                                    We offer a wide range of cryptocurrencies for trading, including popular
                                    options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                    Our platform regularly updates the list of available cryptocurrencies access
                                    options.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q5:</span>How long do deposits and withdrawals take?
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <ul class="list-item">
                                        <li>Major Cryptocurrencies.</li>
                                        <li>New and Emerging Tokens.</li>
                                        <li>Popular Altcoins.</li>
                                    </ul>
                                    We offer a wide range of cryptocurrencies for trading, including popular
                                    options like Bitcoin (BTC), Ethereum (ETH), Ripple (XRP), and many others.
                                    Our platform regularly updates the list of available cryptocurrencies access
                                    options.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- faq end -->
@endsection
